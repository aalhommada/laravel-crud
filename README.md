# Laravel Crud App

A simple crud App with Laravel 8, tailwind, blade.

## Installation

Clone the repository-

```
git clone https://github.com/aalhommada/laravel-crud.git
```

Then cd into the folder with this command-

```
cd laravel-crud
```

Then do a composer install

```
composer install
```

Then do a npm install

```
npm install
```

Then create a environment file using this command-

```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_CONNECTION`,`DB_DATABASE`,`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `laravel_crud` and then do a database migration using this command-

```
php artisan migrate
```

## Run server

Run server using this command-

```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Read more

-   [aalhommada](https://github.com/aalhommada)
