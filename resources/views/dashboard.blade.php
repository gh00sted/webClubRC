<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Club RC Clospalacios</title>
    @vite(['resources/css/welcome.css', 'resources/css/auth.css'])
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
                <span>Área de usuario registrado</span>
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
                <div class="user-info-nav">
                    <div class="user-avatar-nav">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <span class="user-name-nav">{{ Auth::user()->name }}</span>
                </div>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-primary"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="dashboard-container">
        <div class="dashboard-header">
            <div>
                <h1>Bienvenido, <span>{{ Auth::user()->name }}</span></h1>
                <p class="dashboard-email">Email: {{ Auth::user()->email }}</p>
            </div>
            <div class="user-info">
                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </div>
        </div>

        <div class="welcome-section">
            <h2>
                <i class="fas fa-hand-spock" style="margin-right: 8px;"></i>
                ¡Hola de nuevo!
            </h2>
            <p>
                Te has registrado exitosamente en el Club RC Clospalacios. Aquí puedes acceder a todas nuestras funcionalidades, 
                participar en competiciones, ver entrenamientos y conectar con otros miembros de la comunidad.
            </p>
            <div class="quick-actions">
                <a href="#"><i class="fas fa-flag-checkered"></i> Ver Competiciones</a>
                <a href="#"><i class="fas fa-user"></i> Mi Perfil</a>
                <a href="#"><i class="fas fa-dumbbell"></i> Entrenamientos</a>
            </div>
        </div>

        <div class="dashboard-grid">
            <div class="dashboard-card">
                <div class="number">0</div>
                <p>Competiciones Participadas</p>
            </div>
            <div class="dashboard-card">
                <div class="number">0</div>
                <p>Entrenamientos Completados</p>
            </div>
            <div class="dashboard-card">
                <div class="number">{{ now()->format('d') }}</div>
                <p>Días en el Club</p>
            </div>
            <div class="dashboard-card">
                <div class="number">{{ auth()->user()->created_at->format('m/d') }}</div>
                <p>Fecha de Registro</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Club Roberto Clospalacios. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
