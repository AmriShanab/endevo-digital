<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevo | Portfolio</title>
    <link rel="stylesheet" href="assets/styles/about_styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        :root {
            --black-proj: #000000;
            --white-proj: #ffffff;
            --gray-dark-proj: #1a1a1a;
            --gray-light-proj: #f5f5f5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--white-proj);
            color: var(--black-proj);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Hero Section */
        /* Hero Section */
        .hero-proj {
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 10%;
            background: linear-gradient(135deg, #f9f9f9, #f1f1f1);
            /* subtle gradient */
            position: relative;
            overflow: hidden;
        }

        /* Optional background accent shapes */
        .hero-proj::before {
            content: "";
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: var(--black-proj);
            border-radius: 50%;
            opacity: 0.05;
            z-index: 0;
        }

        .hero-content-proj {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 1;
            text-align: left;
        }

        .hero-proj h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
            color: var(--black-proj);
        }

        .hero-proj h1 span {
            background: var(--black-proj);
            color: var(--white-proj);
            padding: 0 8px;
            border-radius: 4px;
        }

        .hero-proj p {
            font-size: 1.25rem;
            max-width: 650px;
            margin-bottom: 2.5rem;
            font-weight: 400;
            color: #555;
        }

        /* Button Styling */
        .btn-proj {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: var(--black-proj);
            color: var(--white-proj);
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.95rem;
            border: 2px solid var(--black-proj);
            transition: all 0.3s ease;
            cursor: pointer;
            border-radius: 50px;
            /* modern pill shape */
            text-decoration: none;
        }

        .btn-proj:hover {
            background: transparent;
            color: var(--black-proj);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-proj {
                padding: 0 1.5rem;
                text-align: center;
                justify-content: center;
            }

            .hero-content-proj {
                text-align: center;
            }

            .hero-proj h1 {
                font-size: clamp(2rem, 8vw, 3rem);
            }

            .hero-proj p {
                font-size: 1rem;
            }
        }

        /* Projects Section */
        .projects-section-proj {
            padding: 6rem 10%;
            background: var(--gray-light-proj);
        }

        .section-title-proj {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }

        .section-title-proj:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: var(--black-proj);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .projects-grid-proj {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .project-card-proj {
            background: var(--white-proj);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        .project-card-proj:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

 .project-img-proj {
    width: 100%;
    height: 200px; /* smaller container height */
    overflow: hidden;
    position: relative;
}

.project-img-proj img {
    width: 70%;  /* reduced from 90% → 70% */
    height: auto; /* maintain aspect ratio */
    object-fit: contain; /* keeps whole image visible */
    transition: all 0.5s ease;
    display: block;
    margin: 0 auto; /* centers the smaller image */
}



        .project-card-proj:hover .project-img-proj img {
            transform: scale(1.1);
        }

        .project-overlay-proj {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .project-card-proj:hover .project-overlay-proj {
            opacity: 1;
        }

        .project-view-btn-proj {
            padding: 0.8rem 1.8rem;
            background: var(--white-proj);
            color: var(--black-proj);
            font-weight: 500;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .project-view-btn-proj:hover {
            background: var(--black-proj);
            color: var(--white-proj);
        }

        .project-info-proj {
            padding: 1.8rem;
        }

        .project-title-proj {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
        }

        .project-desc-proj {
            font-weight: 300;
            margin-bottom: 1.5rem;
            color: #555;
        }

        .project-tags-proj {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .project-tag-proj {
            padding: 0.4rem 0.8rem;
            background: var(--gray-light-proj);
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Animations */
        .fade-in-proj {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in-proj.visible-proj {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-proj h1 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero-proj {
                padding: 0 5%;
            }

            .hero-proj h1 {
                font-size: 2.8rem;
            }

            .projects-section-proj {
                padding: 4rem 5%;
            }

            .projects-grid-proj {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero-proj h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-proj">
        <div class="hero-content-proj">
            <h1 data-aos="fade-right" data-aos-duration="1000">Our <span style="background: var(--black-proj); color: var(--white-proj); padding: 0 5px;">Projects</span></h1>
            <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Explore our portfolio of innovative digital solutions that have helped businesses transform and grow.</p>
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                <a href="#projects" class="btn-proj">View Projects</a>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section-proj" id="projects">
        <h2 class="section-title-proj" data-aos="fade-up" data-aos-duration="800">Featured Work</h2>
        <div class="projects-grid-proj">
            <!-- Project 1 -->
            <div class="project-card-proj" data-aos="fade-up" data-aos-duration="800">
                <div class="project-img-proj">
                    <img src="assets/images/Carewell.png" alt="E-commerce Project">
                    <div class="project-overlay-proj">
                        <a href="https://carewells.lk/"><button class="project-view-btn-proj">View Project</button></a>
                    </div>
                </div>
                <div class="project-info-proj">
                    <h3 class="project-title-proj">Carewells Website</h3>
                    <p class="project-desc-proj">Modern, responsive website for healthcare services with appointment booking system.</p>
                    <div class="project-tags-proj">
                        <span class="project-tag-proj">Web Design</span>
                        <span class="project-tag-proj">Development</span>
                        <!-- <span class="project-tag-proj">E-commerce</span> -->
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card-proj" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="project-img-proj">
                    <img src="assets/images/bimt.jpg" alt="Mobile App">
                    <div class="project-overlay-proj">
                        <a href="https://bimt.lk/"><button class="project-view-btn-proj">View Project</button></a>
                    </div>
                </div>
                <div class="project-info-proj">
                    <h3 class="project-title-proj">BIMT Website</h3>
                    <p class="project-desc-proj">Educational institution website with course management and student portal.</p>
                    <div class="project-tags-proj">
                        <span class="project-tag-proj">UI/UX</span>
                        <span class="project-tag-proj">Mobile App</span>
                        <span class="project-tag-proj">Health</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card-proj" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="project-img-proj">
                    <img src="assets/images/ihl.png" alt="Brand Identity">
                    <div class="project-overlay-proj">
                        <a href="https://ihl.lk/"><button class="project-view-btn-proj">View Project</button></a>
                    </div>
                </div>
                <div class="project-info-proj">
                    <h3 class="project-title-proj">IHL Website</h3>
                    <p class="project-desc-proj">Corporate website for international holdings with multilingual support.</p>
                    <div class="project-tags-proj">
                        <span class="project-tag-proj">Branding</span>
                        <span class="project-tag-proj">Design</span>
                        <span class="project-tag-proj">Identity</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card-proj" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <div class="project-img-proj">
                    <img src="assets/images/asma muftha.png" alt="Dashboard UI">
                    <div class="project-overlay-proj">
                        <a href="https://asmalawfirm.com/"><button class="project-view-btn-proj">View Project</button></a>
                    </div>
                </div>
                <div class="project-info-proj">
                    <h3 class="project-title-proj">Asma Muftah Al-Ghanem Advocates</h3>
                    <p class="project-desc-proj">Professional legal services website with case management features.</p>
                    <div class="project-tags-proj">
                        <span class="project-tag-proj">Dashboard</span>
                        <span class="project-tag-proj">UI Design</span>
                        <span class="project-tag-proj">Data</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="project-card-proj" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                <div class="project-img-proj">
                    <img src="assets/images/Logo.pdf.png" alt="Web Application">
                    <div class="project-overlay-proj">
                        <button class="project-view-btn-proj">View Project</button>
                    </div>
                </div>
                <div class="project-info-proj">
                    <h3 class="project-title-proj">RUA Pvt Ltd</h3>
                    <p class="project-desc-proj">A software-as-a-service solution with subscription management and user portal.</p>
                    <div class="project-tags-proj">
                        <span class="project-tag-proj">Web Site</span>
                        <!-- <span class="project-tag-proj">SaaS</span> -->
                        <span class="project-tag-proj">Development</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <!-- <div class="project-card-proj" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
                <div class="project-img-proj">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Mobile Interface">
                    <div class="project-overlay-proj">
                        <button class="project-view-btn-proj">View Project</button>
                    </div>
                </div>
                <div class="project-info-proj">
                    <h3 class="project-title-proj">Travel App</h3>
                    <p class="project-desc-proj">A mobile application for travel enthusiasts with itinerary planning and booking.</p>
                    <div class="project-tags-proj">
                        <span class="project-tag-proj">Mobile</span>
                        <span class="project-tag-proj">Travel</span>
                        <span class="project-tag-proj">UI/UX</span>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });

            // Additional scroll animations for project cards
            const projectCards = document.querySelectorAll('.project-card-proj');

            function checkScroll() {
                projectCards.forEach(card => {
                    const cardPosition = card.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;

                    if (cardPosition < screenPosition) {
                        card.classList.add('visible-proj');
                    }
                });
            }

            // Initial check
            checkScroll();

            // Check on scroll
            window.addEventListener('scroll', checkScroll);
        });
    </script>
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
</body>

</html>
<?php include 'footer.php'; ?>