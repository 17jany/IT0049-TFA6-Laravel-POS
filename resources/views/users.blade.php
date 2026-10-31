@extends('layouts.app')

@section('title', 'User Accounts | Simple POS')

@section('content')
    <section class="card content-card">
        <p class="eyebrow">Staff Directory</p>
        <h1>User Accounts</h1>
        <p class="description">
            A list of staff members retrieved from the database using Eloquent.
        </p>

        <span class="count">{{ count($users) }} staff accounts found</span>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Full Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['full_name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection

