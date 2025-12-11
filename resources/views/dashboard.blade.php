<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Club RC Clospalacios</title>
    @vite(['resources/css/welcome.css'])
    <style>
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid var(--primary-yellow);
        }

        .dashboard-header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .dashboard-header h1 span {
            background: linear-gradient(135deg, var(--primary-yellow), var(--primary-red));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-yellow), var(--primary-red));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .dashboard-card {
            background: rgba(26, 31, 46, 0.5);
            border: 2px solid var(--primary-blue);
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(39, 163, 245, 0.2);
        }

        .dashboard-card .number {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary-yellow), var(--primary-red));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .dashboard-card p {
            color: var(--gray-text);
        }

        .logout-btn {
            background: transparent;
            color: var(--primary-red);
            border: 2px solid var(--primary-red);
            padding: 0.7rem 1.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: var(--primary-red);
            color: white;
        }

        .welcome-section {
            background: rgba(39, 163, 245, 0.05);
            border: 2px solid var(--primary-blue);
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 3rem;
        }

        .welcome-section h2 {
            color: var(--primary-yellow);
            margin-bottom: 1rem;
        }

        .welcome-section p {
            color: var(--gray-text);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .quick-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .quick-actions a {
            padding: 0.7rem 1.5rem;
            background: linear-gradient(135deg, var(--primary-yellow), var(--primary-red));
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: transform 0.3s ease;
        }

        .quick-actions a:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('img/logo_club.png') }}" alt="Club RC Clospalacios" style="height: 40px; margin-right: 10px; vertical-align: middle;">
            Club RC Clospalacios
        </div>
        <div class="nav-links">
            <a href="/">Inicio</a>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="logout-btn">Cerrar Sesión</button>
            </form>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="dashboard-header">
            <div>
                <h1>Bienvenido, <span>{{ Auth::user()->name }}</span></h1>
                <p style="color: var(--gray-text); margin-top: 0.5rem;">Email: {{ Auth::user()->email }}</p>
            </div>
            <div class="user-info">
                <div class="user-avatar">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
            </div>
        </div>

        <div class="welcome-section">
            <h2>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle; margin-right: 8px;">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" fill="#feb236"/>
                    <path d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z" fill="#feb236"/>
                </svg>
                ¡Hola de nuevo!
            </h2>
            <p>
                Te has registrado exitosamente en el Club RC Clospalacios. Aquí puedes acceder a todas nuestras funcionalidades, 
                participar en competiciones, ver entrenamientos y conectar con otros miembros de la comunidad.
            </p>
            <div class="quick-actions">
                <a href="#">Ver Competiciones</a>
                <a href="#">Mi Perfil</a>
                <a href="#">Entrenamientos</a>
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
</body>
</html>
