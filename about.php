<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hitkari Namkeen</title>
        <!-- Favicon -->
        <link rel="icon" href="img/logo.png" type="image/png">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Pacifico&display=swap" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <!--  marque -->
        <div class="marquee-wrapper">
            <div class="marquee">
                <!-- First set -->
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>🔥 Special Offers On Hitkari Namkeen</span>
                </div>
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>🥨 स्वाद जो दिल जीत ले</span>
                </div>
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>📞 Contact Us:</span>
                    <a class="phone" href="tel:+919555000539">
                        +91 9555000539
                    </a>
                </div>
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>🎁 Special Offer Available</span>
                </div>
                <!-- Duplicate set for seamless scrolling -->
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>🔥 Special Offers On Hitkari Namkeen</span>
                </div>
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>🥨 स्वाद जो दिल जीत ले</span>
                </div>
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>📞 Contact Us:</span>
                    <a class="phone" href="tel:+919555000539">
                        +91 9555000539
                    </a>
                </div>
                <div class="marquee-item">
                    <span class="star">✦</span>
                    <span>🎁 Special Offer Available</span>
                </div>
            </div>
        </div>
        <!-- end marque -->
        <div class="reper">
            <!-- navbar -->
            <header class="navbar">
                <!-- LOGO -->
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="Clinic Logo">
                    </a>
                </div>
                <!-- DESKTOP MENU -->
                <nav class="menu">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <!-- SERVICES DROPDOWN -->
                    <div class="dropdown">
                        <a href="#" class="dropbtn">
                            Our Products
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="mixture-namkeen-Manufacturer-in-delhi.php"> Mixture Namkeen</a>
                            <a href="raita-boondi-Manufacturer-in-delhi.php"> Raita Boondi</a>
                            <a href="sav-papdi-Manufacturer-in-delhi.php"> Sav papdi</a>
                            <a href="waffers.php"> Waffers </a>
            <a href="snacks.php"> Snacks </a>
                        </div>
                    </div>
                    <a href="gallery.php">Gallery</a>
                    <a href="contact.php">Contact Us</a>
                </nav>
                <div class="nav-appointment">
                    <a href="contact.php" class="appointment12"> Bulk Enquiry</a>
                </div>
                <!-- MOBILE MENU BUTTON -->
                <button
                    class="menu-btn"
                    id="menuToggle"
                    type="button"
                    aria-label="Open navigation menu"
                    aria-expanded="false"
                >
                    <i class="fa-solid fa-bars"></i>
                </button>
            </header>
            <!-- =========================
         MOBILE MENU
    ========================== -->
            <div class="mobile-menu" id="mobileMenu">
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <!-- MOBILE SERVICES -->
                <div class="mobile-dropdown">
                    <button type="button" class="mobile-dropdown-btn" id="serviceBtn">
                        <span>Our Products</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="mobile-dropdown-content" id="serviceMenu">
                        <a href="mixture-namkeen-Manufacturer-in-delhi.php"> Mixture Namkeen</a>
                        <a href="raita-boondi-Manufacturer-in-delhi.php"> Raita Boondi</a>
                        <a href="sav-papdi-Manufacturer-in-delhi.php"> Sav papdi</a>
                        <a href="waffers.php"> Waffers </a>
            <a href="snacks.php"> Snacks </a>
                    </div>
                </div>
                <a href="gallery.php">Gallery</a>
                <a href="contact.php">Contact Us</a>
                <a href="contact.php" class="appointment-mobile"> Bulk Enquiry</a>
            </div>
            <!-- end navbar -->
            <!-- banner -->
            <div id="carouselExampleAutoplaying" class="carousel slide home-banner-1" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/about-banner.png" class="d-block w-100" alt="...">
                    </div>
                    
                </div>
                
            </div>
            <!-- banner 2 -->
            <div id="carouselExampleAutoplaying" class="carousel slide home-banner-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/md-about-banner.png" class="d-block w-100" alt="...">
                    </div>
                    
                </div>
                
            </div>
           
        </div>
         <!-- end banner -->
        <!-- about us -->
         <section id="about-section">
            <div>
                <div class="conatiner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right" data-aos-duration="1500">
                            <div class="about-image">
                                <img src="img/ab-image.png" alt="about-image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12"data-aos="fade-left" data-aos-duration="1500">
                            <div class="about-info">
                                <h5>Our Story</h5>
                                <h2>About Hitkari Namkeen</h2>
                                <p>Hitkari Namkeen was born from a simple belief — that good food brings people together. With a passion for traditional Indian snacks and a commitment to uncompromising quality, we started our journey to deliver authentic, tasty and healthy namkeen to every home.</p>
                                <p>Today, we continue to follow our legacy of taste, trust and tradition, serving happiness in every bite.</p>
                               <a href="contact.php" class="appointment-mobile1">Explore Our Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- end about us -->
