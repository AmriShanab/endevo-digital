<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Endevo Digital | Software & Web Development</title>
    <meta name="description" content="Endevo Digital is a software and web development company dedicated to building scalable, high-performance digital solutions. We specialize in custom software, responsive web applications, and modern user experiences tailored to meet the unique needs of businesses across various industries.">

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta property="og:title" content="Endevo Digital | Software & Web Development">
    <meta property="og:description" content="Endevo Digital is a software and web development company dedicated to building scalable, high-performance digital solutions. We specialize in custom software, responsive web applications, and modern user experiences tailored to meet the unique needs of businesses across various industries.">
    <meta property="og:image" content="https://endevodigital.com/assets/images/endevo_logo_big.png">
    <meta property="og:url" content="https://endevodigital.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Endevo Digital | Software & Web Development">
    <meta name="twitter:description" content="Endevo Digital is a software and web development company dedicated to building scalable, high-performance digital solutions. We specialize in custom software, responsive web applications, and modern user experiences tailored to meet the unique needs of businesses across various industries.">
    <meta name="twitter:image" content="https://endevodigital.com/assets/images/endevo_logo_big.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/android-chrome-192x192.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/styles/main_styles.css">

    <!-- Structured Data for Google Sitelinks -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://endevodigital.com/",
      "name": "Endevo Digital",
      "sameAs": [
        "https://endevodigital.com/about.php",
        "https://endevodigital.com/services.php",
        "https://endevodigital.com/contact.php"
      ]
    }
    </script>
</head>




<nav class="navbar-mine">
    <div class="navbar-container-mine">
        <a href="/" class="navbar-logo-mine"><img src="assets/images/endevo_logo_big.png" alt=""></a>


        <ul class="navbar-menu-mine" id="navbarMenu">
            <!-- Regular menu items -->
            <?php $current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
            <li><a href="index.php" class="nav-anchor <?= $current == 'index' ? 'active' : '' ?>">Home</a></li>
            <li><a href="about.php" class="nav-anchor <?= $current == 'about' ? 'active' : '' ?>">About</a></li>
            <li><a href="services.php" class="nav-anchor <?= $current == 'services' ? 'active' : '' ?>">Services</a></li>
            <li><a href="portfolio.php" class="nav-anchor <?= $current == 'portfolio' ? 'active' : '' ?>">Portfolio</a></li>
            <li><a href="contact.php" class="btn-pill <?= $current == 'contact' ? 'active' : '' ?>">Let's Talk</a></li>



            <!-- Mobile social links (will be hidden on desktop) -->
            <li class="mobile-social-container">
                <div class="mobile-social-links">
                    <p>Get in touch</p>
                    <a href="mailto:hello@endevodigital.com" class="mobile-email">hello@endevodigital.com</a>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </li>
        </ul>

        <button class="navbar-toggle-mine" id="navbarToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const logo = document.querySelector(".navbar-logo-mine img");
        const mobileLogo = "assets/images/logo_White-removebg-preview.png"; // logo when menu is open
        const desktopLogo = "assets/images/endevo_logo_big.png"; // original logo
        const navbarToggle = document.getElementById("navbarToggle");

        navbarToggle.addEventListener("click", function() {
            // Check if menu is about to open or close
            if (navbarToggle.classList.contains("active")) {
                // Menu is closing, revert to original logo
                logo.src = desktopLogo;
            } else {
                // Menu is opening, change to mobile logo
                logo.src = mobileLogo;
            }
        });
    });
</script>