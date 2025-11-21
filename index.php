<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogire | Transform Your Life</title>
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

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-light);
        }

        .logo-img {
            width: 80px; /* adjust as needed */
            height: 40px;
            margin-right: 10px;
            object-fit: contain;
        }

        .logo i {
            color: var(--primary);
            margin-right: 10px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--text-light);
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
            color: var(--text-light);
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .hero-carousel {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .carousel-slide.active {
            opacity: 1;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6));
            z-index: 0;
        }

        .hero-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 700px;
            position: relative;
            z-index: 10;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            opacity: 0.9;
        }

        /* Carousel indicators */
        .carousel-indicators {
            position: absolute;
            bottom: 30px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 10;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 0 5px;
            cursor: pointer;
            transition: var(--transition);
        }

        .indicator.active {
            background-color: var(--primary);
            transform: scale(1.2);
        }


        .programs-highlight {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
        }

        .program-tag {
            background-color: var(--primary-light);
            color: var(--primary-dark);
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: var(--shadow);
        }
        
        /* Special Programs Section (Srishti, Aahar, etc.) */
        .special-programs {
            background-color: var(--background-light);
        }

        .special-programs-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .program-item {
            background-color: var(--white);
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .program-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .program-item h2 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .program-item-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
            box-shadow: var(--shadow);
            border: 5px solid var(--white);
        }
        
        .program-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .program-item:hover .program-item-image img {
            transform: scale(1.05);
        }

        .program-item-description {
            font-size: 1rem;
            color: var(--text-light);
            opacity: 0.8;
            line-height: 1.7;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        
        .program-item-details {
             font-size: 0.9rem;
             color: var(--text-light);
             font-weight: 600;
             opacity: 0.9;
             margin-bottom: 20px;
             line-height: 1.5;
        }
       
        /* Dwijas Program Section */
        /* .dwijas-program {
            background-color: var(--white);
        }

        .dwijas-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .dwijas-content h3 {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 30px;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .dwijas-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-light);
            opacity: 0.9;
            margin-bottom: 30px;
            text-align: left;
        }
        
        .dwijas-details {
            background-color: var(--card-light);
            padding: 25px;
            border-radius: 10px;
            text-align: left;
            display: inline-block;
            margin-bottom: 35px;
            line-height: 1.7;
        }
        
        .dwijas-details strong {
            font-size: 1.2rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
            display: block;
        } */
        
        /* Initiatives Section (Agni & Agastya) */
        .initiatives {
            background-color: var(--white);
        }

        .initiatives-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .initiative-card {
            background-color: var(--card-light);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            text-align: center;
            transition: var(--transition);
        }
        
        .initiative-card:hover {
             transform: translateY(-5px);
        }

        .initiative-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 25px;
            max-width: 400px;
        }
        
        .initiative-card h3 {
            font-size: 1.8rem;
            color: var(--text-light);
            margin-bottom: 15px;
        }
        
        .initiative-card p {
            font-size: 1rem;
            color: var(--text-light);
            opacity: 0.8;
            line-height: 1.7;
            margin-bottom: 30px;
        }
        
        /* Programs Section */
        .programs {
            background-color: var(--background-light);
        }

        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .program-card {
            background-color: var(--card-light);
            border-radius: 10px;
            padding: 40px 30px;
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--shadow);
        }

        .program-card:hover {
            transform: translateY(-10px);
        }

        .program-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .program-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .program-card p {
            margin-bottom: 20px;
            color: var(--text-light);
            opacity: 0.8;
        }

        .program-link {
            color: black;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
        }

        .program-link i {
            margin-left: 5px;
            transition: var(--transition);
        }

        .program-link:hover {
            color: var(--primary-dark);
        }

        .program-link:hover i {
            transform: translateX(5px);
        }

        /* Yoga Classes & Programs Carousel Section */
        .yoga-classes {
            background-color: var(--white);
        }

        .carousel-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: var(--shadow);
            background: white;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cards-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        
        .card {
            flex: 0 0 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        
        .card-header {
            background-color: #e77727ff;
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        
        .card-header h3 {
            font-size: 1.3rem;
            margin: 0;
            line-height: 1.4;
        }
        
        .card-body {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
            border-radius: 0 0 10px 10px;
        }
        
        .card-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.5;
            flex-grow: 1;
        }
        
        .card-actions {
            display: flex;
            justify-content: space-between;
            margin-top: auto;
            gap: 10px;
        }
        
        .card-btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            flex: 1;
        }
        
        .card-btn-primary {
            background-color: #e77727ff;
            color: white;
        }
        
        .card-btn-primary:hover {
            background-color: #d16a1fff;
        }
        
        .card-btn-secondary {
            background-color: #e8f5e9;
            color: #2c5530;
        }
        
        .card-btn-secondary:hover {
            background-color: #d4edda;
        }
        
        /* Carousel Navigation */
        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.8);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .carousel-nav:hover {
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .carousel-nav.prev {
            left: 10px;
        }
        
        .carousel-nav.next {
            right: 10px;
        }
        
        .carousel-nav svg {
            width: 20px;
            height: 20px;
            fill: #2c3e50;
        }
        
        /* Carousel Indicators */
        .carousel-indicators {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
        }
        
        .carousel-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #bdc3c7;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .carousel-indicator.active {
            background: #e77727ff;
        }

        /* Broadcast Section */
        /* .broadcast-section {
            background-color: #DCDCC9;
        }
        
        .broadcast-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .broadcast-content h3 {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 30px;
        }

        .broadcast-content img {
            width: 60%;
            max-width: 500px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: var(--shadow);
        }

        .broadcast-content p {
            font-size: 1.1rem;
            color: var(--text-light);
            opacity: 0.9;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .broadcast-content .broadcast-phone {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-light);
            margin: 5px 0;
        } */
        
        /* Volunteer Section */
        /* .volunteer-section {
            background-color: var(--white);
        }
        
        .volunteer-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .volunteer-content h3 {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 30px;
        }
        
        .volunteer-content img {
            width: 70%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: var(--shadow);
        }
        
        .volunteer-content blockquote {
            margin: 20px 0 30px;
            border-left: 4px solid var(--primary-light);
            padding-left: 20px;
            text-align: left;
        }
        
        .volunteer-content blockquote p {
            font-size: 1.2rem;
            font-style: italic;
            color: var(--text-light);
            opacity: 0.8;
            margin-bottom: 10px;
        }
        

        .volunteer-content .volunteer-text {
            font-size: 1.1rem;
            color: var(--text-light);
            opacity: 0.9;
            line-height: 1.8;
            margin-bottom: 30px;
        } */

        /* Retreats Section */
        .retreats {
            background-color: var(--white);
        }

        .retreats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .events-card, .benefits-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 40px;
            box-shadow: var(--shadow);
        }

        .events-card h3, .benefits-card h3 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }

        .events-card h3 i, .benefits-card h3 i {
            color: var(--primary);
            margin-right: 10px;
        }

        .event-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .event-item:last-child {
            border-bottom: none;
        }

        .event-date {
            font-weight: 700;
            color: var(--primary);
        }

        .event-location {
            color: var(--text-light);
            opacity: 0.7;
        }

        .benefit-item {
            display: flex;
            margin-bottom: 30px;
        }

        .benefit-icon {
            color: var(--primary);
            font-size: 1.5rem;
            margin-right: 15px;
            margin-top: 5px;
        }

        .benefit-content h4 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .benefit-content p {
            color: var(--text-light);
            opacity: 0.8;
        }

        /* Wisdom Section */
        .wisdom {
            background: linear-gradient(to right, var(--primary-dark), var(--primary));
            color: white;
        }

        .wisdom .section-title h2 {
            color: white;
        }

        .wisdom .section-title h2:after {
            background-color: white;
        }

        .wisdom .section-title p {
            color: rgba(255, 255, 255, 0.8);
        }

        .wisdom-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .wisdom-card {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            overflow: hidden;
            transition: var(--transition);
        }

        .wisdom-card:hover {
            transform: translateY(-10px);
        }

        .wisdom-img {
            height: 200px;
            overflow: hidden;
        }

        .wisdom-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .wisdom-card:hover .wisdom-img img {
            transform: scale(1.1);
        }

        .wisdom-content {
            padding: 25px;
        }

        .wisdom-content h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: white;
        }

        .wisdom-content p {
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .wisdom-link {
            color: white;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
        }

        .wisdom-link i {
            margin-left: 5px;
            transition: var(--transition);
        }

        .wisdom-link:hover {
            color: var(--primary-light);
        }

        .wisdom-link:hover i {
            transform: translateX(5px);
        }

        /* Testimonial Section */
        .testimonial {
            background: linear-gradient(rgba(107, 79, 64, 0.9), rgba(107, 79, 64, 0.9)), url('https://images.unsplash.com/photo-1545205597-3d9d02c29597?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
        }

        .testimonial-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonial-content p {
            font-size: 1.8rem;
            font-style: italic;
            line-height: 1.6;
            margin-bottom: 30px;
            position: relative;
        }

        .testimonial-content p:before,
        .testimonial-content p:after {
            content: '"';
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.3);
            position: absolute;
        }

        .testimonial-content p:before {
            top: -20px;
            left: -40px;
        }

        .testimonial-content p:after {
            bottom: -60px;
            right: -40px;
        }

        .testimonial-author {
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .testimonial-role {
            opacity: 0.8;
        }

        /* Footer */
        footer {
            background-color: var(--background-dark);
            color: var(--text-dark);
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--primary-light);
        }

        .footer-column p {
            margin-bottom: 20px;
            opacity: 0.8;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--text-dark);
            text-decoration: none;
            transition: var(--transition);
            opacity: 0.8;
        }

        .footer-links a:hover {
            color: var(--primary-light);
            opacity: 1;
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

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 3rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
            
            .who-we-are-content {
                flex-direction: column;
                gap: 40px;
            }
            
            .who-we-are-text, .who-we-are-image {
                flex: none;
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--background-light);
                flex-direction: column;
                padding: 20px;
                box-shadow: var(--shadow);
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .nav-links li {
                margin: 10px 0;
            }
            
            .mobile-menu {
                display: block;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .initiatives-grid {
                grid-template-columns: 1fr;
            }
            
            .special-programs-grid {
                grid-template-columns: 1fr;
            }
            
            .card-actions {
                flex-direction: column;
            }
            
            .carousel-nav {
                width: 35px;
                height: 35px;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 60px 0;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .testimonial-content p {
                font-size: 1.4rem;
            }
            
            .who-we-are-text h2 {
                font-size: 2rem;
            }

            .program-item h2 {
                font-size: 1.6rem;
            }
            .program-item-image {
                width: 150px;
                height: 150px;
            }
            
            .dwijas-content h3 {
                font-size: 2rem;
            }
            .dwijas-description {
                font-size: 1rem;
            }
            .dwijas-details {
                text-align: center;
            }
            
            .initiative-card h3 {
                font-size: 1.5rem;
            }

            /* volunteer */
            
            .broadcast-content h3, .volunteer-content h3 {
                font-size: 2rem;
            }
            .broadcast-content img, .volunteer-content img {
                width: 90%;
            }
            .broadcast-content p, .volunteer-content .volunteer-text {
                font-size: 1rem;
            }
            .volunteer-content blockquote p {
                font-size: 1.1rem;
            }
        }

        /* WhatsApp Chat Button Styles */
        /* .whatsapp-chat {
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
        } */

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
</head>
<body>
    <!-- Header Section -->
  <?php include 'header.php'; ?> 
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-carousel">
            <div class="carousel-slide active" style="background-image: url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')"></div>
            <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')"></div>
            <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')"></div>
            <div class="carousel-slide" style="background-image: url('https://images.unsplash.com/photo-1594736797933-d0c1388b1682?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80')"></div>
            <div class="carousel-overlay"></div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <h1>Transform Within</h1>
                <p>Discover inner peace and physical vitality through traditional yoga practices. Our expert instructors guide you on a journey to holistic wellness.</p>
                <a href="#" class="btn btn-primary">Explore Programs</a>
            </div>
        </div>
        
        <div class="carousel-indicators">
            <div class="indicator active" data-index="0"></div>
            <div class="indicator" data-index="1"></div>
            <div class="indicator" data-index="2"></div>
            <div class="indicator" data-index="3"></div>
        </div>
    </section>

<!-- Who We Are Section -->
<section class="who-we-are-modern">
  <div class="container">
    <div class="who-we-are-wrapper">
      <!-- Text Content -->
      <div class="who-we-are-text-content">
        <h2>Who We Are</h2>

        <!-- First Quote Card -->
        <div class="quote-block">
          <p class="quote-text">
            Yogi Re conducts various classical Isha Hatha Yoga programs like Angamardana, Surya Kriya, Surya Shakti, Jalaneti across Bangalore as well as holistic camps like Srishti for children. And we are quite happy doing our bit by helping people find their inner bliss and stillness!
          </p>
        </div>

        <!-- Our Mission Heading + Separate Card -->
        <h3 class="mission-heading">Our Mission</h3>
        <div class="mission-block">
          <p class="quote-text">
            Our mission is to bring the profound benefits of classical yoga to everyone, creating a community dedicated to wellness, self-discovery, and inner transformation.</p>
        </div>

        <!-- Aesthetic Program Tags -->
       
      </div>

      <!-- Background Image -->
      <div class="who-we-are-bg-image">
        <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Yoga & Meditation">
      </div>
    </div>
  </div>
</section>

<style>
.who-we-are-modern {
  padding: 80px 20px;
  position: relative;
  overflow: hidden;
  background: linear-gradient(to bottom, #fdfdfb 0%, #f5f5f5 100%);
}

.who-we-are-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 60px;
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

.who-we-are-text-content {
  flex: 1;
  max-width: 600px;
}

.who-we-are-text-content h2 {
  font-size: 3.2rem;
  color: #2c3e50;
  margin-bottom: 32px;
  font-weight: 700;
  letter-spacing: -0.5px;
}

/* Existing Quote Block */
.quote-block {
  background: rgba(255, 255, 255, 0.85);
  padding: 32px 28px;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  margin: 32px 0;
  border-left: 5px solid #e77727;
}

.quote-text {
  font-size: 1.35rem;
  font-style: italic;
  color: #34495e;
  line-height: 1.7;
  margin-bottom: 12px;
}

/* Mission Heading + Block */
.mission-heading {
  font-size: 1.8rem;
  color: #2c3e50; 
  font-weight: 700;
  margin-top: 20px;
  margin-bottom: 16px;
  letter-spacing: -0.3px;
}

.mission-block {
  background: rgba(255, 255, 255, 0.85);
  padding: 26px 24px;
  border-radius: 14px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.07);
  border-left: 4px solid #f0b07a;
  margin-bottom: 30px;
}

.mission-text {
  font-size: 1.2rem;
  color: #444;
  line-height: 1.75;
}

/* Program Tags */
.programs-highlight {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  margin-top: 32px;
}

.program-tag {
  background: linear-gradient(135deg, #fdfaf5 0%, #fef8e8 100%);
  color: #d35400;
  padding: 10px 20px;
  border-radius: 50px;
  font-size: 0.95rem;
  font-weight: 600;
  border: 1.5px solid #f8d7b0;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(211, 84, 0, 0.1);
}

.program-tag:hover {
  background: #e77727;
  color: white;
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(231, 119, 39, 0.25);
  border-color: #e77727;
}

/* Image */
.who-we-are-bg-image {
  flex: 1;
  max-width: 550px;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
  position: relative;
}

.who-we-are-bg-image img {
  width: 100%;
  height: 650px;
  object-fit: cover;
  display: block;
}

/* Overlay */
.who-we-are-bg-image::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.15), transparent 50%);
  z-index: 1;
}

/* Responsive */
@media (max-width: 992px) {
  .who-we-are-wrapper {
    flex-direction: column;
    text-align: center;
  }

  .who-we-are-bg-image {
    max-width: 100%;
    height: 500px;
  }

  .who-we-are-text-content h2 {
    font-size: 2.8rem;
  }

  .programs-highlight {
    justify-content: center;
  }
}

@media (max-width: 576px) {
  .quote-block {
    padding: 24px 20px;
  }

  .who-we-are-text-content h2 {
    font-size: 2.4rem;
  }

  .program-tag {
    padding: 8px 16px;
    font-size: 0.9rem;
  }
}
</style>

<!-- Dwijas Program Section -->
<section class="dwijas-section">
  <div class="container">
    <div class="dwijas-wrapper">
      
      <div class="dwijas-text">
        <h2>Our Program</h2>
        <h3>Dwijas — A 21 Day Live Online Session</h3>
        <p>
          Dwijas is a 21 Day live online session for aspiring Yogis to explore all aspects of a Yogic lifestyle, based on the guidelines by Sadhguru.
        </p>
        <p>
          With the goal of making every aspect of your life a tool for your ultimate well-being, we explore all aspects — how to wake up, eat, drink, speak, dress, and rest.
        </p>

        <div class="dwijas-details">
          <strong>Nov 2 – 22, 2025</strong><br>
          <b>Batch 1:</b> 3:30 – 4:45 AM IST<br>
          <small>(Coinciding with Brahma Muhurtam in India)</small><br><br>
          
          <b>Batch 2:</b> 3:30 – 4:45 AM CST / 4:30 – 5:45 AM EST / 2:00 – 3:15 PM IST<br>
          <small>(Coinciding with Brahma Muhurtam in USA/Canada)</small>
        </div>

        <a href="dwijas.php" target="_blank" class="btn-learn">Explore Now</a>
      </div>

      <div class="dwijas-video">
        <iframe 
          src="https://www.youtube.com/embed/-usaxUsizZ8" 
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      </div>

    </div>
  </div>
</section>

<style>

/* <!-- /* Dwijas Program Section */ 
 .dwijas-section {
  background-color: #FFFDD0; 
  padding: 60px 0;
  font-family: "Poppins", sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.dwijas-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 40px;
}

.dwijas-text {
  flex: 1 1 50%;
} -->

<!-- .dwijas-text h2 {
  font-size: 40px;
  color: black;
  margin-bottom: 10px;
  font-weight: 600;
}

.dwijas-text h3 {
  font-size: 26px;
  color: black;
  margin-bottom: 20px;
}

.dwijas-text p {
  color: #333;
  line-height: 1.7;
  margin-bottom: 15px;
}

.dwijas-details {
  background-color: #FDF6E3;
  padding: 15px 20px;
  border-radius: 10px;
  margin: 20px 0;
  color: #222;
  font-size: 15px;
}

.btn-learn {
  display: inline-block;
  background-color: #1c4021;
  color: #fff;
  padding: 10px 25px;
  border-radius: 6px;
  text-decoration: none;
  transition: all 0.3s ease;
  font-weight: 500;
}

.btn-learn:hover {
  background-color: #2a6a33;
}

.dwijas-video {
  flex: 1 1 45%;
  text-align: center;
}

.dwijas-video iframe {
  width: 100%;
  height: 300px;
  border-radius: 10px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Responsive */
@media (max-width: 900px) {
  .dwijas-wrapper {
    flex-direction: column;
  }

  .dwijas-video iframe {
    height: 250px;
  }

  .dwijas-text h3 {
    font-size: 22px;
  }
}
</style>
        
        <!-- /* Carousel Styles */ -->
         <style>
        .carousel-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: white;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .cards-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        
        .card {
            flex: 0 0 100%;
            display: flex;
            flex-direction: column;
            height: 500px;
        }
        
        .card-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.4));
        }
        
        .card-header {
            background-color: #e77727ff;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        
        .card-header h3 {
            font-size: 1.4rem;
            margin: 0;
            line-height: 1.3;
        }
        
        .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }
        
        .card-description {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
            font-size: 1rem;
        }
        
        .card-features {
            margin-bottom: 20px;
        }
        
        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #666;
        }
        
        .feature i {
            color: #e77727ff;
            margin-right: 8px;
            font-size: 0.8rem;
        }
        
        .card-actions {
            display: flex;
            justify-content: space-between;
            margin-top: auto;
            gap: 10px;
        }
        
        .card-btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            flex: 1;
            font-size: 0.9rem;
        }
        
        .card-btn-primary {
            background-color: #e77727ff;
            color: white;
        }
        
        .card-btn-primary:hover {
            background-color: #d16a1fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .card-btn-secondary {
            background-color: #e8f5e9;
            color: #2c5530;
            border: 1px solid #c8e6c9;
        }
        
        .card-btn-secondary:hover {
            background-color: #d4edda;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* Carousel Navigation */
        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.9);
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .carousel-nav:hover {
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-50%) scale(1.1);
        }
        
        .carousel-nav.prev {
            left: 15px;
        }
        
        .carousel-nav.next {
            right: 15px;
        }
        
        .carousel-nav svg {
            width: 20px;
            height: 20px;
            fill: #2c3e50;
        }
        
        /* Carousel Indicators */
        .carousel-indicators {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            gap: 10px;
        }
        
        .carousel-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #bdc3c7;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .carousel-indicator.active {
            background: #e77727ff;
            transform: scale(1.2);
        }
        
        @media (max-width: 768px) {
            .card {
                height: 550px;
            }
            
            .card-actions {
                flex-direction: column;
            }
            
            .carousel-nav {
                width: 40px;
                height: 40px;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .card {
                height: 580px;
            }
            
            .card-header h3 {
                font-size: 1.2rem;
            }
            
            .card-body {
                padding: 20px;
            }
        }
    </style>
</head>

<br>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Programs Carousel</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* --- Basic Page Styles --- */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 40px 0;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .header p {
            font-size: 1.1rem;
            color: #555;
        }

        /* --- Swiper Carousel Styles --- */
        .swiper {
            width: 100%;
            padding-top: 20px;
            padding-bottom: 50px; /* Space for pagination */
        }

        .swiper-slide {
            display: flex;
            align-items: stretch; /* Makes all slides equal height */
            height: auto; /* Let content decide height */
        }
        
        /* --- Your New Card Styles --- */
        .card {
            width: 100%; 
            height: 100%; /* Makes card fill the slide height */
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            display: flex;
            flex-direction: column; /* Stacks image, body, etc. vertically */
        }

        .card-image {
            position: relative;
            width: 100%;
            height: 200px; /* Fixed height for image */
            overflow: hidden;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures image covers the area */
            transition: transform 0.3s ease;
        }

        .card:hover .card-image img {
            transform: scale(1.05);
        }

        .card-image .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 60%);
            z-index: 1;
        }
        
        .card-header {
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 15px;
            z-index: 2;
        }

        .card-header h3 {
            margin: 0;
            font-size: 1.3rem;
            color: #ffffff;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }
        
        .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1; /* Makes body fill remaining space */
        }

        .card-description {
            font-size: 0.95rem;
            line-height: 1.5;
            color: #555;
            flex-grow: 1; /* Pushes buttons to the bottom */
        }
        
        .card-features {
            margin: 15px 0;
            flex-grow: 1; /* Fills space to align buttons */
        }
        
        .feature {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: #444;
            margin-bottom: 8px;
        }
        
        .feature i {
            color: #d9534f; /* Red theme color */
            width: 16px;
            text-align: center;
        }
        
        .card-actions {
            margin-top: 20px; /* Changed from margin-top: auto */
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .card-btn {
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 0.9rem;
            font-weight: 600;
            text-align: center;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            flex-grow: 1;
        }
        
        .card-btn-primary {
            background-color: #d9534f; /* Red button like your image */
            color: white;
        }
        .card-btn-primary:hover {
            background-color: #c9302c;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .card-btn-secondary {
            background-color: #f7f7f7;
            color: #333;
            border: 1px solid #ddd;
        }
        .card-btn-secondary:hover {
            background-color: #e9e9e9;
        }

        /* --- Swiper Controls Styling (like your image) --- */
        :root {
            --swiper-navigation-color: #d9534f; /* Red arrows */
            --swiper-pagination-color: #d9534f; /* Red dots */
        }
        
        .swiper-button-next,
        .swiper-button-prev {
            top: 50%; 
            transform: translateY(-50%);
        }
        
        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
        }
        
        .swiper-pagination-bullet-active {
            width: 12px;
            height: 12px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>Yoga Classes & Programs</h1>
            <p>Explore our diverse range of yoga practices and wellness programs designed for all levels</p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Children practicing yoga">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Srishti Children's Online Camp</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A specially designed online yoga camp for children to introduce them to the benefits of yoga in a fun and engaging way.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-child"></i>
                                    <span>Age Group: 7-14 years</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-laptop"></i>
                                    <span>Online sessions</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-clock"></i>
                                    <span>45-minute sessions</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Nasal cleansing practice">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Jalaneti & Pranayam</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">Learn the ancient practice of nasal cleansing (Jalaneti) combined with breathing techniques (Pranayam) for respiratory health.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-lungs"></i>
                                    <span>Respiratory health</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-wind"></i>
                                    <span>Breathing techniques</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-allergies"></i>
                                    <span>Reduces allergies</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Spiritual practice">
                            <div class="card-overlay"></div>
                             <div class="card-header">
                                <h3>Bhuta Shuddhi & Bhakti Sadhana</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A powerful practice for elemental purification combined with devotional practices to enhance spiritual growth.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-leaf"></i>
                                    <span>Elemental purification</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-pray"></i>
                                    <span>Devotional practices</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-spa"></i>
                                    <span>Spiritual growth</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Yogic nutrition">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Aahar Live Online Session</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">Learn about yogic nutrition and the right dietary practices to complement your yoga journey for holistic wellness.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-apple-alt"></i>
                                    <span>Yogic nutrition</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-utensils"></i>
                                    <span>Dietary practices</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-heart"></i>
                                    <span>Holistic wellness</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Children in nature">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Srishti Children's Camp</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">An immersive offline yoga experience for children in natural settings to connect with yoga and nature simultaneously.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-tree"></i>
                                    <span>Natural settings</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-campground"></i>
                                    <span>Residential camp</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-hiking"></i>
                                    <span>Nature activities</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://bit.ly/yogire-programs" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Sun salutation">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Surya Shakti</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A dynamic solar practice that builds strength, flexibility and vitality through a powerful sequence of postures.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-sun"></i>
                                    <span>Solar energy practice</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-dumbbell"></i>
                                    <span>Builds strength</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-bolt"></i>
                                    <span>Enhances vitality</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                     <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Eye care">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Sunayana (Eye Care Program)</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A specialized program with yogic eye exercises and practices to improve vision and reduce eye strain.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-eye"></i>
                                    <span>Improves vision</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-desktop"></i>
                                    <span>Reduces eye strain</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-clock"></i>
                                    <span>15-minute daily practice</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="assets/images/Sanmukh.jpg" alt="Meditation practice">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Shanmukhi Mudra, Pranayam & Aum Chanting</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A profound practice combining a specific hand gesture, breathing techniques, and sacred sound for inner tranquility.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-hands"></i>
                                    <span>Hand gestures (Mudra)</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-wind"></i>
                                    <span>Breathing techniques</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-music"></i>
                                    <span>Sacred sound chanting</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Full body workout">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Angamardana</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A full-body fitness system rooted in yoga that invigorates the body and reaches into the outermost parts of the limbs.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-running"></i>
                                    <span>Full-body workout</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-dumbbell"></i>
                                    <span>Builds strength</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-leaf"></i>
                                    <span>No equipment needed</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="assets/images/bhastrika.jpg" alt="Full body workout">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Bhastrika</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description"> A powerful yogic breathing practice that energizes the system, enhances lung capacity, and boosts overall vitality.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-running"></i>
                                    <span>Boosts lung capacity</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-dumbbell"></i>
                                    <span>Improves energy levels</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-leaf"></i>
                                    <span>Enhances focus & clarity</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="assets/images/yogasanas.jpg" alt="Full body workout">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Yogasanas</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A set of powerful classical yoga postures that align the body and mind, bringing stability, balance, and deep inner wellbeing.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-running"></i>
                                    <span>Improves balance & stability</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-dumbbell"></i>
                                    <span>Enhances posture & alignment</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-leaf"></i>
                                    <span>Promotes inner well-being</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Sun energy practice">
                            <div class="card-overlay"></div>
                            <div class="card-header">
                                <h3>Surya Kriya</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-description">A potent yogic practice of tremendous antiquity, designed as a holistic process for health, wellness and complete wellbeing.</p>
                            <div class="card-features">
                                <div class="feature">
                                    <i class="fas fa-sun"></i>
                                    <span>Solar energy activation</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-heartbeat"></i>
                                    <span>Holistic wellness</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-history"></i>
                                    <span>Ancient practice</span>
                                </div>
                            </div>
                            <div class="card-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="card-btn card-btn-secondary">Request a Class</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="swiper-pagination"></div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            // How many slides to show at once (like your image)
            slidesPerView: 3,
            // Space between slides
            spaceBetween: 30,
            // Makes the carousel "infinite"
            loop: true,
            
            // This is the auto-play magic
            autoplay: {
                delay: 2000, // 2 seconds, as you requested
                disableOnInteraction: false, // Keep playing even if user clicks
            },
            
            // Pagination dots (like in your image)
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            
            // Navigation arrows (like in your image)
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            
            // Responsive settings: 
            // On smaller screens, show fewer slides
            breakpoints: {
                // when window width is <= 640px
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is <= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                // when window width is <= 1024px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        });
    </script>

</body>
</html>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            padding: 40px 20px;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2.8rem;
            color: black;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .section-title p {
            color: black;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        /* Special Programs Grid */
        .special-programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .program-item {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .program-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }
        
        .program-item-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .program-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .program-item:hover .program-item-image img {
            transform: scale(1.05);
        }
        
        .program-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #e77727;
            color: white;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .program-content {
            padding: 25px;
        }
        
        .program-type {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 0.9rem;
            color: #666;
        }
        
        .program-type i {
            margin-right: 8px;
            color: #e77727;
        }
        
        .program-item h3 {
            font-size: 1.4rem;
            color: #333;
            margin-bottom: 12px;
            line-height: 1.3;
            font-weight: 600;
        }
        
        .program-item-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        
        .program-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #f0f0f0;
        }
        
        .program-date {
            color: #888;
            font-size: 0.9rem;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            font-size: 0.9rem;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background-color: #e77727;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #d16a1f;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(231, 119, 39, 0.3);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .special-programs-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .program-content {
                padding: 20px;
            }
        }
        
        @media (max-width: 576px) {
            body {
                padding: 30px 15px;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .program-item h3 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>



<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Agni - Light the fire Within!</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Lora:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg-color:#3d0b09;
      --bg-texture: url('/path/to/your/texture.jpg');
      --accent:#d9733b;
      --muted:#eecb8a;
      --copy:#f5eee8;
      --heading-font: "Playfair Display", serif;
      --body-font: "Lora", serif;
    }

    *{box-sizing:border-box;margin:0;padding:0}
    body{
      font-family:var(--body-font);
      color:var(--copy);
      line-height:1.7;
      padding:40px 20px;
      background:#fff;
    }

    .container{
      max-width:1180px;
      margin:0 auto;
    }

    .vol-section{
      padding:60px 0 60px; /* reduced bottom padding */
      background-color:var(--bg-color);
      background-image:
        linear-gradient(rgba(43,10,9,0.65), rgba(43,10,9,0.65)),
        var(--bg-texture);
      background-size:cover;
      background-position:center;
      color:var(--copy);
    }

    .row, .row-reverse{
      display:flex;
      gap:40px;
      align-items:center;
      justify-content:space-between;
      margin-bottom:100px;
    }

    .img-card{
      flex:0 0 340px;
      background:#1113;
      padding:12px;
      border-radius:50%;
      box-shadow:0 8px 20px rgba(0,0,0,0.6);
      display:flex;
      justify-content:center;
      align-items:center;
      overflow:hidden;
    }

    .img-card img{
      width:100%;
      height:100%;
      object-fit:cover;
      border-radius:50%;
      aspect-ratio:1/1;
    }

    .text-large, .text-block{
      flex:1;
    }

    .main-heading{
      font-family:var(--heading-font);
      font-weight:700;
      font-size:58px;
      color:#fff;
      margin-bottom:8px;
      line-height:1;
      text-shadow:0 5px 0 rgba(0,0,0,0.4);
    }

    /* keep Agastya heading in one line */
    .text-block .main-heading{
      white-space: nowrap;
    }

    .sub-heading{
      color:var(--muted);
      font-family:var(--heading-font);
      font-size:20px;
      margin-bottom:18px;
    }

    .lead{
      color:var(--copy);
      max-width:600px;
      margin-bottom:18px;
      font-size:16px;
    }

    .btn{
      display:inline-block;
      background:var(--accent);
      color:white;
      padding:10px 16px;
      border-radius:4px;
      text-decoration:none;
      font-weight:700;
      font-size:14px;
      box-shadow:0 3px 0 rgba(0,0,0,0.35);
    }

    .center-heading{
      text-align:center;
      margin:40px 0 40px;
    }
    .center-heading h2{
      font-family:var(--heading-font);
      font-size:56px;
      margin-bottom:6px;
      color:#fff;
    }
    .center-heading p{
      color:var(--muted);
      font-size:20px;
      margin-top:0;
    }

    @media (max-width:1000px){
      .row, .row-reverse{flex-direction:column-reverse; text-align:center}
      .img-card{width:280px; height:280px; margin:0 auto;}
      .main-heading{font-size:44px}
      .center-heading h2{font-size:36px}
      .text-large, .text-block{max-width:unset}
    }

    @media (max-width:480px){
      body{padding:20px 12px}
      .main-heading{font-size:32px}
      .lead, .text-block{font-size:15px}
      .img-card{width:220px;height:220px;}
    }
  </style>
</head>
<body>
  <section class="vol-section">
    <div class="container">
      <div class="row">
        <div class="img-card">
          <img src="assets/images/agni-cover-home.png" alt="volunteers">
        </div>

        <div class="text-large">
          <h1 class="main-heading">Agni - Light the fire Within!</h1>
          <div class="sub-heading">Inspired by</div>

          <p class="lead">
            Sadhguru's insights, we are happy to present a series of practical yet 
            profound experiments that you can easily implement and experience yourself the magic 
            that is Yoga!
          </p>

          <a class="btn" href="#">Agni Initiative!</a>
        </div>
      </div>

      <!-- Agastya section -->
      <div class="row-reverse">
        <div class="text-block">
          <h1 class="main-heading">Agastya - Yoga, for Everyone!</h1>
          <br>
          <p>
            Agastya is a Yogi Re initiative to bring yoga to underprivileged sections of the society 
            in a sustainable way. So far, we have been conducting Isha Hatha Yoga programs in 
            3 schools/orphanages/special kids institutes, changing 350+ young lives!
          </p>
          <br>
          <p><strong>Sponsor:</strong> Just ₹600 / per year from your end could transform a kid's life!</p>
          <br>
          <a class="btn" href="#">Agastya Initiative!</a>
        </div>

        <div class="img-card">
          <img src="assets/images/agastya.png" alt="donation">
        </div>
      </div>
    </div>
  </section>
</body>
</html>




    <!-- Sharings -->
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sharings </title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lora&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head> 
<body>

  <!-- ===== Sharings Section (Exact Replica Style) ===== -->
  <section class="sharings-section">
    <div class="container">
      <h2 class="sharings-title">Sharings!</h2>
      <div class="sharings-divider">
        <span></span><i>✦</i><span></span>
      </div>

      <div class="sharings-cards">
         
        <!-- Card 1 -->
        <div class="sharing-card">
          <img src="assets/images/jala.png" alt="Chandana" class="sharing-img">
          <div class="sharing-content">
            <p>“I have been practicing Jalaneti over a year. It has changed my quality of sleep/life unimaginable! I was on steroidal medicines and advised sinus operation and I could avoid both with Jalaneti. Deeply grateful!”</p>
            <h3>— Chandana, Jalaneti Participant</h3>
          </div>
        </div> 

        <!-- Card 2 -->
         <div class="sharing-card">
          <img src="assets/images/sid.png" alt="Gouri and Prasad" class="sharing-img">
          <div class="sharing-content">
            <p>“Dear Mukulji, Thank you for taking care of our son Siddhant and giving him the best memories of his primary school holidays. Since the day he returned from the Srishti camp, he has been constantly raving about the amazing time he had with all of you... heartfelt gratitude to all who made it happen.”</p>
            <h3>— Gouri and Prasad, Parents of a Srishti Participant Siddhant</h3>
          </div>
        </div> 

        <!-- Card 3 -->
        <div class="sharing-card">
          <img src="assets/images/t8.png" alt="Diyanta" class="sharing-img">
          <div class="sharing-content">
            <p>“It was a wonderful experience with Mukul Anna. I wish I could stay connected with him lifelong... Mukul Anna was the best teacher I have ever met. Thanks for teaching us yoga and taking care of us like your own children 🙏”</p>
            <h3>— Diyanta Nair, Participant</h3>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="sharing-card">
          <img src="assets/images/t7.png" alt="Pallavi" class="sharing-img">
          <div class="sharing-content">
            <p>“Mukul, you and your team are magic weavers... the kids who would not budge even at 6:30 from bed are waking up voluntarily at 5:30, doing yoga and eating right! In just 2 and a half days they are transformed. Sadhguru’s grace is certainly at work here 🙏”</p>
            <h3>— Pallavi Mishra, Parent & Principal, Oakridge International School, Bengaluru</h3>
          </div>
        </div>

      </div>
    </div>
  </section>

</body>
</html>
<style>
    body {
  margin: 0;
  font-family: 'Lora', serif;
  background-color: #fff;
}

/* --- Sharings Section --- */
.sharings-section {
  background-color: #0b0663; /* Deep navy blue (only for this section) */
  color: white;
  padding: 70px 8%;
  text-align: center;
}

.sharings-title {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  margin-bottom: 15px;
  color: #fff;
}

.sharings-divider {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 50px;
}

.sharings-divider span {
  height: 2px;
  width: 80px;
  background: white;
  display: inline-block;
}

.sharings-divider i {
  margin: 0 10px;
  color: white;
  font-size: 20px;
}

.sharings-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
}

.sharing-card {
  background: #fff;
  color: #333;
  border-radius: 10px;
  overflow: hidden;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.sharing-card:hover {
  transform: translateY(-5px);
}

.sharing-img {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  object-fit: cover;
  display: block;
  margin: 25px auto 15px;
  border: 5px solid #c47b00; /* golden border */
}

.sharing-content {
  padding: 0 25px 30px;
}

.sharing-content p {
  font-size: 15px;
  line-height: 1.6;
  margin-bottom: 15px;
  color: #333;
}

.sharing-content h3 {
  font-size: 16px;
  color: #c47b00;
  font-weight: 700;
  font-family: 'Playfair Display', serif;
}

/* Responsive Layouts */
@media (max-width: 1100px) {
  .sharings-cards {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 700px) {
  .sharings-cards {
    grid-template-columns: 1fr;
  }
}
</style> 

<!-- Volunteer Section -->
<section class="volunteer-section">
  <div class="container">
    <div class="volunteer-card">
      <!-- Image -->
      <div class="volunteer-image">
        <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" alt="Volunteering">
      </div>

      <!-- Text Content -->
      <div class="volunteer-text-box">
        <h2>Volunteer with Yogi Re!</h2>
        <!-- <h4>SELFLESS SERVICE</h4> -->
        <p>
          "No spiritual process will happen to any human being unless he becomes willingness. 
          Thus, volunteering is a tremendous tool in creating that willingness."
        </p>
        <p>- SADHGURU</p>
        <p>
          If you are keen to volunteer with us, please fill the form using the link below and 
          we will get in touch with you whenever there is a suitable opportunity.
        </p>
        <a href="https://yogire.com/volunteer/" class="btn-volunteer" target="_blank">
          I'M INTERESTED
        </a>
      </div>
    </div>
  </div>
</section>
<style>
    /* Volunteer Section Styling (matching the screenshot design) */
.volunteer-section {
  padding: 60px 0;
  background-color: #faf5ee; /* same as Save Soil card background */
  font-family: 'Open Sans', sans-serif;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

.volunteer-card {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f8f3ea;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.volunteer-image img {
  width: 100%;
  max-width: 600px;
  height: 100%;
  object-fit: cover;
  display: block;
}

.volunteer-text-box {
  background-color: #f8f3ea;
  padding: 40px 50px;
  flex: 1;
}

.volunteer-text-box h2 {
  font-size: 2rem;
  color: #222;
  font-weight: 700;
  margin-bottom: 10px;
}

.volunteer-text-box h4 {
  font-size: 1rem;
  letter-spacing: 1px;
  color: #666;
  font-weight: 600;
  margin-bottom: 20px;
}

.volunteer-text-box p {
  font-size: 1rem;
  color: #333;
  line-height: 1.7;
  margin-bottom: 20px;
}

.btn-volunteer {
  display: inline-block;
  background-color: #c94b2b; /* Orange-red same as Save Soil button */
  color: white;
  padding: 12px 30px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: 600;
  transition: 0.3s;
}

.btn-volunteer:hover {
  background-color: #a63f23;
}

/* Responsive */
@media (max-width: 992px) {
  .volunteer-card {
    flex-direction: column;
  }

  .volunteer-image img {
    width: 100%;
  }

  .volunteer-text-box {
    padding: 30px;
  }
}

</style>



<section class="about-mukul">
  <div class="container">
    <!-- Left Content -->
    <div class="about-mukul-content">
      <h2>Namaskaram from Mukul Anna!</h2>
      <blockquote>
        Mukul underwent intense teacher training designed by Sadhguru, founder of Isha Foundation, and has personally conducted 400+ workshops across India in the last 8 years, touching over 8000 lives!
        <br /><br />
        All our yoga programs are designed by Sadhguru, founder of Isha Foundation.
      </blockquote>
    </div>

    <!-- Right YouTube Video -->
    <div class="about-mukul-video">
      <iframe
        src="https://www.youtube.com/embed/Pec1nUDkxvI"
        title="Mukul Anna Video"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>

<style>
.about-mukul {
  background: linear-gradient(135deg, #1a2a6c, #b21f1f);
  color: white;
  padding: 80px 0;
  position: relative;
  overflow: hidden;
}

.about-mukul .container {
  max-width: 1300px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  align-items: flex-start; /* Align top edges equally */
  justify-content: space-between;
  gap: 80px;
  position: relative;
  z-index: 2;
}

/* Text Content */
.about-mukul-content {
  flex: 1;
  min-width: 380px;
}

.about-mukul-content h2 {
  font-size: 2.6rem;
  white-space: nowrap;
  margin-bottom: 30px;
  font-weight: 700;
  color: #fdbb2d;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.about-mukul-content blockquote {
  font-size: 1.3rem;
  line-height: 1.8;
  border-left: 5px solid #fdbb2d;
  padding-left: 25px;
  margin: 25px 0;
  font-style: italic;
  background: rgba(255, 255, 255, 0.1);
  padding: 25px;
  border-radius: 0 15px 15px 0;
  backdrop-filter: blur(10px);
  max-width: 650px;
}

/* YouTube Video */
.about-mukul-video {
  flex: 0 0 500px;
  max-width: 500px;
  aspect-ratio: 16 / 9;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
  margin-top: 55px; /* Aligns perfectly with paragraph card */
}

.about-mukul-video iframe {
  width: 100%;
  height: 100%;
  border: none;
  border-radius: 15px;
}

/* Responsive */
@media (max-width: 992px) {
  .about-mukul .container {
    flex-direction: column;
    text-align: center;
    gap: 40px;
    align-items: center;
  }

  .about-mukul-content h2 {
    white-space: normal;
  }

  .about-mukul-content blockquote {
    text-align: left;
    margin: 0 auto;
  }

  .about-mukul-video {
    width: 90%;
    max-width: 600px;
    margin-top: 0;
  }
}
</style>




    <!-- Wisdom Section -->
    <!-- <section class="wisdom">
        <div class="container">
            <div class="section-title">
                <h2>Latest in Wisdom</h2>
                <p>Explore insights and teachings from our yoga masters and practitioners.</p>
            </div>
            
            <div class="wisdom-grid">
                <div class="wisdom-card">
                    <div class="wisdom-img">
                        <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Woman practicing yoga">
                    </div>
                    <div class="wisdom-content">
                        <h3>The Unfolding Amplitude of Self</h3>
                        <p>Discover how consistent yoga practice can lead to profound personal transformation and expanded consciousness.</p>
                        <a href="#" class="wisdom-link">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="wisdom-card">
                    <div class="wisdom-img">
                        <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Man in white robe speaking">
                    </div>
                    <div class="wisdom-content">
                        <h3>SURYA KRIYA: Harnessing Solar Energy</h3>
                        <p>Learn how this ancient practice taps into the sun's energy to revitalize your body and awaken your inner potential.</p>
                        <a href="#" class="wisdom-link">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="wisdom-card">
                    <div class="wisdom-img">
                        <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Man meditating outdoors">
                    </div>
                    <div class="wisdom-content">
                        <h3>ANGAMARDANA: The Complete Fitness System</h3>
                        <p>Explore this powerful yoga system that builds strength, flexibility, and vitality without equipment or weights.</p>
                        <a href="#" class="wisdom-link">
                            Read More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 50px;">
                <a href="#" class="btn btn-outline">View All Articles</a>
            </div>
        </div>
    </section> -->

    <!-- Testimonial Section -->
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-content">
                <p>Angamardana has brought new levels of strength, flexibility, and mental clarity into my life. The transformation has been remarkable both physically and mentally.</p>
                <div class="testimonial-author">— Mitchell L.</div>
                <div class="testimonial-role">Angamardana Practitioner, 2 years</div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Yogi Re</h3>
                    <p>Bringing the profound benefits of classical yoga to everyone, creating a community dedicated to wellness, self-discovery, and inner transformation.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Programs</h3>
                    <ul class="footer-links">
                        <li><a href="#">Angamardana</a></li>
                        <li><a href="#">Surya Kriya</a></li>
                        <li><a href="#">Surya Shakti</a></li>
                        <li><a href="#">Yogasanas</a></li>
                        <li><a href="#">Srishti Camps</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Bangalore, India</p>
                    <p><i class="fas fa-phone"></i> +91-8217481232</p>
                    <p><i class="fas fa-envelope"></i> info@yogire.com</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 Yogi Re. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Chat Button -->
<div class="whatsapp-chat">
    <a href="https://wa.me/918217481232" target="_blank" class="whatsapp-btn">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<style>
    .whatsapp-chat {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
}

.whatsapp-btn {
    background-color: #25D366;
    color: white;
    padding: 14px 16px;
    border-radius: 50%;
    font-size: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.25);
    transition: transform 0.2s ease;
}

.whatsapp-btn:hover {
    transform: scale(1.1);
}
</style>

    <script>
        // Simple mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Hero Carousel functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.indicator');
            let currentSlide = 0;
            const slideCount = slides.length;
            
            // Function to show a specific slide
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => {
                    slide.classList.remove('active');
                });
                
                // Remove active class from all indicators
                indicators.forEach(indicator => {
                    indicator.classList.remove('active');
                });
                
                // Show the selected slide
                slides[index].classList.add('active');
                
                // Activate the corresponding indicator
                indicators[index].classList.add('active');
                
                currentSlide = index;
            }
            
            // Function to advance to the next slide
            function nextSlide() {
                let nextIndex = (currentSlide + 1) % slideCount;
                showSlide(nextIndex);
            }
            
            // Set up automatic slide change every 2 seconds
            let slideInterval = setInterval(nextSlide, 2000);
            
            // Add click event listeners to indicators
            indicators.forEach(indicator => {
                indicator.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    showSlide(index);
                    
                    // Reset the interval when manually changing slides
                    clearInterval(slideInterval);
                    slideInterval = setInterval(nextSlide, 2000);
                });
            });
            
            // Pause carousel on hover
            const carousel = document.querySelector('.hero-carousel');
            carousel.addEventListener('mouseenter', function() {
                clearInterval(slideInterval);
            });
            
            carousel.addEventListener('mouseleave', function() {
                slideInterval = setInterval(nextSlide, 2000);
            });
        });

        // Yoga Classes & Programs Carousel functionality
        document.addEventListener('DOMContentLoaded', function() {
            const cardsWrapper = document.querySelector('.cards-wrapper');
            const cards = document.querySelectorAll('.card');
            const prevBtn = document.querySelector('.carousel-nav.prev');
            const nextBtn = document.querySelector('.carousel-nav.next');
            const indicatorsContainer = document.querySelector('.carousel-indicators');
            
            let currentIndex = 0;
            const totalCards = cards.length;
            let autoSlideInterval;
            
            // Create indicators
            for (let i = 0; i < totalCards; i++) {
                const indicator = document.createElement('div');
                indicator.classList.add('carousel-indicator');
                if (i === 0) indicator.classList.add('active');
                indicator.addEventListener('click', () => goToSlide(i));
                indicatorsContainer.appendChild(indicator);
            }
            
            const indicators = document.querySelectorAll('.carousel-indicator');
            
            // Function to update carousel position
            function updateCarousel() {
                cardsWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
                
                // Update active indicator
                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle('active', index === currentIndex);
                });
            }
            
            // Function to go to specific slide
            function goToSlide(index) {
                currentIndex = index;
                updateCarousel();
                resetAutoSlide();
            }
            
            // Function to go to next slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalCards;
                updateCarousel();
            }
            
            // Function to go to previous slide
            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalCards) % totalCards;
                updateCarousel();
            }
            
            // Function to start auto slide
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 2000); // Change slide every 2 seconds
            }
            
            // Function to reset auto slide timer
            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }
            
            // Event listeners for navigation buttons
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetAutoSlide();
            });
            
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetAutoSlide();
            });
            
            // Pause auto slide on hover
            const carouselContainer = document.querySelector('.carousel-container');
            carouselContainer.addEventListener('mouseenter', () => {
                clearInterval(autoSlideInterval);
            });
            
            carouselContainer.addEventListener('mouseleave', () => {
                startAutoSlide();
            });
            
            // Start auto slide on page load
            startAutoSlide();
        });
    </script>
</body>
</html>