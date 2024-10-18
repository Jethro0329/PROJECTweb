@extends('Components.layout')

@section('title', 'Routes Lab Activity')

@section('content')
<div class="routes-section">
    <div class="routes-image">
        <img src="{{ asset('Images/Routes.png') }}" alt="Routes Image">
    </div>

    <div class="routes-description">
        <h1>Routes Lab Activity</h1>
        <li>
        The routes code defines the routes that direct specific URLs to matching views. 
        The root URL ('/') returns a welcome view, while URLs for the gallery and review pages return the gallery and review views. 
        The /user route takes an optional username input from the user, ensuring it contains only alphabetic characters. 
        If the input is invalid, it defaults to Guest. This username is then passed to the user view for display. 
        Overall, the code sets up basic routing for a simple web application with URL-to-view mapping and input validation.
        </li>
    </div>
</div>
@endsection
