<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike SuperRep Go</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
        @font-face {
            font-family: 'Media Gothic';
            src: url('assets/fonts/Media-Gothic.ttf') format('truetype'), 
        }


        html,body
        {
          height: 100%;
          margin: 0;
          padding: 0;
          overflow-x: hidden;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #050A30;
            color: white;
            animation: fadeIn 2s ease;
            font-family: 'Poppins',sans-serif;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        #nav{
    display: flex;
    justify-content: space-between;
    padding: 30px 50px;
    font-family: 'Bemirs - Demo Version' , sans-serif;  
}

#nav h1 {
    font-family: 'La Fleur Grende Personal Use On' , sans-serif;  
    font-size:28px;
}


#nav #right{
    display: flex;
    /* align-items: center; */
    gap: 20px;
}

/* =========================
   HAMBURGER
========================= */
#hamburger {
  display: none;
  flex-direction: column;
  gap: 6px;
  cursor: pointer;
}

#hamburger span {
  width: 28px;
  height: 3px;
  background: white;
  border-radius: 2px;
  transition: 0.3s;
}


#nav #right h4{
    padding: 10px 20px;
    border: 1px solid #fff;
    border-radius: 50px;
    font-weight: 500;
    color: #fff;
    transition: all ease 0.4s;
    position: relative;
    font-size: 13px;
    overflow: hidden;
}
#nav #right h4::after
{
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    background-color: #fff;
    left: 0;
    bottom: -100%;
    border-radius: 50%;
    transition: all ease 0.4s;
}

#nav #right h4:hover::after{
  bottom: 0;
    border-radius: 0;
}

#nav a{
    font-family: "Poppins", sans-serif;
    color: #fff;
    text-decoration: none;
    position: relative;
    z-index: 9;
}

#nav h4:hover a {
  color: black;
}

#nav #right a:hover span{
    transform: scale(1) translateY(0);
    opacity: 1;
}

        .container {
            margin-top: 7%;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .text-section {
            width: 50%;
            margin-left: 60px;
        }

        h1 {
            font-size: 5vw;
            font-weight: bold;
        }

        h2 {
            font-size: 6vw;
            font-weight: bold;
            margin-top: 20px;
        }

        h3 {
            font-size: 3vw;
            font-weight: 500;
            margin-top: 10px;
        }

        .rating {
            display: flex;
            gap: 5px;
            margin-top: 15px;
        }

        .star {
            font-size: 24px;
            color: #a1a1a1;
        }

        .star.filled {
            color: #d4af37; 
        }

        .star.half {
            background: linear-gradient(to right, #c0c0c0 50%, #a1a1a1 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    .image-section {
    width: 30vw;
    height: 30vw;
    margin-left: 6%;
    display: flex;
    border-radius: 50%;
    background-image: url('assets/img/glassmorphism.avif');
    background-size: cover;
    background-position: center;
    overflow: hidden;
}

.image-section .im {
    width: 100%; 
    height: 100%; 
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08); 
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37); 
    backdrop-filter: blur(14px);  
    -webkit-backdrop-filter: blur(10px);
}

.image-section .im img {
    max-width: 70%;
    border-radius: 50px;
    height: auto;
}

