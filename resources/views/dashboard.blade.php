<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            overflow-x: hidden;
            position: relative;
            padding: 30px 20px;
            color: white;
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
            max-width: 1100px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .brand h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .brand p {
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

        .hero-card {
            background: rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 26px;
            padding: 35px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.25);
            margin-bottom: 25px;
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

        .hero-card h2 {
            font-size: 28px;
            margin-bottom: 12px;
        }

        .hero-card p {
            color: rgba(255, 255, 255, 0.82);
            line-height: 1.7;
            margin-bottom: 22px;
            max-width: 700px;
        }

        .actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            border: none;
            text-decoration: none;
            padding: 13px 18px;
            border-radius: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ffffff, #dbeafe);
            color: #1e3a8a;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.18);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 28px rgba(0, 0, 0, 0.22);
        }

        .btn-danger {
            background: rgba(239, 68, 68, 0.18);
            color: white;
            border: 1px solid rgba(239, 68, 68, 0.35);
        }

        .btn-danger:hover {
            background: rgba(239, 68, 68, 0.28);
            transform: translateY(-2px);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 22px;
            padding: 24px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
        }

        .stat-card h3 {
            font-size: 15px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 12px;
        }

        .stat-card .number {
            font-size: 32px;
            font-weight: 700;
        }

        .stat-card .desc {
            margin-top: 8px;
            color: rgba(255, 255, 255, 0.72);
            font-size: 14px;
        }

        .logout-form {
            display: inline-block;
        }

        @media (max-width: 900px) {
            .stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .hero-card,
            .stat-card {
                padding: 22px;
            }

            .brand h1 {
                font-size: 26px;
            }

            .hero-card h2 {
                font-size: 22px;
            }

            .topbar {
                align-items: flex-start;
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
            <div class="brand">
                <h1>Inventory Management System</h1>
                <p>Manage products, monitor inventory, and keep your records organized.</p>
            </div>

            <div class="nav-links">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ url('/products') }}">Products</a>
            </div>
        </div>

        <div class="hero-card">
            <h2>Welcome back</h2>
            <p>
                You are logged in successfully. From here, you can manage your products,
                update stock information, and keep your inventory records clean and organized.
            </p>

            <div class="actions">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Go to Products</a>

                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>

        <div class="stats">
            <div class="stat-card">
                <h3>Main Feature</h3>
                <div class="number">CRUD</div>
                <div class="desc">Create, read, update, and delete product records.</div>
            </div>

            <div class="stat-card">
                <h3>Security</h3>
                <div class="number">Auth</div>
                <div class="desc">Only logged-in users can access the system features.</div>
            </div>

            <div class="stat-card">
                <h3>Database</h3>
                <div class="number">5</div>
                <div class="desc">Users, categories, suppliers, products, and stocks.</div>
            </div>
        </div>
    </div>
</body>
</html>