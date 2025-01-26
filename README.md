


git clone https://github.com/especializati/setup-docker-laravel.git

git clone https://github.com/laravel/laravel.git app-laravel


cp -rf setup-docker-laravel/* app-laravel/
cd app-laravel/


cp .env.example .env


APP_NAME="Especializa Ti"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379


docker-compose up -d


docker-compose exec app bash


composer install


php artisan key:generate


[http://localhost:8989](http://localhost:8989)
