Dockerビルド

1.git clone git@github.com:n4k4mura/laravel.git
2.docker-compose up -d -build

Laravel環境構築

1.docker-compose exec php bash
2.composer install
3..env.exampleふぁいるから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

使用技術

php 7.4.9
laravel 8
mysql 8.0.26

url
開発環境 : http://localhost/
phpMyAdmon : http://localhost8080/