<!-- why choose us -->
 <section class="why-choose">
    <div class="container">

        <div class="top-title">
            <span>— WHAT MAKES US DIFFERENT —</span>
            <h2>Why Choose Hitkari Namkeen?</h2>
        </div>

        <div class="features">

            <div class="feature-box">
                <div class="icon">🌿</div>
                <h4>Pure<br>Ingredients</h4>
                <p>Made from the finest<br>and natural ingredients.</p>
            </div>

            <div class="feature-box">
                <div class="icon">🛡️</div>
                <h4>Premium<br>Quality</h4>
                <p>We never compromise<br>on quality.</p>
            </div>

            <div class="feature-box">
                <div class="icon">❤️</div>
                <h4>Fresh Taste</h4>
                <p>Crispy, tasty and<br>full of flavor.</p>
            </div>

            <div class="feature-box">
                <div class="icon">✦</div>
                <h4>Hygienic<br>Packaging</h4>
                <p>Packed with care<br>for your safety.</p>
            </div>

            <div class="feature-box">
                <div class="icon">🥣</div>
                <h4>Traditional<br>Taste</h4>
                <p>Authentic recipes,<br>real Indian flavors.</p>
            </div>

            <div class="feature-box">
                <div class="icon">👥</div>
                <h4>Customer<br>Trust</h4>
                <p>Your trust keeps<br>us growing.</p>
            </div>

        </div>

    </div>
</section>
 <!-- end why choose us -->
  <!-- offer -->
  <section class="taste-banner-section">

    <div class="taste-banner-content">

        <span class="taste-small-heading">
            — OUR PROMISE —
        </span>

        <h2 class="taste-main-heading">
            "Quality You Can Taste"
        </h2>

        <div class="taste-feature-list">
            <span>❧ Fresh</span>
            <span>❧ Crispy</span>
            <span>❧ Hygienic</span>
            <span>❧ Delicious</span>
        </div>

    </div>


    <div class="taste-product-image">
        <img src="img/offer-1.png" alt="Namkeen Product">
    </div>

</section>
   <!-- end offer -->
    <!-- category -->
     <section class="product-section">


<div class="small-title">
— OUR PRODUCTS —
</div>


<h2 class="main-title">
Our Delicious Range
</h2>



<div class="product-wrapper">


<div class="product-card">
<img src="img/banner-1.png" class="product-img">
<p class="product-name">Bhujia</p>
</div>



<div class="product-card">
<img src="img/banner-2.png" class="product-img">
<p class="product-name">Mixture</p>
</div>



<div class="product-card">
<img src="img/banner-3.png" class="product-img">
<p class="product-name">Sev</p>
</div>



<div class="product-card">
<img src="img/banner-4.png" class="product-img">
<p class="product-name">Peanuts</p>
</div>



<div class="product-btn">
<a href="mixture-namkeen-Manufacturer-in-delhi.php">
Explore All Products →
</a>
</div>


</div>


</section>
     <!-- end category -->
      <!-- faq -->
       <section class="why-section">

<div class="why-container">


<!-- LEFT CONTENT -->

<div class="why-content">

<span class="sub-heading">
WHY CHOOSE HITKARI?
</span>

<h2>
The Right Choice for<br>
Authentic Namkeen
</h2>


<ul>

<li>
<span>✓</span>
Premium quality ingredients
</li>

<li>
<span>✓</span>
Freshly prepared
</li>

<li>
<span>✓</span>
Consistent taste
</li>

<li>
<span>✓</span>
Hygienic packaging
</li>

<li>
<span>✓</span>
Bulk & wholesale orders
</li>

</ul>

</div>



<!-- PRODUCT IMAGE -->

<div class="why-image">

<img src="img/ab-ft1.png" alt="Namkeen">

</div>



<!-- FAQ -->

