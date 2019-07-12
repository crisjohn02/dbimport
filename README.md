# Laravel Database Export/Import SQL File

## Installation
```
composer require crisjohn02/dbimport
```

##### To export your database (exported sql file will be found at your laravel root folder)
```
php artisan export:db
```

##### To import your SQL file, store the sql file in you laravel root folder before performing importing
```
php artisan import:db your_file.sql
```
