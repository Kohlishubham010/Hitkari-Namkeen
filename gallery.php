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
                        <img src="img/gallery-banner.png" class="d-block w-100" alt="...">
                    </div>
                    
                </div>
                
            </div>
            <!-- banner 2 -->
            <div id="carouselExampleAutoplaying" class="carousel slide home-banner-2" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/md-gallery-banner.png" class="d-block w-100" alt="...">
                    </div>
                    
                </div>
                
            </div>
           
        </div>
         <!-- end banner -->
<!-- gallery  -->
 <main class="gallery-wrap">
    <header class="gallery-head"><div><p class="eyebrow">Our Gallery</p><h1>Every bite tells<br>a delicious story.</h1></div></header>
    <section class="gallery-grid" aria-label="Image gallery">
      <article class="gallery-card" style="--i:1"><img src="img/category/6.png" alt="Fashion portrait"><div class="gallery-info"><h2>Happy Customers</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:2"><img src="img/category/5.png" alt="Minimal interior"><div class="gallery-info"><h2>Enjoy With Family</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:3"><img src="img/category/4.png" alt="Coffee cup"><div class="gallery-info"><h2>Market</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:4"><img src="img/category/11.png" alt="Mountain landscape"><div class="gallery-info"><h2>Best products</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:5"><img src="img/category/12.png" alt="People outdoors"><div class="gallery-info"><h2>Stories</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:6"><img src="img/category/13.png" alt="Watch product"><div class="gallery-info"><h2>Products</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:7"><img src="img/category/3.png" alt="Creative workspace"><div class="gallery-info"><h2>Makeing</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:8"><img src="img/category/2.png" alt="Portrait photography"><div class="gallery-info"><h2>Packing</h2><p>View collection</p></div></article>
      <article class="gallery-card" style="--i:9"><img src="img/category/1.png" alt="Coastal view"><div class="gallery-info"><h2>Checking</h2><p>View collection</p></div></article>
    </section>
  </main>
<!-- end gallery -->
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
