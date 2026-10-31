<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Alex Santos',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Bea Reyes',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Carlo Cruz',
                'role' => 'Cashier',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Dana Garcia',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Eli Mendoza',
                'role' => 'Staff',
            ],
        ];

        return view('users', compact('users'));
    }
}

