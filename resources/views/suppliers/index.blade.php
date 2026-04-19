<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers</title>
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
            padding: 30px;
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

        .card h2 {
            font-size: 26px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 24px;
            font-size: 15px;
        }

        .success {
            background: rgba(34, 197, 94, 0.16);
            border: 1px solid rgba(34, 197, 94, 0.35);
            color: #dcfce7;
            padding: 12px 14px;
            border-radius: 14px;
            margin-bottom: 20px;
        }

        .header-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            border: none;
            padding: 13px 18px;
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
            background: rgba(250, 204, 21, 0.18);
            color: #fef08a;
            border: 1px solid rgba(250, 204, 21, 0.3);
            padding: 10px 14px;
            border-radius: 12px;
        }

        .btn-edit:hover {
            background: rgba(250, 204, 21, 0.28);
        }

        .btn-delete {
            background: rgba(239, 68, 68, 0.16);
            color: #fecaca;
            border: 1px solid rgba(239, 68, 68, 0.35);
            padding: 10px 14px;
            border-radius: 12px;
        }

        .btn-delete:hover {
            background: rgba(239, 68, 68, 0.24);
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 18px;
        }

        thead {
            background: rgba(255, 255, 255, 0.14);
        }

        th, td {
            padding: 16px 14px;
            text-align: left;
            vertical-align: top;
        }

        tbody tr {
            background: rgba(255, 255, 255, 0.08);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        tbody tr:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .action-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .empty-text {
            color: rgba(255, 255, 255, 0.8);
            font-size: 15px;
        }

        @media (max-width: 700px) {
            .title h1 {
                font-size: 26px;
            }

            .card {
                padding: 22px;
            }

            th, td {
                padding: 12px 10px;
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
                <p>Manage supplier records for your product inventory.</p>
            </div>

            <div class="nav-links">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ route('products.index') }}">Products</a>
                <a href="{{ route('categories.index') }}">Categories</a>
                <a href="{{ route('suppliers.index') }}">Suppliers</a>
            </div>
        </div>

        <div class="card">
            <h2>Suppliers</h2>
            <p class="subtitle">Create, update, and organize your supplier information.</p>

            @if(session('success'))
                <div class="success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="header-actions">
                <h3>Supplier List</h3>
                <a href="{{ route('suppliers.create') }}" class="btn btn-add">Add Supplier</a>
            </div>

            @if($suppliers->count())
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Contact Person</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th width="220">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suppliers as $supplier)
                                <tr>
                                    <td>{{ $supplier->id }}</td>
                                    <td>{{ $supplier->name }}</td>
                                    <td>{{ $supplier->contact_person }}</td>
                                    <td>{{ $supplier->phone }}</td>
                                    <td>{{ $supplier->email }}</td>
                                    <td>{{ $supplier->address }}</td>
                                    <td>
                                        <div class="action-group">
                                            <a href="{{ route('suppliers.edit', $supplier) }}" class="btn-edit">Edit</a>

                                            <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" onsubmit="return confirm('Delete this supplier?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="empty-text">No suppliers found.</p>
            @endif
        </div>
    </div>
</body>
</html>