.shoe-store {
        padding: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        backdrop-filter: blur(15px); 
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        margin: 40px 20px;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .product-card {
        background: rgba(255, 255, 255, 0.2);
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
        backdrop-filter: blur(15px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 15px;
    }

    .product-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .product-card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.3);
    }

    .product-card h2 {
        font-size: 1.5em;
        font-family: 'Media Gothic';
        margin: 15px 0;
        color: #fff;
    }

    .product-card p {
        font-size: 1.2em;
        margin: 10px 0;
        color: rgba(255, 255, 255, 0.8);
    }

    .buy-now-btn, .add-to-cart-btn-product {
        background: linear-gradient(135deg, #4a73e8, #9116ff);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-family: 'Media Gothic';
        cursor: pointer;
        transition: background 0.3s, transform 0.3s;
        margin: 10px 0;
    }

    .buy-now-btn:hover, .add-to-cart-btn-product:hover {
        background: linear-gradient(135deg, #9116ff, #4a73e8);
        transform: scale(1.05);
    }

        .footer {
         background-color: #050A30;
          padding: 100px 0; 
         }

.footer-container {
  display: flex;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-section {
  margin-right: 40px;
}

.footer-section:last-child {
  margin-right: 0;
}

.footer h3 {
  font-size: 1.2rem;
  margin-bottom: 25px;
}

.footer p, .footer ul, .footer li {
  margin: 10px 0;
  line-height: 1.6;
  color: #bdbdbe;
}

.footer a {
  color: #bdbdbe;
  text-decoration: none;
}

.footer-menu {
  list-style-type: none;
}

.footer-menu li {
  margin-bottom: 10px;
}

.quote-btn {
  display: inline-block;
  background: linear-gradient(90deg, #4a73e8, #9116ff);
  backdrop-filter: blur(14px);
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 40px;
  margin-top: 20px;
}

.email-input {
  width: 100%;
  background: linear-gradient(90deg, #4a73e8, #9116ff);
  backdrop-filter: blur(14px);
  padding: 10px;
  margin-top: 30px;
  margin-bottom: 10px;
  color: black;
  border: none;
  margin-top: 50px;
  border-radius: 40px;
}

.subscribe-label {
  display: block;
  color: #bdbdbe;
  margin-top: 15px;
}

.submit-btn {
  background: linear-gradient(90deg, #4a73e8, #9116ff);   color: #9f9fbe;
  border: none;
  font-size: 16px;
  font-weight: 600;
  padding: 10px 20px;
  border-radius: 40px;
  margin-top: 20px;
  cursor: pointer;
}

.submit-btn:hover {
  background-color: #ccc;
}

.child-footer
{
padding: 30px;
}

.child-footer ul
{
    display: flex;
    justify-content: space-around;
    list-style: none;
    cursor: pointer;
}

.child-footer ul li 
{
    color: #bdbdbe;
}

/* ======================= */
/*  RESPONSIVE ADDITIONS   */
/* ======================= */

@media (max-width: 1024px) {

  #nav {
    padding: 20px 20px;
  }

  #nav #right {
    gap: 10px;
  }

  #nav #right h4 {
    padding: 8px 14px;
    font-size: 11px;
  }
}

@media (max-width: 768px) {

  body {
    font-size: 14px;
  }

  #nav {
    align-items: flex-start;
    gap: 15px;
  }

  #nav #right {
    flex-wrap: wrap;
    justify-content: flex-start;
  }

  #nav #right h4 {
    padding: 6px 11 px;
    font-size: 9px;
  }

  .footer {
    padding: 50px 0 40px 0;
  }

  .footer-container {
    flex-direction: grid;
    gap: 30px;
    padding: 0 20px;
  }

  .footer-section {
    margin-right: 0;
  }

  .email-input {
    margin-top: 20px;
  }


  /* Override inline HR widths for small screens */
  hr {
    width: 90% !important;
    margin: 40px auto 0 auto !important;
  }
}

@media (max-width: 650px) {
  #right {
    position: fixed;
    inset: 0;
    top: 80px;  
    background: rgba(10, 10, 30, 0.9);
    backdrop-filter: blur(20px);
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 25px;
    transform: translateX(100%);
    transition: transform 0.4s ease;
    z-index: 999;
  }

  #right.active {
    transform: translateX(0);
  }

  #right h4 {
    font-size: 24px;
    margin-top: 20px;
  }

  #hamburger {
    display: flex;
    z-index: 1000;
  }

  /* Cross animation */
  #hamburger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }

  #hamburger.active span:nth-child(2) {
    opacity: 0;
  }

  #hamburger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
  }

  .footer-container {
    flex-direction: column;
    gap: 30px;
    padding: 0 20px;
    align-items: center;
    text-align: center;
  }
  .child-footer li {
    align-items: center;
    justify-content: center;
    text-algn: center;
    font-size: 10px;
  }
}

@media (max-width: 550px) {
  .container {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .container .rating {
    justify-content: center;
  }

  .text-section {
    width: 100%;
    margin: 0;
  }

  .image-section {
    width: 50vw;
    height: 50vw;
    margin: 30px 0 0 0;
  }
}

@media (max-width: 480px) {

  #nav h1 {
    font-size: 20px;
  }

   .child-footer li {
    font-size: 9px;
  }
}

@media (max-width: 360px) {
  .child-footer li {
    font-size: 8px;
  }

  .shoe-store {
        padding: 10px;
    }

      .product-card {
        padding: 10px;
    }  

 .product-card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.3);
    } 
}

.cart-icon {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4a73e8, #9116ff);
    color: white;
    text-decoration: none;
    transition: transform 0.3s;
}

.cart-icon:hover {
    transform: scale(1.1);
}

.cart-count {
    position: absolute;
    top: -8px;
    right: -8px;
    background-color: #ff4757;
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

    </style>
</head>
<body>
  <div data-scroll-container style="height: min-content;">
    <div data-scroll-section>
    <div id="nav">
        <h1>StepElegance</h1>
        <div id="right">
          <h4><a href="{{ url('/index') }}">Home<span></span></a></h4>
          <h4><a href="{{ url('/About_US') }}">ABOUT US<span></span></a></h4>
          <h4><a href="{{ url('/Contact_us') }}">CONTACT US<span></span></a></h4>
          <h4><a href="{{ url('/Offers') }}">OFFERS<span></span></a></h4>
          <a href="{{ route('cart.show') }}" class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            @if(session('cart_count', 0) > 0)
                <span class="cart-count">{{ session('cart_count') }}</span>
            @endif
        </a>
        </div>
          <!-- Hamburger -->
        <div id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>

    <div class="container">
        <div class="text-section">
            <h1>$47.98</h1>
            <h2>NIKE</h2>
            <h3>SUPERREP GO</h3>
            <div class="rating">
                <span class="star filled">★</span>
                <span class="star filled">★</span>
                <span class="star filled">★</span>
                <span class="star half">★</span>
                <span class="star empty">★</span>
            </div>

            <form action="{{ route('cart.buyNow') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="1">
                <button type="submit" class="buy-now-btn">Buy Now</button>
            </form>
        </div>

        <div class="image-section">
          <div class="im">
            <img src="assets/img/Store.png">
          </div>
        </div>
    </div>

<div class="shoe-store">
    <h2 style="text-align: center; font-family: 'Media Gothic'; margin: 40px 0; color: #fff;">Urban Wear</h2>
    <div class="product-grid">
    @foreach ($products as $product)
        <div class="product-card">
            <img src="{{ asset('assets/' . $product->image) }}" alt="{{ $product->name }}">
            <h2>{{ $product->name }}</h2>
            <p>${{ $product->price }}</p>
            <div class="product-actions">
                <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="add-to-cart-btn-product">Add to Cart</button>
                </form>
                <form action="{{ route('cart.buyNow') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" class="buy-now-btn">Buy Now</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
</div>


    <hr style="width: 1300px; margin-left: 60px; border: none; height: 2px; margin-top: 50px; background-image: linear-gradient(90deg, #4a73e8, #9116ff);">
     <footer class="footer">
        <div class="footer-container">
          
          <div class="footer-section">
            <h3>Contact</h3>
            <p>403 Raykhad Street<br>India, AHM 380001</p>
            <p>Email: <a href="mailto:info@stepelegance.com">info@stepelegance.com</a></p>
            <p>Phone: 783-287-2681</p>
            <a href="mailto:info@stepelegance.com" class="quote-btn">Contact Us</a>
          </div>
          
   
          <div class="footer-section">
            <h3>Be in the Know</h3>
            <p>Subscribe for the latest offers and updates from StepElegance.</p>
            <form class="newsletter-form">
              <div style="margin-bottom: -50px; margin-top: 50px;">Email&nbsp;*</div>
              <input type="email"  required class="email-input" name="email"/>
              <div class="newsletter-options">
                <label class="subscribe-label">
                  <input type="checkbox"/> Yes, subscribe me to your newsletter.
                </label>
                <button type="submit" class="submit-btn" name="Submit">Submit</button>
              </div>
            </form>
          </div>
          

          <div class="footer-section menu-section">
            <h3>Menu</h3>
            <ul class="footer-menu">
              <li><a href="{{ url('/index') }}">Home</a></li>
              <li><a href="{{ url('/About_US') }}">About Us</a></li>
              <li><a href="{{ url('/Contact_us') }}">Contact Us</a></li>
              <li><a href="{{ url('/Offers') }}">Offers</a></li>
            </ul>
          </div>
    

          <div class="footer-section social-section">
            <h3>Follow us on</h3>
            <ul class="footer-menu">
              <li><a href="#">FACEBOOK</a></li>
              <li><a href="#">LINKEDIN</a></li>
              <li><a href="#">TWITTER</a></li>
            </ul>
          </div>
    
        </div>
      </footer>
    
      <hr style="width: 1300px; margin-left: 60px; border: none; height: 2px; background-image: linear-gradient(90deg, #4a73e8, #9116ff);">
        <div class="child-footer" style="margin-bottom: 50px;">
            <ul>
                <li>© Copyright Step Elegance 2024</li>
                <li>PRIVACY POLICY</li>
                <li>TERMS AND CONDITIONS</li>
            </ul>
        </div>
      </div>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
        <script>
  const scroll = new LocomotiveScroll({
    el: document.querySelector("[data-scroll-container]"),
    smooth: true,
  });

    const hamburger = document.getElementById("hamburger");
  const navRight = document.getElementById("right");
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active"); 
    navRight.classList.toggle("active");
  });
        </script>
</body>
</html>