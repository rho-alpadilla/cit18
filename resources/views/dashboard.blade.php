<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-btn {
            background: #dc3545;
        }
        .top-links {
            margin-top: 20px;
        }
        .top-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #007bff;
        }
        .logout-form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inventory Management System</h1>
        <p>Welcome to your Laravel project dashboard.</p>
        <p>You are logged in successfully.</p>

        <a href="{{ route('products.index') }}" class="btn">Go to Products</a>

        <div class="top-links">
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <a href="{{ url('/products') }}">Products</a>
        </div>

        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="btn logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>