<div class="faq-section">


<span class="sub-heading">
FREQUENTLY ASKED QUESTIONS
</span>


<h2>
Quick Answers
</h2>



<div class="faq">

<details>
<summary>
What types of namkeen do you offer?
<span>+</span>
</summary>

<p>
We offer a wide range of authentic Indian namkeen varieties.
</p>

</details>



<details>
<summary>
Do you accept bulk orders?
<span>+</span>
</summary>

<p>
Yes, we provide bulk and wholesale order solutions.
</p>

</details>




<details>
<summary>
How can I place an order?
<span>+</span>
</summary>

<p>
You can contact us directly for placing orders.
</p>

</details>




<details>
<summary>
Do you provide fresh namkeen?
<span>+</span>
</summary>

<p>
Yes, every product is prepared fresh with quality ingredients.
</p>

</details>



<details>
<summary>
Do you provide delivery?
<span>+</span>
</summary>

<p>
Yes, delivery is available across locations.
</p>

</details>


</div>


</div>


</div>

</section>
       <!-- end faq -->
        <!-- contect -->
         <section class="cta-banner">

    <div class="cta-content">

        <h2>
            Looking for Quality Namkeen?
        </h2>

        <p>
            From everyday snacks to bulk orders, we're ready to serve you.
        </p>

    </div>


    <div class="cta-buttons">

        <a href="tel:+919555000539" class="call-btn">
            <span>☎</span> Call Now
        </a>


        <a href="contact.php" class="contact-btn">
            ✉ Contact Us
        </a>

    </div>


</section>
         <!-- end contact  -->
        <!-- footer -->
        <?php include "footer.php"; ?>
        <!-- end-footer -->
        <!-- js link -->
        <a href="https://wa.me/919555000539?text=Hello%20I%20want%20to%20know%20more" class="whatsapp-btn" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <!-- =========================
         BOOTSTRAP JS
    ========================== -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
      AOS.init();
        </script>
        <!-- navbar -->
        <script>
      const menuToggle = document.getElementById("menuToggle");
      const mobileMenu = document.getElementById("mobileMenu");

      const serviceBtn = document.getElementById("serviceBtn");
      const serviceMenu = document.getElementById("serviceMenu");

      /* MOBILE MENU */

      menuToggle.addEventListener("click", function () {
        const isOpen = mobileMenu.classList.toggle("active");

        menuToggle.setAttribute("aria-expanded", isOpen);

        menuToggle.setAttribute(
          "aria-label",
          isOpen ? "Close navigation menu" : "Open navigation menu",
        );

        const icon = menuToggle.querySelector("i");

        icon.classList.toggle("fa-bars", !isOpen);

        icon.classList.toggle("fa-xmark", isOpen);
      });

      /* MOBILE SERVICES DROPDOWN */

      serviceBtn.addEventListener("click", function () {
        serviceMenu.classList.toggle("active");

        const icon = serviceBtn.querySelector("i");

        const isOpen = serviceMenu.classList.contains("active");

        icon.classList.toggle("fa-chevron-down", !isOpen);

        icon.classList.toggle("fa-chevron-up", isOpen);
      });

      /* CLOSE MOBILE MENU AFTER CLICKING LINK */

      mobileMenu.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function () {
          mobileMenu.classList.remove("active");

          menuToggle.setAttribute("aria-expanded", "false");

          menuToggle.setAttribute("aria-label", "Open navigation menu");

          const icon = menuToggle.querySelector("i");

          icon.classList.remove("fa-xmark");

          icon.classList.add("fa-bars");
        });
      });

      /* RESET MOBILE MENU ON DESKTOP */

      window.addEventListener("resize", function () {
        if (window.innerWidth > 991) {
          mobileMenu.classList.remove("active");

          menuToggle.setAttribute("aria-expanded", "false");

          menuToggle.setAttribute("aria-label", "Open navigation menu");

          const icon = menuToggle.querySelector("i");

          icon.classList.remove("fa-xmark");

          icon.classList.add("fa-bars");
        }
      });
        </script>
        <!-- footer -->
        <script>
      const luxuryFooterYear = document.getElementById("luxury-footer-year");

      if (luxuryFooterYear) {
        luxuryFooterYear.textContent = new Date().getFullYear();
      }
        </script>
        <!-- end footer -->
    </body>
</html>
