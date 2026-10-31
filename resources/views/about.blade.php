@extends('layouts.app')

@section('title', 'About | Simple POS')

@section('content')
    <section class="card">
        <p class="eyebrow">About the Project</p>
        <h1>About the System</h1>
        <p class="description">
            This application is an early foundation for a Point of Sale system built with Laravel and the Model-View-Controller approach.
        </p>
    </section>

    <section style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px;">
        <article class="card" style="border-left:0;padding:20px;">
            <h2 style="margin:0 0 8px;font-size:16px;">Project Purpose</h2>
            <p class="description">This project demonstrates how a multi-page website can be organized using a PHP web framework.</p>
        </article>

        <article class="card" style="border-left:0;padding:20px;">
            <h2 style="margin:0 0 8px;font-size:16px;">Application Structure</h2>
            <p class="description">Routes receive page requests, controllers prepare the data, and views display the page in the browser.</p>
        </article>

        <article class="card" style="border-left:0;padding:20px;">
            <h2 style="margin:0 0 8px;font-size:16px;">Temporary Data</h2>
            <p class="description">Customer and staff records are stored in static PHP arrays before database integration is introduced.</p>
        </article>
    </section>
@endsection

