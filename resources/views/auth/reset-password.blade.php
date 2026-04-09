<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            overflow: hidden;
            position: relative;
            padding: 20px;
        }

        .bg-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            opacity: 0.35;
            animation: float 8s ease-in-out infinite;
        }

        .shape1 {
            width: 260px;
            height: 260px;
            background: #60a5fa;
            top: 8%;
            left: 8%;
        }

        .shape2 {
            width: 220px;
            height: 220px;
            background: #a78bfa;
            bottom: 10%;
            right: 10%;
            animation-delay: 2s;
        }

        .shape3 {
            width: 180px;
            height: 180px;
            background: #38bdf8;
            bottom: 20%;
            left: 18%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) translateX(0px);
            }
            50% {
                transform: translateY(-18px) translateX(10px);
            }
        }

        .container {
            width: 100%;
            max-width: 460px;
            position: relative;
            z-index: 2;
        }

        .card {
            background: rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 24px;
            padding: 36px 30px;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.25);
            color: white;
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

        .brand {
            text-align: center;
            margin-bottom: 24px;
        }

        .brand h1 {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }

        .brand p {
            color: rgba(255, 255, 255, 0.82);
            font-size: 14px;
            line-height: 1.6;
        }

        .errors {
            background: rgba(239, 68, 68, 0.16);
            border: 1px solid rgba(239, 68, 68, 0.35);
            color: #fee2e2;
            padding: 12px 14px;
            border-radius: 12px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .errors ul {
            padding-left: 18px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
        }

        input[type="email"],
        input[type="password"] {
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

        .btn {
            width: 100%;
            border: none;
            padding: 14px;
            border-radius: 14px;
            background: linear-gradient(135deg, #ffffff, #dbeafe);
            color: #1e3a8a;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.25s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.18);
            margin-top: 10px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 28px rgba(0, 0, 0, 0.22);
        }

        .links {
            margin-top: 22px;
            text-align: center;
        }

        .links a {
            color: #dbeafe;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s ease;
        }

        .links a:hover {
            color: white;
            text-decoration: underline;
        }

        @media (max-width: 520px) {
            .card {
                padding: 28px 22px;
                border-radius: 20px;
            }

            .brand h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-shape shape1"></div>
    <div class="bg-shape shape2"></div>
    <div class="bg-shape shape3"></div>

    <div class="container">
        <div class="card">
            <div class="brand">
                <h1>Reset Password</h1>
                <p>Create a new password for your account.</p>
            </div>

            @if ($errors->any())
                <div class="errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email', $request->email) }}"
                        placeholder="Enter your email"
                        required
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="password">New Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Enter your new password"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm your new password"
                        required
                    >
                </div>

                <button type="submit" class="btn">Reset Password</button>

                <div class="links">
                    <a href="{{ route('login') }}">Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>