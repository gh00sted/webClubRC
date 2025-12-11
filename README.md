# 🏎️ Club RC Clospalacios - Web Platform

> Plataforma web moderna para la gestión y promoción del Club RC Clospalacios

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Laravel](https://img.shields.io/badge/Laravel-12.0-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.2+-purple.svg)
![Status](https://img.shields.io/badge/status-Active-success.svg)

## 📋 Descripción

Plataforma web completa para el Club Roberto Clospalacios de vehículos de radiocontrol (RC). Permite a los usuarios registrarse, autenticarse y acceder a un panel personalizado con información sobre competiciones, entrenamientos y eventos del club.

### ✨ Características Principales

- 🔐 **Sistema de Autenticación Completo**
  - Registro de nuevos usuarios
  - Login seguro con validación
  - Logout con destrucción de sesión
  - Regeneración de tokens CSRF

- 🎨 **Diseño Moderno y Responsivo**
  - Tema claro y profesional
  - Interfaz amigable
  - Totalmente responsive (móvil, tablet, desktop)
  - Animaciones suaves

- 🎯 **Secciones Principales**
  - Página de bienvenida con información del club
  - Dashboard para usuarios autenticados
  - Formularios de login y registro
  - Galería de eventos y competiciones

- 🏆 **Gestión de Usuarios**
  - Perfiles de usuario
  - Historial de competiciones
  - Badges y reconocimientos
  - Panel de control personalizado

## 🚀 Inicio Rápido

### Requisitos Previos

- **PHP** 8.2 o superior
- **Composer** (gestor de dependencias de PHP)
- **Node.js** y **npm** (para compilar assets)
- **Base de datos** (SQLite, MySQL o PostgreSQL)

### Instalación

1. **Clonar el repositorio**
```bash
git clone https://github.com/gh00sted/webClubRC.git
cd webClubRC
```

2. **Instalar dependencias de PHP**
```bash
composer install
```

3. **Instalar dependencias de Node.js**
```bash
npm install
```

4. **Configurar variables de entorno**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Crear base de datos y ejecutar migraciones**
```bash
php artisan migrate
```

6. **Compilar assets con Vite**
```bash
npm run build
```

7. **Iniciar el servidor de desarrollo**
```bash
php artisan serve
```

Accede a: `http://localhost:8000`

## 📦 Estructura del Proyecto

```
webClubRC/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── AuthController.php      # Control de autenticación
│   └── Models/
│       └── User.php                    # Modelo de usuario
├── resources/
│   ├── css/
│   │   ├── welcome.css                 # Estilos de bienvenida
│   │   └── auth.css                    # Estilos de autenticación
│   ├── views/
│   │   ├── welcome.blade.php           # Página de inicio
│   │   ├── dashboard.blade.php         # Panel de usuario
│   │   └── auth/
│   │       ├── login.blade.php         # Formulario de login
│   │       └── register.blade.php      # Formulario de registro
│   └── js/
│       └── app.js                      # JavaScript de la app
├── routes/
│   └── web.php                         # Rutas de la aplicación
├── public/
│   ├── img/
│   │   ├── logo_club.png               # Logo del club
│   │   └── logo_evento.png             # Logo del evento
│   └── build/                          # Assets compilados
└── database/
    ├── migrations/                     # Migraciones de BD
    └── seeders/                        # Seeders de datos
```

## 🎨 Paleta de Colores

```
Primary Yellow:  #feb236
Primary Red:     #d64161
Primary Blue:    #27A3F5
Light Background: #ffffff
Dark Text:       #1a1a1a
Gray Text:       #666666
```

## 🔑 Rutas Principales

| Ruta | Método | Descripción |
|------|--------|-------------|
| `/` | GET | Página de inicio |
| `/login` | GET/POST | Formulario de login |
| `/register` | GET/POST | Formulario de registro |
| `/dashboard` | GET | Panel del usuario (protegido) |
| `/logout` | POST | Cerrar sesión |

## 🛠️ Tecnologías Utilizadas

- **Backend**: Laravel 12
- **Frontend**: Blade, CSS3, JavaScript (Vanilla)
- **Build Tool**: Vite
- **Base de Datos**: SQLite/MySQL/PostgreSQL
- **Validación**: Laravel Validator
- **Autenticación**: Laravel Auth Facade

## 📝 Variables de Entorno

```env
APP_NAME=Club RC Clospalacios
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
```

## 🔒 Seguridad

- ✅ Protección CSRF en todos los formularios
- ✅ Hashing de contraseñas con bcrypt
- ✅ Validación de datos en servidor
- ✅ Regeneración de tokens de sesión
- ✅ Middleware de autenticación

## 💻 Desarrollo

### Modo Watch (desarrollo)
```bash
npm run dev
```

### Compilación Producción
```bash
npm run build
```

### Ejecutar Tests
```bash
php artisan test
```

## 📱 Responsive Design

La plataforma se adapta automáticamente a:
- 📱 Móviles (480px+)
- 📱 Tablets (768px+)
- 🖥️ Escritorio (1024px+)

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Para cambios mayores, abre un issue primero para discutir los cambios propuestos.

## 📄 Licencia

Este proyecto está bajo la licencia MIT. Ver el archivo [LICENSE](LICENSE) para más detalles.

## 👥 Autor

- **Desarrollador**: @gh00sted
- **Organización**: Club RC Clospalacios

## 📞 Contacto & Soporte

Para reportar bugs o sugerencias, abre un [issue en GitHub](https://github.com/gh00sted/webClubRC/issues)

## 🗺️ Roadmap

- [ ] Sistema de competiciones
- [ ] Galería de fotos
- [ ] Sistema de calificaciones
- [ ] Notificaciones en tiempo real
- [ ] API REST
- [ ] Panel administrativo
- [ ] Integración con redes sociales

---

<div align="center">

**¡Bienvenido al Club RC Clospalacios!**

Haz que tu pasión por los vehículos RC sea parte de una comunidad increíble.

[🌐 Visita el sitio web](http://localhost:8000) • [⭐ Stars](https://github.com/gh00sted/webClubRC) • [🐛 Reportar Bug](https://github.com/gh00sted/webClubRC/issues)

</div>
