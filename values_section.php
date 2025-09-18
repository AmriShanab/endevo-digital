<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevo Digital - Core Values</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0072ff;
            --secondary-color: #00c6ff;
            --dark-bg: #121212;
            --darker-bg: #0a0a0a;
            --card-bg: #1a1a2e;
            --text-light: #ffffff;
            --text-muted: rgba(255, 255, 255, 0.7);
        }
        
        
        .values-section {
            background: linear-gradient(135deg, var(--darker-bg) 0%, var(--dark-bg) 100%);
            padding: 100px 0;
            color: var(--text-light);
        }
        
        .values-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .values-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .values-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .values-title:after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -15px;
            transform: translateX(-50%);
            width: 70px;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
            border-radius: 10px;
        }
        
        .values-subtitle {
            font-size: 1.2rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .value-item {
            display: flex;
            align-items: center;
            margin-bottom: 80px;
            background: var(--card-bg);
            border-radius: 15px;
            padding: 50px 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .value-content {
            flex: 0 0 50%;
            padding-right: 40px;
        }
        
        .value-image {
            flex: 0 0 50%;
            padding-left: 40px;
        }
        
        .value-number {
            font-size: 5rem;
            font-weight: 800;
            color: var(--text-light);
            line-height: 1;
            margin-bottom: 10px;
        }
        
        .value-heading {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-light);
            margin-bottom: 15px;
        }
        
        .value-description {
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--text-muted);
        }
        
        .value-img-container {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .value-img-container img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .value-img-container:hover img {
            transform: scale(1.03);
        }
        
        .value-img-container:after {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: 10px;
            bottom: 10px;
            border: 2px solid var(--primary-color);
            border-radius: 10px;
            opacity: 0.5;
            z-index: -1;
        }
        
        /* Special styling for the last item */
        .value-item.last-item {
            background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 100%);
            border: 1px solid rgba(0, 198, 255, 0.2);
        }
        
        .value-item.last-item .value-img-container:after {
            border-color: var(--secondary-color);
            opacity: 0.7;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 80px 0;
            text-align: center;
        }
        
        .testimonials-header {
            margin-bottom: 50px;
        }
        
        .testimonials-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--text-light);
        }
        
        .testimonials-subtitle {
            font-size: 1.2rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .testimonial-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            text-align: left;
            transition: transform 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
        }
        
        .testimonial-content {
            font-style: italic;
            margin-bottom: 20px;
            color: var(--darker-bg);
            line-height: 1.6;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-image {
            width: 120px;
            height: 120px;
            border-radius: 30%;
            overflow: hidden;
            margin-right: 15px;
            border: 2px solid var(--darker-bg);
        }
        
        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-details {
            flex: 1;
        }
        
        .author-name {
            font-weight: 600;
            color: var(--text-light);
            margin-bottom: 5px;
        }
        
        .author-position {
            font-size: 0.9rem;
            color: var(--text-muted);
        }
        
        .rating {
            color: #ffc107;
            margin-top: 5px;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 992px) {
            .value-item {
                flex-direction: column;
                margin-bottom: 60px;
                padding: 40px 30px;
            }
            
            .value-content, .value-image {
                flex: 0 0 100%;
                padding: 0;
            }
            
            .value-content {
                order: 2;
                margin-top: 30px;
            }
            
            .value-image {
                order: 1;
            }
            
            .value-number {
                font-size: 4rem;
            }
            
            .value-heading {
                font-size: 1.6rem;
            }
            
            .testimonials-container {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .values-section {
                padding: 70px 0;
            }
            
            .values-title {
                font-size: 2.2rem;
            }
            
            .value-item {
                padding: 30px 20px;
                margin-bottom: 50px;
            }
            
            .value-number {
                font-size: 3.5rem;
            }
            
            .value-heading {
                font-size: 1.4rem;
            }
            
            .value-description {
                font-size: 1rem;
            }
            
            .testimonials-title {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .values-section {
                padding: 50px 0;
            }
            
            .values-header {
                margin-bottom: 40px;
            }
            
            .values-title {
                font-size: 1.8rem;
            }
            
            .values-subtitle {
                font-size: 1rem;
            }
            
            .value-item {
                padding: 25px 15px;
                margin-bottom: 40px;
            }
            
            .value-number {
                font-size: 3rem;
            }
            
            .testimonials-section {
                padding: 60px 0;
            }
            
            .testimonials-title {
                font-size: 1.8rem;
            }
        }

        .testimonials-container .testimonial-card:last-child {
    margin: 0 auto; /* Center horizontally */
}

@media (max-width: 992px) {
    .testimonials-container .testimonial-card:last-child {
        margin: 0 auto;
    }
}
    </style>
</head>
<body>
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
                        <img src="assets/images/innovation.jpg" alt="Innovation">
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
                        <img src="assets/images/integrity.jpg" alt="Integrity">
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
                        <img src="assets/images/excellence.jpg" alt="Excellence">
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
                        <img src="assets/images/collaboration.jpg" alt="Collaboration">
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
                        <img src="assets/images/customer_focus.jpg" alt="Customer Focus">
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
                        <img src="assets/images/sustainability.jpg" alt="Sustainability">
                    </div>
                </div>
            </div>
            
            <!-- Testimonials Section -->
            <div class="testimonials-section">
                <div class="testimonials-header">
                    <h2 class="testimonials-title">What Our Clients Say</h2>
                    <p class="testimonials-subtitle">Trusted by businesses worldwide, Stories of success, straight from our clients.</p>
                </div>
                
                <div class="testimonials-container">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <p class="testimonial-content">
                            "Hi, I'm Professor Rob Morter, the Pro Vice Chancellor of York St John University. I’d like to recommend Endevo for event management services. They’ve done a fantastic job with our York St John University engagement event this evening in Colombo.
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/testimonial_1.jpg" alt="David Wilson">
                            </div>
                            <div class="author-details">
                                <div class="author-name">Prof. Rob Morter</div>
                                <div class="author-position">Pro Vice Chancellor, York St John University</div>
                                <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <p class="testimonial-content">
"A big thanks to Endevo for their outstanding support at this important event. Their expertise in event management, media, and communications made it a truly memorable experience for York St John University. I highly recommend them."</p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/mohsins.jpg" alt="Sarah Johnson">
                            </div>
                            <div class="author-details">
                                <div class="author-name">Mohsin Ramzan</div>
                                <div class="author-position">Founder/ Managing Director, RTE Global</div>
                                <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <p class="testimonial-content">
                            "Hi, I’m Dr. Deepal Perera. York St John University’s local summit in Sri Lanka was excellently organized by Endevo Private Limited. The young team did a fantastic job with professionalism and style. I wish them all the very best"
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/IMG_4575.png" alt="Michael Chen">
                            </div>
                            <div class="author-details">
                                <div class="author-name">Dr. Deepal Perera</div>
                                <div class="author-position">Head of Sales, Ex-pack Corrugated Cartons PLC</div>
                                <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-content">
                            "I’ve worked with Endevo for over three years, and they consistently deliver outstanding results. Their web development is creative and precise, while their event management is professional and flawlessly executed. Dependable, innovative, and always going above and beyond, Endevo is a trusted partner I highly recommend."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="assets/images/farshath.jpg" alt="Michael Chen">
                            </div>
                            <div class="author-details">
                                <div class="author-name">Mr. Farshath Jamal</div>
                                <div class="author-position">Chief Executive Officer, BIMT Campus Colombo</div>
                                <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>