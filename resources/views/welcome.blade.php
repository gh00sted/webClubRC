<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club RC Clospalacios - Bienvenido</title>
    @vite(['resources/css/welcome.css'])
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo_club.png') }}" alt="Club RC Clospalacios" style="height: 40px; margin-right: 10px; vertical-align: middle;">
            Club RC Los Palacios
        </div>
        <div class="nav-links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn-primary">Cerrar Sesión</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Iniciar Sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenido al <span>Club RC</span></h1>
            <p>Somos una comunidad apasionada por los vehículos de radiocontrol. Únete a nosotros para disfrutar de competiciones emocionantes, entrenamientos intensivos y una familia que comparte tu pasión.</p>
            <div class="hero-buttons">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn-primary">Ir al Panel</a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary">Iniciar Sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-secondary">Crear Cuenta</a>
                    @endif
                @endauth
            </div>
        </div>
        <div class="hero-visual">
            <div class="hero-card">
                <img src="{{ asset('img/logo_evento.png') }}" alt="Evento del año" style="width: 100%; height: 100%; object-fit: contain; padding: 20px;">
            </div>
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
                    <p>Participa en emocionantes carreras y competiciones contra otros miembros del club. Demuestra tus habilidades y gana increíbles premios.</p>
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
                    <p>Conoce a personas que comparten tu pasión por los vehículos RC. Crea amistades duraderas dentro de una comunidad vibrante.</p>
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
                    <p>Mejora tus habilidades con sesiones de entrenamiento profesional y tutoría personalizada de expertos en RC.</p>
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
                    <p>Acceso a eventos especiales, showrooms y experiencias que solo están disponibles para miembros del club.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 2L28 14H40L30 20L34 32L24 26L14 32L18 20L8 14H20L24 2Z" fill="#d64161"/>
                        </svg>
                    </div>
                    <h3>Recursos</h3>
                    <p>Biblioteca de tutoriales, guías técnicas y contenido exclusivo para llevar tu hobby al siguiente nivel.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 6L28 16H38L30 22L34 32L24 26L14 32L18 22L10 16H20L24 6Z" fill="#feb236"/>
                        </svg>
                    </div>
                    <h3>Reconocimiento</h3>
                    <p>Sé reconocido por tus logros y obtén badges exclusivos que demuestren tu dedicación al club.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>¿Listo para comenzar tu aventura RC?</h2>
        <p>Únete hoy a nuestra comunidad y descubre un mundo de posibilidades con los vehículos de radiocontrol.</p>
        @guest
            <a href="{{ route('register') }}" class="btn-primary">Registrarse Ahora</a>
        @endguest
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Club Roberto Clospalacios. Todos los derechos reservados.</p>
    </footer>
</body>
</html>