<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogi Re - Yoga Programs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #414b14;
            --primary-dark: #252d08ff;
            --text-light: #767676;
            --text-dark: #76421aff;
            --accent: #ff7e5f;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --background: #FFF7ED;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Domine', serif;
            margin: 0;
            background-color: var(--background);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Styles */
        header {
            background-color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 0.5rem 0;
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.97);
            box-shadow: var(--shadow);
            backdrop-filter: blur(10px);
            padding: 0.2rem 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 0;
        }

        .logo-img {
            height: 50px;
            transition: var(--transition);
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        header.scrolled .logo-img {
            height: 45px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5em; /* Reduced gap */
            margin: 0;
            padding: 0;
            flex-wrap: nowrap; /* Prevent wrapping */
            align-items: center;
        }

        .nav-links li a {
            text-decoration: none;
            color: #a85d35;
            font-weight: 500;
            transition: var(--transition);
            padding: 0.5em 0.3em; /* Reduced padding */
            position: relative;
            font-size: 0.95rem; /* Slightly smaller font */
            white-space: nowrap; /* Prevent text wrapping */
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .nav-links li a:hover::after {
            width: 100%;
        }

        .nav-links li a:hover {
            color: var(--accent);
            transform: translateY(-2px);
        }

        header.scrolled .nav-links li a {
            color: var(--text-dark);
        }

        header.scrolled .nav-links li a::after {
            background: var(--primary);
        }

        .mobile-menu {
            display: none;
            color: white;
            cursor: pointer;
            font-size: 1.5rem;
            transition: var(--transition);
            padding: 0.5rem;
            border-radius: 4px;
        }

        .mobile-menu:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: scale(1.05);
        }

        header.scrolled .mobile-menu {
            color: var(--text-dark);
        }

        /* Dropdown Styles */
        .nav-links li.dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(10px);
            min-width: 180px; /* Slightly smaller */
            box-shadow: var(--shadow);
            list-style: none;
            padding: 0.6em 0; /* Reduced padding */
            z-index: 999;
            border-radius: 8px;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .dropdown-menu li a {
            color: var(--text-dark);
            display: block;
            padding: 0.6em 1.2em; /* Reduced padding */
            text-decoration: none;
            transition: var(--transition);
            border-left: 3px solid transparent;
            font-size: 0.9rem; /* Smaller font for dropdown */
            white-space: nowrap; /* Prevent text wrapping */
        }

        .dropdown-menu li a:hover {
            background: rgba(0, 0, 0, 0.05);
            border-left: 3px solid var(--accent);
            padding-left: 1.5em; /* Adjusted for smaller size */
        }

        /* Show dropdown on hover */
        .nav-links li.dropdown:hover > .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Medium screens adjustment */
        @media (min-width: 769px) and (max-width: 1024px) {
            .nav-links {
                gap: 1em; /* Even smaller gap for medium screens */
            }
            
            .nav-links li a {
                font-size: 0.9rem; /* Smaller font for medium screens */
                padding: 0.5em 0.2em;
            }
            
            .dropdown-menu {
                min-width: 160px;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: white;
                box-shadow: var(--shadow);
                padding: 1em 0;
                gap: 0;
                transform: translateY(-10px);
                opacity: 0;
                transition: var(--transition);
            }

            .nav-links.nav-active {
                display: flex;
                transform: translateY(0);
                opacity: 1;
            }

            .nav-links li {
                text-align: center;
                border-bottom: 1px solid rgba(0,0,0,0.1);
                width: 100%;
            }

            .nav-links li:last-child {
                border-bottom: none;
            }

            .nav-links li a {
                color: var(--text-dark);
                display: block;
                padding: 1.2em;
                font-size: 1.1rem;
                white-space: normal; /* Allow wrapping on mobile */
            }

            .nav-links li a::after {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .logo-img {
                height: 40px;
            }

            /* Mobile dropdown */
            .dropdown-menu {
                position: static;
                box-shadow: none;
                background: rgba(0, 0, 0, 0.03);
                display: none;
                padding: 0;
                opacity: 1;
                transform: none;
                border-radius: 0;
                width: 100%;
            }

            .dropdown.open > .dropdown-menu {
                display: block;
                animation: slideDown 0.3s ease;
            }

            @keyframes slideDown {
                from { max-height: 0; opacity: 0; }
                to { max-height: 300px; opacity: 1; }
            }

            .dropdown-menu li a {
                padding: 1em 2em;
                color: var(--text-dark);
                border-left: none;
                white-space: normal; /* Allow wrapping on mobile */
            }

            .dropdown-menu li a:hover {
                padding-left: 2.5em;
                border-left: none;
            }
        }

        @media (max-width: 480px) {
            .container {
                width: 95%;
            }
            
            nav {
                padding: 0.5rem 0;
            }
            
            .logo-img {
                height: 35px;
            }
            
            header.scrolled .logo-img {
                height: 32px;
            }
        }
    </style>
</head>
<body>

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
                    <li><a href="aahar.php">Aahar</a></li>

                    <!-- Dropdown Menu -->
                    <li class="dropdown">
                        <a href="srishti.php">Srishti <i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-left: 4px;"></i></a>
                        <ul class="dropdown-menu">
                            <!-- <li><a href="#">Srishti Bengaluru</a></li> -->
                            <li><a href="SrishtiChildren's Camp.php">Srishti Children's Camp</a></li>
                            <li><a href="#">Srishti Online Camp</a></li>
                            <li><a href="#">Srishti Retreat Camp</a></li>
                        </ul>
                    </li>

                     <!-- Dropdown Menu -->
                    <li class="dropdown">
                        <a href="srishti.php">Blog <i class="fas fa-chevron-down" style="font-size: 0.7rem; margin-left: 4px;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Agni</a></li>
                        </ul>
                    </li>

                    <li><a href="contact.php">Contact</a></li>
                </ul>

                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.querySelector('.mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        mobileMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            navLinks.classList.toggle('nav-active');
            
            // Toggle menu icon
            const icon = mobileMenuButton.querySelector('i');
            if (navLinks.classList.contains('nav-active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Scrolled Header
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { 
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('nav') && navLinks.classList.contains('nav-active')) {
                navLinks.classList.remove('nav-active');
                const icon = mobileMenuButton.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Dropdown toggle for mobile
        document.querySelectorAll('.dropdown > a').forEach(link => {
            link.addEventListener('click', e => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    const parent = link.parentElement;
                    parent.classList.toggle('open');
                    
                    // Close other dropdowns
                    document.querySelectorAll('.dropdown').forEach(dropdown => {
                        if (dropdown !== parent) {
                            dropdown.classList.remove('open');
                        }
                    });
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

</body>
</html>