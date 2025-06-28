<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayStation Rental</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --ps-blue: #00439c;
            --ps-light-blue: #00a6eb;
            --ps-black: #000000;
            --ps-white: #ffffff;
            --ps-light-gray: #f2f2f2;
            --ps-dark-gray: #1f1f1f;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--ps-light-gray);
            color: var(--ps-black);
        }
        
        .navbar {
            background: linear-gradient(90deg, var(--ps-black) 0%, var(--ps-blue) 100%);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--ps-white) !important;
        }
        
        .navbar .nav-link {
            color: var(--ps-white) !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
        }
        
        .navbar .nav-link:hover {
            color: var(--ps-light-blue) !important;
            transform: translateY(-2px);
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--ps-blue) 0%, var(--ps-light-blue) 100%);
            color: var(--ps-white);
            padding: 80px 0;
            margin-bottom: 40px;
            border-radius: 0 0 50px 50px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            background-image: url('https://www.pngall.com/wp-content/uploads/2016/05/PS4-PNG-Picture.png');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.1;
            transform: rotate(15deg);
        }
        
        .card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 30px;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .card-title {
            color: var(--ps-blue);
            font-weight: 700;
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        .text-primary {
            color: var(--ps-blue) !important;
        }
        
        .bg-dark {
            background-color: var(--ps-dark-gray) !important;
        }
        
        .footer {
            background: linear-gradient(90deg, var(--ps-black) 0%, var(--ps-blue) 100%);
            color: var(--ps-white);
            padding: 60px 0 20px;
            margin-top: 80px;
            border-radius: 50px 50px 0 0;
        }
        
        .footer h5 {
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--ps-light-blue);
        }
        
        .footer a {
            color: var(--ps-white);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer a:hover {
            color: var(--ps-light-blue);
            text-decoration: none;
            padding-left: 5px;
        }
        
        .section-title {
            position: relative;
            font-weight: 700;
            margin-bottom: 40px;
            padding-bottom: 15px;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--ps-blue) 0%, var(--ps-light-blue) 100%);
            border-radius: 2px;
        }
        
        .game-card {
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--ps-light-blue);
            transform: translateY(-5px);
        }
        
        /* Tombol login yang lebih rapi */
        .auth-btn {
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            margin-left: 10px;
            display: inline-block;
            text-decoration: none;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.5);
            font-size: 14px;
        }
        
        .login-btn {
            background-color: transparent;
            color: white;
        }
        
        .login-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .register-btn {
            background-color: var(--ps-light-blue);
            color: white;
        }
        
        .register-btn:hover {
            background-color: #0095d4;
            color: white;
        }
        
        .user-menu {
            background-color: var(--ps-light-blue);
            color: white;
        }
        
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .hero-section {
                padding: 60px 0;
            }
            
            .auth-btn {
                margin: 5px 0;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Simplified Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="/">
                <i class="fab fa-playstation me-2"></i>PlayStation Rental
            </a>
            
            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#mainNavbar" aria-controls="mainNavbar" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar Links and Auth Buttons -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home me-1"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/consoles"><i class="fas fa-gamepad me-1"></i> Konsol</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/games"><i class="fas fa-dice me-1"></i> Permainan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing"><i class="fas fa-tags me-1"></i> Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="fas fa-envelope me-1"></i> Kontak</a>
                    </li>
                </ul>
                
                <!-- Auth Links - Clean Design -->
                <div class="d-flex align-items-center">
                    @guest
                        <a href="{{ url('/login') }}" class="auth-btn login-btn">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                        <a href="{{ url('/register') }}" class="auth-btn register-btn">
                            <i class="fas fa-user-plus me-1"></i> Register
                        </a>
                    @else
                        <div class="dropdown">
                            <a class="auth-btn user-menu dropdown-toggle" href="#" role="button" 
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><i class="fab fa-playstation me-2"></i> PlayStation Rental</h5>
                    <p>Layanan rental PlayStation terpercaya. Kami menyediakan konsol dan permainan terbaru untuk hiburan Anda.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h5>Tautan</h5>
                    <ul class="list-unstyled">
                        <li><a href="/"><i class="fas fa-chevron-right me-2"></i>Beranda</a></li>
                        <li><a href="/consoles"><i class="fas fa-chevron-right me-2"></i>Konsol</a></li>
                        <li><a href="/games"><i class="fas fa-chevron-right me-2"></i>Permainan</a></li>
                        <li><a href="/contact"><i class="fas fa-chevron-right me-2"></i>Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4">
                    <h5>Jam Operasional</h5>
                    <ul class="list-unstyled">
                        <li>Senin - Jumat: 09:00 - 21:00</li>
                        <li>Sabtu: 09:00 - 22:00</li>
                        <li>Minggu: 10:00 - 21:00</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4">
                    <h5>Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i>Jalan Gaming 123, Jakarta</li>
                        <li><i class="fas fa-phone me-2"></i>(123) 456-7890</li>
                        <li><i class="fas fa-envelope me-2"></i>info@psrental.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 bg-light">
            <div class="text-center">
                <p>&copy; 2024 PlayStation Rental. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 