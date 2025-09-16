<head>
    <link rel="stylesheet" href="assets/styles/main_styles.css">
    <style>
        .nav-anchor {
            position: relative;
            text-decoration: none;
            color: black;
            padding-bottom: 5px;
            transition: color 0.3s;
        }

        .nav-anchor::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: blue;
            transition: width 0.3s ease;
        }

        .nav-anchor:hover::after {
            width: 100%;
        }

        /* Active state */
        .nav-anchor.active::after {
            width: 100%;
        }

        /* Active state for nav links */
.nav-anchor.active::after {
    width: 100%;
}

/* Active state for Let's Talk button */
.btn-pill.active {
    border-bottom: 2px solid blue;
}

    </style>
</head>

<nav class="navbar-mine">
    <div class="navbar-container-mine">
        <a href="/" class="navbar-logo-mine"><img src="assets/images/endevo_logo_big.png" alt=""></a>


        <ul class="navbar-menu-mine" id="navbarMenu">
            <!-- Regular menu items -->
            <?php $current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); ?>
            <li><a href="index.php" class="nav-anchor <?= $current == 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="about.php" class="nav-anchor <?= $current == 'about.php' ? 'active' : '' ?>">About</a></li>
            <li><a href="services.php" class="nav-anchor <?= $current == 'services.php' ? 'active' : '' ?>">Services</a></li>
            <li><a href="portfolio.php" class="nav-anchor <?= $current == 'portfolio.php' ? 'active' : '' ?>">Portfolio</a></li>
            <li><a href="contact.php" class="btn-pill <?= $current == 'contact.php' ? 'active' : '' ?>">Let's Talk</a></li>



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