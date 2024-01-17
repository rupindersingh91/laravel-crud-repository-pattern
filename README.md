Laravel CRUD using repository pattern

## Prerequisites

PHP >= 7.3
Composer
Node.js & npm (for frontend assets)

## Getting Started

1. Clone the Repository

```
git clone https://github.com/your-username/your-project.git
cd your-project 
```

2. Install Dependencies

```
composer install
npm install
```

3. Configure Environment
Copy the .env.example file to .env and update the database and other configuration settings.

```
cp .env.example .env
```

4. Generate Application Key
```
php artisan key:generate
```

5. Run Migrations and Seeders
```
php artisan migrate --seed
```

6. Serve the Application
```
php artisan serve
```
Visit http://127.0.0.1:8000 in your browser.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
