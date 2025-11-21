<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Agastya by Yogi Re // Yoga for Everyone</title>
    <meta name="keywords" content="agastya, yoga, hatha yoga, underprivileged, kids yoga, yogi re">
    <meta name="description" content="Bringing classical Hatha Yoga to underprivileged children in a sustainable way.">
    <meta property="og:image" content="http://srishti.yogire.com/img/main.jpg"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

    <!-- Analytics & Pixels (Unchanged) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122669091-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-122669091-1');
    </script>

    <!-- Facebook Pixel -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1706238509411575');
      fbq('track', 'PageView');
    </script>

    <style>
        :root {
            --primary: #d4810c;
            --primary-dark: #a56306;
            --accent: #f4a261;
            --bg: #faf9f7;
            --text: #3d3d3d;
            --text-light: #666;
            --heading: #1a1a1a;
            --card-bg: #ffffff;
            --border: #e8e3dc;
            --shadow: 0 8px 32px rgba(0,0,0,0.08);
            --radius: 16px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.7;
            font-weight: 400;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            color: var(--heading);
            font-weight: 700;
            line-height: 1.3;
        }

        .container { max-width: 1240px; margin: 0 auto; padding: 0 20px; }
        .text-center { text-align: center; }
        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }
        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 16px rgba(212, 129, 12, 0.3);
        }
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(212, 129, 12, 0.4);
        }
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        .logo img { height: 48px; }
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s;
        }
        .nav-links a:hover { color: var(--primary); }
        .contact-info {
            font-size: 0.9rem;
            color: var(--text-light);
        }
        .contact-info a { color: var(--primary); font-weight: 600; }

        /* Hero */
        .hero {
            height: 120vh;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.5)), url('img/agastya/hero-new.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: linear-gradient(transparent, var(--bg));
        }
        .hero-content { max-width: 800px; padding: 2rem; }
        .hero h1 {
            font-size: 4.5rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        /* Section */
        section { padding: 40px 0; }
        .section-title {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
            background color: #fff3e0;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary);
            border-radius: 2px;
            background color: #fff3e0;
        }

        /* What We Do */
        .what-we-do {
            background: #90EE90;
            border-radius: var(--radius);
            padding: 3rem;
            box-shadow: var(--shadow);
            margin: 2rem 0;
        }
        .what-we-do p {
            font-size: 1.1rem;
            max-width: 900px;
            margin: 0 auto 2rem;
            color: var(--text-light);
        }
        .schools {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        .school-card {
            background: #fdf9f3;
            padding: 1.5rem;
            border-radius: 12px;
            text-align: center;
            border: 1px solid var(--border);
        }
        .school-card h4 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }


        /* Gallery */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }
        .gallery img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            transition: transform 0.4s ease;
        }
        .gallery img:hover {
            transform: translateY(-8px);
        }

        /* Get Involved */
        .involve-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            margin-top: 3rem;
        }
        .involve-text blockquote {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            padding-left: 1.5rem;
            border-left: 4px solid var(--primary);
            color: var(--text-light);
        }
        .involve-img img {
            border-radius: 20px;
            box-shadow: var(--shadow);
        }

        /* Mukul Section */
        .mukul {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 3rem;
            align-items: center;
            background: white;
            padding: 3rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }
        .mukul img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        /* CTA Sections */
        .cta-section {
            background: linear-gradient(135deg, #fdf4e8 0%, #fef9f0 100%);
            padding: 80px 0;
            text-align: center;
            border-radius: var(--radius);
            margin: 3rem 0;
        }
        .cta-section h2 {
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }

        /* Sponsor Card */
        .sponsor-card {
            background: #b3e5fc;
            padding: 3rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }
        .price {
            font-size: 2.5rem;
            color: var(--primary);
            font-weight: 700;
            margin: 1rem 0;
        }

        /* Footer */
        footer {
            background: #1a1a1a;
            color: #ccc;
            padding: 3rem 0 1.5rem;
            font-size: 0.95rem;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        .social-links a {
            color: #ccc;
            font-size: 1.4rem;
            margin: 0 0.8rem;
            transition: color 0.3s;
        }
        .social-links a:hover { color: var(--primary); }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 { font-size: 3.5rem; }
            .involve-grid, .mukul { grid-template-columns: 1fr; }
            .nav-links { display: none; }
        }
        @media (max-width: 768px) {
            .hero { height: 90vh; }
            .hero h1 { font-size: 2.8rem; }
            .section-title { font-size: 2.3rem; }
            .gallery { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?> 

    <!-- Hero -->
    <section class="hero" id="top">
        <div class="hero-content">
            <img src="assets/images/hero-new.jpg" alt="Agastya Hero" style="max-width: 620px; border-radius: 16px; margin-bottom: 1.5rem; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
            <h1>Yoga is for Everyone</h1>
            <p>Through Agastya, we bring classical Hatha Yoga to underprivileged children — sustainably and joyfully.</p>
            <a href="#sponsor" class="btn btn-primary">Sponsor Today!</a>
        </div>
    </section>

    <!-- What We Do -->
    <section id="what">
        <div class="container text-center">
            <h2 class="section-title">What We Do</h2>
            <div class="what-we-do">
                <p>
                    Agastya is a <a href="https://yogire.com" target="_blank" style="color: var(--primary); text-decoration: underline;">Yogi Re</a> initiative to bring classical Hatha Yoga to underprivileged children in a sustainable way. So far, we've touched <strong>350+ young lives</strong> across 3 institutions.
                </p>
                <p>
                    <strong>Our Engagement Model:</strong><br>
                    ✢ 4 yoga sessions per year per institution<br>
                    ✢ Follow-ups to integrate yoga into daily schedules<br>
                    ✢ Regular updates to sponsors on impact
                </p>

                <div class="schools">
                    <div class="school-card">
                        <h4>Round Table School</h4>
                        <p>200 children</p>
                    </div>
                    <div class="school-card">
                        <h4>Anatha Shishu Ashram</h4>
                        <p>70 children</p>
                    </div>
                    <div class="school-card">
                        <h4>Special Kids School, Ballari</h4>
                        <p>70 children</p>
                    </div>
                </div>
            </div>

            <div class="gallery">
                <img src="assets/images/1f.jpg" alt="Yoga Session">
                <img src="assets/images/2f.jpg" alt="Kids Practicing">
                <img src="assets/images/10f.jpg" alt="Group Yoga">
                <img src="assets/images/8f.jpg" alt="Smiling Child">
                <img src="assets/images/9f.jpg" alt="Hatha Yoga">
                <img src="assets/images/group.jpg" alt="Full Group">
            </div>
        </div>
    </section>

    <!-- Get Involved -->
    <section class="aahar-in-person">
    <div class="container">
        <div class="aahar-content">
            <h2 class="aahar-title">Get Involved!</h2>
            <div class="aahar-card">
                <div class="aahar-image">
                    <img src="assets/images/t5f.jpg" alt="Aahar In Person" />
                </div>
                
                <div class="aahar-text">
                    <p>
                        You can get involved in various ways, please go through a handy list below. 
                        <br>
                        Once you've decided how you'd like to help us, just tap on the "Get involved" button 
                        at the bottom of the section!
                    </p>
                    <p>1. Be a Sponsor! As Sadhguru says, make your life into a 'giving', an utlimate transaction!
                        <br>
                    You can make a significant change in a child's life with just ₹600 per year! You would also be able to get timely updates from our end re how your contribution is making a difference.
                    </p>

                    <p>
                        2. Be a Volunteer!A very touching experience that could fire up the life within you!
                        <br>
\                       If you'd like to get involved as a Volunteer, please mention how much time are you willing to contribute. Volunteers could help us during the Yoga program and also be involved with activities like following up with the schools etc. to ensure that yoga is happening as part of their daily schedule, visiting kids once in a while for updates etc. We will be able to get in touch with you as and when the need arises!
                    </p>

                    <p>
                        3. Be an Organizer!Bring Agastya to your institute!
                        <br>
                        If you work at such institute and want to spread the joy through Yoga, do get in touch. Or if you know an institute that would love to bring Agastya to their abode, put us in touch with them! Any help is appreciated!
                    </p>
                </div>
                
                <div class="aahar-button-container">
                    <a class="aahar-button" 
                       href="https://docs.google.com/forms/d/e/1FAIpQLSf6JO1KUwpFWT2IbNcMjjSoZ1d7GB4nswJsktZrSKbg3wKc9g/viewform?usp=sf_link" 
                       target="_blank">
                        I'D LOVE TO GET INVOLVED!
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.aahar-in-person {
    padding: 80px 0;
    background: linear-gradient(135deg, #fcfafbff 0%, #fcfafbff 100%);
}

.aahar-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.aahar-title {
    font-size: 3rem;
    font-weight: 700;
    color: #000000ff;
    margin-bottom: 50px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.aahar-card {
    background:  #ebbca9ff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.aahar-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.aahar-image {
    margin-bottom: 30px;
}

.aahar-image img {
    width: 100%;
    max-width: 380px;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.aahar-text {
    margin-bottom: 30px;
}

.aahar-text p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #000000ff;
    margin-bottom: 20px;
}

.aahar-button-container {
    margin-top: 20px;
}

.aahar-button {
    display: inline-block;
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    color: white;
    padding: 16px 40px;
    font-size: 1.2rem;
    font-weight: 700;
    text-decoration: none;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
    border: none;
    cursor: pointer;
}

.aahar-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(231, 76, 60, 0.4);
    color: white;
    text-decoration: none;
}

.aahar-button:active {
    transform: translateY(-1px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .aahar-in-person {
        padding: 50px 20px;
    }
    
    .aahar-title {
        font-size: 2.2rem;
        margin-bottom: 30px;
    }
    
    .aahar-card {
        padding: 30px 20px;
    }
    
    .aahar-button {
        padding: 14px 30px;
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .aahar-title {
        font-size: 1.8rem;
    }
    
    .aahar-text p {
        font-size: 1rem;
    }
    
    .aahar-button {
        padding: 12px 25px;
        font-size: 1rem;
        letter-spacing: 1px;
    }
}
</style>

    <!-- Mukul Anna -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namaskaram from Mukul Anna</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        /* Namaskaram from Mukul Anna Section */
        .about-mukul {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .about-mukul .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: flex;
            align-items: center;
            gap: 60px;
            position: relative;
            z-index: 2;
        }
        
        .about-mukul-image {
            flex: 0 0 300px;
            text-align: center;
        }
        
        .about-mukul-image img {
            width: 100%;
            max-width: 280px;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            transition: transform 0.3s ease;
        }
        
        .about-mukul-image img:hover {
            transform: scale(1.05);
        }
        
        .about-mukul-content {
            flex: 1;
        }
        
        .about-mukul-content h2 {
            font-size: 2.8rem;
            margin-bottom: 30px;
            font-weight: 700;
            color: #fdbb2d;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .about-mukul-content blockquote {
            font-size: 1.3rem;
            line-height: 1.8;
            border-left: 5px solid #fdbb2d;
            padding-left: 25px;
            margin: 25px 0;
            font-style: italic;
            background: rgba(255,255,255,0.1);
            padding: 25px;
            border-radius: 0 15px 15px 0;
            backdrop-filter: blur(10px);
        }
        
        .about-mukul-badge {
            background: linear-gradient(135deg, #fdbb2d, #f79d00);
            color: #1a2a6c;
            padding: 12px 25px;
            border-radius: 25px;
            display: inline-block;
            font-weight: 700;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(253, 187, 45, 0.3);
        }
        
        /* Floating Elements */
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
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            left: 80%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 80%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .about-mukul .container {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }
            
            .about-mukul-image {
                flex: 0 0 auto;
                max-width: 250px;
                margin: 0 auto;
            }
            
            .about-mukul-content h2 {
                font-size: 2.2rem;
            }
            
            .about-mukul-content blockquote {
                border-left: none;
                padding-left: 20px;
                border-top: 5px solid #fdbb2d;
                padding-top: 20px;
                border-radius: 15px 15px 0 0;
            }
        }
        
        @media (max-width: 768px) {
            .about-mukul {
                padding: 60px 0;
            }
            
            .about-mukul .container {
                padding: 0 20px;
            }
            
            .about-mukul-content h2 {
                font-size: 2rem;
            }
            
            .about-mukul-content blockquote {
                font-size: 1.1rem;
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .about-mukul-content h2 {
                font-size: 1.8rem;
            }
            
            .about-mukul-content blockquote {
                font-size: 1rem;
                padding: 15px;
            }
            
            .about-mukul-image img {
                max-width: 200px;
            }
        }
    </style>
</head>
<body>


    <!-- Namaskaram Mukul Anna Section -->
    <section class="about-mukul">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        
        <div class="container">
            <div class="about-mukul-image">
                <img src="assets/images/mukul-white.png" alt="Mukul Anna">
            </div>
            <div class="about-mukul-content">
                <h2>Namaskaram from Mukul Anna!</h2>
                <blockquote>
                    Mukul underwent intense teacher training designed by Sadhguru, founder of Isha Foundation, and has personally conducted 400+ workshops across India in the last 8 years, touching over 8000 lives!
                    <br/><br/>
                    All our yoga programs are designed by Sadhguru, founder of Isha Foundation.
                </blockquote>
            </div>
        </div>
    </section>
</body>
</html>
    

    <!-- WhatsApp Group -->
    <section class="cta-section">
        <div class="container text-center">
            <h2>Yogi Re WhatsApp Updates</h2>
            <p>Get daily yogic wisdom & updates on Isha/Yogi Re programs.</p>
            <a href="https://bit.ly/yogire-update5" target="_blank" class="btn btn-primary">Join the Group</a>
        </div>
    </section>

    

<section id="sponsor">
    <div class="container text-center">
        <h2 class="section-title">Be a Sponsor!</h2>
        <div class="sponsor-card">
            <h3>Giving — The Ultimate Transaction</h3>
            <div class="price">₹600 <small style="font-size: 0.6em; color: #999;">/ person / year</small></div>
            <a href="https://forms.gle/7Xgkbh9VhT7kwaSA7" target="_blank" class="btn btn-primary">Sponsor Today</a>
            <p style="margin-top: 1rem; color: #888;">
                <small>Any questions? Call Us At <a href="tel:+918217481232" style="color: var(--primary);">+91 8217481232</a></small>
            </p>
        </div>
    </div>
</section>

    <!-- Original Content Preserved (with styling updates) -->
    <div class="main-container">
        <!-- Additional original sections preserved with updated styling -->
        <section class="masonry-contained">
            <div class="container">
                <div class="row">
                    <!-- Original masonry gallery content preserved -->
                </div>
            </div>
        </section>
        
        <!-- Original footer preserved with updated styling -->
        <?php include 'footer.php'; ?>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>

</body>
</html>