<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogi Re - Yoga Programs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #414b14;
            --primary-dark: #252d08ff;
            --text-light: #767676;
            --text-dark: #76421aff;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --background: #FFF7ED;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Domine', serif;
            margin: 0;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Styles */
        header {
            background-color: transparent;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            backdrop-filter: blur(10px);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1em 0;
        }

        .logo-img {
            height: 50px;
            transition: all 0.3s ease;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2em;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: all 0.3s;
            padding: 0.5em 0;
            position: relative;
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s;
        }

        .nav-links li a:hover::after {
            width: 100%;
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
            transition: color 0.3s;
        }

        header.scrolled .mobile-menu {
            color: var(--text-dark);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: white;
                box-shadow: var(--shadow);
                padding: 1em 0;
                gap: 0;
            }

            .nav-links.nav-active {
                display: flex;
            }

            .nav-links li {
                text-align: center;
                border-bottom: 1px solid rgba(0,0,0,0.1);
            }

            .nav-links li:last-child {
                border-bottom: none;
            }

            .nav-links li a {
                color: var(--text-dark);
                display: block;
                padding: 1em;
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
        }

        @media (max-width: 480px) {
            .container {
                width: 95%;
            }
            
            nav {
                padding: 0.8em 0;
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
                    <li><a href="srishti.php">Srishti</a></li>
                    <li><a href="agni.php">Agni</a></li>
                    <li><a href="blog.php">Blog</a></li>
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

        mobileMenuButton.addEventListener('click', () => {
            navLinks.classList.toggle('nav-active');
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
            }
        });
    </script>

</body>
</html>