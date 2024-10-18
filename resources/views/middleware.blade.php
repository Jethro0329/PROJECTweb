@extends('Components.layout')

@section('title', 'Middleware Lab Activity')

@section('content')
<div class="mw-section">
    <div class="mw-summary">
        <h1>Middleware Lab Activity</h1>
        <p>This lab explores different middleware implementations in Laravel and their use cases.</p>
    </div>
    <br>
    <div class="mw-cards">
        <!-- First Card -->
        <div class="mw-card">
            <div class="mw-card-image">
                <img src="{{ asset('Images/MW1.png') }}" alt="Middleware 1 Image">
            </div>
            <div class="mw-card-description">
                <h2>CheckAge Middleware</h2>
                <p>
                  This is where we inputted the check age. 
                  This sets the age limit for the website. 
                  If you are below legal age you will be denied access.
                </p>
            </div>
        </div>

        <!-- Second Card -->
        <div class="mw-card">
            <div class="mw-card-image">
                <img src="{{ asset('Images/MW2.png') }}" alt="Middleware 2 Image">
            </div>
            <div class="mw-card-description">
                <h2>LogRequests Middleware</h2>
                <p>
                  This logs the information details for each request. These information include, 
                  username, IP address, user’s age, and the full URL. The access verified or denied is 
                  also logged here. The information is stored in a log.txt file which presents an error 
                  if the logs are not written. 
                </p>
            </div>
        </div>

        <!-- Third Card -->
        <div class="mw-card">
            <div class="mw-card-image">
                <img src="{{ asset('Images/MW3.png') }}" alt="Middleware 3 Image">
            </div>
            <div class="mw-card-description">
                <h2>Kernel.php</h2>
                <p>
                  This oversees managing the middleware in Laravel. Included here is the global 
                  middleware which runs at every request like maintenance or logging requests. 
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
