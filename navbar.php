
<head>
    <link rel="stylesheet" href="../assets/styles/main_styles.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:700&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ENjdO4Dr2bkBIFxQpeoYkM9FPrJkFfN1KkRUpFZC+pmx9F+4p5d0Tt2bImbC5a5z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<nav class="navbar">
    <div class="navbar-container">
        <a href="/" class="navbar-logo">Endevo<span>Digital</span></a>
        <ul class="navbar-menu" id="navbarMenu">
            <li><a href="/">Home</a></li>
            <li><a href="/about.php">About</a></li>
            <li><a href="/services.php">Services</a></li>
            <li><a href="/portfolio.php">Portfolio</a></li>
            <li><a href="/contact.php">Let's Talk</a></li>
        </ul>
        <button class="navbar-toggle" id="navbarToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QF0f+Y3ItnA2i3O7ZkIo+KUxKaU6zN/5LF7FF0tYFFJqxZrfmC4m7tFNz3cJH+X2" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('navbarToggle');
        const menu = document.getElementById('navbarMenu');

        if (toggle && menu) {
            // Initially hide the menu on mobile
            if (window.innerWidth <= 768) {
                menu.classList.remove('active');
            }

            toggle.addEventListener('click', function() {
                menu.classList.toggle('active');
                toggle.classList.toggle('active');
                document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    menu.classList.remove('active');
                    toggle.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        }
    });