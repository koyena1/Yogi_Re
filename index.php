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
            width: 80px;   /* adjust as needed */
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

        /* Who We Are Section */
        .who-we-are {
            background-color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .who-we-are::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80') no-repeat center center/cover;
            opacity: 0.05;
            z-index: 0;
        }

        .who-we-are-content {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .who-we-are-text {
            flex: 1;
        }

        .who-we-are-text h2 {
            font-size: 2.5rem;
            color: var(--primary-dark);
            margin-bottom: 25px;
        }

        .who-we-are-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
            color: var(--text-light);
        }

        .who-we-are-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .who-we-are-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }

        .who-we-are-image:hover img {
            transform: scale(1.05);
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
        .dwijas-program {
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
        }
        
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


        /* /=============================================\
        |            NEW CSS STYLES ADDED             |
        \=============================================/
        */
        
        /* Broadcast Section */
        .broadcast-section {
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
        }
        
        /* Volunteer Section */
        .volunteer-section {
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
        }

        /* /=============================================\
        |           END OF NEW CSS STYLES             |
        \=============================================/
        */


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
            
        

            /* --- NEW RESPONSIVE CSS --- */
            .initiatives-grid {
                grid-template-columns: 1fr;
            }
            
            .special-programs-grid {
                grid-template-columns: 1fr;
            }
            /* --- END NEW RESPONSIVE CSS --- */
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

            /* NEW RESPONSIVE STYLES */
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
            /* END NEW RESPONSIVE STYLES */
        }

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
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="hero">
        <div class="hero-carousel">
            <div class="carousel-slide active" style="background-image: url('yogis.png')"></div>
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

    <section class="who-we-are">
        <div class="container">
            <div class="who-we-are-content">
                <div class="who-we-are-text">
                    <h2>Who We Are</h2>
                    <p>Yogi Re conducts various classical Isha Hatha Yoga programs like Angamardana, Surya Kriya, Surya Shakti, Jalaneti across Bangalore as well as holistic camps like Srishti for children. And we are quite happy doing our bit by helping people find their inner bliss and stillness!</p>
                    <p>Our mission is to bring the profound benefits of classical yoga to everyone, creating a community dedicated to wellness, self-discovery, and inner transformation.</p>
                    
                    <div class="programs-highlight">
                        <span class="program-tag">Angamardana</span>
                        <span class="program-tag">Surya Kriya</span>
                        <span class="program-tag">Surya Shakti</span>
                        <span class="program-tag">Jalaneti</span>
                        <span class="program-tag">Srishti Camps</span>
                    </div>
                </div>
                
                <div class="who-we-are-image">
                    <img src="https://images.unsplash.com/photo-1594736797933-d0c1388b1682?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Yoga community">
                </div>
            </div>
        </div>
    </section>
      
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Classes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            padding: 20px;
            color: #333333ff;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px;
        }
        
        .header h1 {
            color: #e77727ff;
            margin-bottom: 10px;
            font-size: 2.5rem;
        }
        
        .header p {
            color: #000000ff;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .card-header {
            background-color: #e77727ff;
            color: white;
            padding: 20px;
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
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
        }
        
        .btn-primary {
            background-color: #e77727ff;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #e77727ff;
        }
        
        .btn-secondary {
            background-color: #e8f5e9;
            color: #2c5530;
        }
        
        .btn-secondary:hover {
            background-color: #d4edda;
        }
        
        
        .status {
            font-size: 0.9rem;
            color: #db7a7aff;
        }
        
        .status-available {
            color: #2c5530;
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .cards-container {
                grid-template-columns: 1fr;
            }
            
            .card-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Yoga Classes & Programs</h1>
            <p>Explore our diverse range of yoga practices and wellness programs designed for all levels</p>
        </div>
        
        <div class="cards-container">
            <!-- Srishti Children's Online Camp -->
            <div class="card">
                <div class="card-header">
                    <h3>Srishti Children's Online Camp</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">A specially designed online yoga camp for children to introduce them to the benefits of yoga in a fun and engaging way.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/srishti/online" target="_self" class="btn btn-primary">Learn More</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Jalaneti and Pranayam -->
            <div class="card">
                <div class="card-header">
                    <h3>Jalaneti & Pranayam</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Learn the ancient practice of nasal cleansing (Jalaneti) combined with breathing techniques (Pranayam) for respiratory health.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/yogafest/#JalaNeti" target="_blank" class="btn btn-primary">Explore Now</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Bhuta Shuddhi and Bhakti Sadhana -->
            <div class="card">
                <div class="card-header">
                    <h3>Bhuta Shuddhi & Bhakti Sadhana</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">A powerful practice for elemental purification combined with devotional practices to enhance spiritual growth.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/yogafest/#BhutaShudhi" target="_blank" class="btn btn-primary">Explore Now</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Aahar Live Online Session -->
            <div class="card">
                <div class="card-header">
                    <h3>Aahar Live Online Session</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">Learn about yogic nutrition and the right dietary practices to complement your yoga journey for holistic wellness.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/aahar" target="_blank" class="btn btn-primary">Available Now</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Srishti Children's Offline Camp -->
            <div class="card">
                <div class="card-header">
                    <h3>Srishti Children's Camp</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">An immersive offline yoga experience for children in natural settings to connect with yoga and nature simultaneously.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/srishti/" target="_self" class="btn btn-primary">Learn More</a>
                        <a href="https://yogire.com/enquiry" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Surya Shakti -->
            <div class="card">
                <div class="card-header">
                    <h3>Surya Shakti</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">A dynamic solar practice that builds strength, flexibility and vitality through a powerful sequence of postures.</p>
                    <div class="card-actions">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_self" class="btn btn-primary">Learn More</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Sunayana -->
            <div class="card">
                <div class="card-header">
                    <h3>Sunayana (Eye Care Program)</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">A specialized program with yogic eye exercises and practices to improve vision and reduce eye strain.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/yogafest/#Sunayana" target="_blank" class="btn btn-primary">Explore Now</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Shanmukhi -->
            <div class="card">
                <div class="card-header">
                    <h3>Shanmukhi Mudra, Pranayam & Aum Chanting</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">A profound practice combining a specific hand gesture, breathing techniques, and sacred sound for inner tranquility.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/yogafest/#ShanmukhiMudra" target="_blank" class="btn btn-primary">Explore Now</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Angamardana -->
            <div class="card">
                <div class="card-header">
                    <h3>Angamardana</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">A full-body fitness system rooted in yoga that invigorates the body and reaches into the outermost parts of the limbs.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/yogafest/#Angamardana" target="_blank" class="btn btn-primary">Register</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
            
            <!-- Surya Kriya -->
            <div class="card">
                <div class="card-header">
                    <h3>Surya Kriya</h3>
                </div>
                <div class="card-body">
                    <p class="card-description">A potent yogic practice of tremendous antiquity, designed as a holistic process for health, wellness and complete wellbeing.</p>
                    <div class="card-actions">
                        <a href="https://yogire.com/yogafest/#SuryaKriya" target="_blank" class="btn btn-primary">Learn More</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank" class="btn btn-secondary">Request a Class</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

     <br>
     <br>


    <section class="special-programs">
        <div class="container">
            <div class="section-title">
                <h2>Special Programs</h2>
                <p>Discover our unique offerings designed for specific needs and age groups</p>
            </div>
            
            <div class="special-programs-grid">
                <div class="program-item">
                    <h2>Srishti Online Camp</h2>
                    <div class="program-item-image">
                        <img src="assets/images/sid.png" alt="Srishti Online Camp">
                    </div>
                    <p class="program-item-description">
                        A holistic online camp for children and teens, to introduce vital elements – nature, yoga, food and play!
                    </p>
                    <p class="program-item-details">
                        Srishti Online Camp for Children/Teens<br>
                        Age Group: 07 to 14 years
                    </p>
                    <a href="#" class="btn btn-primary">Explore Now</a>
                </div>

                <div class="program-item">
                    <h2>Aahar Live Online Session</h2>
                    <div class="program-item-image">
                        <img src="assets/images/aahar.png" alt="Aahar Live Online Session">
                    </div>
                    <p class="program-item-description">
                        Aahar is a live online session on Yogic Diet based on guidelines by Sadhguru. So far, over 1500+ people have gone through this program. Please tap the button below to attend our next session online, from the comfort of your home.
                    </p>
                    <a href="#" class="btn btn-primary">Explore Now</a>
                </div>

                <div class="program-item">
                    <h2>Hatha Yoga Fest</h2>
                    <div class="program-item-image">
                        <img src="assets/images/round_YogaFestCover2.png" alt="Hatha Yoga Fest">
                    </div>
                    <p class="program-item-description">
                       Hatha Yoga Fest will be an opportunity for beginners and yoga adepts alike to learn and explore Classical yoga in its purest form
                    </p>
                    <a href="#" class="btn btn-primary">Explore Now</a>
                </div>

                <div class="program-item">
                    <h2>Sristi Children's Camp</h2>
                    <div class="program-item-image">
                        <img src="assets/images/round_srishti_her0_image.png" alt="Sristi Children's Camp">
                    </div>
                    <p class="program-item-description">
                       A fun-filled holistic residential camp to re-introduce vital elements — nature, yoga, food, and play to your child's life.
                    </p>
                    <a href="#" class="btn btn-primary">Explore Now</a>
                </div>
            </div>
        </div>
    </section>


    <section class="dwijas-program">
        <div class="container">
            <div class="dwijas-content">
                
                <h3>Dwijas — A 21 Day Live Online Session</h3>
                
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/-usaxUsizZ8" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>

                <p class="dwijas-description">
                    Dwijas is a 21 Day live online session for aspiring Yogis to explore all aspects of a Yogic lifestyle, based on the guidelines by Sadhguru.
                </p>
                <p class="dwijas-description">
                    With the goal of making every aspect of your life as a tool for your ultimate well-being, we will be exploring all aspects of life — right from how to wake up, how to take a bath, how to eat, how to drink, how to speak, what to wear, when to sleep, to how to sleep.
                </p>

                <div class="dwijas-details">
                    <strong>Nov 2 - 22, 2025</strong>
                    <b>Batch 1</b><br>
                    3:30 AM to 4:45 AM IST<br>
                    (Coinciding with Brahma muhurtam in India)<br><br>
                    
                    <b>Batch 2</b><br>
                    3.30 to 4.45 AM CST/ 4.30 to 5.45 AM EST/ 2 to 3.15 PM IST<br>
                    (Coinciding with Brahma Muhurtam in USA/Canada)
                </div>

                <br>
                
                <a class="btn btn-primary" href="https://yogire.com/dwijas" target="_blank">
                    Explore Now
                </a>
                
            </div>
        </div>
    </section>
    <section class="initiatives">
        <div class="container">
            <div class="section-title">
                <h2>Our Initiatives</h2>
                <p>Discover special initiatives inspired by yogic principles to make a difference.</p>
            </div>
            
            <div class="initiatives-grid">
                <div class="initiative-card">
                    <a href="https://yogire.com/agni" target="_blank">
                        <img src="assets/images/agni-cover-home.png" alt="Agni Initiative">
                    </a>
                    <h3>Agni - Light the Fire Within!</h3>
                    <p>
                        Inspired by Sadhguru's insights, we are happy to present a series of practical yet profound experiments that you can easily implement and experience yourself the magic that is Yoga!
                    </p>
                    <a class="btn btn-primary" href="https://yogire.com/agni/" target="_blank">
                        Agni Initiative!
                    </a>
                </div>

                <div class="initiative-card">
                    <a href="https://yogire.com/agastya" target="_blank">
                        <img src="assets/images/agastya.png" alt="Agastya Initiative">
                    </a>
                    <h3>Agastya - Yoga, for Everyone!</h3>
                    <p>
                        Agastya is a Yogi Re initiative to bring yoga to underprivileged sections of the society in a sustainable way. So far, we have been conducting Isha Hatha Yoga programs in 3 schools/orphanages/special kids institutes, changing 350+ young lives! 
                        <br><br>
                        <strong>Sponsor:</strong> Just ₹600 / per year from your end could transform a kid's life!
                    </p>
                    <a class="btn btn-primary" href="https://yogire.com/agastya/" target="_blank">
                        Agastya Initiative!
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="programs">
        <div class="container">
            <div class="section-title">
                <h2>Our Programs</h2>
                <p>Discover our carefully crafted yoga programs designed to nurture your body, mind, and spirit.</p>
            </div>
            
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h3>Angamardana</h3>
                    <p>A system of yoga that offers everyone the opportunity to invigorate the body and reach peak physical and mental health.</p>
                    <a href="#" class="program-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <h3>Surya Kriya</h3>
                    <p>A potent yogic practice of tremendous antiquity, designed as a holistic process for health, wellness, and inner transformation.</p>
                    <a href="#" class="program-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Yogasanas</h3>
                    <p>A way of aligning the inner system and adjusting it to the celestial geometry, becoming in sync with the existence.</p>
                    <a href="#" class="program-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Srishti Camps</h3>
                    <p>A unique offering that provides an opportunity for profound inner exploration and connection with nature.</p>
                    <a href="#" class="program-link">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="broadcast-section">
         <div class="container">
            <div class="broadcast-content">
                <h3>Stay Updated - Join the Yogi Re broadcast</h3>
                <img alt="Broadcast details" src="assets/images/BroadcastDetails.png">
                <p>We have a WhatsApp broadcast group where you can get daily yogic updates. You can also get information on upcoming Isha & Yogi Re programs. If you would like to join the group, please tap the link below</p>
                <a class="btn btn-primary" href="http://yogire.com/whatsapp" target="_blank">
                    Let Me In! (WhatsApp)
                </a>
                
                <p style="margin-top: 30px; margin-bottom: 0;">If you are unable to join using links above, please send us a message on</p> 
                <h5 class="broadcast-phone">+91-8217481232</h5>
                <p style="margin-top: 5px;">to add you.</p>
            </div>
         </div>
    </section>

    <section class="volunteer-section">
         <div class="container">
            <div class="volunteer-content">
                <h3>Volunteer with Yogi Re!</h3>
                <img alt="Volunteering" src="assets/images/volunteerHands.jpeg">
                
                <blockquote>
                    <p>"No spiritual process will happen to any human being unless he becomes willingness. Thus, volunteering is a tremendous tool in creating that willingness."</p>
                    <footer>— Sadhguru</footer>
                </blockquote>
                
                <p class="volunteer-text">
                    If you are keen to volunteer with us, can pls fill the form using the link below and we can get in touch with you whenever there is a suitable opportunity. 
                </p>
                <a class="btn btn-primary" href="https://yogire.com/volunteer/" target="_blank">
                    I'm interested
                </a>
            </div>
         </div>
    </section>

    <section class="wisdom">
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
    </section>

    <section class="testimonial">
        <div class="container">
            <div class="testimonial-content">
                <p>Angamardana has brought new levels of strength, flexibility, and mental clarity into my life. The transformation has been remarkable both physically and mentally.</p>
                <div class="testimonial-author">— Mitchell L.</div>
                <div class="testimonial-role">Angamardana Practitioner, 2 years</div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <div class="whatsapp-chat">
        <a href="https://wa.me/918217481232" target="_blank" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i>
            <span class="whatsapp-label">Chat with us</span>
        </a>
    </div>

    <script>
        // Simple mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Carousel functionality
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
    </script>
</body>
</html>