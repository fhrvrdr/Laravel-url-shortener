# Laravel URL Shortener

A URL shortener is a simple tool that takes a long URL and turns it into whatever URL you would like it to be.

Tech:

**Frontend:**  [Bootstrap](https://getbootstrap.com/)


**Backend:** [Laravel](https://laravel.com/)

## Documentation

* [Requires](#requires)
* [Installation](#installation)
* [Configuration](#configuration)
* [Run Locally](#run-locally)





## Requires


- PHP ^8.0
- MySql / MariaDB
- Apache
- Composer
## Installation

Clone the project:

```bash
git clone https://github.com/fhrvrdr/Laravel-url-shortener.git
```
Go to the project directory:
```bash
cd Laravel-url-shortener
```
Install dependencies:
```bash
composer install
```

## Configuration

Create .env file:
```bash
cp .env.example .env
```

Update Database Configration:
```bash
...
DB_DATABASE=laravel_demo
DB_USERNAME=demo
DB_PASSWORD=demo123456
...
```

## Run Locally
Install npm dependencies:
```bash
npm install
npm run dev
```
Run Migrations:
```bash
php artisan migrate
```
Start the server:
```bash
php artisan serve
```
