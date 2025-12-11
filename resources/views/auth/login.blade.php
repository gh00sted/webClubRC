<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión - Club RC Clospalacios</title>
    @vite(['resources/css/welcome.css', 'resources/css/auth.css'])
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div style="text-align: center; margin-bottom: 2rem;">
                <img src="{{ asset('img/logo_club.png') }}" alt="Club RC Clospalacios" style="height: 60px; margin-bottom: 1rem;">
                <h2>Iniciar Sesión</h2>
                <p class="subtitle">Bienvenido de vuelta al Club RC Clospalacios</p>
            </div>

            @if ($errors->any())
                <div class="auth-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="tu@email.com"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <div class="password-toggle">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="••••••••"
                            required
                        >
                        <button type="button" onclick="togglePassword()">👁️</button>
                    </div>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn-submit">Iniciar Sesión</button>
            </form>

            <div class="auth-footer">
                <p>¿No tienes cuenta?</p>
                <a href="{{ route('register') }}">Registrarse aquí</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const button = event.target;
            
            if (input.type === 'password') {
                input.type = 'text';
                button.textContent = '🙈';
            } else {
                input.type = 'password';
                button.textContent = '👁️';
            }
        }
    </script>
</body>
</html>
