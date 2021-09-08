## Setup

```bash
$ apt install composer
$ cd ~/alternabook
$ composer install
```

## Run

```bash
$ php -S localhost:8000 -t public
```

## Database - criei um novo

These are the username and password to log in to your database and phpMyAdmin

php artisan make:migration class --create=tablename

## Forma para consultar, etc

$results = DB::select("SELECT * FROM users");