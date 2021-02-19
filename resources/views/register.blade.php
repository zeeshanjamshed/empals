<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empal</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('empal.register')}}">
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
                                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" aria-describedby="ageHelp" name="age">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input type="text" class="form-control" id="gender" aria-describedby="genderHelp" name="gender">
                            </div>
                            <div class="form-group">
                                <label for="disability">Disability</label>
                                <input type="text" class="form-control" id="disability" aria-describedby="disabilityHelp" name="disability">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" aria-describedby="countryHelp" name="country">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" aria-describedby="locationHelp" name="location">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="social_media">Social Media</label>
                                <input type="text" class="form-control" id="social_media" aria-describedby="social_mediaHelp" name="social_media">
                            </div>
                            <div class="form-group">
                                <label for="spoken_languages">Spoken Languages</label>
                                <input type="text" class="form-control" id="spoken_languages" aria-describedby="spoken_languagesHelp" name="spoken_languages">
                            </div>
                            <div class="form-group">
                                <label for="written_languages">Written Languages</label>
                                <input type="text" class="form-control" id="written_languages" aria-describedby="written_languagesHelp" name="written_languages">
                            </div>
                            <div class="form-group">
                                <label for="club_name">Name of club</label>
                                <input type="text" class="form-control" id="club_name" aria-describedby="club_nameHelp" name="club_name">
                            </div>
                            <div class="form-group">
                                <label for="team">Team</label>
                                <input type="text" class="form-control" id="team" aria-describedby="teamHelp" name="team">
                            </div>
                            <div class="form-group">
                                <label for="main_club_contact">Main contact at club</label>
                                <input type="text" class="form-control" id="main_club_contact" aria-describedby="main_club_contactHelp" name="main_club_contact">
                            </div>
                            <div class="form-group">
                                <label for="main_club_contact_email">Main contact at club Email</label>
                                <input type="text" class="form-control" id="main_club_contact_email" aria-describedby="main_club_contact_emailHelp" name="main_club_contact_email">
                            </div>
                            <div class="form-group">
                                <label for="main_club_contact_phone">Main contact at club Phone</label>
                                <input type="text" class="form-control" id="main_club_contact_phone" aria-describedby="main_club_contact_phoneHelp" name="main_club_contact_phone">
                            </div>
                            <div class="form-group">
                                <label for="why_wish_to_join_empal_scheme">Why do you wish to join the Empal Scheme?</label>
                                <input type="text" class="form-control" id="why_wish_to_join_empal_scheme" aria-describedby="why_wish_to_join_empal_schemeHelp" name="why_wish_to_join_empal_scheme">
                            </div>
                            <div class="form-group">
                                <label for="what_hope_to_gain_from_empal_scheme">What do you hope to gain from the Empal Scheme?</label>
                                <input type="text" class="form-control" id="what_hope_to_gain_from_empal_scheme" aria-describedby="what_hope_to_gain_from_empal_schemeHelp" name="what_hope_to_gain_from_empal_scheme">
                            </div>
                            <div class="form-group">
                                <label for="empal_preferred_nationality">Do you have a preferred nationality you want to Empal with ?</label>
                                <input type="text" class="form-control" id="empal_preferred_nationality" aria-describedby="empal_preferred_nationalityHelp" name="empal_preferred_nationality">
                            </div>
                            <div class="form-group">
                                <label for="empal_preferred_nationality_reason">Why do you have a preferred nationality you want to Empal with ?</label>
                                <input type="text" class="form-control" id="empal_preferred_nationality_reason" aria-describedby="empal_preferred_nationality_reasonHelp" name="empal_preferred_nationality_reason">
                            </div>
                            <div class="form-group">
                                <label for="empal_other_preferences">Are there any other preferences you would like your EmPal to be ? Such as gender, age, playing experience ?</label>
                                <input type="text" class="form-control" id="empal_other_preferences" aria-describedby="empal_other_preferencesHelp" name="empal_other_preferences">
                            </div>
                            <div class="form-group">
                                <label for="anything_else">Anything else you want to share ?</label>
                                <input type="text" class="form-control" id="anything_else" aria-describedby="anything_elseHelp" name="anything_else">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>