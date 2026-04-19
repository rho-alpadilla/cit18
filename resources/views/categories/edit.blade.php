<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
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
            max-width: 900px;
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

        .errors {
            background: rgba(239, 68, 68, 0.16);
            border: 1px solid rgba(239, 68, 68, 0.35);
            color: #fee2e2;
            padding: 12px 14px;
            border-radius: 14px;
            margin-bottom: 20px;
        }

        .errors ul {
            padding-left: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
        }

        input {
            width: 100%;
            padding: 14px 15px;
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            background: rgba(255, 255, 255, 0.12);
            color: white;
            font-size: 15px;
            outline: none;
            transition: all 0.25s ease;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        input:focus {
            border-color: rgba(255, 255, 255, 0.45);
            background: rgba(255, 255, 255, 0.18);
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.08);
        }

        .error-text {
            color: #fecaca;
            font-size: 13px;
        }

        .actions {
            margin-top: 24px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
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

        .btn-update {
            background: linear-gradient(135deg, #ffffff, #dbeafe);
            color: #1e3a8a;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.18);
        }

        .btn-update:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 28px rgba(0, 0, 0, 0.22);
        }

        .btn-back {
            background: rgba(255, 255, 255, 0.12);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .btn-back:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        @media (max-width: 700px) {
            .title h1 {
                font-size: 26px;
            }

            .card {
                padding: 22px;
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
                <p>Update category information and keep product organization clean.</p>
            </div>

            <div class="nav-links">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ route('products.index') }}">Products</a>
                <a href="{{ route('categories.index') }}">Categories</a>
            </div>
        </div>

        <div class="card">
            <h2>Edit Category</h2>
            <p class="subtitle">Modify the category details below.</p>

            @if ($errors->any())
                <div class="errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name', $category->name) }}"
                        placeholder="Enter category name"
                        required
                    >
                    @error('name')
                        <p class="error-text">{{ $message }}</p>
                    @enderror
                </div>

                <div class="actions">
                    <button type="submit" class="btn btn-update">Update Category</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-back">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>