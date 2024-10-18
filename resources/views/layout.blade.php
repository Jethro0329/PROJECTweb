@extends('Components.layout')

@section('title', 'Layout Lab Activity')

@section('content')
<div class="layout-section">

    <div class="layout-summary">
        <h1>Layout Lab Activity</h1>
        <p>This lab focuses on creating and using a master layout in Laravel to ensure consistent structure across different pages.</p>
    </div>

    <div class="layout-cards">
        <!-- First Card -->
        <div class="layout-card">
            <div class="layout-card-image">
                <img src="{{ asset('Images/Layout1.png') }}" alt="Layout Image 1">
            </div>
            <div class="layout-card-description">
                <p>
                  The layout file in a Laravel project serves 
                  as a master template that establishes the 
                  overall structure and common elements, 
                  such as headers, footers, and navigation, 
                  making sure a consistent look and feel 
                  across all web pages to enhance 
                  experience.  
                </p>
            </div>
        </div>

        <!-- Second Card -->
        <div class="layout-card">
            <div class="layout-card-image">
                <img src="{{ asset('Images/Layout2.png') }}" alt="Layout Image 2">
            </div>
            <div class="layout-card-description">
                <p>
                  Each view file extends this layout using 
                  the extends directive, allowing it to 
                  adapt the layout's structure while adding 
                  specific content into designated sections. 
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
