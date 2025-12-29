<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - StepElegance</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 700;
        }

        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-attachment: fixed;
            background-size: 100%;
            background-repeat: no-repeat; 
            background-image: url('assets/img/background1.jpg');
            backdrop-filter: blur(7px);
        }

        .box
        {
            overflow: hidden;
            position: relative;
            width: 380px;
            height: 420px;
            border-radius: 8px;
        }

        .box::before
        {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,
            transparent,#45f3ff,#45f3ff,#45f3ff);
            transform-origin: bottom right ;
            z-index: 1;
            animation: animate 6s linear infinite;

        }

        .box::after
        {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,
            transparent,#45f3ff,#45f3ff,#45f3ff);
            transform-origin: bottom right ;
            z-index: 1;
            animation: animate 6s linear infinite;
            animation-delay: -2s;

        }

        .borderline
        {
            position: absolute;
            top: 0;
            inset: 0;
        }

        .borderline::before
        {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,
            transparent,#ff2770,#ff2770,#ff2770);
            transform-origin: bottom right ;
            z-index: 1;
            animation: animate 6s linear infinite;
            animation-delay: -1.5s;

        }

        .borderline::after
        {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg,transparent,
            transparent,#ff2770,#ff2770,#ff2770);
            transform-origin: bottom right ;
            z-index: 1;
            animation: animate 6s linear infinite;
            animation-delay: -4.5s;

        }

        @keyframes animate
        {
            0%
            {
                transform: rotate(0deg);
            }
            100%
            {
                transform: rotate(360deg);
            }
        }

        .box form
        {
            position: absolute;
            inset: 4px;
            background-color:black;
            padding: 50px 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }

        .box form h2{
            color: #fff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }

        .box form .inputbox
        {
            position: relative;
            width: 300px;
            margin-top: 35px;
        }

        .box form .inputbox input
        {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            border: none;
            box-shadow: none;
            color: #23242a;
            font-size: 1em;
            letter-spacing: 0.05em;
            transform: .5s;
            z-index: 10;
        }

        .box form .inputbox span
        {
            position: absolute;
            left: 0;
            padding: 20px 10px 10px;
            pointer-events: none;
            color: #8f8f8f;
            transition: .5s;

        }

        .box form .inputbox input:valid ~ span,
        .box form .inputbox input:focus ~ span
        {
           color: #fff;
           font-size: 0.75em;
           transform: translateY(-34px);
        }

        .box form .inputbox i
        {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        .box form .inputbox input:valid ~ i,
        .box form .inputbox input:focus ~ i
        {
            height: 44px;
        }

        .box form .links
        {
            display: flex;
            justify-content: space-between;

        }

        .box form .links a
        {
            margin: 10px 0;
            font-size: 0.75em;
            color: #8f8f8f;
            text-decoration: none;
        }

        .box form .links a:hover
        .box form .links a:nth-child(2)
        {
            color: #fff;
        }

        .box form .inputbox input[type="submit"]
        {
            border: none;
            outline: none;
            padding: 9px 25px;
            background: #fff;
            font-size: 0.9em;
            border-radius: 4px;
            font-weight: 500;
            width: 100px;
            margin-top: 10px;
        }

        .box form .inputbox input[type="submit"]:active
        {
            opacity: 0.8;

        }
        
        .nav a
        {
            border:2px solid white;
            padding: 4px 15px;
            text-decoration: none;
            background-color: #45f3ff;
            color:black;
            border-radius: 5px;
        }

        .nav .a2
        {
            background-color: #ff2770;
        }

        .error-message {
            color: #ff2770;
            font-size: 0.8em;
            margin-top: 5px;
            text-align: left;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
            position: relative;
            z-index: 3;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

    </style>    
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <form action="{{ route('login.process') }}" method="POST">
            @csrf 
            <h2>SIGN IN</h2>
            <div class="inputbox">
                <input type="text" required="required" name="txtname" value="{{ old('txtname') }}" class="@error('txtname') is-invalid @enderror">
                <span>Username</span>
                <i></i>
                @error('txtname')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="inputbox">
                <input type="password" required="required" name="txtpass" class="@error('txtpass') is-invalid @enderror">
                <span>Password</span>
                <i></i>
                @error('txtpass')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="links">
                <!--<a href="#">Forgot Password</a>-->
            </div>
            <br><br>
            <input type="submit" value="Login" name="Submit">
            <br>
            <div class="nav" style="text-align: center;">
                <a href="{{ url('/index') }}">Home</a>
                <a class="a2" href="{{ url('/home') }}">Store</a>
            </div>
        </form>
    </div>
    
</body>
</html>
