@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Messages</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if(count($messages) <= 0) <div class="alert alert-info">No messages
                </div>@else

                @foreach($messages as $message)
                <p>
                    <strong>From: </strong>{{$message->user->name}}<br />
                    <strong>Message: </strong>{{$message->message}}
                </p>
                <hr>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection