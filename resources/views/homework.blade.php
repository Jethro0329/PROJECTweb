@extends('Components.layout')

@section('title', 'Homework Lab Activity')

@section('content')
      <div class="homework-section">
        <div class="homework-image">
          <img src="{{ asset('Images/Homework.png') }}" alt="Profile Image">
        </div>

        <div class="homework-description">
          <h1>
            Homework Lab Activity
          </h1>
          <li>
            In this activity, we were tasked to list examples of websites for each framework architecture.
            This increased my knowledge in this topic, which helps me along my programming journey.
          </li>
          <br>
          <li>
            These include Lotus Notes for 2-tier framework architecture, where the client and server interact directly; 
            Facebook for 3-tier architecture, which separates the user interface, server, and database; 
            Spotify for MVC, with controllers managing user interactions and data; 
            Wikipedia for pull-based architecture, where requests retrieve data from the server; 
            and Messenger for push-based architecture, where live updates occur automatically.
          </li>
        </div>
      </div>
@endsection
