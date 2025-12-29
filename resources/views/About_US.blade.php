<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Bebas+Neue&family=Cinzel:wght@400..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Bebas+Neue&family=Cinzel:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .bebas-neue-regular {
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: normal;
}

body {
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    background: url('assets/img/About.png') no-repeat center center fixed;
    background-size: cover; /* Ensure the image covers the entire screen */
}
 #nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 50px;
    background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black overlay for readability */
    font-family: 'Bemirs - Demo Version' , sans-serif;  
}

#nav h1 {
    font-family: 'La Fleur Grende Personal Use On' , sans-serif;  
    font-size:28px;
    color: #fff;
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


.shoe-banner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(0, 0, 0, 0.5);
}

.text-content {
    width: 80%;
    font-size: 1.2vw;
}

.text-content h2 {
  font-family: "Bebas Neue", sans-serif;
  font-weight: 400;
  font-style: normal;
    margin-top: 20px;
    font-size: 6em;
    font-weight: 500;
    text-align: center;
    text-shadow: 3px 3px 5px rgb(0, 0, 0);
    color: #918b8b;
    margin-bottom: 20px;
}

.text-content p {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 2vw;
    line-height: 1.6;
    text-shadow: 3px 3px 5px rgb(0, 0, 0);
    color: #ebe6e6;
}

.image-content {
   margin-top: -50px;
    width: 50%;
    background: rgba(255, 255, 255, 0.10); /* Keep it transparent for glassmorphism */
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
}

img{ 
    width: 100%;
    border-radius: 15px;
    object-fit: cover;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 1.35);
}

.container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  color: #FFF;
  padding: 50px;
  background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black overlay for readability */
}

.stat {
    text-shadow: 3px 3px 5px rgb(0, 0, 0);
    color: #bdb3b3;
  font-size: 3em;
  font-weight: bold;
  font-family: "Poppins", sans-serif;
}

.description {
  font-size: 0.8em;
}

.container1{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            min-height: 100vh;
            color: #FFF;
            background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black overlay for readability */
            flex-direction: column;
            padding: 0 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
            margin-bottom: 40px;
        }
        .team-members {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }
        .team-member {
         background: rgba(255, 255, 255, 0.10); /* Keep it transparent for glassmorphism */
         border-radius: 10px;
         padding: 30px;
         box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
         /* border: 1px solid rgba(255, 255, 255, 0.2); Light border for subtle separation */
         backdrop-filter: blur(15px); /* Frosted glass effect */
         -webkit-backdrop-filter: blur(15px);
         max-width: 300px;
         text-align: center;
         transition: transform 0.5s, box-shadow 0.3s;
        }

        .team-member:hover {
          transform: translateY(-15px);
         box-shadow: 0 15px 45px rgba(0, 0, 0, 0.5); /* Stronger shadow on hover */
        }
                    
        .image {
            width: 230px;
            height: 230px;
            border-radius: 8px;
        }
        h3 {
            margin-top: 10px;
            font-size: 1.2em;
            text-align: center;
            font-weight: bold;
        }
        .role {
            font-size: 0.9em;
            text-align: center;
            color: #888;
            margin-top: 8px;
        }


.testimonials {
    text-align: center;
    padding: 60px 20px;
    background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black overlay for readability */
}

.testimonials h1 {
    font-size: 2.8em;
    margin-bottom: 10px;
    color: #FFF; /* White text for the title */
    font-weight: bold;
}

.testimonials p {
    font-size: 1.2em;
    color: #ccc; /* Light gray for description */
    max-width: 700px;
    margin: 0 auto 50px auto;
}

.testimonial-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap; /* Wrap to make responsive */
}

.testimonial-card {
    background: rgba(255, 255, 255, 0.10); /* Keep it transparent for glassmorphism */
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
    /* border: 1px solid rgba(255, 255, 255, 0.2); Light border for subtle separation */
    backdrop-filter: blur(15px); /* Frosted glass effect */
    -webkit-backdrop-filter: blur(15px);
    max-width: 300px;
    text-align: center;
    transition: transform 0.5s, box-shadow 0.3s;
}
.testimonial-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.5); /* Stronger shadow on hover */
}

.testimonial-card img.profile-image {
    width: 85px;
    height: 85px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
    border: 3px solid rgba(255, 255, 255, 0.3); /* Subtle white border */
}

