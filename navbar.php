<head>
    <link rel="stylesheet" href="assets/styles/main_styles.css">
</head>

<nav class="navbar-mine">
        <div class="navbar-container-mine">
            <a href="/" class="navbar-logo-mine"><img src="assets/images/endevo_logo_big.png" alt=""></a>

            <ul class="navbar-menu-mine" id="navbarMenu">
                <!-- Regular menu items -->
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Let's Talk</a></li>

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
