<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function register(Request $request)
    {
        # code...
        $this->validate($request, [
            'email' => 'required | email',
            'name' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->disability = $request->disability;
        $user->country = $request->country;
        $user->location = $request->location;
        $user->email = $request->email;
        $user->social_media = $request->social_media;
        $user->spoken_languages = $request->spoken_languages;
        $user->written_languages = $request->written_languages;
        $user->club_name = $request->club_name;
        $user->team = $request->team;
        $user->main_club_contact = $request->main_club_contact;
        $user->main_club_contact_email = $request->main_club_contact_email;
        $user->main_club_contact_Phone = $request->main_club_contact_Phone;
        $user->why_wish_to_join_empal_scheme = $request->why_wish_to_join_empal_scheme;
        $user->what_hope_to_gain_from_empal_scheme = $request->what_hope_to_gain_from_empal_scheme;
        $user->empal_preferred_nationality = $request->empal_preferred_nationality;
        $user->empal_preferred_nationality_reason = $request->empal_preferred_nationality_reason;
        $user->empal_other_preferences = $request->empal_other_preferences;
        $user->anything_else = $request->anything_else;
        $user->email_verified_at = $request->email_verified_at;
        // $user->password = bcrypt('password');
        $user->save();
        return redirect()->back()->with([
            'message' => 'Registerd successfully, you will recieve email after approval.'
        ]);
    }
    public function approve(User $user)
    {
        $token = sha1(mt_rand(1, 90000) . 'token');
        $user->approved = true;
        $user->save();
        $rec = DB::table('invitation_tokens')->where('email', $user->email)->first();
        if (empty($rec))
            DB::table('invitation_tokens')->insert([
                'token' => $token,
                'email' => $user->email
            ]);
        // TODO:: send email with token
        Mail::send([], [], function ($message) use ($user, $token) {
            $message->to($user->email)
                ->subject('Empal Approved')
                // here comes what you want
                ->setBody('<p>Click <a href="http://127.0.0.1:8000/create-login?token=' . $token . '">here</a> to generate login credentials.</p>', 'text/html'); // for HTML rich messages
        });
        // return [
        //     'message' => 'Approved successsfully.'
        // ];
        return redirect()->back()->with([
            'message' => 'Approved successsfully.'
        ]);
    }
    public function createLogin(Request $request)
    {
        $this->validate($request, [
            'token' => 'required | exists:invitation_tokens,token',
            'password' => 'required | confirmed',
        ]);
        $rec = DB::table('invitation_tokens')->where('token', $request->token)->first();
        if (empty($rec)) {
            return redirect()->back()->withErrors([
                'token' => 'Invalid token.'
            ]);
        }
        $user = User::where('email', $rec->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        DB::table('invitation_tokens')->where('id', $rec->id)->delete();
        return redirect()->back()->with([
            'message' => 'Login created successfully.'
        ]);
    }

    public function completeProfile(Request $request)
    {
        # code...
        $this->validate($request, [
            'name' => 'required',
            'dob' => 'required'
        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->country = $request->country;
        $user->location = $request->location;
        $user->spoken_languages = $request->spoken_languages;
        $user->intresting_facts = $request->intresting_facts;
        $user->hobbies_interests = $request->hobbies_interests;
        $user->fav_movies = $request->fav_movies;
        $user->fav_music = $request->fav_music;
        $user->save();
        return redirect('/home');
    }
    public function show(User $user)
    {
        return view('empal-details', compact('user'));
    }
    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
            'to' => 'required | exists:users,id',
        ]);
        $message = new Message();
        $message->message = $request->message;
        $message->from = Auth::user()->id;
        $message->user_id = $request->to;
        $message->save();
        return redirect()->back()->with([
            'message' => 'Message sent successfully.'
        ]);
    }
    public function getMessages()
    {
        $messages = Message::where('user_id', Auth::user()->id)->get();
        return view('messages', compact('messages'));
    }
    public function getEmpals()
    {
        $users = User::all();
        return view('users-list', compact('users'));
    }
}
