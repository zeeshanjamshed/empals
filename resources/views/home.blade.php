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
                    <!-- <ul>
                        <li>name: {{Auth::user()->name}}</li>
                        <li>email: {{Auth::user()->email}}</li>
                        <li>age: {{Auth::user()->age}}</li>
                        <li>gender: {{Auth::user()->gender}}</li>
                        <li>disability: {{Auth::user()->disability}}</li>
                        <li>country: {{Auth::user()->country}}</li>
                        <li>location: {{Auth::user()->location}}</li>
                        <li>email: {{Auth::user()->email}}</li>
                        <li>social_media: {{Auth::user()->social_media}}</li>
                        <li>spoken_languages: {{Auth::user()->spoken_languages}}</li>
                        <li>written_languages: {{Auth::user()->written_languages}}</li>
                        <li>club_name: {{Auth::user()->club_name}}</li>
                        <li>team: {{Auth::user()->team}}</li>
                        <li>main_club_contact: {{Auth::user()->main_club_contact}}</li>
                        <li>main_club_contact_email: {{Auth::user()->main_club_contact_email}}</li>
                        <li>main_club_contact_Phone: {{Auth::user()->main_club_contact_Phone}}</li>
                        <li>why_wish_to_join_empal_scheme: {{Auth::user()->why_wish_to_join_empal_scheme}}</li>
                        <li>what_hope_to_gain_from_empal_scheme: {{Auth::user()->what_hope_to_gain_from_empal_scheme}}</li>
                        <li>empal_preferred_nationality: {{Auth::user()->empal_preferred_nationality}}</li>
                        <li>empal_preferred_nationality_reason: {{Auth::user()->empal_preferred_nationality_reason}}</li>
                        <li>empal_other_preferences: {{Auth::user()->empal_other_preferences}}</li>
                        <li>anything_else: {{Auth::user()->anything_else}}</li>
                    </ul> -->
                    <!-- <hr> -->
                    @foreach($empals as $empal)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$empal->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$empal->country}}</h6>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="{{route('empal.details', $empal->id)}}" class="card-link">View Details</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection