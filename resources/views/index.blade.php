<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Bebas+Neue&family=Cinzel:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    

    <link rel="shortcut icon" href="./icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
   
    <style>

        *{
    color: rgb(255, 255, 255);
    margin: 0px;
    padding: 0px;
}

@font-face {
  font-family: 'Bemirs - Demo Version';
  src: url('assets/fonts/BemirsDemoVersionRegular-L360Z.ttf') format('truetype'), 
       url('assets/fonts/BemirsDemoVersionRegular-X361d.otf') format('opentype');
}


@font-face {
  font-family: 'La Fleur Grende Personal Use On';
  src: url('assets/fonts/LaFleurGrandePersonalUseOnItalic-MVnBw.otf') format('opentype'), 
       url('assets/fonts/LaFleurGrandePersonalUseOnItalic-MVnBw.otf') format('opentype');
}

@font-face {
  font-family: 'Media Gothic';
  src: url('assets/fonts/Media-Gothic.ttf') format('truetype'), 
}

body{
    width: 100%;
    overflow-x:hidden;
    background-color: black;
    font-family: "Poppins", sans-serif;
}

/* Welcome popup shown after login */
.welcome-popup {
  position: fixed;
  top: 20px;
  left: 50%;
  transform: translateX(-50%);
  background: linear-gradient(90deg,#2ecc71,#27ae60);
  color: #fff;
  padding: 12px 18px;
  border-radius: 8px;
  box-shadow: 0 6px 20px rgba(39,174,96,0.18);
  font-weight: 600;
  z-index: 9999;
  animation: popupFade 0.45s ease;
  transition: opacity 0.45s ease, transform 0.45s ease;
}
@keyframes popupFade {
  from { opacity: 0; transform: translateX(-50%) translateY(-6px); }
  to   { opacity: 1; transform: translateX(-50%) translateY(0); }
}

#home{
   
    background-image: url('assets/img/shoe.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    height: 100vh;
}

#nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 50px;
    font-family: 'Bemirs - Demo Version' , sans-serif;  
}

#nav h1 {
    font-family: 'La Fleur Grende Personal Use On' , sans-serif;  
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
 #homemain {
    width: 100%;
    padding: 15vh 16vh;
}
#homemain h1{
    font-weight: 400;
    font-size: 3.5vh;
    letter-spacing: -1.1px;
    font-family: 'Bemirs - Demo Version' , sans-serif;
}

 .headings{ 
    display: flex;
    gap: 70px;
    font-size: 130px;
	flex-wrap:wrap;
 }

.headings h5
{  
    font-family: 'Bemirs - Demo Version' , sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
    font-weight: 400;
    letter-spacing: 2px;
    transition: color 0.5s ease;
}


#homemain .headings h5:hover {

    color: rgb(13, 81, 121);
}


#homelast p
{
    font-weight: 400;
    font-style: normal;
    font-size: 1.2vw;
    margin-top: 10%;
    width: 50%;
}

#bru ::selection{
    color: rgb(0, 0, 0);
    background-color: #0ef;
}
#home .sign h4 
{
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

#home .sign h4::after
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

#home .sign h4:hover::after{
  bottom: 0;
    border-radius: 0;
}


#home .sign h4 a
{
  font-family: "Poppins", sans-serif;
    color: #fff;
    text-decoration: none;
    position: relative;
    z-index: 9;
}
#home .discount 
{
    display: flex;
    gap: 20px;
    align-items: center;
}

#home .sign h4:hover a {
  color: #000;
  font-weight: 500;
}
#home .sign a:hover span{
    transform: scale(1) translateY(0);
    opacity: 1;
}

#home .discount h2
{
    font-size: 2.2vh;
    font-weight: 300;
}

.footer {
  background-color: #000000;
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

.footer a:hover {
  text-decoration: underline;
}

.footer-menu {
  list-style-type: none;
}

.footer-menu li {
  margin-bottom: 10px;
}

.quote-btn {
  display: inline-block;
  background: #325050;
  color: #FFFFFF;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 40px;
  margin-top: 20px;
}

.email-input {
  width: 100%;
  padding: 10px;
  margin-top: 30px;
  margin-bottom: 10px;
  background: #325050;
  color: #FFFFFF;
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
  background: #325050;
  color: #FFFFFF;
  border: none;
  padding: 10px 20px;
  border-radius: 40px;
  margin-top: 20px;
  cursor: pointer;
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

#loader{
    height: 100%;
    width: 100%;
    background-color: #dad9d9;
    position: fixed;
    z-index: 999;
    top: 0;
    transition: all ease 0.7s;
    display: flex;
    align-items: center;
    justify-content: center;
}

#loader h1{
    font-size: 7vw;
    color: transparent;
    background: linear-gradient(to right,orange,orangered);
    -webkit-background-clip: text;
    position: absolute;
    opacity: 0;
    animation-name: load;
    animation-duration: 1s;
    animation-delay: 1s;
    animation-timing-function: linear;
}
#loader h1:nth-child(2){
    animation-delay: 2s;
}
#loader h1:nth-child(3){
    animation-delay: 3s;
}


@keyframes load {
    0%{
        opacity: 0;
    }
    10%{
        opacity: 1;
    }
    90%{
        opacity: 1;
    }
    100%{
        opacity: 0;
    }
}


.featured-collections {
  text-align: center;
  padding: 50px;
  background-color: #000;
}

.featured-collections h2 {
  font-size: 10vh;
  margin-bottom: 60px;
  color: transparent;
  -webkit-text-stroke-width: 0.8px;
  -webkit-text-stroke-color: #fff;
}

.collections-container {
  display: flex;
  justify-content: space-around;
  gap: 20px;
  margin-top: 30px;
}
.col
{
  width: 341px;  
  transition: transform 0.3s ease;
  border-radius: 10px;
}

.collection {
  border-radius: 10px; 
  background: rgba(255, 255, 255, 0.10); 
  backdrop-filter: blur(12px); 
  padding: 20px;
  width: 300px;
  text-align: center;
  transition: transform 0.3s ease;
}

.col:hover {
  transform: scale(1.02);
}

.collection:hover {
  transform: scale(1.02);
}

.collection img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); 
}

.collection h3 {
  margin-top: 20px;
  font-size: 24px;
  color: #00FFFF;
}

.collection p {
  margin: 10px 0 20px;
  color: #d3d3d3;
}

.shop-now {
  display: inline-block;
  padding: 10px 20px;
  background: rgba(255, 255, 255, 0.19); 
  backdrop-filter: blur(18px);
  /*background: #325050;
  color: #FFFFFF; */
  border-radius: 20px;
  text-decoration: none;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

#page2 {
            min-height: 100vh;
            width: 100%;
            background-color: #000;
            padding: 8vw 0;
            position: relative;
        }

        /* Moving Text Container */
        #moving-text {
            /* margin-top: -50px; */
            overflow-x: auto;
            white-space: nowrap;
        }

        /* Hide Scrollbar */
        #moving-text::-webkit-scrollbar {
            display: none;
        }

        /* Continuous Moving Text */
        .con {
          white-space: nowrap;
justify-content: center;
          align-items: center;
          display: inline-flex;
          gap: 3vw;
        animation-name: move;
        animation-duration: 10s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        }

        /* Styling for H1 */
        #moving-text h1 {
            font-size: 12vw;
            display: inline-block;
            font-family: 'Media Gothic';
        }

        /* Styling for Circular Elements */
        #gola {
            height: 5vw;
            width: 5vw;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            display: inline-block;
            background: linear-gradient(to right,orange,orangered);
            margin: 1vw 2vw;

        }

      @keyframes move {

        from{
          transform: translateX(0);
        }
        
        to{
          transform: translateX(-100%);
        }
      }
      
      #main
      {
        position: relative;
        z-index: 10; 
      }


/* ======================= */
/*  RESPONSIVE ADDITIONS   */
/* ======================= */

@media (max-width: 1024px) {

   #home {
    background-size: cover;
    background-position: center;
  }

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

  .headings {
    gap: 40px;
  }

  .headings h5{
    font-size: 5vw;
  }

  #homemain h1 {
    font-size: 3vh;
    letter-spacing: -0.5px;
  }

  #homelast p {
    width: 80%;
    font-size: 1.8vw;
  }

  .featured-collections h2 {
    font-size: 7vw;
  }

  .collections-container {
     display: grid;
     grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
     gap: 20px;

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

  #homemain {
    padding: 10vh 6vw;
  }

  #homemain h1 {
    font-size: 2.5vh;
    letter-spacing: 0;
  }

  .headings {
    gap: 30px;
  }

  .headings h5 {
    font-size: 6vw;
  }

  #homelast p {
    margin-top: 100px;
    font-size: 1.9vw;
  }

  #home .discount {
    align-items: center;
  }

  #home .discount h2 {
    font-size: 1.8vh;
  }

  /* Moving text adjustment */
  #moving-text h1 {
    font-size: 10vw;
  }

  .featured-collections {
    padding: 30px 15px;
  }

  .featured-collections h2 {
    font-size: 5vw;
    margin-bottom: 30px;
  }

  .collections-container {
    flex-direction: column;
    align-items: center;
  }

  .col {
    width: 340px;
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

@media (max-width: 750px) {

  .col {
    width: 320px;
  }
  .collection {
    width: 280px;
  }
 
}

@media (max-width: 700px) {

  .collections-container {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .collections-container .col {
    width: 320px;
    flex-direction: column;
    align-items: center;
  }
  .collection {
    width: 280px;
       flex-direction: column;
    align-items: center;
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

@media (max-width: 500px) {

  #homemain h1 {
    font-size: 12px;
  }

  #homemain .headings h5 {
    font-size: 35px;
  }
}

@media (max-width: 460px) {

#homemain .headings {
  display: grid;
}

#homemain h1 {
  font-size: 2.5vw;
}


/* Text inside */
#homelast p {
  display: grid;
  border: 1px solid #ffffff56;
  border-radius: 10px;
  backdrop-filter: blur(10.5px);
  padding: 10px;
  position: relative;
  box-shadow: inset 2px 1px 6px #ffffff45;
  overflow: hidden;
  z-index: 0;
}

.discount {
  width: 85%;
  display: grid;
  border: 1px solid #ffffff56;
  border-radius: 10px;
  backdrop-filter: blur(10.5px);
  padding: 10px;
  position: relative;
  box-shadow: inset 2px 1px 6px #ffffff45;
  overflow: hidden;
  z-index: 0;
}


  #homelast::after {
  z-index: -1;
  content: " ";
  position: absolute;
  width: 150%;
  top: 0;
  left: 0;
  height: 10px;
  background: #ffffff;
  transform: rotateZ(50deg);
  filter: blur(30px);
  animation: shine 10s ease infinite;
}

}

@media (max-width: 480px) {

  #nav h1 {
    font-size: 20px;
  }

  .headings h5 {
    font-size: 11vw;
  }

  #home .sign h4 {
    font-size: 9px;
    padding: 6px 14px;
  }

  .featured-collections {
    padding-top: 40px;
  }

  .collection h3 {
    font-size: 18px;
  }

  .collection p {
    font-size: 13px;
  }

  .shop-now {
    padding: 8px 16px;
    font-size: 12px;
  }

}

@media (max-width: 450px) {
  #homemain .discount h4 {
    font-size: 1.5vw;
  }

  #homemain .discount h2 {
    font-size: 2vw;
  }
}

@media (max-width: 360px) {
  .child-footer li {
    font-size: 8px;
  }
}

    </style>

<script>

function loaderAnimation() {
    var loader = document.querySelector("#loader");
    setTimeout(function () {
      loader.style.top = "-100%";
    }, 4200);
  }
  window.onload = loaderAnimation;

</script>
</head>
<body>
    @if(session('success'))
        <div class="welcome-popup">
            {{ session('success') }}
        </div>
    @endif

    @if(session('success'))
      <script>
        (function() {
          // Hide the welcome popup after 6 seconds (6000ms)
          var hideDelay = 6000;
          window.addEventListener('load', function() {
            var el = document.querySelector('.welcome-popup');
            if (!el) return;
            setTimeout(function() {
              el.style.opacity = '0';
              el.style.transform = 'translateX(-50%) translateY(-6px)';
              setTimeout(function() { try { el.remove(); } catch(e){} }, 500);
            }, hideDelay);
          });
        })();
      </script>
    @endif

<div id="loader">
  <h1>STYLE</h1>
  <h1>COMFORT</h1>
  <h1>PERFORMANCE</h1>
</div>

<div data-scroll-container> 
<div id="bru" data-scroll-section>
  <div id="main">
    <div id="home">
      <div id="nav">
        <h1>Step&nbsp;Elegance</h1>
        <div id="right">
        <h4><a href="{{ url('/home') }}">STORE<span></span></a></h4>
        <h4><a href="{{ url('/About_US') }}">ABOUT US<span></span></a></h4>
        <h4><a href="{{ url('/Contact_us') }}">CONTACT US<span></span></a></h4>
        <h4><a href="{{ url('/Offers') }}">OFFERS<span></span></a></h4>
        <h4><a href="{{ url('/admin/login') }}">ADMIN<span></span></a></h4>
        </div>

         <!-- Hamburger -->
        <div id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="homemain" data-scroll data-scroll-speed="3">
        <h1>Be <b>happy</b> with your <i>choice...</i></h1>
        <div class="headings">
          <h5>BROOKS</h5>
          <h5>NIKE</h5>
          <h5>JORDAN</h5>
        </div>
        <div id="homelast">
          <p>Welcome to StepElegance.com. At StepElegance, we believe that the right pair of shoes can elevate your style and provide the comfort you deserve. Explore our collection of handcrafted, high-quality footwear that's designed to make a statement and keep your feet happy.</p>
        </div><br><br><br>
        <div class="discount">
          <div class="sign">
          <h4><a href="{{ url('/Signup') }}">Signup<span></span></a></h4>
          </div>
          <div>
            <h2>to get 20% DISCOUNT on all our products</h2>
          </div>
        </div><br><br>
      </div>
    </div>
  </div>

  <div id="page2">
    <div id="moving-text">
      <div class="con">
        <h1>STYLE</h1>
        <div id="gola"></div>
        <h1>COMFORT</h1>
        <div id="gola"></div>
        <h1>PERFORMANCE</h1>
        <div id="gola"></div>
      </div>
      <div class="con">
        <h1>STYLE</h1>
        <div id="gola"></div>
        <h1>COMFORT</h1>
        <div id="gola"></div>
        <h1>PERFORMANCE</h1>
        <div id="gola"></div>
      </div>
      <div class="con">
        <h1>STYLE</h1>
        <div id="gola"></div>
        <h1>COMFORT</h1>
        <div id="gola"></div>
        <h1>PERFORMANCE</h1>
        <div id="gola"></div>
      </div>
    </div>

    <div class="featured-collections" style="margin-bottom: -150px;" data-scroll data-scroll-speed="3">
      <h2>FEATURED COLLECTIONS</h2>
      <div class="collections-container">
        <div class="col" style="background: linear-gradient(900deg, #2e1c28, #ae4d54);">
          <div class="collection">
            <img src="{{ URL::to('assets/img/features1.jpg') }}">
            <h3>Athlete's Choice</h3>
            <p>Top shoes for peak performance.</p>
            <a href="{{ url('/home') }}" class="shop-now">Shop Now</a>
          </div>
        </div>
        <div class="col" style="background: linear-gradient(900deg, #1c1c1c, #c7b725);">
          <div class="collection">
            <img src="{{ URL::to('assets/img/featured2.jpg') }}" alt="Urban Streetwear">
            <h3>Urban Streetwear</h3>
            <p>Stylish kicks for the streets.</p>
            <a href="{{ url('/home') }}" class="shop-now">Shop Now</a>
          </div>
        </div>
        <div class="col" style="background: linear-gradient(900deg, #311214, #840a0c);">
          <div class="collection">
            <img src="assets/img/featured3.jpg" alt="Limited Edition">
            <h3>Limited Edition</h3>
            <p>Exclusive and rare finds.</p>
            <a href="{{ url('/home') }}" class="shop-now">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
 <hr style="width: 1300px;margin-left: 60px;">
 <footer class="footer" style="padding-bottom: -50px;">
    <div class="footer-container">
      <div class="footer-section">
        <h3>Contact</h3>
        <p>403 Raykhad Street<br>India, AHM 380001</p>
        <p>Email: <a href="mailto:info@stepelegance.com">info@stepelegance.com</a></p>
        <p>Phone: 9831872681</p>
        <a href="mailto:info@stepelegance.com" class="quote-btn">Contact Us</a>
      </div>
      
      
      <div class="footer-section">
        <h3>Be in the Know</h3>
        <p>Subscribe for the latest offers and updates from StepElegance.</p>
        <form class="newsletter-form">
          <input type="email" placeholder="Email *" required class="email-input" name="a1"/>
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
          <li><a href="{{ url('/home') }}">Store</a></li>
          <li><a href="{{ url('/About_US') }}">About Us</a></li>
          <li><a href="{{ url('/Contact_us') }}">Contact Us</a></li>
          <li><a href="{{ url('/Offers') }}">Offers</a></li>
        </ul>
      </div>

      <div class="footer-section social-section">
        <h3>Follow us on</h3>
        <ul class="footer-menu">
          <li><a href="#">FACEBOOK</a></li>
          <li><a href="#">INSTAGRAM</a></li>
          <li><a href="#">TWITTER</a></li>
        </ul>
      </div>

    </div>
    <hr style="width: 1300px;margin-left: 60px;margin-top: 100px;">
    <div class="child-footer" style="margin-bottom: -90px;">
        <ul>
            <li>© Copyright Step Elegance 2024</li>
            <li>PRIVACY POLICY</li>
            <li>TERMS AND CONDITIONS</li>
        </ul>
    </div>
  </footer>
  </div>  
</div>

 <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>

 <script>
   const scroll = new LocomotiveScroll({
     el: document.querySelector('[data-scroll-container]'),
     smooth: true
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