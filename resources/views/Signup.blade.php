<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - StepElegance</title>

    <style>
         *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 700;
        }

        body
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-attachment: fixed;
            background-size: 100%;
            background-image: url('assets/img/background1.jpg');
        }

        .box
        {
            overflow: hidden;
            position: relative;
            width: 380px;
            height: 530px;
            border-radius: 8px;
            border: 2px solid grey;
            box-shadow: 5px 7px 5px 0px rgb(43, 49, 49);
        }
        .box form
        {
            position: absolute;
            inset: 4px;
            background: transparent;
            backdrop-filter: blur(7px);
            padding: 50px 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }

        .box form h2{
            color: white;
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
            color: #fff;
            transition: .5s;

        }

        .box form .inputbox input:valid ~ span,
        .box form .inputbox input:focus ~ span
        {
           color: #fff(56, 47, 47);
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

        .box form h5
        {
            color: #fff;
            justify-content: center;
            text-align: center;
            margin-top: 14px;
            font-size: 15px;
        }

        .box form .sign a
{
    /* margin: 40px 0px 40px 38%; */
    position: relative;
    text-decoration: none;
    font-weight: 600;
    font-size: 2vh;
    color: #fff;
    border-radius: 5px;
    background-color: rgb(216, 0, 90);
    box-shadow: 0 0 5px rgb(216, 0, 90),
            0 0 25px rgb(216, 0, 90);
    transition: .5s;
    padding: 2px 20px;
    margin: 30px 0px 0px 100px;
    
}

.box form .sign a:hover
{
    box-shadow: 0 0 5px rgb(216, 0, 90),
            0 0 25px rgb(216, 0, 90), 0 0 50px rgb(216, 0, 90),
            0 0 100px rgb(216, 0, 90), 0 0 200px rgb(216, 0, 90);
}
.box form .sign a:hover span{
    transform: scale(1) translateY(0);
    opacity: 1;
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
        <form action="{{ route('signup.process') }}" method="POST">
            @csrf
            <h2>SIGN UP</h2>

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

            <div class="inputbox">
                <input type="text" required="required" name="txtname" value="{{ old('txtname') }}" class="@error('txtname') is-invalid @enderror">
                <span>Name</span>
                <i></i>
                @error('txtname')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputbox">
                <input type="email" required="required" name="txtemail" value="{{ old('txtemail') }}" class="@error('txtemail') is-invalid @enderror">
                <span>Email</span>
                <i></i>
                @error('txtemail')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputbox">
                <input type="password" required="required" name="pass" class="@error('pass') is-invalid @enderror">
                <span>Password</span>
                <i></i>
                @error('pass')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="inputbox">
                <input type="password" required="required" name="pass_confirmation" class="@error('pass_confirmation') is-invalid @enderror">
                <span>Confirm Password</span>
                <i></i>
            </div>

            <br><br>
            <input type="submit" value="Sign Up" name="Submit">
            <!-- <h5>Already have an account?</h5><br> -->
            <div class="sign"><a href="{{ url('/Sign_in') }}">Sign In<span></span></a></div>
        </form>
    </div>
</body>
</html>
