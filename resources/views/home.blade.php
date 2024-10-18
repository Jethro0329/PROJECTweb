@extends('Components.layout')

@section('title', 'My Portfolio')

@section('content')
<div class="profile-section">
    <div class="profile-image">
        <img src="{{ asset('Images/Jethro.jpg') }}" alt="Profile Image">
    </div>
    <div class="profile-description">
        <h1>Welcome to My Lab Portfolio</h1>
        <li><b>Jethro Owen P. Acuña</b></li>
        <li><b>BSIT - 3C</b></li>
        <li><b>3rd Year Information Technology Student</b></li>
        <br>
        <h2>This portfolio showcases all my lab activities, highlighting my skills in Laravel, including routing, middleware, layouts, and more. Explore each section to see different activities and projects I've worked on!</h2>
    </div>
</div>
@endsection
