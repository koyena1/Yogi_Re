<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #414b14;
            --primary-dark: #313b07;
            --primary-light: #4b5836;
            --text-dark: #4B3F36;
            --text-light: #767676;
            --background: #FFF7ED;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Domine', serif;
        }
        
        /* Footer Styles */
        footer {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 60px 0 20px;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        
        .footer-logo {
            flex: 1;
            min-width: 250px;
            margin-bottom: 30px;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .logo {
            width: 60px;
            height: 60px;
            background-color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            box-shadow: var(--shadow);
        }
        
        .logo-text {
            font-size: 28px;
            font-weight: 300;
            letter-spacing: 1px;
            font-family: 'Vidaloka', serif;
        }
        
        .logo-text span {
            font-weight: 600;
            color: var(--accent);
        }
        
        .footer-description {
            max-width: 300px;
            line-height: 1.7;
            color: #e0e0e0;
            margin-bottom: 20px;
        }
        
        .footer-links {
            flex: 1;
            min-width: 200px;
            margin-bottom: 30px;
        }
        
        .footer-links h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            font-family: 'Vidaloka', serif;
        }
        
        .footer-links h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent);
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links ul li {
            margin-bottom: 12px;
        }
        
        .footer-links ul li a {
            color: #e0e0e0;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links ul li a:hover {
            color: var(--accent);
            padding-left: 5px;
        }
        
        .footer-contact {
            flex: 1;
            min-width: 250px;
            margin-bottom: 30px;
        }
        
        .contact-info {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .contact-icon {
            margin-right: 15px;
            color: var(--accent);
            width: 20px;
            text-align: center;
        }
        
        .social-links {
            display: flex;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            text-align: center;
            color: #b0b0b0;
            font-size: 14px;
        }
        
        .footer-bottom p {
            margin-bottom: 10px;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
            }
            
            .footer-logo, .footer-links, .footer-contact {
                margin-bottom: 40px;
            }
            
            .footer-container {
                padding: 0 15px;
            }
        }

        @media (max-width: 480px) {
            footer {
                padding: 40px 0 20px;
            }
            
            .footer-links h3 {
                font-size: 16px;
            }
            
            .logo-text {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="yogire-orange.png" alt="Yogi Re" style="width: 40px; height: 40px;">
                        </div>
                        <div class="logo-text">Yogi<span>Re</span></div>
                    </div>
                    <p class="footer-description">Awaken an element of Yogi in your life. Let this life find its natural expression within you through our transformative yoga programs.</p>

                </div>
                
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="dwijas.php">Dwijas</a></li>
                        <li><a href="programs.php">Programs</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h3>Our Programs</h3>
                    <ul>
                        <li><a href="dwijas.php">Dwijas</a></li>
                        <li><a href="srishti.php">Srishti</a></li>
                        <li><a href="aahar.php">Aahar</a></li>
                        <li><a href="yogafest.php">Hatha Yoga Fest</a></li>
                        <li><a href="agni.php">Agni Series</a></li>
                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <div class="contact-info">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <p>#827, Koramangala 3rd Block, Bangalore - 560034</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <p>+91 82174 81232</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <p>ask@yogire.com</p>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://facebook.com/yogire.me/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://instagram.com/yogire.me" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/yogire" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="https://linkedin.com/company/yogire" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Yogi Re. All rights reserved.</p>
                <p>Designed with Cygnatrix.com</p>
            </div>
        </div>
    </footer>
</body>
</html>