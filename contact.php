<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Yogire - Yoga & Wellness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Base Styles */
        :root {
            --primary: #D97706;
            --primary-dark: #A16207;
            --primary-light: #FBBF24;
            --background-light: #FFF7ED;
            --background-dark: #2d2d2d;
            --text-light: #4B3F36;
            --text-dark: #F3EADF;
            --card-light: #FDEBDD;
            --card-dark: #3a3a3a;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-light);
            background-color: var(--background-light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1rem;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary);
        }

        .section-title p {
            max-width: 600px;
            margin: 0 auto;
            color: var(--text-light);
            opacity: 0.8;
        }

        /* Header & Navigation */
        header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1820&q=80') no-repeat center center/cover;
            height: 60vh;
            color: white;
            display: flex;
            flex-direction: column;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
        }

        .logo-img {
            width: 80px;
            height: 40px;
            margin-right: 10px;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .page-header {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .page-header h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.9;
        }

        /* Contact Section */
        .contact {
            background-color: var(--white);
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-info {
            background-color: var(--card-light);
            border-radius: 10px;
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }

        .contact-info h3 i {
            color: var(--primary);
            margin-right: 10px;
        }

        .contact-item {
            display: flex;
            margin-bottom: 30px;
        }

        .contact-icon {
            color: var(--primary);
            font-size: 1.5rem;
            margin-right: 15px;
            margin-top: 5px;
        }

        .contact-content h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .contact-content p {
            color: var(--text-light);
            opacity: 0.8;
        }

        .contact-form {
            background-color: var(--white);
            border-radius: 10px;
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(217, 119, 6, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Map Section */
        .map-section {
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .map-container {
            height: 500px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            opacity: 0;
            transition: var(--transition);
        }

        .map-overlay:hover {
            opacity: 1;
        }

        .map-info {
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            max-width: 300px;
            text-align: center;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .map-overlay:hover .map-info {
            transform: translateY(0);
        }

        .map-info h3 {
            color: var(--primary);
            margin-bottom: 15px;
        }

        .map-info p {
            margin-bottom: 10px;
            color: var(--text-light);
        }

        /* FAQ Section */
        .faq {
            background-color: var(--background-light);
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background-color: var(--white);
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px 25px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .faq-question:hover {
            background-color: var(--card-light);
        }

        .faq-question h3 {
            font-size: 1.3rem;
            margin-bottom: 0;
        }

        .faq-icon {
            color: var(--primary);
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .faq-answer {
            padding: 0 25px;
            max-height: 0;
            overflow: hidden;
            transition: var(--transition);
        }

        .faq-item.active .faq-answer {
            padding: 0 25px 20px;
            max-height: 500px;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* Footer */
        footer {
            background-color: var(--background-light);
            padding: 80px 0 30px;
        }

        .footer-content {
            text-align: center;
            margin-bottom: 50px;
        }

        .footer-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .footer-content p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.8;
        }

        .footer-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-bottom {
            padding-top: 30px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
        }

        .footer-logo-img {
            width: 80px;
            height: 35px;
            margin-right: 8px;
            object-fit: contain;
        }

        .footer-links {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .footer-links a {
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
        }

        .copyright {
            width: 100%;
            text-align: center;
            margin-top: 30px;
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .page-header h1 {
                font-size: 3rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .mobile-menu {
                display: block;
            }
            
            .page-header h1 {
                font-size: 2.5rem;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .footer-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .footer-buttons .btn {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 60px 0;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .contact-info, .contact-form {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav>
                <a href="index.php" class="logo">
                    <img src="yogire-orange.png" alt="Yogire Logo" class="logo-img">
                </a>

                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="dwijas.php">Dwijas</a></li>
                    <li><a href="retreats.php">Retreats</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
            
            <div class="page-header">
                <h1>Get In Touch</h1>
                <p>Connect with us to begin your journey toward inner peace and holistic wellness.</p>
            </div>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>We're here to answer any questions you may have about our yoga programs and retreats.</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info fade-in">
                    <h3><i class="fas fa-info-circle"></i> Contact Information</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Our Location</h4>
                            <p>123 Yoga Street, Wellness District<br>Bengaluru, Karnataka 560001</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Phone Number</h4>
                            <p>+91 82174 81232</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Email Address</h4>
                            <p>ask@yogire.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-content">
                            <h4>Opening Hours</h4>
                            <p>Monday - Saturday: 6:00 AM - 8:00 PM<br>Sunday: 7:00 AM - 12:00 PM</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form fade-in">
                    <h3><i class="fas fa-paper-plane"></i> Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email address" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control" placeholder="Enter your phone number">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" placeholder="Enter the subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" placeholder="Enter your message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-title">
                <h2>Find Us</h2>
                <p>Visit our center to experience the tranquility and begin your yoga journey.</p>
            </div>
            
            <div class="map-container fade-in">
                <!-- Google Map Embed -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.881620867897!2d77.59426031482136!3d12.92269099088945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15c49c040309%3A0x6553433f72187b59!2sBangalore%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1647856787890!5m2!1sen!2sin" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                
                <div class="map-overlay">
                    <div class="map-info">
                        <h3>Yogire Center</h3>
                        <p>123 Yoga Street</p>
                        <p>Bengaluru, Karnataka 560001</p>
                        <p>India</p>
                        <a href="https://maps.google.com/?q=123+Yoga+Street,Bengaluru,Karnataka" target="_blank" class="btn btn-primary" style="margin-top: 15px;">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our yoga programs and services.</p>
            </div>
            
            <div class="faq-container">
                <div class="faq-item fade-in">
                    <div class="faq-question">
                        <h3>What should I bring to my first yoga class?</h3>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>For your first yoga class, we recommend bringing comfortable clothing that allows for movement, a water bottle, and a yoga mat if you have one. We do provide mats and props for beginners, but many practitioners prefer to bring their own.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in">
                    <div class="faq-question">
                        <h3>Do I need prior experience to join your classes?</h3>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No prior experience is necessary! We offer classes for all levels, from complete beginners to advanced practitioners. Our instructors will guide you through proper alignment and modifications based on your experience level.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in">
                    <div class="faq-question">
                        <h3>What is your cancellation policy for retreats?</h3>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We understand that plans can change. For retreat cancellations made 30 days or more before the start date, we offer a full refund minus a small processing fee. For cancellations within 30 days, we offer credit toward future retreats or programs.</p>
                    </div>
                </div>
                
                <div class="faq-item fade-in">
                    <div class="faq-question">
                        <h3>Are your instructors certified?</h3>
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, all our instructors are certified yoga teachers with extensive training and experience. Many of them have additional certifications in specialized areas such as meditation, pranayama, and therapeutic yoga.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <h2>Begin your journey today.</h2>
                <p>Take the first step toward transformation with our diverse offerings. Whether you're new to yoga or an experienced practitioner, we have something for everyone.</p>
                <div class="footer-buttons">
                    <a href="contact.php" class="btn btn-primary">Book a Session</a>
                    <a href="#" class="btn btn-outline">Volunteer</a>
                    <a href="#" class="btn btn-outline">Donate</a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <a href="index.php" class="footer-logo">
                    <img src="yogire-orange.png" alt="Yogire Logo" class="footer-logo-img">
                </a>
                
                <ul class="footer-links">
                    <li><a href="about.php">About</a></li>
                    <li><a href="programs.php">Programs</a></li>
                    <li><a href="retreats.php">Retreats</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                
                <div class="copyright">
                    &copy; 2023 Yogire!. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Chat Button -->
    <div class="whatsapp-chat">
        <a href="https://wa.me/918217481232" target="_blank" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i>
            <span class="whatsapp-label">Chat with us</span>
        </a>
    </div>

    <style>
        /* WhatsApp Chat Button Styles */
        .whatsapp-chat {
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: 1000;
        }

        .whatsapp-btn {
            display: flex;
            align-items: center;
            background-color: #25D366;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .whatsapp-btn:hover {
            background-color: #128C7E;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-btn i {
            font-size: 24px;
            margin-right: 8px;
        }

        .whatsapp-label {
            font-size: 14px;
            white-space: nowrap;
        }

        /* Hide label on mobile */
        @media (max-width: 768px) {
            .whatsapp-label {
                display: none;
            }
            
            .whatsapp-btn {
                padding: 12px 15px;
            }
            
            .whatsapp-btn i {
                margin-right: 0;
            }
        }

        /* Animation for initial appearance */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .whatsapp-chat {
            animation: fadeInUp 0.5s ease-out;
        }
    </style>

    <script>
        // Simple mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                faqItem.classList.toggle('active');
            });
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Scroll animations
        function checkVisibility() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', checkVisibility);
        window.addEventListener('load', checkVisibility);
    </script>
</body>
</html>