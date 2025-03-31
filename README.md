# Laravel Roadrunner Application

## Starter

- Laravel v12.x
- PHP v8.3.x
- PostgreSQL v16.x
- Roadrunner v2024.3.5

# Requirements
- Stable version of [Docker](https://docs.docker.com/engine/install/)
- Compatible version of [Docker Compose](https://docs.docker.com/compose/install/#install-compose)
- PHP extensions: sockets, pcntl inside docker-container
- NPM: [chokidar](https://www.npmjs.com/package/chokidar) - for hot-reload

# How To Deploy

## For first time only !
- `cd [PATH TO PROJECT]`
- `docker compose up -d --build`
- `docker compose exec php bash`
- `chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/storage/logs`
- `chmod -R 775 /var/www/storage /var/www/bootstrap/cache /var/www/storage/logs`
- `composer install`
- `php artisan key:generate`
- `php artisan migrate`

## From the second time onwards
- `docker compose up -d`

## Manually download RR binary:

- `./vendor/bin/rr get-binary`

### Nginx + PHP-FPM
- URL: http://localhost

### Roadrunner

- URL: http://localhost:8000

### Issues:

- Enable watching octane + RR on WSL2: https://github.com/laravel/octane/issues/237
