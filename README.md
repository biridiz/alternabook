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

https://remotemysql.com/databases.php

DB_CONNECTION=mysql
DB_HOST=sql10.freemysqlhosting.net
DB_PORT=3306
DB_DATABASE=sql10435749
DB_USERNAME=sql10435749
DB_PASSWORD=DC8gmFUzRC

These are the username and password to log in to your database and phpMyAdmin

php artisan make:migration class --create=tablename

## Forma para consultar, etc

$results = DB::select("SELECT * FROM users");