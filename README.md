# Generate PDF in Laravel 

This projects demostrates how to generate PDF in Laravel.

## Installation

- Clone the repository
```bash
git clone https://github.com/phi-rakib/laravel-pdf-generator.git
```

- Change directory to laravel-pdf-generator
```bash
cd laravel-pdf-generator
```

- Install the dependencies
```bash
composer install
```
- Create database
- Copy the environment file
```bash
cp .env.example .env
```
- Change database configuration values in the environment file
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-db-user-name
DB_PASSWORD=your-db-password
```
- Run migration
```bash
php artisan migrate
```
- Seed database
```bash
php artisan db:seed
```
- Start local development server
```bash
php artisan serve
```