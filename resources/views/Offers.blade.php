<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body
        {
            width: 100%;
            height: 100%;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: rgb(233, 8, 8);
            color: #f1f1f1;
          
        }

       .first
        {   
            padding: 30px 0px;
            background-color:rgb(24, 110, 126);
        }

        .first h1
        {
           
            text-align: center;
            flex-wrap: wrap;
            font-size: 65px;
        }

        .discount
        {
            text-align: center;
			flex-wrap: wrap;
        }

        .discount .big h1 
        {
            font-size: 150px;
            line-height: 1;
			flex-wrap: wrap;
        }

        .discount h2
        {
            font-size: 35px;
			flex-wrap: wrap;
        }

        .all p
        {
            text-align: center;
            margin-top: 26px;

        }

        .all .link 
        {
            text-align: center;
            margin-top: 26px;
			flex-wrap: wrap;
        }

        .all .link a
        {
            text-decoration: none;
            color: white;
            padding: 5px 30px;
            border: 1px solid #f1f1f1;
            font-weight: 700;
			flex-wrap: wrap;
        }
        
    </style>
</head>
<body>
    <div class="first">
        <h1><i>ONLY WANT ONE PAIR? GET 10% OFF</i></h1>  
    </div>
    <br>
    <div class="all">
        <div class="discount">
            <h1><i>BUY ONE GET</i></h1> 
            <div class="big">   
            <h1>50%</h1>
            <h1>OFF</h1>
        </div> 
            <h2><i>ON YOUR SECOND PAIR</i></h2><br>
            <h3></i>Includes New Seasons Best Offers and marketdown styles</i></h3>
        </div>

        <div class="link">
            <a href="{{ url('/home') }}">SHOP NOW</a>
        </div>

        <p>Get ready to step up your style with exclusive DISCOUNT</p>
    </div>
</body>
</html>