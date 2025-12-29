<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <title>Contact Us - Shoe Website</title>
    <link rel="stylesheet" href="style.css">

    <style>
        * 
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body 
        {
            background: url('assets/img/glassmorphism.avif') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            position: relative;
        }

        body::before
        {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0.3));
            z-index: 0;
        }

        .contact-us-container
        {
            display: flex;
            width: 70%;
            max-width: 1200px;
            border-radius: 20px;
            overflow: hidden;
            backdrop-filter: blur(15px) saturate(180%);
            -webkit-backdrop-filter: blur(15px) saturate(180%);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
            transition: all 0.4s ease-in-out;
        }

        .contact-us-container:hover 
        {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        .contact-left, .contact-right
        {
            padding: 40px;
            width: 50%;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-left 
        {
            background: rgba(0, 0, 0, 0.5);
            text-align: left;
        }

        .contact-left h2
        {
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .contact-left p
        {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .contact-details
        {
            margin-bottom: 30px;
            animation: slideUp 1s ease-in-out;
        }

        .contact-details p
        {
            font-size: 1.1rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .contact-details i
        {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .social-icons a
        {
            margin-right: 15px;
            font-size: 1.5rem;
            color: #fff;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icons a:hover
        {
            color: #007BFF;
            transform: scale(1.2);
        }

        .contact-right
        {
            background: rgba(255, 255, 255, 0.05); 
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .contact-right h2
        {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }

        .form-group
        {
            margin-bottom: 20px;
            position: relative;
        }

        label
        {
            display: block;
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 8px;
        }

        input, textarea
        {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            transition: all 0.3s ease-in-out;
        }

        input:focus, textarea:focus
        {
            outline: none;
            border: 2px solid #007BFF;
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.7);
        }

        button
        {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            font-size: 1.2rem;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
            transition: background-color 0.3s, transform 0.2s ease, box-shadow 0.3s;
        }

        button:hover
        {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 123, 255, 0.5);
        }

        @keyframes fadeIn
        {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp
        {
            from {
                transform: translateY(40px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

         /* =========================
   RESPONSIVE BREAKPOINTS
   ========================= */

/* -------- Large Tablets (≤1024px) -------- */
@media (max-width: 1024px) {
  .contact-us-container {
    width: 85%;
  }

  .contact-left h2,
  .contact-right h2 {
    font-size: 2.2rem;
  }
}

/* -------- Tablets (≤900px) -------- */
@media (max-width: 900px) {
  body {
    padding: 20px;
    height: auto;
    min-height: 100vh;
  }

  .contact-us-container {
    flex-direction: column;
    width: 100%;
  }

  .contact-left,
  .contact-right {
    width: 100%;
    padding: 35px;
  }

  .contact-left {
    text-align: center;
  }

  .contact-details p {
    justify-content: center;
  }

  .social-icons {
    text-align: center;
  }
}

/* -------- Small Tablets / Large Mobiles (≤700px) -------- */
@media (max-width: 700px) {
  .contact-left h2,
  .contact-right h2 {
    font-size: 1.9rem;
  }

  .contact-left p {
    font-size: 1rem;
  }

  label {
    font-size: 1rem;
  }

  input,
  textarea {
    font-size: 0.95rem;
  }

  button {
    font-size: 1.05rem;
  }
}

/* -------- Mobiles (≤500px) -------- */
@media (max-width: 500px) {
  body {
    padding: 15px;
  }

  .contact-left,
  .contact-right {
    padding: 25px;
  }

  .contact-left h2,
  .contact-right h2 {
    font-size: 1.6rem;
  }

  .contact-details p {
    font-size: 0.95rem;
  }

  .contact-details i {
    font-size: 1.1rem;
  }

  .social-icons a {
    font-size: 1.3rem;
    margin-right: 10px;
  }
}

/* -------- Small Phones (≤350px) -------- */
@media (max-width: 350px) {
  .contact-left,
  .contact-right {
    padding: 20px;
  }

  .contact-left h2,
  .contact-right h2 {
    font-size: 1.4rem;
  }

  input,
  textarea {
    padding: 10px;
    font-size: 0.9rem;
  }

  button {
    padding: 10px;
    font-size: 1rem;
  }
}
    </style>
</head>
<body>
    <div class="contact-us-container">
        <div class="contact-left">
            <h2>Get in Touch</h2>
            <p>We would love to hear from you!</p>
            <div class="contact-details">
                <p><i class="bi bi-geo-alt"></i> 403 Raykhad Street India, AHM 380001</p>
                <p><i class="bi bi-telephone"></i> 9831872681</p>
                <p><i class="bi bi-envelope"></i> support@stepelegance.com</p>
            </div>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
            </div>
        </div>
        <div class="contact-right">
            <h2>Contact Us</h2>
            <form method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="txtname" id="name" placeholder="Your Full Name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="txtemail" id="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="How can we help?"></textarea>
                </div>
                <button type="submit" value="Login" name="submit">Send Message</button>
            </form>
        </div>
    </div>
</body>
</html>
