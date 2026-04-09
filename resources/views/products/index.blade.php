<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            color: white;
            padding: 30px 20px;
            position: relative;
            overflow-x: hidden;
        }

        .bg-shape {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.28;
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }

        .shape1 {
            width: 280px;
            height: 280px;
            background: #60a5fa;
            top: 5%;
            left: 5%;
        }

        .shape2 {
            width: 230px;
            height: 230px;
            background: #a78bfa;
            bottom: 8%;
            right: 8%;
            animation-delay: 2s;
        }

        .shape3 {
            width: 180px;
            height: 180px;
            background: #38bdf8;
            bottom: 18%;
            left: 18%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            50% {
                transform: translateY(-16px) translateX(10px);
            }
        }

        .wrapper {
            max-width: 1150px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        .title h1 {
            font-size: 32px;
            margin-bottom: 6px;
        }

        .title p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 15px;
        }

        .nav-links {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.14);
            padding: 10px 16px;
            border-radius: 12px;
            transition: 0.25s ease;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .card {
            background: rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 26px;
            padding: 28px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.25);
            animation: fadeUp 0.7s ease;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .card-top h2 {
            font-size: 24px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            border: none;
            padding: 11px 16px;
            border-radius: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            font-size: 14px;
        }

        .btn-add {
            background: linear-gradient(135deg, #ffffff, #dbeafe);
            color: #1e3a8a;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.18);
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 28px rgba(0, 0, 0, 0.22);
        }

        .btn-edit {
            background: rgba(59, 130, 246, 0.2);
            color: white;
            border: 1px solid rgba(96, 165, 250, 0.35);
        }

        .btn-edit:hover {
            background: rgba(59, 130, 246, 0.32);
            transform: translateY(-2px);
        }

        .btn-delete {
            background: rgba(239, 68, 68, 0.18);
            color: white;
            border: 1px solid rgba(239, 68, 68, 0.35);
        }

        .btn-delete:hover {
            background: rgba(239, 68, 68, 0.28);
            transform: translateY(-2px);
        }

        .message {
            background: rgba(34, 197, 94, 0.18);
            border: 1px solid rgba(34, 197, 94, 0.35);
            color: #dcfce7;
            padding: 12px 14px;
            border-radius: 14px;
            margin-bottom: 18px;
        }

        .table-wrap {
            overflow-x: auto;
            border-radius: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 720px;
            overflow: hidden;
            border-radius: 18px;
        }

        thead {
            background: rgba(255, 255, 255, 0.12);
        }

        th, td {
            padding: 16px 14px;
            text-align: left;
        }

        th {
            font-size: 14px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.88);
            border-bottom: 1px solid rgba(255, 255, 255, 0.14);
        }

        td {
            color: rgba(255, 255, 255, 0.92);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.06);
        }

        tbody tr:hover td {
            background: rgba(255, 255, 255, 0.1);
        }

        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            align-items: center;
        }

        form {
            display: inline;
        }

        .empty {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            padding: 22px;
        }

        @media (max-width: 700px) {
            .title h1 {
                font-size: 26px;
            }

            .card {
                padding: 20px;
            }

            .card-top h2 {
                font-size: 21px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-shape shape1"></div>
    <div class="bg-shape shape2"></div>
    <div class="bg-shape shape3"></div>

    <div class="wrapper">
        <div class="topbar">
            <div class="title">
                <h1>Inventory Management System</h1>
                <p>View, update, and manage all your product records in one place.</p>
            </div>

            <div class="nav-links">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ url('/products') }}">Products</a>
            </div>
        </div>

        <div class="card">
            <div class="card-top">
                <h2>Product List</h2>
                <a href="{{ route('products.create') }}" class="btn btn-add">+ Add Product</a>
            </div>

            @if(session('success'))
                <div class="message">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Supplier</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->supplier->name }}</td>
                                <td>₱{{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>
                                    <div class="actions">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-edit">Edit</a>

                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete" onclick="return confirm('Delete this product?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>