@extends('layouts.app')

@section('title', 'Customer Accounts | Simple POS')

@section('content')
    <section class="card content-card">
        <p class="eyebrow">Customer Directory</p>
        <h1>Customer Accounts</h1>
        <p class="description">
            A directory of customer information retrieved from the database using Eloquent.
        </p>

        <span class="count">{{ count($customers) }} customer records found</span>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $index => $customer)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $customer['full_name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection

