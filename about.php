<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="assets/styles/main_styles.css">
    <link rel="stylesheet" href="assets/styles/about_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">




    <style>
        /* Reset default margins and padding */
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
        }

        /* Navbar Theme Transition Styles */
        .navbar-mine {
            transition: all 0.5s var(--ease-out);
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Dark theme for hero section */
        .navbar-dark {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .navbar-dark .navbar-logo-mine,
        .navbar-dark .navbar-menu-mine li a {
            color: white;
        }

        .navbar-dark .navbar-toggle-mine span {
            background: white;
        }

        /* Light theme for content sections */
        .navbar-light {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-logo-mine,
        .navbar-light .navbar-menu-mine li a {
            color: var(--color-black);
        }

        .navbar-light .navbar-toggle-mine span {
            background: var(--color-black);
        }

        /* Mobile menu active state */
        .navbar-mine.active-background {
            background: var(--color-black) !important;
        }

        .about-hero {
            background-color: #000;
            width: 100vw;
            height: 130vh;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .container-fluid {
            width: 100%;
            padding: 0 15px;
            margin: 0 auto;
        }

        .row-center {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100%;
            margin: 0 -15px;
        }

        .content-column {
            width: 100%;
            padding: 0 15px;
        }

        @media (min-width: 992px) {
            .content-column {
                width: 83.333333%;
                /* Equivalent to col-lg-10 */
            }
        }

        @media (min-width: 1200px) {
            .content-column {
                width: 66.666667%;
                /* Equivalent to col-xl-8 */
            }
        }

        .about-headline {
            width: 100%;
            padding: 0 15px;
            margin-bottom: 3rem;
        }

        .about-headline h2 {
            color: #fff !important;
        }

        .hero-title {
            font-size: 5rem;
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -0.5px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            text-align: center;
            margin: 5rem 0 2rem 0;
            animation: fadeInUp 1s both;
        }

        .text-gradient {
            background: linear-gradient(90deg, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            display: inline-block;
        }

        .text-gradient::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #00c6ff, #0072ff);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .hero-title:hover .text-gradient::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        /* Hero image container */
        .hero-image-container {
            width: 80%;
            margin: 0 auto;
            transition: all 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);
            will-change: transform;
        }

        .hero-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transform-origin: center top;
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 4rem;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 3.5rem;
            }

            .hero-image-container {
                width: 85%;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-image-container {
                width: 90%;
            }
        }

        @media (max-width: 576px) {
            .about-hero {
                height: auto;
                min-height: 100vh;
                padding: 80px 0;
            }

            .hero-title {
                font-size: 2rem;
                padding: 0 10px;
            }

            .hero-image-container {
                width: 95%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar-mine navbar-dark">
        <div class="navbar-container-mine">
            <a href="/" class="navbar-logo-mine">Endevo<span>Digital</span></a>

            <ul class="navbar-menu-mine" id="navbarMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="/portfolio.php">Portfolio</a></li>
                <li><a href="/contact.php">Let's Talk</a></li>

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

    <section class="about-hero">

        <div class="container-fluid">
            <div class="row-center">
                <div class="content-column">
                    <div class="about-headline text-center">
                        <h1 class="hero-title">Redefining Brands through Innovation and Strategy</h1>
                    </div>
                    <!-- Image that will expand on scroll -->
                    <div class="hero-image-container">
                        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80" alt="Brand Strategy" class="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Who We Are Section -->
    <section class="content-section">

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Content -->
                <div class="col-lg-6 col-md-7">
                    <h2 class="section-title">Who We Are</h2>
                    <p class="section-content">
                        At Endevo, we started our journey in 2020 as a small team of freelancers, mainly offering event management services to businesses and brands. Over time, our passion, creativity, and hands-on experience helped us grow and in 2024, we officially incorporated to expand our services and deliver more value under one roof. Today, Endevo is a creative and solutions driven company offering a wide range of services, including Web Development, Digital Marketing, Branding & Design, and Event Management. We work with startups, growing businesses, and established brands, helping them build their online presence, promote their services, and reach the right audience. What makes us different is our commitment to quality, quick execution, and a personalized approach to every project. We combine creative thinking with practical execution to deliver solutions that are both visually impactful and performance driven.
                    </p>

                    <!-- <div class="highlight-box">
                        <p class="section-content">Our mission is to transform ideas into impactful digital solutions that help businesses thrive in an ever-evolving digital landscape.</p>
                    </div> -->

                    <!-- <ul class="feature-list">
                        <li>Creative problem solvers with a passion for innovation</li>
                        <li>Experts in user experience and interface design</li>
                        <li>Full-stack development capabilities</li>
                        <li>Data-driven digital marketing strategies</li>
                        <li>Commitment to excellence and client success</li>
                    </ul> -->

                    <!-- <div class="stats-container">
                        <div class="stat-item">
                            <div class="stat-number">150+</div>
                            <div class="stat-text">Projects Completed</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-text">Client Satisfaction</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12+</div>
                            <div class="stat-text">Years Experience</div>
                        </div>
                    </div> -->
                </div>

                <!-- Right Column - Image -->
                <div class="col-lg-6 col-md-5">
                    <div class="img-container" data-aos="fade-right" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Our Team">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR MISSION SECTION -->
    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Content -->
                <div class="col-lg-6 col-md-7">
                    <div class="img-container mission-image" data-aos="fade-left" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Our Team">
                    </div>
                </div>

                <!-- Right Column - Image -->
                <div class="col-lg-6 col-md-5">
                    <h2 class="section-title">OUR MISSON</h2>
                    <p class="section-content">
                        Our mission is to deliver exceptional, customized digital solutions that enhance our clients' online presence and business operations. We aim to continually evolve, embrace new technologies, and exceed our clients' expectations through high-quality, reliable services.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- OUR VISION SECTION -->
    <section class="content-section">
        <div class="floating-elements">
            <span class="circle"></span>
            <span class="triangle"></span>
            <span class="triangle"></span>
            <!-- <span class="square"></span> -->
        </div>

        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Content -->
                <div class="col-lg-6 col-md-7">
                    <h2 class="section-title">OUR VISION</h2>
                    <p class="section-content">
                        To be a global leader in digital innovation, empowering businesses to reach their full potential through tailored web, mobile, marketing, and event solutions that drive success.
                    </p>
                </div>

                <!-- Right Column - Image -->
                <div class="col-lg-6 col-md-5">
                    <div class="img-container" data-aos="fade-right" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Our Team">
                    </div>
                </div>
            </div>
        </div>
    </section>


 <section class="values-section">
    <div class="values-container">
        <div class="values-header">
            <h2 class="values-title">Our Core Values</h2>
            <p class="values-subtitle">The principles that guide everything we do at Endevo Digital</p>
        </div>

        <!-- Value 1 -->
        <div class="value-item">
            <div class="value-content">
                <div class="value-number">01</div>
                <h3 class="value-heading">Innovation</h3>
                <p class="value-description">
                    We constantly push boundaries and explore new technologies to deliver forward-thinking solutions.
                </p>
            </div>
            <div class="value-image">
                <div class="value-img-container">
                    <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Innovation">
                </div>
            </div>
        </div>

        <!-- Value 2 -->
        <div class="value-item">
            <div class="value-content">
                <div class="value-number">02</div>
                <h3 class="value-heading">Integrity</h3>
                <p class="value-description">
                    We maintain transparency and honesty in all our dealings, building trust with every interaction.
                </p>
            </div>
            <div class="value-image">
                <div class="value-img-container">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Integrity">
                </div>
            </div>
        </div>

        <!-- Value 3 -->
        <div class="value-item">
            <div class="value-content">
                <div class="value-number">03</div>
                <h3 class="value-heading">Excellence</h3>
                <p class="value-description">
                    We pursue perfection in every project, paying attention to even the smallest details.
                </p>
            </div>
            <div class="value-image">
                <div class="value-img-container">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Excellence">
                </div>
            </div>
        </div>

        <!-- Value 4 -->
        <div class="value-item">
            <div class="value-content">
                <div class="value-number">04</div>
                <h3 class="value-heading">Collaboration</h3>
                <p class="value-description">
                    We believe the best results come from teamwork, both within our company and with our clients.
                </p>
            </div>
            <div class="value-image">
                <div class="value-img-container">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Collaboration">
                </div>
            </div>
        </div>

        <!-- Value 5 -->
        <div class="value-item">
            <div class="value-content">
                <div class="value-number">05</div>
                <h3 class="value-heading">Customer Focus</h3>
                <p class="value-description">
                    We listen carefully to understand our clients' unique needs and deliver personalized solutions.
                </p>
            </div>
            <div class="value-image">
                <div class="value-img-container">
                    <img src="https://images.unsplash.com/photo-1573164574230-db1d5e960238?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Customer Focus">
                </div>
            </div>
        </div>

        <!-- Value 6 - Last Item with Special Styling -->
        <div class="value-item last-item">
            <div class="value-content">
                <div class="value-number">06</div>
                <h3 class="value-heading">Sustainability</h3>
                <p class="value-description">
                    We design solutions that stand the test of time, ensuring long-term value for our clients.
                </p>
            </div>
            <div class="value-image">
                <div class="value-img-container">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Sustainability">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200, // animation duration in ms
            once: true // whether animation should happen only once
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.querySelector('.navbar-mine');
            const heroSection = document.querySelector('.about-hero');
            const heroImage = document.querySelector('.hero-image');
            const heroImageContainer = document.querySelector('.hero-image-container');

            // Set initial image height
            function setImageSize() {
                if (heroImageContainer) {
                    const viewportHeight = window.innerHeight;
                    const textHeight = document.querySelector('.about-headline').offsetHeight;
                    const maxImageHeight = viewportHeight - textHeight - 100;
                    heroImageContainer.style.maxHeight = `${Math.max(maxImageHeight, 300)}px`;
                }
            }

            // Handle scroll effects
            function handleScroll() {
                const scrollY = window.scrollY || window.pageYOffset;
                const heroBottom = heroSection.getBoundingClientRect().bottom;

                // Navbar theme switching
                if (heroBottom <= 0) {
                    navbar.classList.remove('navbar-dark');
                    navbar.classList.add('navbar-light');
                } else {
                    navbar.classList.remove('navbar-light');
                    navbar.classList.add('navbar-dark');
                }

                // Image expansion effect
                if (heroImageContainer) {
                    const scrollProgress = Math.min(scrollY / 300, 1); // Adjust 300 for speed
                    const width = 80 + (20 * scrollProgress); // Goes from 80% to 100%

                    heroImageContainer.style.width = `${width}%`;
                    heroImageContainer.style.opacity = 1 - (scrollProgress * 0.3); // Slight fade
                }

                // Navbar hide/show
                if (scrollY <= 0 || navbar.classList.contains('active-background')) {
                    navbar.classList.remove('navbar-hidden');
                    return;
                }

                // Hide navbar after delay when scrolling down
                clearTimeout(window.scrollTimeout);
                window.scrollTimeout = setTimeout(() => {
                    if (scrollY > 100) {
                        navbar.classList.add('navbar-hidden');
                    }
                }, 1000);
            }

            // Mobile menu toggle
            function initMobileMenu() {
                const toggleBtn = document.getElementById('navbarToggle');
                const menu = document.getElementById('navbarMenu');

                if (!toggleBtn || !menu) return;

                const toggleMenu = () => {
                    const isActive = menu.classList.toggle('active');
                    toggleBtn.classList.toggle('active', isActive);
                    navbar.classList.toggle('active-background', isActive);
                    document.body.style.overflow = isActive ? 'hidden' : '';
                };

                toggleBtn.addEventListener('click', toggleMenu);

                document.querySelectorAll('.navbar-menu-mine a').forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth <= 768) toggleMenu();
                    });
                });
            }

            // Initialize
            setImageSize();
            initMobileMenu();
            window.addEventListener('scroll', handleScroll);
            window.addEventListener('resize', setImageSize);

            // Clean up on resize
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    const menu = document.getElementById('navbarMenu');
                    const toggleBtn = document.getElementById('navbarToggle');
                    if (menu && toggleBtn) {
                        menu.classList.remove('active');
                        toggleBtn.classList.remove('active');
                        navbar.classList.remove('active-background');
                        document.body.style.overflow = '';
                    }
                }
            });
        });
    </script>
</body>

</html>