@extends('Components.layout')

@section('title', 'Home')

@section('content')
    <div class="profile-section">
        <div class="profile-image">
            <img src="{{ asset('Images/Jethro.jpg') }}" alt="Profile Image">
        </div>
        <div class="profile-description">
            <h1>Welcome to My Lab Portfolio</h1>
            <p>This portfolio showcases all my lab activities, highlighting my skills in Laravel, including routing, middleware, layouts, and more. Explore each section to see different activities and projects I've worked on!</p>
        </div>
    </div>
@endsection
