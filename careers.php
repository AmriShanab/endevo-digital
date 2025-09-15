<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Endevo Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.6;
            background-color: #fff;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        section {
            padding: 80px 0;
        }
        
        /* Hero Section */
        .hero {
            background-color: #000;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            font-weight: 300;
        }
        
        .cta-button {
            display: inline-block;
            background-color: #fff;
            color: #000;
            padding: 15px 35px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #f2f2f2;
            transform: translateY(-2px);
        }
        
        /* Why Work With Us */
        .why-us {
            background-color: #f9f9f9;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            font-weight: 600;
        }
        
        .benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .benefit-item {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .benefit-item h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        /* Openings Section */
        .openings {
            background-color: #fff;
        }
        
        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .job-card {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 25px;
            transition: all 0.3s ease;
        }
        
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .job-card h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .job-card p {
            color: #666;
        }
        
        /* How to Apply */
        .how-to-apply {
            background-color: #000;
            color: #fff;
            text-align: center;
        }
        
        .how-to-apply .section-title {
            color: #fff;
        }
        
        .apply-content {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .apply-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        
        .email-link {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            border-bottom: 2px solid #fff;
            padding-bottom: 2px;
        }
        
        /* Footer CTA */
        .footer-cta-careers {
            text-align: center;
            padding: 60px 0;
            background-color: #f9f9f9;
        }
        
        .footer-cta-careers p {
            font-size: 1.4rem;
            font-weight: 500;
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Build the Future of Digital with Us</h1>
            <p>At Endevo Digital, we merge creativity with technology to design impactful digital solutions. Join our team and take your career to the next level.</p>
            <a href="#openings" class="cta-button">Explore Openings</a>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="why-us">
        <div class="container">
            <h2 class="section-title">Why Work with Us?</h2>
            <div class="benefits">
                <div class="benefit-item">
                    <h3>Hybrid Work Culture</h3>
                    <p>Flexibility to work from home or collaborate at the office</p>
                </div>
                <div class="benefit-item">
                    <h3>Exciting Projects</h3>
                    <p>Work on real-world solutions with a global impact</p>
                </div>
                <div class="benefit-item">
                    <h3>Growth Opportunities</h3>
                    <p>Continuous learning, training, and career development</p>
                </div>
                <div class="benefit-item">
                    <h3>Creative Environment</h3>
                    <p>A space where ideas thrive and innovation never stops</p>
                </div>
                <div class="benefit-item">
                    <h3>Team Spirit</h3>
                    <p>Work with passionate, driven, and supportive colleagues</p>
                </div>
                <div class="benefit-item">
                    <h3>Recognition & Rewards</h3>
                    <p>Your contributions are valued and celebrated</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Openings -->
    <section class="openings" id="openings">
        <div class="container">
            <h2 class="section-title">Current Openings</h2>
            <div class="jobs-grid">
                <div class="job-card">
                    <h3>Software Engineer (Full stack)</h3>
                    <p>Hybrid role – Work with modern frameworks, build scalable apps, and solve real-world challenges.</p>
                </div>
                <div class="job-card">
                    <h3>UI/UX Designer</h3>
                    <p>Hybrid role – Create user-focused, engaging designs that bring digital products to life.</p>
                </div>
                <div class="job-card">
                    <h3>Graphic Designer cum Video Editor</h3>
                    <p>Hybrid role – Craft stunning visuals and compelling videos that tell stories.</p>
                </div>
                <div class="job-card">
                    <h3>WordPress Developer</h3>
                    <p>Hybrid role – Build and customize WordPress sites with responsive and optimized designs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Apply -->
    <section class="how-to-apply">
        <div class="container">
            <h2 class="section-title">Ready to Join Us?</h2>
            <div class="apply-content">
                <p>Send your CV & portfolio (if applicable) to:</p>
                <p><a href="mailto:careers@endevodigital.com" class="email-link">careers@endevodigital.com</a></p>
                <p>Mention the position you're applying for in the subject line.</p>
            </div>
        </div>
    </section>

    <!-- Footer CTA -->
    <!-- <section class="footer-cta-careers">
        <div class="container">
            <p>At Endevo Digital, every role is more than just a job—it's your chance to shape the digital future.</p>
        </div>
    </section> -->
</body>
</html>
<?php include 'footer.php'; ?>