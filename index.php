<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevo Digital</title> <!-- Always include a title -->
    <link rel="stylesheet" href="assets/styles/main_styles.css">
    <link rel="stylesheet" href="assets/styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar-mine">
        <div class="navbar-container-mine">
            <a href="/" class="navbar-logo-mine">Endevo<span>Digital</span></a>

            <ul class="navbar-menu-mine" id="navbarMenu">
                <!-- Regular menu items -->
                <li><a href="/">Home</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/services.php">Services</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="/contact.php">Let's Talk</a></li>

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
    <div class="title-container">
        <h1 class="main-title-index">We bring your boldest</h1>
        <h2 class="sub-title-index">ideas to life</h2>
    </div>
    <section id="imageWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="row gx-lg-5 gx-md-4 gx-sm-3 gy-4">
                    <!-- First Image Column -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="image-wrapper hover-zoom">
                            <img src="assets/images/sample_.jpg" alt="Sample image" class="img-fluid">
                        </div>
                    </div>

                    <!-- Second Image Column - offset slightly down -->
                    <div class="col-lg-6 col-md-6 col-12 offset-image">
                        <div class="image-wrapper hover-zoom">
                            <img src="assets/images/sample_1.jpg" alt="Sample image 2" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="welcome-section">
        <div class="floating-elements">
            <div class="floating-element element-1"></div>
            <div class="floating-element element-2"></div>
            <div class="floating-element element-3"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- Text Content Column -->
                <div class="col-lg-7 col-md-12">
                    <div class="welcome-container">
                        <h2 class="animate__fadeInUp">At Endevo Digital</h2>
                        <p class="animate__fadeInUp animate__delay-1s">We specialize in building scalable software and next generation web solutions that empower businesses to grow in the digital era. By blending advanced technologies with user centric design, we create platforms that are secure, efficient, and future ready. From custom software development to enterprise web applications, our expertise spans the full digital lifecycle strategy, design, development, and deployment. With a strong focus on innovation, we help organizations transform challenges into opportunities through intelligent technology solutions.</p>
                    </div>
                </div>

                <!-- Video Column -->
                <div class="col-lg-5 col-md-12">
                    <div class="video-container">
                        <video autoplay loop muted playsinline>
                            <source src="assets/videos/welcome_video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="geometric-shapes">
        <!-- Large half sphere background -->
        <div class="half-sphere"></div>

        <!-- Purple floating sphere -->
        <div class="purple-sphere"></div>

        <!-- Orange orbital sphere -->
        <div class="orange-orbit">
            <div class="orange-sphere"></div>
        </div>

        <!-- Blue figure-8 sphere -->
        <!-- <div class="blue-sphere"></div> -->

        <!-- Green floating sphere -->
        <!-- <div class="green-sphere"></div> -->

        <!-- Pink floating particle -->
        <div class="pink-particle"></div>

        <!-- Yellow floating particle -->
        <div class="yellow-particle"></div>
    </div>



    <section class="our-section">
        <!-- <div class="floating-elements"> -->
        <!-- <div class="floating-element element-1"></div>
            <div class="floating-element element-2"></div>
            <div class="floating-element element-3"></div> -->
        <!-- </div> -->
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Text Content Column -->
                <div class="col-lg-7 col-md-12">
                    <div class="welcome-container">
                        <h2 class="animate__fadeInUp">OUR SERVICES</h2>
                        <p class="animate__fadeInUp animate__delay-1s">We specialize in building scalable software and next generation web solutions...</p>
                    </div>
                </div>

                <!-- Services Column -->
                <div class="col-lg-5 col-md-12">
                    <div class="services-accordion">
                        <div class="service-item">
                            <button class="service-btn">
                                <span>Web Development</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Custom websites and web applications built with modern frameworks like React, Vue, and Node.js for optimal performance.</p>
                            </div>

                            <div class="service-content">
                                <a href="#"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>


                        <div class="service-item">
                            <button class="service-btn">
                                <span>Digital Marketing</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Custom websites and web applications built with modern frameworks like React, Vue, and Node.js for optimal performance.</p>
                            </div>
                            <div class="service-content">
                                <a href="#"><button class="btn button-learn">Learn More</button></a>
                            </div>

                        </div>

                        <div class="service-item">
                            <button class="service-btn">
                                <span>UI/UX Design</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Custom websites and web applications built with modern frameworks like React, Vue, and Node.js for optimal performance.</p>
                            </div>

                            <div class="service-content">
                                <a href="#"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <button class="service-btn">
                                <span>SEO</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Custom websites and web applications built with modern frameworks like React, Vue, and Node.js for optimal performance.</p>
                            </div>

                            <div class="service-content">
                                <a href="#"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <!-- <div class="service-item">
                            <button class="service-btn">
                                <span>APP Development</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Custom websites and web applications built with modern frameworks like React, Vue, and Node.js for optimal performance.</p>
                            </div>
                        </div> -->

                        <div class="service-item">
                            <button class="service-btn">
                                <span>Software Development</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Custom websites and web applications built with modern frameworks like React, Vue, and Node.js for optimal performance.</p>
                            </div>

                            <div class="service-content">
                                <a href="#"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <button class="service-btn">
                                <span>API Development & Intergration</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Custom websites and web applications built with modern frameworks like React, Vue, and Node.js for optimal performance.</p>
                            </div>

                            <div class="service-content">
                                <a href="#"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <!-- Add other services following the same pattern -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <div class="welcome-container-right">
        <h2 class="animate__fadeInUp">TRUSTED BY...</h2>
        <p class="animate__fadeInUp animate__delay-1s">We specialize in building scalable software and next generation web solutions...</p>
    </div> -->

    <div class="container-fluid trusted-brands-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h3 class="trusted-title">Trusted By Leading Brands</h3>
                <div class="trusted-brands">
                    <!-- Brand Logo 1 -->
                    <div class="brand-logo">
                        <img src="assets/images/BIMT-NEW-LOGO.png" alt="Brand 1" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 2 -->
                    <div class="brand-logo">
                        <img src="assets/images/asma muftha.png" alt="Brand 2" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 3 -->
                    <div class="brand-logo">
                        <img src="assets/images/Carewell.png" alt="Brand 3" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 4 -->
                    <div class="brand-logo">
                        <img src="assets/images/cmi.png" alt="Brand 4" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 5 -->
                    <div class="brand-logo">
                        <img src="assets/images/global ceo forum.jpg" alt="Brand 5" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="trusted-brands">
                    <!-- Brand Logo 1 -->
                    <div class="brand-logo">
                        <img src="assets/images/IFA.png" alt="Brand 1" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 2 -->
                    <div class="brand-logo">
                        <img src="assets/images/ihl.png" alt="Brand 2" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 3 -->
                    <div class="brand-logo">
                        <img src="assets/images/york_uni.jpg" alt="Brand 3" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 4 -->
                    <div class="brand-logo">
                        <img src="assets/images/Rte_logo.jpg" alt="Brand 4" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <!-- Brand Logo 5 -->
                    <div class="brand-logo">
                        <img src="assets/images/The Next.jpg" alt="Brand 5" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-center">
        <div class="col-12">
            <div class="trusted-brands">
               
                <div class="brand-logo">
                    <img src="assets/images/york_uni.jpg" alt="Brand 1" class="img-fluid">
                    <div class="logo-overlay"></div>
                </div>
            
            </div>
        </div>
    </div> -->
    </div>


    <!-- Our Core Values -->
    <section>
        <div class="container-fluid">
            <div class="row row-bcgrnd">
                <h3 class="trusted-title">Our Value</h3>
                <div class="row gx-lg-5 gx-md-4 gx-sm-3 gy-4">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="image-wrapper-ocu hover-zoom-ocu">
                            <img src="assets/images/Untitled design.png" alt="Sample image" class="img-fluid">
                        </div>

                    </div>

                    <!-- Second Image Column - offset slightly down -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="welcome-container-right">
                            <h2 class="animate__fadeInUp">Fearless Curiosity</h2>
                            <p class="animate__fadeInUp animate__delay-1s">We specialize in building scalable software and next generation web solutions...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row row-bcgrnd">
                <div class="row gx-lg-5 gx-md-4 gx-sm-3 gy-4">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="welcome-container-left">
                            <h2 class="animate__fadeInUp">Transperant Communication</h2>
                            <p class="animate__fadeInUp animate__delay-1s">No filters, no fluff. Just honest conversations that move ideas forward and teams closer.</p>
                        </div>


                    </div>

                    <!-- Second Image Column - offset slightly down -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="image-wrapper-ocu hover-zoom-ocu image-wrapper-mt-top">
                            <img src="assets/images/comments.png" alt="Sample image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="technical-expertise-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Text Content Column -->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="technical-expertise-container">
                        <h2 class="animate__fadeInUp">Technical Expertise</h2>
                        <p class="animate__fadeInUp animate__delay-1s">No filters, no fluff. Just honest conversations that move ideas forward and teams closer.</p>
                    </div>
                </div>

                <!-- Technology Logos Column -->
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="tech-logos-container">
                        <div class="tech-logos-grid">
                            <!-- Row 1 -->
                            <div class="tech-logo">
                                <img src="assets/images/html_logo.png" alt="HTML5">
                                <span>HTML5</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/css.png" alt="CSS3">
                                <span>CSS3</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/js.png" alt="JavaScript">
                                <span>JavaScript</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/react.jpg" alt="React">
                                <span>React</span>
                            </div>

                            <!-- Row 2 -->
                            <div class="tech-logo">
                                <img src="assets/images/tech-logos/react.svg" alt="React">
                                <span>React</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/tech-logos/nodejs.svg" alt="Node.js">
                                <span>Node.js</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/tech-logos/vue.svg" alt="Vue">
                                <span>Vue</span>
                            </div>

                            <!-- Row 3 -->
                            <div class="tech-logo">
                                <img src="assets/images/tech-logos/python.svg" alt="Python">
                                <span>Python</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/tech-logos/django.svg" alt="Django">
                                <span>Django</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/tech-logos/git.svg" alt="Git">
                                <span>Git</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <!-- Floating Elements -->
        <!-- <div class="footer-floating-elements">
        <div class="footer-float-element element-1"></div>
        <div class="footer-float-element element-2"></div>
        <div class="footer-float-element element-3"></div>
    </div> -->

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-5 col-md-12">
                    <div class="footer-contact">
                        <h2 class="footer-lets-talk">LET'S TALK</h2>
                        <div class="contact-info">
                            <p class="contact-email">hello@endevodigital.com</p>
                            <p class="contact-phone">+1 (123) 456-7890</p>
                        </div>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-dribbble"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Right Column (col-lg-7) -->
                <div class="col-lg-7 col-md-12">
                    <div class="footer-right-content">
                        <!-- Navigation Links -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/portfolio">Portfolio</a></li>
                                <!-- <li><a href="/careers">Careers</a></li> -->
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>

                        
                         <div class="footer-badges">
                            
                            <div class="badge-item">
                                <script type="text/javascript" src="https://www.designrush.com/topbest/js/widgets/agency-reviews.js"></script>
                                <div data-designrush-widget data-agency-id="99274" data-style="dark" aria-label="DesignRush agency reviews section"></div>
                            </div>


                            <div class="badge-item">
                                <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="689e403d944373452ddd6e37" data-style-height="40px" data-style-width="100%" data-token="c322e6d0-8ab1-4ed5-a8a8-47571f14e7f3">
                                    <a href="https://www.trustpilot.com/review/endevodigital.com" target="_blank" rel="noopener">Trustpilot</a>
                                </div>
                            </div>

                            
                            <div class="badge-item clutch-badge">
                                <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js"></script>
                                <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="2" data-height="45" data-nofollow="false" data-expandifr="true" data-scale="100" data-clutchcompany-id="2551338"></div>
                            </div>

                            
                            <div class="badge-item placeholder-badge">
                                
                            </div>
                        </div> 

                        <!-- Copyright and Legal -->
                        <div class="footer-legal">
                            <p class="copyright">&copy; 2025 Endevo Digital.</p>
                            <div class="legal-links">
                                <a href="/privacy">Privacy Policy</a>
                                <a href="/terms">Terms of Service</a>
                                <a href="/cookies">Cookie Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>








    <!-- Add your JavaScript files here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/scripts/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Navbar Toggle Functionality
            const initNavbar = () => {
                const toggleBtn = document.getElementById('navbarToggle');
                const menu = document.getElementById('navbarMenu');
                const navbar = document.querySelector('.navbar-mine');

                if (!toggleBtn || !menu || !navbar) return;

                const toggleMenu = () => {
                    const isActive = menu.classList.toggle('active');
                    toggleBtn.classList.toggle('active', isActive);
                    navbar.classList.toggle('active-background', isActive);
                    document.querySelector('.mobile-social-container').style.display = isActive ? 'block' : 'none';
                    document.body.style.overflow = isActive ? 'hidden' : '';
                };
                toggleBtn.addEventListener('click', toggleMenu);

                // Close menu when clicking on links (mobile only)
                document.querySelectorAll('.navbar-menu-mine a').forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth <= 768) {
                            toggleMenu();
                        }
                    });
                });
            };

            // Accordion Functionality
            const initAccordion = () => {
                document.querySelectorAll('.service-btn').forEach(button => {
                    button.addEventListener('click', () => {
                        const serviceItem = button.closest('.service-item');
                        if (!serviceItem) return;

                        const isActive = serviceItem.classList.toggle('active');
                        const icon = button.querySelector('.toggle-icon');

                        // Toggle icon
                        if (icon) {
                            icon.textContent = isActive ? '−' : '+';
                        }

                        // Close other items if this one is opening
                        if (isActive) {
                            document.querySelectorAll('.service-item').forEach(item => {
                                if (item !== serviceItem && item.classList.contains('active')) {
                                    item.classList.remove('active');
                                    const otherIcon = item.querySelector('.toggle-icon');
                                    if (otherIcon) otherIcon.textContent = '+';
                                }
                            });
                        }
                    });
                });
            };

            // Dropdown Links Functionality
            const initDropdowns = () => {
                document.querySelectorAll('.dropdown-link').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const isOpen = this.classList.toggle('open');
                        const icon = this.querySelector('.toggle-icon');

                        if (icon) {
                            icon.textContent = isOpen ? '−' : '+';
                        }
                    });
                });
            };

            // Window Resize Handler
            const handleResize = () => {
                if (window.innerWidth > 768) {
                    const menu = document.getElementById('navbarMenu');
                    const toggleBtn = document.getElementById('navbarToggle');
                    const navbar = document.querySelector('.navbar-mine');

                    if (menu && toggleBtn && navbar) {
                        menu.classList.remove('active');
                        toggleBtn.classList.remove('active');
                        navbar.classList.remove('active-background');
                        document.body.style.overflow = '';
                    }
                }
            };

            // Initialize all components
            initNavbar();
            initAccordion();
            initDropdowns();

            // Add resize event listener
            window.addEventListener('resize', handleResize);
        });
    </script>

</body>

</html>