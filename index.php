<?php include 'navbar.php'; ?>
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
                            <img src="assets/images/wel_image.jpg" alt="Sample image" class="img-fluid">
                        </div>
                    </div>

                    <!-- Second Image Column - offset slightly down -->
                    <div class="col-lg-6 col-md-6 col-12 offset-image">
                        <div class="image-wrapper hover-zoom">
                            <img src="assets/images/img2_home.jpg" alt="Sample image 2" class="img-fluid">
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

                        <!-- Software Development -->
                        <div class="service-item">
                            <button class="service-btn">
                                <span>Software Development</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Building custom software solutions tailored to meet specific business needs, from desktop apps to cloud platforms.</p>
                            </div>
                            <div class="service-content">
                                <a href="services.php"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <!-- Web Development -->
                        <div class="service-item">
                            <button class="service-btn">
                                <span>Web Development</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Creating responsive and user-friendly websites using modern technologies for businesses and individuals.</p>
                            </div>
                            <div class="service-content">
                                <a href="services.php"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <!-- API Development & Integration -->
                        <div class="service-item">
                            <button class="service-btn">
                                <span>API Development & Integration</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Creating and integrating APIs to ensure seamless communication between software systems and third-party services.</p>
                            </div>
                            <div class="service-content">
                                <a href="services.php"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <!-- Digital Marketing -->
                        <div class="service-item">
                            <button class="service-btn">
                                <span>Digital Marketing</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Promoting brands online through strategies like social media, email marketing, and paid ads to boost visibility and sales.</p>
                            </div>
                            <div class="service-content">
                                <a href="services.php"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <!-- UI/UX Design -->
                        <div class="service-item">
                            <button class="service-btn">
                                <span>UI/UX Design</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Designing intuitive and engaging interfaces that enhance user experience and usability across digital platforms.</p>
                            </div>
                            <div class="service-content">
                                <a href="services.php"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

                        <!-- SEO -->
                        <div class="service-item">
                            <button class="service-btn">
                                <span>SEO (Search Engine Optimization)</span>
                                <span class="toggle-icon">+</span>
                            </button>
                            <div class="service-content">
                                <p>Improving website visibility on search engines to drive organic traffic and increase rankings.</p>
                            </div>
                            <div class="service-content">
                                <a href="services.php"><button class="btn button-learn">Learn More</button></a>
                            </div>
                        </div>

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
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="trusted-brands">

                    <div class="brand-logo">
                        <img src="assets/images/fujitec.jpg" alt="Brand 1" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <div class="brand-logo">
                        <img src="assets/images/bradix.jpg" alt="Brand 1" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>


                    <div class="brand-logo">
                        <img src="assets/images/mas.jpg" alt="Brand 1" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <div class="brand-logo">
                        <img src="assets/images/hirdarmani.jpg" alt="Brand 1" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                    <div class="brand-logo">
                        <img src="assets/images/cargilss.jpg" alt="Brand 1" class="img-fluid">
                        <div class="logo-overlay"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Our Core Values -->
    <!-- Header Section -->
    <header class="core-values-header">
        <h1 class="core-values-title">At Endevo, We Cultivate</h1>
        <p class="core-values-subtitle">The Core Principles that guide our work and relationships</p>
    </header>

    <!-- Core Values Sections -->
    <div class="container">
        <!-- Decorative elements -->
        <div class="decoration-circle circle-1"></div>
        <div class="decoration-circle circle-2"></div>

        <!-- First Value -->
        <section class="value-section">
            <div class="value-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="value-image-wrapper">
                            <img src="assets/images/Untitled design.png" alt="Team collaboration" class="value-image-zoom img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="value-content-right">
                            <h2 class="value-title animate__fadeInUp">Fearless Curiosity</h2>
                            <p class="value-description animate__fadeInUp animate__delay-1s">We specialize in building scalable software and next generation web solutions. Our culture encourages asking tough questions and exploring unconventional solutions.</p>
                            <a href="#" class="value-cta animate__fadeInUp animate__delay-2s">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Value -->
        <section class="value-section">
            <div class="value-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                        <div class="value-content-left">
                            <h2 class="value-title animate__fadeInUp">Transparent Communication</h2>
                            <p class="value-description animate__fadeInUp animate__delay-1s">No filters, no fluff. Just honest conversations that move ideas forward and teams closer. We believe transparency builds trust and enables better collaboration.</p>
                            <a href="#" class="value-cta animate__fadeInUp animate__delay-2s">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                        <div class="value-image-wrapper">
                            <img src="assets/images/comments.png" alt="Team communication" class="value-image-zoom img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Third Value -->
        <section class="value-section">
            <div class="value-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="value-image-wrapper">
                            <img src="assets/images/Peer-Led.png" alt="Peer learning" class="value-image-zoom img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="value-content-right">
                            <h2 class="value-title animate__fadeInUp">Peer-Led Growth</h2>
                            <p class="value-description animate__fadeInUp animate__delay-1s">We grow by teaching and learning from each other. Every interaction is a chance to level up. Our culture promotes mentorship and shared knowledge.</p>
                            <a href="#" class="value-cta animate__fadeInUp animate__delay-2s">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 4th Core Value -->
        <section class="value-section">
            <div class="value-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                        <div class="value-content-left">
                            <h2 class="value-title animate__fadeInUp">Tech + Heart</h2>
                            <p class="value-description animate__fadeInUp animate__delay-1s">We blend cutting-edge solutions with human-first thinking. Because real impact happens at that intersection.</p>
                            <a href="#" class="value-cta animate__fadeInUp animate__delay-2s">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                        <div class="value-image-wrapper">
                            <img src="assets/images/Tech_heart.png" alt="Team communication" class="value-image-zoom img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5th Core Value -->
        <section class="value-section">
            <div class="value-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="value-image-wrapper">
                            <img src="assets/images/Purpose-Driven.png" alt="Peer learning" class="value-image-zoom img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="value-content-right">
                            <h2 class="value-title animate__fadeInUp">Purpose Driven Action</h2>
                            <p class="value-description animate__fadeInUp animate__delay-1s">Beyond profits, we focus on progress through ethical practices, community work, and digital responsibility.</p>
                            <a href="#" class="value-cta animate__fadeInUp animate__delay-2s">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 6th Core Value -->
        <section class="value-section">
            <div class="value-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 order-lg-1 order-md-1 order-2">
                        <div class="value-content-left">
                            <h2 class="value-title animate__fadeInUp">Celebration Culture</h2>
                            <p class="value-description animate__fadeInUp animate__delay-1s">From big wins to tiny breakthroughs, we make space to pause, smile, and celebrate our grind.</p>
                            <a href="#" class="value-cta animate__fadeInUp animate__delay-2s">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-1">
                        <div class="value-image-wrapper">
                            <img src="assets/images/Celebration.png" alt="Team communication" class="value-image-zoom img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <section class="technical-expertise-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Text Content Column -->
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="technical-expertise-container">
                        <h2 class="animate__fadeInUp">Technical Expertise</h2>
                        <p class="animate__fadeInUp animate__delay-1s">We combine cutting-edge technologies with creative problem-solving to deliver exceptional digital experiences. Our team stays ahead of industry trends to implement the most effective solutions for your business needs.</p>
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
                                <img src="assets/images/react.png" alt="React">
                                <span>React</span>
                            </div>

                            <!-- Row 2 -->
                            <div class="tech-logo">
                                <img src="assets/images/flutter.png" alt="React">
                                <span>Flutter</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/node.png" alt="Node.js">
                                <span>Node.js</span>
                            </div>
                            <!-- <div class="tech-logo">
                                <img src="assets/images/canva.png" alt="Vue">
                                <span>Canva</span>
                            </div> -->
                            <div class="tech-logo">
                                <img src="assets/images/figma.png" alt="Git">
                                <span>Figma</span>
                            </div>

                            <!-- Row 3 -->
                            <div class="tech-logo">
                                <img src="assets/images/python.png" alt="Python">
                                <span>Python</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/django.png" alt="Django">
                                <span>Django</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/aws.png" alt="Git">
                                <span>AWS</span>
                            </div>

                            <div class="tech-logo">
                                <img src="assets/images/github.png" alt="Git">
                                <span>GitHub</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/wordpress.png" alt="Git">
                                <span>Wordpress</span>
                            </div>

                            <!-- Row 4 -->
                             <!-- <div class="tech-logo">
                                <img src="assets/images/php.png" alt="PHP">
                                <span>PHP</span>
                            </div> -->
                            <div class="tech-logo">
                                <img src="assets/images/laravel.png" alt="Laravel">
                                <span>Laravel</span>
                            </div>
                            <div class="tech-logo">
                                <img src="assets/images/framer.png" alt="Laravel">
                                <span>Framer</span>
                            </div>
                             <div class="tech-logo">
                                <img src="assets/images/mysql.png" alt="Laravel">
                                <span>MYSQL</span>
                            </div>
                               <div class="tech-logo">
                                <img src="assets/images/mongo.png" alt="Laravel">
                                <span>MongoDB</span>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
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

            // Scroll hide/show functionality
            const initScrollBehavior = () => {
                const navbar = document.querySelector('.navbar-mine');
                if (!navbar) return;

                let lastScroll = 0;
                let scrollTimeout;
                const hideClass = 'navbar-hidden';
                const scrollThreshold = 100; // How far to scroll before considering hide
                const hideDelay = 1000; // 1 second after scrolling stops to hide navbar

                window.addEventListener('scroll', () => {
                    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                    // Always show navbar at top of page
                    if (currentScroll <= 0) {
                        navbar.classList.remove(hideClass);
                        clearTimeout(scrollTimeout);
                        return;
                    }

                    // Don't hide if mobile menu is open
                    if (navbar.classList.contains('active-background')) {
                        return;
                    }

                    // Clear any pending hide timeout
                    clearTimeout(scrollTimeout);

                    // Show navbar when scrolling (in any direction)
                    navbar.classList.remove(hideClass);

                    // Set timeout to hide navbar after scrolling stops
                    scrollTimeout = setTimeout(() => {
                        if (currentScroll > scrollThreshold) {
                            navbar.classList.add(hideClass);
                        }
                    }, hideDelay);

                    lastScroll = currentScroll;
                });
            };

            // Add this CSS to your stylesheet
            /*
            .navbar-mine {
                transition: transform 0.3s ease;
            }
            .navbar-mine.navbar-hidden {
                transform: translateY(-100%);
            }
            */

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
            initScrollBehavior();
            initAccordion();
            initDropdowns();

            // Add resize event listener
            window.addEventListener('resize', handleResize);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const mainTitle = document.querySelector(".main-title-index");
            const subTitle = document.querySelector(".sub-title-index");

            const mainMessages = [
                
                "Creative Innovation In Every Click",
                "Your Digital Launchpad"
            ];

            const subMessages = [
                "Where Every Interaction Sparks Creativity",
                "Accelerating Your Digital Transformation "
            ];

            let index = 0;

            function updateTitles() {
                // Fade out
                mainTitle.style.opacity = 0;
                subTitle.style.opacity = 0;

                setTimeout(() => {
                    // Change text
                    mainTitle.textContent = mainMessages[index];
                    subTitle.textContent = subMessages[index];

                    // Fade in
                    mainTitle.style.opacity = 1;
                    subTitle.style.opacity = 1;

                    // Update index
                    index = (index + 1) % mainMessages.length;
                }, 800); // match CSS transition
            }

            // Change every 3 seconds
            setInterval(updateTitles, 5000);
        });
    </script>


</body>

</html>