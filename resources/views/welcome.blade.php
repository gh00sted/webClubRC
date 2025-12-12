<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club RC Clospalacios - Bienvenido</title>
    @vite(['resources/css/welcome.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Top Header -->
    <div class="top-header">
        <div class="top-header-content">
            <div class="top-left">
                <span><i class="fas fa-headset"></i> Ayuda de uso</span>
                <span><i class="fas fa-phone"></i> +34 664 34 56 33</span>
            </div>
            <div class="top-right">
                <span>Regístrate y únete a la comunidad</span>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
                <img src="{{ asset('img/logo_club.png') }}" alt="Club RC Clospalacios" style="height: 40px; margin-right: 10px; vertical-align: middle;">
                Club RC Clospalacios
            </div>
            <div class="nav-menu">
                <a href="/" class="nav-link"><i class="fas fa-home"></i> INICIO</a>
                <a href="#" class="nav-link"><i class="fas fa-trophy"></i> COMPETICIONES</a>
                <a href="#" class="nav-link"><i class="fas fa-info-circle"></i> Sobre nosotros</a>
            </div>
            <div class="nav-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn-primary">Cerrar Sesión</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="nav-link"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-primary"><i class="fas fa-user-plus"></i> Regístrate</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>¡Bienvenido a Club RC Clospalacios!</h1>
            <p>La comunidad de vehículos de radiocontrol más apasionante</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="features-container">
            <h2 class="section-title">¿Por qué <span>unirse?</span></h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4L28 14H38L31 19L34 29L24 24L14 29L17 19L10 14H20L24 4Z" fill="#feb236"/>
                        </svg>
                    </div>
                    <h3>Competiciones</h3>
                    <p>Participa en emocionantes carreras y competiciones contra otros miembros del club.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="12" r="4" fill="#27A3F5"/>
                            <path d="M10 18H22V26C22 28.2 20.2 30 18 30H14C11.8 30 10 28.2 10 26V18Z" fill="#27A3F5"/>
                            <circle cx="32" cy="12" r="4" fill="#d64161"/>
                            <path d="M26 18H38V26C38 28.2 36.2 30 34 30H30C27.8 30 26 28.2 26 26V18Z" fill="#d64161"/>
                        </svg>
                    </div>
                    <h3>Comunidad</h3>
                    <p>Conoce a personas que comparten tu pasión por los vehículos RC.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4V20M24 20L18 14M24 20L30 14" stroke="#feb236" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="8" y="28" width="32" height="16" rx="2" stroke="#feb236" stroke-width="2" fill="none"/>
                            <path d="M16 36H32" stroke="#feb236" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Entrenamientos</h3>
                    <p>Mejora tus habilidades con sesiones de entrenamiento profesional.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="20" stroke="#27A3F5" stroke-width="2" fill="none"/>
                            <circle cx="24" cy="24" r="14" stroke="#27A3F5" stroke-width="2" fill="none"/>
                            <circle cx="24" cy="24" r="3" fill="#27A3F5"/>
                        </svg>
                    </div>
                    <h3>Eventos Exclusivos</h3>
                    <p>Acceso a eventos especiales y experiencias únicas.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 2L28 14H40L30 20L34 32L24 26L14 32L18 20L8 14H20L24 2Z" fill="#d64161"/>
                        </svg>
                    </div>
                    <h3>Recursos</h3>
                    <p>Biblioteca de tutoriales y contenido exclusivo.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 6L28 16H38L30 22L34 32L24 26L14 32L18 22L10 16H20L24 6Z" fill="#feb236"/>
                        </svg>
                    </div>
                    <h3>Reconocimiento</h3>
                    <p>Sé reconocido por tus logros y obtén badges exclusivos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>¿Listo para comenzar tu aventura RC?</h2>
        <p>Únete hoy a nuestra comunidad y descubre un mundo de posibilidades</p>
        @guest
            <a href="{{ route('register') }}" class="btn-primary">Registrarse Ahora</a>
        @endguest
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Club Roberto Clospalacios. Todos los derechos reservados.</p>
    </footer>
</body>
</html>