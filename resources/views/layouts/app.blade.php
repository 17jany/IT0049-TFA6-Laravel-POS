<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Simple POS')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: #202124;
            background: #f1f2f5;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }

        .topbar {
            background: #171717;
            color: #fff;
        }

        .nav-inner {
            width: min(100% - 40px, 1120px);
            min-height: 56px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            color: #fff;
            font-size:15px;
            font-weight: 700;
            letter-spacing: 1px;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-links a {
            padding: 8px 12px;
            border-radius: 4px;
            color: #eee;
            font-size: 14px;
            text-decoration: none;
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: #fff;
            color: #171717;
        }

        main {
            width: min(100% - 40px, 980px);
            min-height: calc(100vh - 108px);
            margin: 0 auto;
            padding: 48px 0;
        }

        .card {
            margin-bottom: 16px;
            padding: 28px;
            border-left: 3px solid #202124;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .eyebrow {
            margin: 0 0 8px;
            color: #666;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        h1 {
            margin: 0 0 12px;
            font-size: 32px;
        }

        .description {
            margin: 0;
            color: #555;
            line-height: 1.6;
        }

        .content-card {
            padding: 24px;
            border-left: 0;
        }

        .count {
            display: inline-block;
            margin: 16px 0;
            padding: 6px 10px;
            border-radius: 20px;
            background: #f1f2f5;
            color: #444;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            padding: 11px 12px;
            background: #171717;
            color: #fff;
            font-size: 12px;
        }

        td {
            padding: 11px 12px;
            border-bottom: 1px solid #e6e6e6;
        }

        footer {
            padding: 16px 20px;
            border-top: 1px solid #e2e3e7;
            color: #777;
            font-size: 12px;
            text-align: center;
        }

        @media (max-width: 600px) {
            .nav-inner {
                width: calc(100% - 24px);
                padding: 12px 0;
                align-items: flex-start;
                flex-direction: column;
                gap: 10px;
            }

            .nav-links {
                width: 100%;
                flex-wrap: wrap;
                gap: 2px;
            }

            .nav-links a {
                padding: 8px;
            }

            main {
                width: calc(100% - 24px);
                padding: 24px 0;
            }

            .card {
                padding: 20px;
            }

            .content-card {
                overflow-x: auto;
                padding: 16px;
            }

            table {
                min-width: 520px;
            }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="nav-inner">
            <a class="brand" href="/">SIMPLE POS</a>

            <nav class="nav-links">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="/customers" class="{{ request()->is('customers') ? 'active' : '' }}">Customers</a>
                <a href="/users" class="{{ request()->is('users') ? 'active' : '' }}">Users</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>Simple POS System © {{ date('Y') }}</footer>
</body>
</html>