.testimonial-card h3 {
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #f5f5f5; /* Light color for better contrast */
    font-weight: 600;
}

.testimonial-card p {
    font-size: 0.9em;
    color: #e0e0e0; /* Lighter gray for testimonial content */
    margin-bottom: 20px;
}


.testimonial-card .client-name {
    font-weight: bold;
    margin-bottom: 8px;
    color: #ffa500; /* Orange-yellow for client names */
}

.testimonial-card .client-role {
    font-size: 0.85em;
    color: #dcdcdc; /* Light gray for client roles */
}

.footer {

  /* background-color: #050A30; */
  padding: 100px 0; 
  background: rgba(255, 255, 255, 0.10);
  backdrop-filter: blur(15px); 
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
  color: #ccc;
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
  background: linear-gradient(90deg, #4a73e8, #9116ff); /* Gradient matching the background */
  backdrop-filter: blur(14px); /* Glassmorphism blur */
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 40px;
  margin-top: 20px;
  margin-left: 60px;
}

.email-input {
  width: 100%;
  background: linear-gradient(90deg, #4a73e8, #9116ff); /* Gradient matching the background */
  backdrop-filter: blur(14px); /* Glassmorphism blur */
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
  background: linear-gradient(90deg, #4a73e8, #9116ff); /* Gradient matching the background */
  color: #9f9fbe;
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

.frikin
{
    background: rgba(0, 0, 0, 0.5); /* Add a semi-transparent black overlay for readability */

}

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

@media (max-width: 850px) {

  .shoe-banner {
    flex-direction: column;
    text-align: center;
    gap: 30px;
    padding: 20px;
  }

  .shoe-banner .text-content {
    display: grid;
    padding:20px;
    margin-bottom: 60px;
    border: 1px solid #ffffff56;
    border-radius: 10px;
    backdrop-filter: blur(10.5px);
    position: relative;
    box-shadow: inset 2px 1px 6px #ffffff45;
    overflow: hidden;
    z-index: 0;
  }

}
@media (max-width: 650px) {

  .shoe-banner {
    flex-direction: column;
    text-align: center;
    gap: 30px;
    padding: 20px;
  }

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
    text-align: center;
    font-size: 10px;
  }
}

@media (max-width: 550px) {
  .container {
    flex-direction: column;
    align-items: center;
    text-align: center;
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

    </style>
</head>
<body>

    <div id="nav">
        <h1>Step&nbsp;Elegance</h1>
        <div id="right">
          <h4><a href="{{ url('/index') }}">ABOUT US<span></span></a></h4>
          <h4><a href="{{ url('/home') }}">STORE<span></span></a></h4>
          <h4><a href="{{ url('/Contact_us') }}">CONTACT US<span></span></a></h4>
          <h4><a href="{{ url('/Offers') }}">OFFERS<span></span></a></h4>
          <h4><a href="{{url('/admin_login')}}">ADMIN<span></span></a></h4>
        </div>
        <!-- Hamburger -->
        <div id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

    <div class="shoe-banner">
        <div class="text-content">
            <h2>Step <br>into <br>Innovation</h2>
            <p>Discover the future of footwear with cutting-edge designs that bring comfort and style together. Whether you're looking for everyday casuals or high-performance sneakers, we’ve got the perfect fit for every step of your journey.</p>
        </div>
        <div class="image-content">
            <img class="img1" src="assets/img/About4.webp" alt="Innovative Shoe Design">
        </div>
    </div>

    <div class="container">
        <div>
          <div class="stat">&nbsp;55+</div>
          <div class="description">Countries Served</div>
        </div>
        <div>
          <div class="stat">&nbsp;&nbsp;20+</div>
          <div class="description">Years of Experience</div>
        </div>
        <div>
          <div class="stat">&nbsp;&nbsp;50+</div>
          <div class="description">Industry Awards Won</div>
        </div>
        <div>
          <div class="stat">&nbsp;&nbsp;98%</div>
          <div class="description">Customer Satisfaction Rate</div>
        </div>
      </div>

      <div class="testimonials">
        <h1>Meet our team members</h1>
        <p> Each bringing unique skills and a shared commitment to delivering the best for you.</p>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <img class="image" src="assets/img/EVANS.jpg">
                <h3>Chris Evans</h3>
                <p class="role">CEO & Co-Founder</p>
            </div>
            <div class="testimonial-card">
                <img class="image" src="assets/img/CTO.jpg" >
                <h3>Jaxon Voss</h3>
                <p class="role">CTO & Co-Founder</p>
            </div>
            <div class="testimonial-card">
                <img class="image" src="assets/img/productmanager.jpg" >
                <h3>Henry Cavil</h3>
                <p class="role">Product Manager</p>
            </div>
            <div class="testimonial-card">
                <img class="image" src="assets/img/accountant.webp" alt="Kael Orion">
                <h3>Kael Orion</h3>
                <p class="role">Accountant</p>
            </div>
        </div>
    </div>

    <section class="testimonials">
        <h1>What our customers say</h1>
        <p>Our shoes are loved by thousands for their comfort, style, and durability. Here's what they have to say.</p>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <img src="assets/img/About1.webp" alt="Customer 3" class="profile-image">
                <h3>“The most comfortable shoes I’ve ever worn!”</h3>
                <p>I’ve been wearing these shoes every day, and they are just perfect for long hours. Highly recommended for anyone looking for style and comfort.</p>
                <p class="client-name">Spiderman</p>
                <p class="client-role">Fashion Blogger</p>
            </div>
            <div class="testimonial-card">
                <img src="assets/img/About2.webp" alt="Customer 1" class="profile-image">
                <h3>“Stylish and durable, worth every penny”</h3>
                <p>The design is incredible, and they’ve held up amazingly well over time. These are my go-to shoes for any occasion!</p>
                <p class="client-name">Batman</p>
                <p class="client-role">Entrepreneur</p>
            </div>
            <div class="testimonial-card">
                <img src="assets/img/About3.webp" alt="Customer 2" class="profile-image">
                <h3>“Perfect fit and excellent customer service”</h3>
                <p>From placing the order to receiving the shoes, the whole process was smooth. The shoes fit perfectly, and the customer service was outstanding!</p>
                <p class="client-name">Captain America</p>
                <p class="client-role">Fitness Enthusiast</p>
            </div>
        </div>
    </section>
    <!-- <div class="frikin"> -->
     <footer class="footer">
        <div class="footer-container">
          <!-- Contact Info -->
          <div class="footer-section">
            <h3>Contact</h3>
            <p>403 Raykhad Street<br>India, AHM 380001</p>
            <p>Email: <a href="mailto:info@stepelegance.com">info@stepelegance.com</a></p>
            <p>Phone: 783-287-2681</p>
            <a href="mailto:info@stepelegance.com" class="quote-btn">Contact Us</a>
          </div>
          
          <!-- Newsletter Subscription -->
          <div class="footer-section">
            <h3>Be in the Know</h3>
            <p>Subscribe for the latest offers and updates from StepElegance.</p>
            <form class="newsletter-form">
              <div style="margin-bottom: -50px; margin-top: 50px;color: #ccc;">Email&nbsp;*</div>
              <input type="email"  required class="email-input"/>
              <div class="newsletter-options">
                <label class="subscribe-label">
                  <input type="checkbox"/> Yes, subscribe me to your newsletter.
                </label>
                <button type="submit" class="submit-btn">Submit</button>
              </div>
            </form>
          </div>
          
          <!-- Menu Links -->
          <div class="footer-section menu-section">
            <h3>Menu</h3>
            <ul class="footer-menu">
              <li><a href="{{ url('/index') }}">Home</a></li>
              <li><a href="{{ url('/Home') }}">Store</a></li>
              <li><a href="{{ url('/Contact_us') }}">Contact Us</a></li>
              <li><a href="{{ url('/Offers') }}">Offers</a></li>
            </ul>
          </div>
    
          <!-- Social Media Links -->
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
        
      
        <div class="child-footer">
            <ul>
                <li>© Copyright Step Elegance 2024</li>
                <li>PRIVACY POLICY</li>
                <li>TERMS AND CONDITIONS</li>
            </ul>
        </div>
    </div>
    <script>
        const hamburger = document.getElementById("hamburger");
  const navRight = document.getElementById("right");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navRight.classList.toggle("active");
  });
    </script>
</body>
</html>
