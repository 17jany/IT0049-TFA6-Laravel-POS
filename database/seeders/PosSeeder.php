<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Janyrose Guelas', 'email' => 'janyrose@gmail.com', 'phone' => '09171234567'],
            ['full_name' => 'Erinch Nichole Pacheco', 'email' => 'erinch@gmail.com', 'phone' => '09181234567'],
            ['full_name' => 'Carlo Reyes', 'email' => 'carlo@gmail.com', 'phone' => '09191345678'],
            ['full_name' => 'Angela Garcia', 'email' => 'angela@gmail.com', 'phone' => '09204567890'],
            ['full_name' => 'Paolo Mendoza', 'email' => 'paolo@gmail.com', 'phone' => '09215678901'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }

        $users = [
            ['username' => 'admin01', 'full_name' => 'Andrea Lim'],
            ['username' => 'cashier01', 'full_name' => 'Joshua Flores'],
            ['username' => 'cashier02', 'full_name' => 'Nicole Ramos'],
            ['username' => 'manager01', 'full_name' => 'Mark Villanueva'],
            ['username' => 'staff01', 'full_name' => 'Sofia Navarro'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

