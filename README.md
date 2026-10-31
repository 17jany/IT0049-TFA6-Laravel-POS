# IT0049 TFA5 — Laravel POS Foundations

A four-page Point-of-Sale (POS) application built with Laravel. This project recreates the POS application from TFA1 using Laravel routes, controllers, and Blade views.

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
| Customer Accounts | `/customers` | Displays customer names, email addresses, and phone numbers. |
| User Accounts | `/users` | Displays usernames, full names, and roles. |

## Features

- Four pages connected through navigation links
- Routes defined in `routes/web.php`
- Separate controllers for the pages, customers, and users
- Blade views using a shared layout
- Five sample customer records in a static PHP array
- Five sample user records in a static PHP array
- Blade `@foreach` loops to display customer and user records

## Built With

- PHP
- Laravel
- Blade
- HTML
- CSS

## Requirements

- PHP
- Composer

## Run Locally

1. Clone this repository:

   ```bash
   git clone https://github.com/17jany/IT0049-TFA5-Laravel-POS.git
   ```

2. Open the project folder:

   ```bash
   cd IT0049-TFA5-Laravel-POS
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

6. Start the development server:

   ```bash
   php artisan serve
   ```

7. Open the local address shown in Terminal, usually `http://127.0.0.1:8000`.

## Project Structure

```text
app/Http/Controllers/
├── PageController.php
├── CustomerController.php
└── UserController.php

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

## Data

The customer and user records are sample data stored in static PHP arrays inside their respective controllers. The account pages do not use a database.

## Activity

This project was created for the IT0049 TFA5 laboratory activity, “From Zero to Four Pages, Again: Your First Laravel Application.”

