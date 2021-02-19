@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{route('empal.complete-profile')}}">
                        @if($errors->any())
                        {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">:message</div>')) !!}
                        @endif
                        @if (\Session::has('message'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('message') !!}</li>
                            </ul>
                        </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control" id="gender" aria-describedby="genderHelp" name="gender" value="{{Auth::user()->gender}}">
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of birth</label>
                            <input type="date" class="form-control" id="dob" aria-describedby="dobHelp" name="dob" value="{{Auth::user()->dob}}">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" aria-describedby="countryHelp" name="country" value="{{Auth::user()->country}}">
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" aria-describedby="locationHelp" name="location" value="{{Auth::user()->location}}">
                        </div>
                        <div class="form-group">
                            <label for="spoken_languages">Spoken Languages</label>
                            <input type="text" class="form-control" id="spoken_languages" aria-describedby="spoken_languagesHelp" name="spoken_languages" value="{{Auth::user()->spoken_languages}}">
                        </div>
                        <div class="form-group">
                            <label for="intresting_facts">Interesting Facts</label>
                            <input type="text" class="form-control" id="intresting_facts" aria-describedby="intresting_factsHelp" name="intresting_facts" value="{{Auth::user()->intresting_facts}}">
                        </div>
                        <div class="form-group">
                            <label for="hobbies_interests">HOBBIES & INTERESTS</label>
                            <input type="text" class="form-control" id="hobbies_interests" aria-describedby="hobbies_interestsHelp" name="hobbies_interests" value="{{Auth::user()->hobbies_interests}}">
                        </div>
                        <div class="form-group">
                            <label for="fav_movies">Favourite Movies</label>
                            <input type="text" class="form-control" id="fav_movies" aria-describedby="fav_moviesHelp" name="fav_movies" value="{{Auth::user()->fav_movies}}">
                        </div>
                        <div class="form-group">
                            <label for="fav_music">Favourite Music</label>
                            <input type="text" class="form-control" id="fav_music" aria-describedby="fav_musicHelp" name="fav_music" value="{{Auth::user()->fav_music}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection