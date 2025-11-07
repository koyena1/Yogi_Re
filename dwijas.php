<?php
// ========================================================================
// PART 1: FETCH DYNAMIC CONTENT FROM DATABASE
// ========================================================================
include 'includes/db_connect.php'; // Connect to your database

// Fetch Program Details
$program = $conn->query("SELECT * FROM program_details WHERE id = 1")->fetch_assoc();

// Fetch Payment Links and store in an easy-to-use array
$links_result = $conn->query("SELECT * FROM payment_links");
$links = [];
while ($row = $links_result->fetch_assoc()) {
    $links[$row['level_name']] = $row['link_url'];
}

// Fetch Fee Levels
$fees_result = $conn->query("SELECT * FROM fee_levels");
$fees = [];
while ($row = $fees_result->fetch_assoc()) {
    $fees[$row['level_name']] = $row; // Store the whole row (person/family)
}

// Fetch Testimonials
$testimonials = $conn->query("SELECT * FROM testimonials");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dwijas from Yogi Re - A 21 Day Online Program To Explore the Yogic Life!</title>
    <meta name="keywords" content="Dwijas, ayurveda, yoga, satvic, yogic diet, diet plan, nutrition">
    <meta name="description" content="A 21 Day Online Program To Explore the Yogic Life!">
    <meta property="og:image" content="https://yogire.com/dwijas/img/DwijasLog.jpg"/>
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Vidaloka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #414b14;
            --primary-dark: #313b07;
            --primary-light: #4b5836;
            --accent: #d7e693;
            --text-dark: #4B3F36;
            --text-light: #767676;
            --background: #FFF7ED;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Domine', serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--background);
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Vidaloka', serif;
            font-weight: 400;
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
        
        /* NEW MODERN HERO SECTION STYLES */
        .hero {
            position: relative;
            background: linear-gradient(135deg, rgba(65, 75, 20, 0.9), rgba(75, 88, 54, 0.8)), url('assets/images/yogis.png') center/cover no-repeat;
            color: white;
            padding: 120px 0 80px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 50%, rgba(215, 230, 147, 0.15) 0%, transparent 50%);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .hero-text {
            padding-right: 20px;
        }
        
        .hero-logo {
            max-width: 180px;
            margin-bottom: 25px;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
        }
        
        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero .lead {
            font-size: 1.4rem;
            margin-bottom: 30px;
            color: var(--accent);
            font-weight: 500;
        }
        
        .program-dates {
            margin-bottom: 40px;
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }
        
        .program-dates h6 {
            font-size: 1.1rem;
            line-height: 1.6;
        }
        
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .hero-image {
            width: 100%;
            max-width: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transform: perspective(1000px) rotateY(-5deg) rotateX(5deg);
            transition: var(--transition);
        }
        
        .hero-image:hover {
            transform: perspective(1000px) rotateY(0) rotateX(0);
        }
        
        .hero-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
        
        .floating-element {
            position: absolute;
            background: rgba(215, 230, 147, 0.2);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-element:nth-child(2) {
            width: 40px;
            height: 40px;
            top: 70%;
            left: 15%;
            animation-delay: 1s;
        }
        
        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 30%;
            right: 10%;
            animation-delay: 2s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }
        
        .hero-cta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }
        
        .btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 1.5rem;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-10px);
            }
            60% {
                transform: translateX(-50%) translateY(-5px);
            }
        }
        
        /* Testimonial Styles */
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .testimonial-card {
            background: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .testimonial-content {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }
        
        .testimonial-img img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .testimonial-text {
            flex: 1;
        }
        
        .testimonial-author {
            margin-top: 15px;
            font-weight: bold;
            color: var(--primary);
        }
        
        /* Gallery Styles */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }
        
        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            transition: var(--transition);
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        /* Video Container */
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        
        /* Content Box */
        .content-box {
            background: var(--white);
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            text-align: center;
        }
        
        /* Section Title */
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary);
        }
        
        /* Details Grid */
        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .detail-card {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .detail-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        /* Registration Card */
        .registration-card {
            background: var(--primary);
            color: var(--white);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow);
        }
        
        /* Floating Button - MOVED TO LEFT */
        .register-floating {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: var(--primary);
            color: white;
            padding: 15px 25px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: var(--shadow);
            z-index: 1000;
            text-align: center;
            transition: var(--transition);
        }
        
        .register-floating:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
        }
        
        /* WhatsApp Button */
        .chat-with-us {
            position: fixed;
            bottom: 90px;
            right: 20px;
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: var(--shadow);
            z-index: 1000;
            font-size: 24px;
            transition: var(--transition);
        }
        
        .chat-with-us:hover {
            transform: scale(1.1);
        }
        
        /* New Elements from Old HTML */
        .program-highlight {
            background: var(--accent);
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .feature-card {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        /* NEW: Srishti Camp Styles from Old Code */
        .srishti-camp {
            padding: 60px 0;
        }
        
        .srishti-camp .tabs {
            list-style: none;
            padding: 0;
        }
        
        .srishti-camp .tabs li.active {
            text-align: center;
        }
        
        .srishti-camp .tabs li.active img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        
        .cta-button-section {
            display: inline-block;
            margin-top: 20px;
        }
        
        /* NEW: About Mukul Section - CORRECTED LAYOUT */
        .about-mukul {
            background: var(--primary);
            color: white;
            padding: 80px 0;
        }
        
        .about-mukul .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .about-mukul-content {
            order: 2; /* This will put the content on the right */
        }
        
        .about-mukul-image {
            order: 1; /* This will put the image on the left */
        }
        
        .about-mukul h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: white;
        }
        
        .about-mukul img {
            width: 100%;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .about-mukul blockquote {
            font-style: italic;
            margin-top: 30px;
            padding-left: 20px;
            border-left: 3px solid var(--accent);
        }
        
        /* NEW: Program Aspects Section */
        .program-aspects {
            background: var(--background);
            padding: 80px 0;
        }
        
        .aspects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .aspect-card {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            text-align: center;
            transition: var(--transition);
        }
        
        .aspect-card:hover {
            transform: translateY(-5px);
        }
        
        .aspect-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        /* NEW: Dwijas Beyond Section */
        .dwijas-beyond {
            padding: 80px 0;
            text-align: center;
        }
        
        .dwijas-beyond img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: var(--shadow);
        }
        
        /* Q&A Highlight */
        .qa-highlight {
            background: var(--accent);
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            font-weight: bold;
            color: var(--text-dark);
        }
        
        /* NEW: Program Details List */
        .program-details-list {
            background: var(--white);
            padding: 50px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            margin-top: 40px;
        }
        
        .program-details-list ol {
            padding-left: 20px;
        }
        
        .program-details-list li {
            margin-bottom: 25px;
            line-height: 1.6;
            font-size: 1.1rem;
        }
        
        .program-details-list strong {
            color: var(--primary);
        }
        
        .program-details-list a {
            color: var(--primary);
            text-decoration: underline;
        }
        
        .program-details-list a:hover {
            color: var(--primary-dark);
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            
            .hero-text {
                padding-right: 0;
            }
            
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .about-mukul .container {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .about-mukul-content,
            .about-mukul-image {
                order: initial; /* Reset order for mobile */
            }
            
            .program-details-list {
                padding: 30px;
            }
        }
        
        @media (max-width: 768px) {
            section {
                padding: 60px 0;
            }

            .hero {
                padding: 100px 0 60px;
                min-height: auto;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero .lead {
                font-size: 1.2rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .content-box, .detail-card, .testimonial-card {
                padding: 20px;
            }
            
            .testimonial-content {
                flex-direction: column;
                text-align: center;
            }
            
            .details-grid {
                grid-template-columns: 1fr;
            }
            
            .feature-grid {
                grid-template-columns: 1fr;
            }
            
            .register-floating {
                bottom: 80px;
                left: 10px;
                right: 10px;
                text-align: center;
                font-size: 0.9rem;
            }
            
            .chat-with-us {
                bottom: 160px;
                right: 10px;
            }
            
            .hero-image {
                transform: none;
            }
            
            .about-mukul h2 {
                font-size: 2.2rem;
            }
            
            .program-details-list {
                padding: 20px;
            }
            
            .program-details-list li {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                width: 95%;
                padding: 0 15px;
            }
            
            section {
                padding: 40px 0;
            }
            
            .hero {
                padding: 80px 0 40px;
            }
            
            .btn {
                padding: 12px 24px;
                font-size: 0.9rem;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .hero .lead {
                font-size: 1.1rem;
            }
            
            .program-dates {
                padding: 15px;
            }
            
            .register-floating {
                padding: 12px 20px;
                font-size: 0.8rem;
            }
            
            .program-details-list {
                padding: 15px;
            }

            
        }
    </style>
</head>
<body>
   <?php include 'header.php'; ?> 
   
    <section class="hero">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text">
                <h1>Dwijas</h1>
                <p class="lead"><?php echo htmlspecialchars($program['program_title']); ?></p>

                <div class="program-dates">
                    <h6>
                        <!-- DYNAMIC: Program Dates -->
                        <strong><?php echo $program['program_dates']; ?><br></strong>
                        
                        <!-- DYNAMIC: Batch 1 Details (HTML is allowed from DB) -->
                        <?php echo $program['batch1_details']; ?><br><br>

                        <!-- DYNAMIC: Batch 2 Details (HTML is allowed from DB) -->
                        <?php echo $program['batch2_details']; ?>
                    </h6>
                </div>

                <div class="hero-cta">
                    <!-- DYNAMIC: Payment Links -->
                    <a href="<?php echo htmlspecialchars($links['india_level']); ?>" class="india_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                
                    <a href="<?php echo htmlspecialchars($links['second_level']); ?>" class="second_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                
                    <a href="<?php echo htmlspecialchars($links['zero_level']); ?>" class="zero_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                
                    <a href="<?php echo htmlspecialchars($links['first_level']); ?>" class="first_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['third_level']); ?>" class="third_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['fourth_level']); ?>" class="fourth_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['fifth_level']); ?>" class="fifth_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['sixth_level']); ?>" class="sixth_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['seventh_level']); ?>" class="seventh_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    
                    <a href="#program-features" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="hero-image">
                    <img src="assets/images/DwijasLog.png" alt="Dwijas Program">
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Section 1: What Makes Dwijas Special -->
    <section id="program-features" class="program-features">
        <div class="container">
            <div class="section-title">
                <h2>What Makes Dwijas Special</h2>
                <p>Experience transformation through these key elements</p>
            </div>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">🌅</div>
                    <h4>Brahma Muhurtham</h4>
                    <p>Learn to utilize the most auspicious time of day for spiritual practices</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🍃</div>
                    <h4>Yogic Lifestyle</h4>
                    <p>Comprehensive approach covering diet, sleep, and daily routines</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🧘</div>
                    <h4>Expert Guidance</h4>
                    <p>Learn from experienced teachers trained in classical yoga</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">🌍</div>
                    <h4>Global Community</h4>
                    <p>Join participants from around the world in this transformative journey</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Some Aspects Covered In the Program! -->
    <section class="program-aspects">
        <div class="container">
            <div class="section-title">
                <h2>Some Aspects Covered In the Program!</h2>
                <p>Comprehensive exploration of yogic lifestyle elements</p>
            </div>
            
            <div class="aspects-grid">
                <div class="aspect-card">
                    <div class="aspect-icon">🌅</div>
                    <h4>Brahma Muhurtham</h4>
                    <p>Wake up at Brahma muhurtham, the most auspicious time of the day, and utilize it for your wellbeing</p>
                </div>
                
                <div class="aspect-card">
                    <div class="aspect-icon">💧</div>
                    <h4>Yogic Bath</h4>
                    <p>Learn the significance of taking bath and how to do it the yogic way</p>
                </div>
                
                <div class="aspect-card">
                    <div class="aspect-icon">🍽️</div>
                    <h4>Yogic Diet</h4>
                    <p>Understand what to eat, when to eat, how to eat and how much to eat</p>
                </div>
                
                <div class="aspect-card">
                    <div class="aspect-icon">🚶</div>
                    <h4>Yogic Walk</h4>
                    <p>Learn to walk consciously and use it as a tool for your growth</p>
                </div>
                
                <div class="aspect-card">
                    <div class="aspect-icon">💬</div>
                    <h4>Yogic Speech</h4>
                    <p>Understand the power of speech and how to use it for your benefit</p>
                </div>
                
                <div class="aspect-card">
                    <div class="aspect-icon">😴</div>
                    <h4>Yogic Sleep</h4>
                    <p>Learn how to sleep and how much to sleep for maximum rejuvenation</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Why is the Program named Dwijas? -->
    <section class="why-dwijas">
        <div class="container">
            <div class="content-box">
                <h2><strong>Why is the Program named Dwijas?</strong></h2>
                <h3><strong>Below is some background about why we have chosen the name 'Dwijas' for the program - we hope that these 21 days will be a process of conscious self-annihilation for us and a burning aspiration to be born again, but this time consciously.</strong></h3>
                <p>"In India, enlightened beings have been referred to as Dwijas. Dwija means twice-born. Once, you were born out of your mother's womb; it happened unconsciously.You did not make it happen – nature did it for you. Now, if you have to be born once again, you must die first.This does not mean dying physically.But if you die the way you are, if you destroy everything that you called "myself," then you are born once again. This kind of birth happens 100% consciously. Once again you become blissful and innocent, but fully aware. Now, this blissfulness cannot be taken away by anybody. So, what you call "enlightenment" means a conscious self-annihilation." - Sadhguru</p>
            </div>
        </div>
    </section>

    <!-- Section 4: Significance of Brahma Muhurtham -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Significance of Brahma Muhurtham</h2>
            </div>
            
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/Up4dbFWQhnY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Section 5: Dwijas Program - Sharings! -->
    <section class="srishti-camp">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <!-- Add this inside <head> -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

<!-- Use this heading where needed -->
<h3 class="program-heading">Dwijas Program - Sharings!</h3>

<!-- Add this CSS -->
<style>
.program-heading {
    font-family: 'Playfair Display', serif; /* classic serif font */
    font-weight: 900; /* strong bold */
    font-size: 2.2rem; /* adjust size as you like */
    color: #2b2b2b; /* elegant dark gray/black */
    text-align: center; /* center it like in your image */
    letter-spacing: 0.5px; /* improves spacing */
    margin-bottom: 20px;
}
</style>

                    <ul class="tabs">
                        <li class="active">
                            <div>
                                <iframe allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/0b6zPXFoLFg?si=cZMhOp3F3ZWz3sdA" style="width: 100%; height: 400px; border: none; border-radius: 10px;"></iframe>
                                <p style="margin-top: 20px; font-size: 1.1rem;">
                                    Hear from our participants about their experiences during the Dwijas program and how it has transformed their lives.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Experiences! (Testimonials) -->
 <section class="testimonials">
    <div class="container">
        <div class="section-title">
            <h2>Experiences!</h2>
            <p>Over 500 people have gone through the Dwijas Program so far - we have outlined a few sharings below.</p>
        </div>

        <div class="testimonial-grid">
            <?php while($t = $testimonials->fetch_assoc()): 
                $fullQuote = htmlspecialchars($t['quote']);
                $shortQuote = substr($fullQuote, 0, 150);
            ?>
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="testimonial-img">
                        <img src="<?php echo htmlspecialchars($t['image_path']); ?>" alt="<?php echo htmlspecialchars($t['author_name']); ?>">
                    </div>
                    <div class="testimonial-text">
                        <blockquote>
                            <span class="short-text"><?php echo $shortQuote; ?>...</span>
                            <span class="full-text-wrapper">
                                <span class="full-text"><?php echo $fullQuote; ?></span>
                            </span>
                        </blockquote>
                        <button class="read-more-btn">Read More</button>
                        <div class="testimonial-author">— <?php echo htmlspecialchars($t['author_name']); ?>, <?php echo htmlspecialchars($t['location']); ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<style>
/* smooth animation area */
.full-text-wrapper {
    display: block;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-in-out;
}

.full-text-wrapper.open {
    max-height: 1000px; /* enough to show full content */
}

.read-more-btn {
    background: none;
    border: none;
    color: #007bff;
    cursor: pointer;
    font-weight: 600;
    margin-top: 8px;
    padding: 0;
    transition: color 0.3s;
}

.read-more-btn:hover {
    text-decoration: underline;
    color: #0056b3;
}
</style>

<script>
document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const textContainer = btn.closest('.testimonial-text');
        const shortText = textContainer.querySelector('.short-text');
        const fullTextWrapper = textContainer.querySelector('.full-text-wrapper');

        if (fullTextWrapper.classList.contains('open')) {
            fullTextWrapper.classList.remove('open');
            btn.textContent = 'Read More';
            setTimeout(() => shortText.style.display = 'inline', 200);
        } else {
            shortText.style.display = 'none';
            fullTextWrapper.classList.add('open');
            btn.textContent = 'Read Less';
        }
    });
});
</script>


    <!-- Section 7: Explore All Aspects of Yogic Life -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Explore All Aspects of Yogic Life</h2>
                <p>A 21 Day live online session for aspiring Yogis - to explore all aspects of a Yogic life, based on guidelines by Sadhguru.</p>
            </div>
            
            <div class="gallery">
                <div class="gallery-item">
                    <img src="assets/images/food-srishti.jpg" alt="Healthy Satvik Dish">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/bath.png" alt="Yogic Bathing">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/meditate.jpg" alt="Meditation">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/ReduceSleep.jpg" alt="Sleep Management">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/Dhoti.png" alt="Sleep Management">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/NaturalFood.png" alt="Sleep Management">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/Rudraksh.png" alt="Sleep Management">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/CopperWare.png" alt="Sleep Management">
                </div>
                <div class="gallery-item">
                    <img src="assets/images/dirSleep.jpg" alt="Sleep Management">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8: Attend Dwijas, Online! -->
    <section class="program-details">
    <div class="container">
        <div class="section-title">
            <h2>Attend Dwijas, Online!</h2>
            <p>
                The first Dwijas program held in Sep 2020 saw over 150 participants from across the globe and we are happy to announce the 7th batch of Dwijas - 21 Day Online program starting this November 2, 2025 and ending on November 22!
            </p>
        </div>

        <div class="details-grid">
            <!-- DATE & TIME -->
            <div class="detail-card">
                <h5>Date & Time</h5>
                <hr>
                <div class="expandable-text">
                    <div class="short-text">
                        <p><strong><?php echo $program['program_dates']; ?></strong></p>
                        <p><?php echo substr($program['batch1_details'], 0, 100); ?>...</p>
                    </div>
                    <div class="full-text-wrapper">
                        <p><strong><?php echo $program['program_dates']; ?></strong><br>
                            <?php echo $program['batch1_details']; ?> <br><br>
                            <?php echo $program['batch2_details']; ?> <br><br>
                            Note: All 21 sessions need to be attended
                            <br><br>
                            <div class="qa-highlight">
                                There will also be a Q&A session to cover any other questions you may have
                            </div>
                            <a href="https://savvytime.com/converter/ist" style="text-decoration: underline" target="_blank">
                                If joining from other time zones please convert date and time to your respective time zone using this link
                            </a>
                        </p>
                    </div>
                    <button class="read-more-btn">Read More</button>
                </div>
            </div>

            <!-- PLATFORM -->
            <div class="detail-card">
                <h5>Platform</h5>
                <hr>
                <p>Live on Zoom, Log-in details will be shared post-registration. Recording will not be available if a live session is missed.</p>
            </div>

            <!-- LEARNINGS -->
            <div class="detail-card">
                <h5>Learnings</h5>
                <hr>
                <div class="expandable-text">
                    <div class="short-text">
                        <p>The session content is designed based on the Yogic lifestyle guidelines...</p>
                    </div>
                    <div class="full-text-wrapper">
                        <p>The session content is designed based on the Yogic lifestyle guidelines given by Sadhguru.</p>
                        <p>By the end of the program, participants will be equipped to use every aspect of life for their overall well-being.</p>
                    </div>
                    <button class="read-more-btn">Read More</button>
                </div>
            </div>

            <!-- FEE -->
            <div class="detail-card">
                <h5>Fee</h5>
                <hr>
                <div class="expandable-text">
                    <div class="short-text">
                        <p>See applicable fee structure...</p>
                    </div>
                    <div class="full-text-wrapper">
                        <div class="zero_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['zero_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['zero_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="india_level_pay" style="display: none;">
                            <p>Fee includes 5% GST</p>
                            <p>
                                <?php echo htmlspecialchars($fees['india_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['india_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="first_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['first_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['first_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="second_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['second_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['second_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="third_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['third_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['third_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="fourth_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['fourth_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['fourth_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="fifth_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['fifth_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['fifth_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="sixth_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['sixth_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['sixth_level']['price_family']); ?>
                            </p>
                        </div>
                        <div class="seventh_level_pay" style="display: none;">
                            <p>
                                <?php echo htmlspecialchars($fees['seventh_level']['price_person']); ?> <br>
                                <?php echo htmlspecialchars($fees['seventh_level']['price_family']); ?>
                            </p>
                        </div>
                    </div>
                    <button class="read-more-btn">Read More</button>
                </div>
            </div>

            <!-- ELIGIBILITY -->
            <div class="detail-card">
                <h5>Eligibility</h5>
                <hr>
                <p>
                    Ideally should have completed Inner Engineering/Shambhavi Maha Mudra. At the minimum should have done any Isha Yoga Program (Even Isha Upa Yoga, Inner Engineering Online or Isha Kriya is fine)
                </p>
            </div>
        </div>
    </div>
</section>

<style>
.expandable-text {
    position: relative;
}
.full-text-wrapper {
    display: block;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-in-out;
}
.full-text-wrapper.open {
    max-height: 1000px;
}
.read-more-btn {
    background: none;
    border: none;
    color: #007bff;
    cursor: pointer;
    font-weight: 600;
    margin-top: 8px;
    padding: 0;
    transition: color 0.3s;
}
.read-more-btn:hover {
    text-decoration: underline;
    color: #0056b3;
}
</style>

<script>
document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const container = btn.closest('.expandable-text');
        const shortText = container.querySelector('.short-text');
        const fullTextWrapper = container.querySelector('.full-text-wrapper');

        if (fullTextWrapper.classList.contains('open')) {
            fullTextWrapper.classList.remove('open');
            btn.textContent = 'Read More';
            setTimeout(() => shortText.style.display = 'block', 200);
        } else {
            shortText.style.display = 'none';
            fullTextWrapper.classList.add('open');
            btn.textContent = 'Read Less';
        }
    });
});
</script>

    <!-- Section 9: Program Details (15-point detailed explanation) -->
    <section class="program-details">
  <div class="container">
    <div class="section-title text-center">
      <h2>Program Details</h2>
      <p>Comprehensive information about what to expect from the Dwijas program</p>
    </div>

    <div class="program-details-list">
      <ol id="programList">
        <li><strong>Exploration of a Yogic lifestyle</strong> - we will be exploring all aspects of life right from how to wake up, how to take a bath, how to eat, how to drink, how to speak, what to wear, when to sleep, how to sleep, etc so that every aspect of your life can be made as a device or tool for your ultimate well-being.</li>

        <li><strong>The objective of the program</strong> is to help people implement a yogic lifestyle and establish the same over a period of 21 days.</li>

        <li><strong>This program is more suited for existing yoga practitioners</strong> who are looking to intensify their sadhana by aligning all aspects of their lifestyle. This can happen if common roadblocks like not being able to keep up sadhana, improper sleep and food timings, etc can be cleared up - this is something that can happen over the course of the 21-day Program.</li>

        <li><strong>No new yogic practices will be taught</strong> during this program.</li>

        <li><strong>Also this is not an in-depth look at Yogic Diet</strong> - we will be exploring a few aspects of yogic diet that can help with sadhana. For an in-depth exploration of Yogic diet, recipes, cooking lessons, etc you can check out the Aahar Online Program <a href="https://www.yogire.com/aahar/" target="_blank">www.yogire.com/aahar/</a></li>

        <li><strong>We will not be looking at any technical yoga practice-related doubts</strong> (for example clarification about Yogasanas steps etc) or any practice corrections during this program - for these, you can get in touch with your Isha Hatha yoga teacher and meet them offline.</li>

        <li><strong>There will be scope for Q&A during the program</strong> where you can get your queries about implementing a yogic lifestyle answered by Mukul Anna.</li>

        <li><strong>The program will be interspersed with meditations</strong> like Isha Kriya/Chit Shakti, Sadhguru's videos, Mukul Anna's sharing about how to imbibe a yogic life, daily implementation tasks, etc.</li>

        <li><strong>Please note that this program is implementation focused</strong> - so participants will need to put in the consistent daily effort to implement whatever we explore. So please join only if you are willing to stretch yourselves and do what's required.</li>

        <li><strong>Our aim is that by the end of 21 days program, yoga should not just be about the 1 to 3 hours you spend doing your yogic practices</strong> but that yoga should be ON 24 hours of the day for you - every activity that you do can become a process for your well-being if you approach it that way.</li>

        <li><strong>We will be creating a group for all registered participants</strong> where participants can support each other and share their experiences over the course of the program. We will also be posting login details of the online session on the group, a few days before the program start.</li>

        <li><strong>Attendance is mandatory for all 21 days</strong>, this is like a continuous process - if you miss any of the days for whatever reasons, the recording will not be available for the same and your experience of the program may be impacted. If you miss more than one session of the program, you may be asked to discontinue the program. So please join only if you are willing to commit to attending all the 21 days without a break.</li>

        <li><strong>Program timings coincide with Brahma Muhurtham</strong> (for those based in India/USA/Canada) so that it can assist you to make use of this time for your daily sadhana - for those joining from other regions of the world, though the program timings may not coincide with Brahma Muhurtham in your region, you can still attend and try to implement the guidelines suggested during the program.</li>

        <li><strong>If you are unable to attend this session, but would be like to be updated about the upcoming online sessions</strong>, Please fill out a simple form <a href="https://docs.google.com/forms/d/e/1FAIpQLSeTf7cpt-JGD8JMsWaesWtTOO8NEe8G5fBwo3G-v0Hqc9XtiQ/viewform" target="_blank">here</a>.</li>

        <li><strong>To know more about other Yogi Re programs and initiatives</strong> please visit - <a href="https://yogire.com" target="_blank">yogire.com</a></li>
      </ol>

      <div class="text-center mt-3">
        <button id="readMoreBtn" class="btn btn-outline-primary">Read More</button>
      </div>
    </div>
  </div>
</section>

<!-- Add this CSS -->
<style>
  .program-details-list ol li {
    margin-bottom: 12px;
    line-height: 1.6;
    transition: all 0.4s ease-in-out;
  }
  .program-details-list ol li.hidden {
    display: none;
  }
  #readMoreBtn {
    transition: 0.3s;
  }
  #readMoreBtn:hover {
    background-color: #0d6efd;
    color: #fff;
    transform: scale(1.05);
  }
</style>

<!-- Add this JS (requires jQuery) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    const visibleCount = 6; // show first 6 items
    const listItems = $("#programList li");
    const readMoreBtn = $("#readMoreBtn");

    // Initially hide all items after 6
    listItems.slice(visibleCount).addClass("hidden");

    readMoreBtn.on("click", function () {
      const hiddenItems = listItems.filter(".hidden");

      if (hiddenItems.length) {
        hiddenItems.removeClass("hidden").slideDown();
        $(this).text("Read Less");
      } else {
        listItems.slice(visibleCount).slideUp(400, function () {
          $(this).addClass("hidden");
        });
        $(this).text("Read More");
      }
    });
  });
</script>


    <!-- Section 10: All About Dwijas - Explained! -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>All About Dwijas - Explained!</h2>
            </div>
            
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/-usaxUsizZ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Section 11: Namaskaram from Mukul Anna! (CORRECTED LAYOUT) -->
    <section class="about-mukul">
        <div class="container">
            <div class="about-mukul-image">
                <img src="assets/images/mukul-white.png" alt="Mukul Anna">
            </div>
            <div class="about-mukul-content">
                <h2>Namaskaram from Mukul Anna!</h2>
                <!-- <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/3o1eY7bXG1A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                </div>-->
                <blockquote>
                    Mukul underwent intense teacher training designed by Sadhguru, founder of Isha Foundation, and has personally conducted 400+ workshops across India in the last 8 years, touching over 8000 lives!
                    <br/><br/>
                    All our yoga programs are designed by Sadhguru, founder of Isha Foundation.
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Section 12: Dwijas And Beyond! -->
    <section class="dwijas-beyond">
        <div class="container">
            <div class="section-title">
                <h2>Dwijas And Beyond!</h2>
                <p>Your journey continues even after the 21 days</p>
            </div>
            
            <div class="content-box">
                <h3>What Happens After Dwijas?</h3>
                <p class="lead">The end of Dwijas is just the beginning of your yogic journey. We have a vibrant community and ongoing programs to support your growth.</p>
                
                <div class="feature-grid">
                    <div class="feature-card">
                        <div class="feature-icon">👥</div>
                        <h4>Community Support</h4>
                        <p>Join our exclusive WhatsApp group for continuous guidance and support from fellow practitioners</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">📚</div>
                        <h4>Advanced Programs</h4>
                        <p>Access to advanced yoga programs and workshops to deepen your practice</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">🔄</div>
                        <h4>Regular Follow-ups</h4>
                        <p>Periodic check-ins and review sessions to help you maintain consistency</p>
                    </div>
                </div>
                
                <a class="btn btn-primary" href="https://blog.yogire.com" target="_blank">Explore Yogi Re Blog</a>
            </div>
        </div>
    </section>

    <!-- Section 13: Registration -->
    <section class="registration">
        <div class="container">
            <div class="registration-card">
                <h3>The 7th edition of Dwijas Online starting this Nov 2nd!</h3>
                <h5>
                    <?php echo $program['program_dates']; ?> <br>
                    <?php echo $program['batch1_details']; ?><br>
                    <?php echo $program['batch2_details']; ?>
                </h5>
                
                <div>
                    <a href="<?php echo htmlspecialchars($links['india_level']); ?>" class="india_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                
                    <a href="<?php echo htmlspecialchars($links['second_level']); ?>" class="second_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                
                    <a href="<?php echo htmlspecialchars($links['zero_level']); ?>" class="zero_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                
                    <a href="<?php echo htmlspecialchars($links['first_level']); ?>" class="first_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['third_level']); ?>" class="third_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['fourth_level']); ?>" class="fourth_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['fifth_level']); ?>" class="fifth_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['sixth_level']); ?>" class="sixth_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                    <a href="<?php echo htmlspecialchars($links['seventh_level']); ?>" class="seventh_level_pay btn btn-primary" style="display: none;" target="_blank">
                        <span class="btn__text">Register Now</span>
                    </a>
                </div>
                <p style="margin-top: 30px; opacity: 0.8;">Any Qs? Call us at +918217481232</p>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <a href="https://wa.me/918217481232?text=Can%20you%20tell%20me%20more%20about%20Dwijas%20program?" class="chat-with-us" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Floating Registration Buttons - MOVED TO LEFT CORNER -->
    <a href="<?php echo htmlspecialchars($links['india_level']); ?>" class="india_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['second_level']); ?>" class="second_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['zero_level']); ?>" class="zero_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['first_level']); ?>" class="first_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['third_level']); ?>" class="third_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['fourth_level']); ?>" class="fourth_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['fifth_level']); ?>" class="fifth_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['sixth_level']); ?>" class="sixth_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    <a href="<?php echo htmlspecialchars($links['seventh_level']); ?>" class="seventh_level_pay register-floating" style="display: none;" target="_blank">
        Dwijas - Nov 2 - 22, 2025 <br> Register Now
    </a>
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        // ========================================================================
        // PART 6: JAVASCRIPT (MODIFIED)
        // ========================================================================
        
        // This $.getJSON block is KEPT. It finds the user's country and SHOWS the correct button.
        // The 'href' links are now already set by PHP.
        $.getJSON('https://ipinfo.io/', function(data){
            // data.country = "BM"; // Uncomment for testing
            if (data.country == undefined) {
                $('.zero_level_pay').show();
                return;
            }
            
            const FirstLevel = ["NP","BD","MM","EG","LK","TR","BT","UA","GE","PK","AF","AR","ZM","TJ","UZ","LY","SD","LR","ZW"],
                  SecondLevel = ["MU","RS","BR","TH","PH","RO","PY","DO","MY","KE","CO","KH","UG","NG","GH","ID","VN","ID","KZ","RU","DZ"],
                  ThirdLevel = ["IR","CR","LT","OM","MV","LB","HR","NA","JM","HU","PA","PE","PL","SA","MX","ZA","HU","FJ","MA","HN","HT","IQ"],
                  FourthLevel = ["QA","TW","SG","GR","CN","SK","EE","TT","KW","AE","PG","CL","CZ","LV","SV","LV","UY"],
                  FifthLevel = ["HK","KR","IT","AG","ES","PT","SI"],
                  SixthLevel = ["US","GB","LU","FI","IE","CA","NL","JP","IE","JP","AT","BE","DE","FR", "CY"],
                  SeventhLevel = ["BM","CH","NO","IS","IL","AU","IL","BB","NO","IS","DK","SE","LU","NZ","FI"],
                  IndiaLevel = ["IN"];
                  
            if(FirstLevel.includes(data.country)) {
                $('.first_level_pay').show();
            } else if(SecondLevel.includes(data.country)) {
                $('.second_level_pay').show();
            } else if(ThirdLevel.includes(data.country)) {
                $('.third_level_pay').show();
            } else if(FourthLevel.includes(data.country)) {
                $('.fourth_level_pay').show();
            } else if(FifthLevel.includes(data.country)) {
                $('.fifth_level_pay').show();
            } else if(SixthLevel.includes(data.country)) {
                $('.sixth_level_pay').show();
            } else if(SeventhLevel.includes(data.country)) {
                $('.seventh_level_pay').show();
            } else if(IndiaLevel.includes(data.country)) {
                $('.india_level_pay').show();
            } else {
                $('.zero_level_pay').show();
            }
        })
        .fail(function() {
            $('.zero_level_pay').show();
        });
    </script>
    
</body>
</html>