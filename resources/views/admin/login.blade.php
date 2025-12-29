<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .login-box {
            position: relative;
            width: 400px;
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 32px rgba(0,0,0,0.25);
            border: 1px solid rgba(255, 255, 255, 0.2);
            z-index: 2;
            animation: fadeIn 1.2s ease;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 25px;
        }

        .login-box input {
            width: 100%;
            padding: 12px 20px;
            margin: 12px 0;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        .login-box input:focus {
            background: rgba(255, 255, 255, 0.2);
        }

        .login-box button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .login-box button:hover {
            background: linear-gradient(135deg, #764ba2, #667eea);
            transform: scale(1.03);
        }

        .error-msg {
            margin-top: 10px;
            text-align: center;
            color: #ff4d4d;
            font-weight: bold;
        }

        .glow {
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, #ffffff22 0%, transparent 70%);
            border-radius: 50%;
            filter: blur(100px);
            z-index: 1;
            top: -20%;
            left: -20%;
            animation: moveGlow 6s linear infinite alternate;
        }

        @keyframes moveGlow {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body>
    <div class="glow"></div>
    <div class="login-box">
        <h2>Admin Login</h2>
        <form method="POST" action="{{ url('/admin/login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        @if($errors->any())
            <div class="error-msg">{{ $errors->first() }}</div>
        @endif
    </div>
</body>
</html>
