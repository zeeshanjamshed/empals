@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <ul>
                        <li>Name: {{$user->name}}</li>
                        <li>Email: {{$user->email}}</li>
                        <li>Age: {{$user->age}}</li>
                        <li>Gender: {{$user->gender}}</li>
                        <li>Disability: {{$user->disability}}</li>
                        <li>Country: {{$user->country}}</li>
                        <li>Location: {{$user->location}}</li>
                        <li>Social Media: {{$user->social_media}}</li>
                        <li>Spoken Languages: {{$user->spoken_languages}}</li>
                        <li>Written Languages: {{$user->written_languages}}</li>
                        <li>Name of club: {{$user->club_name}}</li>
                        <li>Team: {{$user->team}}</li>
                        <li>Main contact at club: {{$user->main_club_contact}}</li>
                        <li>Main contact at club Email: {{$user->main_club_contact_email}}</li>
                        <li>Main contact at club Phone: {{$user->main_club_contact_Phone}}</li>
                        <li>Why do you wish to join the Empal Scheme?: {{$user->why_wish_to_join_empal_scheme}}</li>
                        <li>What do you hope to gain from the Empal Scheme?: {{$user->what_hope_to_gain_from_empal_scheme}}</li>
                        <li>Do you have a preferred nationality you want to Empal with?: {{$user->empal_preferred_nationality}}</li>
                        <li>Why do you have a preferred nationality you want to Empal with ?: {{$user->empal_preferred_nationality_reason}}</li>
                        <li>Are there any other preferences you would like your EmPal to be ? Such as gender, age, playing experience ?: {{$user->empal_other_preferences}}</li>
                        <li>Anything else you want to share ?: {{$user->anything_else}}</li>
                    </ul>
                    <hr>
                    <form action="{{route('empal.send-message')}}" method="POST">

                        @if (\Session::has('message'))
                        <div class="alert alert-success">
                            {!! \Session::get('message') !!}
                        </div>
                        @endif
                        @if($errors->any())
                        {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">:message</div>')) !!}
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="message">Message</label>
                            <input type="hidden" name="to" value="{{$user->id}}">
                            <textarea class="form-control" required id="message" rows="3" name="message"></textarea>
                        </div>
                        <button class="btn btn-primary">Make Contact</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection