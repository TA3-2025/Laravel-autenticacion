# Descargar
Ejecutar `git clone https://github.com/TA3-2025/Laravel-autenticacion.git`

Nos paramos en el directorio del proyecto con `cd laravel-autenticacion`

# Configurar
Copiar archivo `.env.example` en `.env`, editarlo, y darle valores a las credenciales de base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre
DB_USERNAME=root
DB_PASSWORD=
```

Despues ejecutar: 
```bash
composer install # Instala paquetes de Composer
php artisan key:generate # Genera key de laravel
php artisan migrate # Ejecutar migraciones y crear tablas
php artisan db:seed # Ejecutar seeders y llenar tabla users 
```

# Ejecutar
Ejecutamos `php artisan serve` y vamos a `http://localhost:8000`


