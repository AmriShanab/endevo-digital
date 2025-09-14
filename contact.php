<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Endevo Digital</title>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/styles/main_styles.css">
  <link rel="stylesheet" href="assets/styles/index.css">
  <link rel="stylesheet" href="assets/styles/contact.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Roboto&display=swap" rel="stylesheet">

  <!-- ✅ AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar-mine">
    <div class="navbar-container-mine">
      <a href="/" class="navbar-logo-mine">Endevo<span>Digital</span></a>

      <ul class="navbar-menu-mine" id="navbarMenu">
        <li><a href="/">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="/services.php">Services</a></li>
        <li><a href="/portfolio.php">Portfolio</a></li>
        <li><a href="/contact.php">Let's Talk</a></li>

        <!-- Mobile social links -->
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

  <!-- Hero Section -->
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6 my-5 contact-hero" data-aos="fade-up" data-aos-delay="100">
        <h1 class="contact-heading">Let's Talk</h1>
        <p class="contact-description">
          We'd love to learn more about<br>
          you and what we can design<br>
          and build together.
        </p>

        <h4>Become a Client</h4>
        <p>hello@endevodigital.com</p>
      </div>
      <div class="col-lg-6 col-md-6 text-center my-5 mx-auto" data-aos="fade-right" data-aos-delay="200">
        <img src="assets/images/wel_image.jpg" alt="Contact Hero Image" class="img-fluid">
      </div>
    </div>
  </div>
  <!-- Hero Section End -->

  <!-- Contact Form Start -->
   <!-- Contact Form Section -->
<div class="container my-5">
  <div class="row align-items-center">
    <!-- Form Column -->
    <div class="col-lg-6 col-md-6 contact-form" data-aos="fade-up" data-aos-delay="150">
      <h2 class="form-heading">Send us a Message</h2>
      <form action="send_mail.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" class="form-control form-control-lg" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control form-control-lg" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control form-control-lg" id="subject" name="subject">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control form-control-lg" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-dark btn-lg w-100">Send Message</button>
      </form>
    </div>

    <!-- Info / Image Column -->
    <div class="col-lg-6 col-md-6 text-center" data-aos="fade-left" data-aos-delay="200">
      <img src="assets/images/contact_form.jpg" alt="Contact Form Illustration" class="img-fluid rounded shadow">
    </div>
  </div>
</div>
<!-- Contact Form Section End -->


  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- ✅ AOS JS -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1200,
      once: true
    });
  </script>

  <!-- Custom Navbar Script -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const toggleBtn = document.getElementById('navbarToggle');
      const menu = document.getElementById('navbarMenu');
      const navbar = document.querySelector('.navbar-mine');

      if (toggleBtn && menu && navbar) {
        const toggleMenu = () => {
          const isActive = menu.classList.toggle('active');
          toggleBtn.classList.toggle('active', isActive);
          navbar.classList.toggle('active-background', isActive);
          document.querySelector('.mobile-social-container').style.display = isActive ? 'block' : 'none';
          document.body.style.overflow = isActive ? 'hidden' : '';
        };

        toggleBtn.addEventListener('click', toggleMenu);

        // Close menu when clicking links (mobile only)
        document.querySelectorAll('.navbar-menu-mine a').forEach(link => {
          link.addEventListener('click', () => {
            if (window.innerWidth <= 768) toggleMenu();
          });
        });
      }

      // Scroll hide/show functionality
      const hideClass = 'navbar-hidden';
      const scrollThreshold = 100;
      const hideDelay = 1000;
      let scrollTimeout;

      window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar-mine');
        if (!navbar) return;

        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll <= 0) {
          navbar.classList.remove(hideClass);
          clearTimeout(scrollTimeout);
          return;
        }

        if (navbar.classList.contains('active-background')) return;

        clearTimeout(scrollTimeout);
        navbar.classList.remove(hideClass);

        scrollTimeout = setTimeout(() => {
          if (currentScroll > scrollThreshold) {
            navbar.classList.add(hideClass);
          }
        }, hideDelay);
      });
    });
  </script>
</body>

</html>
