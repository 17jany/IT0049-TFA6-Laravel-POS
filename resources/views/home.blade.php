@extends('layouts.app')

@section('title', 'Home | Simple POS')

@section('content')
    <section class="card">
        <p class="eyebrow">CodeIgniter POS Foundation</p>
        <h1>A simple start for better transactions.</h1>
        <p class="description">
            This project demonstrates how a basic Point of Sale system can be organized using routes, controllers, views, and temporary PHP data.
        </p>
        <p style="margin-top: 20px;">
            <a href="/customers" style="display:inline-block;padding:10px 14px;background:#171717;color:white;border-radius:4px;text-decoration:none;">
                Browse Customer Accounts
            </a>
        </p>
    </section>

    <section style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px;">
        <article class="card" style="border-left:0;padding:20px;">
            <h2 style="margin:0 0 8px;font-size:16px;">Customer Records</h2>
            <p class="description">View customer names, email addresses, and contact numbers.</p>
        </article>

        <article class="card" style="border-left:0;padding:20px;">
            <h2 style="margin:0 0 8px;font-size:16px;">User Accounts</h2>
            <p class="description">View staff members and their assigned roles in the system.</p>
        </article>

        <article class="card" style="border-left:0;padding:20px;">
            <h2 style="margin:0 0 8px;font-size:16px;">About the Project</h2>
            <p class="description">Learn how the application uses the Model-View-Controller structure.</p>
        </article>
    </section>
@endsection

