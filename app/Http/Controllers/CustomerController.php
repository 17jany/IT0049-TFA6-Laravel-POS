<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Alex Santos',
                'email' => 'alex@gmail.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Bea Reyes',
                'email' => 'bea@gmail.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Carlo Cruz',
                'email' => 'carlo@gmail.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Dana Garcia',
                'email' => 'dana@gmail.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Eli Mendoza',
                'email' => 'eli@gmail.com',
                'phone' => '09211234567',
            ],
        ];

        return view('customers', compact('customers'));
    }
}

