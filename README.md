# PlaytimeCo CRUD (Breeze) 🧸
<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"> <br>
</p>

<p align="center">
    <img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white">
    <img src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white">
    <img src="https://img.shields.io/badge/composer-%23885630.svg?style=for-the-badge&logo=composer&logoColor=white">
    <img src="https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white">
    <img src="https://img.shields.io/badge/NPM-%23CB3837.svg?style=for-the-badge&logo=npm&logoColor=white">
</p>

<p align="center">
    <a href="README.en.md">🇬🇧 README.md english version</a>
</p>

## 🎪 Acerca de PlaytimeCo CRUD
Aplicación Laravel + Breeze (Tailwind) para gestionar juguetes (CRUD) y perfiles de usuario. Incluye autenticación, interfaz responsiva y pruebas básicas.

---

## 🎯 Características principales

- ✅ **CRUD completo** de juguetes con validación
- ✅ **Autenticación y registro** con Laravel Breeze
- ✅ **Gestión de perfiles** de usuario
- ✅ **Interfaz responsive** con Tailwind CSS
- ✅ **Notificaciones** de éxito y error con auto-ocultamiento
- ✅ **Validación de formularios** del lado del servidor
- ✅ **Manejo de excepciones** robusto
- ✅ **Seeders** para datos de prueba
- ✅ **Diseño personalizado** inspirado en PlaytimeCo

---

## 🛠️ Tecnologías utilizadas

- **Backend:** Laravel 10.x
- **Frontend:** Blade, Alpine.js, Tailwind CSS
- **Autenticación:** Laravel Breeze
- **Base de datos:** MySQL/MariaDB
- **Gestor de paquetes:** Composer, NPM
- **Control de versiones:** Git

---

## ⚙️ Instalación y configuración

### Requisitos previos
Asegúrate de tener instalado:
- PHP >= 8.1
- Composer
- Node.js >= 16.x y npm
- MySQL/MariaDB o PostgreSQL
- Git

### 1. Clonar el repositorio
```bash
git clone <repo-url> playtimeco-crud-breeze
cd playtimeco-crud-breeze
```

### 2. Configurar el archivo de entorno
Copia el archivo de ejemplo y configura las variables necesarias:
```bash
cp .env.example .env
```

Edita el archivo `.env` y configura los siguientes parámetros:
```env
# Configuración de base de datos
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=playtimeco-sys
DB_USERNAME=root
#DB_PASSWORD=
```

### 3. Instalar dependencias
Instala las dependencias de PHP y Node.js:
```bash
# Dependencias de PHP
composer install

# Dependencias de Node.js
npm install
```

### 4. Generar clave de aplicación
```bash
php artisan key:generate
```

### 5. Configurar la base de datos

Ejecuta las migraciones y los seeders:
```bash
# Ejecutar migraciones
php artisan migrate

# Ejecutar seeders específicos
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=ToySeeder

# O ejecutar todo de una vez (refresca la BD)
php artisan migrate:fresh --seed
```

### 6. Compilar assets
Para desarrollo (con hot-reload):
```bash
npm run dev
```

### 7. Iniciar el servidor
```bash
php artisan serve
```

La aplicación estará disponible en: `http://localhost:8000`

### 8. Credenciales de prueba
Después de ejecutar los seeders, puedes acceder con:
```
Email: claire.harper@playtimeco.com
Password: harperpassword123
```

---

## 🔐 Fragmentos destacados de la aplicación

### Captura de excepciones en ToyController
Asegura el rollback de la base de datos, registra errores y proporciona respuestas amigables al usuario.
```php
// filepath: app/Http/Controllers/ToyController.php
// ...código existente...
public function store(Request $request)
{
    // Crear validador manual con todas las reglas de validación
    $validator = Validator::make($request->all(), [
        'user_id' => 'nullable|integer',              // ID del supervisor (opcional)
        'alias' => 'required|string|max:100',         // Alias del juguete (obligatorio)
        'name' => 'required|string|max:50',           // Nombre del juguete (obligatorio)
        'gender' => 'required|string',                // Género (Male/Female)
        'height' => 'nullable|numeric',               // Altura en metros (opcional)
        'weight' => 'nullable|numeric',               // Peso en kg (opcional)
        'subject' => 'required|integer|unique:toys,subject',  // Número de sujeto (único en BD)
        'status' => 'required|string',                // Estado (Alive/Deceased)
        'creation_date' => 'required|date',           // Fecha de creación del juguete
        'species' => 'required|string|max:100',       // Especie del juguete
        'description' => 'nullable|string|max:500',   // Descripción (opcional)
        'visual' => 'nullable|string|max:500'         // URL de imagen (opcional)
    ]);

    // Verificar si la validación falla
    if ($validator->fails()) {
        return redirect()->back()                      // Volver al formulario
            ->withErrors($validator)                   // Enviar errores de validación
            ->withInput()                              // Mantener datos ingresados
            ->with('error', 'Please fix the validation errors.');  // Mensaje de error general
    }

    // Intentar crear el juguete en la base de datos
    try {
        Toy::create($request->all());                  // Crear registro en la tabla toys
        
        return redirect()->route('toys.index')         // Redirigir al listado
            ->with('success', 'Toy created successfully!');  // Mensaje de éxito
            
    } catch (Exception $e) {
        // Capturar cualquier error durante la creación
        return redirect()->back()                      // Volver al formulario
            ->withInput()                              // Mantener datos ingresados
            ->with('error', 'Failed to create toy. Please try again.');  // Mensaje de error
    }
}
// ...código existente...
```

---

## 📁 Estructura del proyecto
```
playtimeco-crud-breeze/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ToyController.php          # Maneja las operaciones CRUD de juguetes (index, create, store, show, edit, update, destroy)
│   │   │   └── ProfileController.php      # Gestiona las operaciones de perfil de usuario (ver, editar, actualizar, eliminar cuenta)
|
│   └── Models/
│       ├── Toy.php                        # Modelo Eloquent que representa la tabla toys con campos rellenables y relaciones
│       └── User.php                       # Modelo Eloquent para usuarios con autenticación y gestión de perfil
├── database/
│   ├── migrations/                        # Definiciones del esquema de base de datos para crear tablas y columnas
│   └── seeders/
│       ├── UserSeeder.php                 # Rellena la base de datos con cuentas de usuario de prueba
│       └── ToySeeder.php                  # Rellena la base de datos con registros de juguetes de ejemplo
├── resources/
│   ├── views/
│   │   ├── components/
│   │   │   ├── success-message.blade.php  # Componente reutilizable para mostrar notificaciones de éxito con auto-ocultamiento
│   │   │   └── error-message.blade.php    # Componente reutilizable para mostrar notificaciones de error con auto-ocultamiento
│   │   ├── toys/
│   │   │   ├── index.blade.php            # Muestra una lista de todos los juguetes en formato tabla
│   │   │   ├── create.blade.php           # Vista de formulario para crear un nuevo juguete
│   │   │   ├── edit.blade.php             # Vista de formulario para editar un juguete existente
│   │   │   └── show.blade.php             # Vista detallada de un solo juguete con toda su información
│   │   └── layouts/                       # Plantillas de diseño maestro para una estructura de página consistente
|
├── routes/
│   ├── web.php                            # Define todas las rutas de la aplicación web incluyendo las rutas CRUD de juguetes
│   └── auth.php                           # Define las rutas de autenticación (login, registro, logout, recuperación de contraseña)
```

---

## 📸 Capturas de pantalla

### Página de inicio
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/welcome.png" width="800" alt="Dashboard">
</p>

> *VPágina de bienvenida*

### Dashboard principal
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/dashboard-stats.png" width="800" alt="Dashboard">
  <img src="playtimeco-crud-breeze/pictures/dashboard-actions.png" width="800" alt="Dashboard">
</p>

> *Vista principal del panel de control con listado de juguetes*

### Listado de juguetes
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/index.png" width="800" alt="Listado de juguetes">
</p>
*Vista resumida en formato de cards con todos los juguetes registrados*

### Detalle de juguete
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/show-toy.png" width="800" alt="Detalle de juguete">
</p>

> *Vista detallada de un juguete con toda su información*

### Crear/Editar juguete
<p align="center">

**Crear**
  <img src="playtimeco-crud-breeze/pictures/create-toy.png" width="800" alt="Formulario de juguete">

  **Editar**
  <img src="playtimeco-crud-breeze/pictures/edit-toy.png" width="800" alt="Formulario de juguete">
</p>

> *Formulario para crear o editar un juguete*

### Eliminar juguete
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/delete-toy.png" width="800" alt="Formulario de juguete">
</p>

> *Modal de confirmación de borrado de juguete*

### Autenticación
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/login.png" width="800" alt="Login">
</p>

> *Página de inicio de sesión con diseño personalizado*

### Perfil
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/edit-profile.png" width="800" alt="Login">
</p>

> *Vista de edición de perfil de usuario*

### Responsive design
<p align="center">
  <img src="playtimeco-crud-breeze/pictures/responsive.png" width="400" alt="Vista móvil">
</p>

> *Interfaz totalmente adaptada para dispositivos móviles*

---

## 📝 Licencia

Este proyecto es de código abierto y está disponible bajo la [licencia MIT](https://opensource.org/licenses/MIT).