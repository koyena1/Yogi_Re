<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YogiRe - Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Vidaloka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background: linear-gradient(135deg, rgba(65, 75, 20, 0.1), rgba(75, 88, 54, 0.1)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><rect fill="%23FFF7ED" width="1200" height="800"/><path fill="%23d7e693" fill-opacity="0.05" d="M0,0 Q600,400 1200,0 L1200,800 Q600,400 0,800 Z"/></svg>');
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(215, 230, 147, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(65, 75, 20, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(75, 88, 54, 0.08) 0%, transparent 50%);
            pointer-events: none;
        }

        .login-container {
            max-width: 420px;
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .login-card {
            background: var(--white);
            border-radius: 20px;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 8px 32px rgba(65, 75, 20, 0.08);
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 12px 40px rgba(65, 75, 20, 0.12);
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: var(--white);
            padding: 40px 30px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .login-header::before {
            content: '🧘';
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 2rem;
            opacity: 0.3;
        }

        .login-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: -20px;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .logo i {
            font-size: 2.5rem;
            color: var(--primary);
        }

        .login-header h1 {
            font-family: 'Vidaloka', serif;
            font-size: 2.2rem;
            margin-bottom: 8px;
            font-weight: 400;
        }

        .login-header p {
            opacity: 0.9;
            font-size: 1rem;
            margin: 0;
        }

        .login-body {
            padding: 40px 35px;
        }

        .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .form-control {
            border: 2px solid #e8e8e8;
            border-radius: 12px;
            padding: 15px 20px;
            font-size: 1rem;
            font-family: 'Domine', serif;
            background: var(--white);
            transition: var(--transition);
            height: 55px;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(65, 75, 20, 0.1);
            background: var(--white);
        }

        .form-label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 1rem;
            pointer-events: none;
            transition: var(--transition);
            background: var(--white);
            padding: 0 8px;
        }

        .form-control:focus + .form-label,
        .form-control:not(:placeholder-shown) + .form-label {
            top: 0;
            font-size: 0.85rem;
            color: var(--primary);
            font-weight: 600;
        }

        .form-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            border: none;
            border-radius: 12px;
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--white);
            width: 100%;
            transition: var(--transition);
            font-family: 'Domine', serif;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(65, 75, 20, 0.3);
            color: var(--white);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .alert {
            border-radius: 12px;
            border: none;
            padding: 15px 20px;
            margin-bottom: 25px;
            font-size: 0.95rem;
        }

        .alert-danger {
            background: linear-gradient(135deg, #fee 0%, #fff5f5 100%);
            color: #c53030;
            border-left: 4px solid #fc8181;
        }

        .yoga-decoration {
            position: absolute;
            font-size: 1.5rem;
            opacity: 0.1;
            z-index: 1;
        }

        .decoration-1 { top: 10%; left: 10%; }
        .decoration-2 { top: 20%; right: 15%; }
        .decoration-3 { bottom: 30%; left: 15%; }
        .decoration-4 { bottom: 20%; right: 10%; }

        .floating-element {
            position: absolute;
            background: rgba(215, 230, 147, 0.15);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 60px;
            height: 60px;
            top: 15%;
            left: 5%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            width: 40px;
            height: 40px;
            top: 70%;
            left: 10%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            width: 50px;
            height: 50px;
            top: 40%;
            right: 5%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }

        .login-footer {
            text-align: center;
            margin-top: 30px;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .login-footer a {
            color: var(--primary);
            text-decoration: none;
            transition: var(--transition);
        }

        .login-footer a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .login-container {
                max-width: 100%;
            }
            
            .login-body {
                padding: 30px 25px;
            }
            
            .login-header {
                padding: 30px 25px 25px;
            }
            
            .login-header h1 {
                font-size: 1.8rem;
            }
            
            .yoga-decoration {
                display: none;
            }
        }

        /* Loading animation for button */
        .btn-loading {
            position: relative;
            color: transparent !important;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            border-right-color: transparent;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Floating Background Elements -->
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>

    <!-- Yoga Decorations -->
    <div class="yoga-decoration decoration-1">🧘‍♀️</div>
    <div class="yoga-decoration decoration-2">🌿</div>
    <div class="yoga-decoration decoration-3">☮️</div>
    <div class="yoga-decoration decoration-4">🌸</div>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="logo">
                    <i class="fas fa-leaf"></i>
                </div>
                <h1>YogiRe</h1>
                <p>Admin Portal</p>
            </div>
            
            <div class="login-body">
                <form class="md-float-material form-material" action="process_login.php" method="POST" id="loginForm">
                    <?php if(isset($_GET['error'])): ?>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            Invalid username or password. Please try again.
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder=" " required>
                        <label class="form-label">Your Username</label>
                        <div class="form-icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder=" " required>
                        <label class="form-label">Password</label>
                        <div class="form-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-login" id="loginBtn">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </form>
                
                <div class="login-footer">
                    <p>Welcome to YogiRe Administration</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Form submission loading state
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const btn = document.getElementById('loginBtn');
            btn.classList.add('btn-loading');
            btn.disabled = true;
            
            // Re-enable after 3 seconds in case of error
            setTimeout(() => {
                btn.classList.remove('btn-loading');
                btn.disabled = false;
            }, 3000);
        });

        // Add focus effects to form inputs
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });

        // Auto-focus first input
        document.querySelector('input[name="username"]').focus();
    </script>
</body>
</html>