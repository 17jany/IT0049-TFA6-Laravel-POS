# IT0049-TFA6-Laravel-POS

A four-page Point-of-Sale (POS) application built with Laravel. This project rebuilds the TFA5 POS application using database migrations, a seeder, and Eloquent models to store and retrieve customer and user records.

## Project Information

- **Student:** Janyrose G. Guelas
- **Course:** IT0049 — Web System Technologies
- **Section:** TC34
- **Instructor:** Roman B. Villones

## Pages

| Page | URL | Description |
|---|---|---|
| Home | `/` | Introduces the POS application and links to the other pages. |
| About | `/about` | Describes the project and its application structure. |
| Customer Accounts | `/customers` | Displays customer names, email addresses, and phone numbers retrieved from the database. |
| User Accounts | `/users` | Displays usernames and full names retrieved from the database. |

## Features

- Four pages connected through navigation links
- Routes defined in `routes/web.php`
- Separate controllers for the pages, customers, and users
- Blade views using a shared layout
- Database migrations for the `customers` and `users` tables
- Eloquent models for customers and users
- Seeder that adds at least five sample records to each table
- Blade `@foreach` loops to display customer and user records

## Built With

- PHP
- Laravel
- Eloquent ORM
- Blade
- SQLite
- HTML
- CSS

## Requirements

- PHP
- Composer

## Run Locally

1. Clone this repository:

   ```bash
   git clone https://github.com/17jany/IT0049-TFA6-Laravel-POS.git
   ```

2. Open the project folder:

   ```bash
   cd IT0049-TFA6-Laravel-POS
   ```

3. Install the PHP dependencies:

   ```bash
   composer install
   ```

4. Create a local environment file:

   ```bash
   cp .env.example .env
   ```

5. Generate the Laravel application key:

   ```bash
   php artisan key:generate
   ```

6. Create the SQLite database file if it does not already exist:

   ```bash
   touch database/database.sqlite
   ```

7. Run the migrations and seed the database:

   ```bash
   php artisan migrate:fresh --seed
   ```

8. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

9. Open the local address shown in Terminal, usually `http://127.0.0.1:8000`.

## Project Structure

```text
app/
├── Http/Controllers/
│   ├── PageController.php
│   ├── CustomerController.php
│   └── UserController.php
└── Models/
    ├── Customer.php
    └── User.php

database/
├── migrations/
└── seeders/
    ├── DatabaseSeeder.php
    └── PosSeeder.php

resources/views/
├── layouts/
│   └── app.blade.php
├── home.blade.php
├── about.blade.php
├── customers.blade.php
└── users.blade.php

routes/
└── web.php
```

## Database

The `customers` table stores each customer's full name, email address, and phone number. The `users` table stores each user's unique username and full name.

The `PosSeeder` adds sample customer and user records. The `Customer` and `User` Eloquent models retrieve the records from the database, and the account pages display them through Blade `@foreach` loops.

## Activity

This project was created for the IT0049 TFA6 laboratory activity, “From Arrays to Eloquent: Your First Database-Driven Laravel Application.”

