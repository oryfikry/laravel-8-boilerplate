### Laravel 8 Boilerplate

This template is for educational only

### Installation

#### -clone this repo and then open this project into your code editor (vs code recommended) 

```
git clone https://github.com/oryfikry/laravel-8-boilerplate.git
```
#### -rename .env.example to .env
#### -run composer
```
composer install
```
#### -run key generate
```
php artisan key:generate
```
#### -set your database in file .env and in your phpmysql or etc

#### -run migrate
```
php artisan migrate
```

#### -run 
```
php artisan serve
```
#### Optional
you can setting login page default with:
go to vendor/laravel/ui/auth-backend/authenticatesuser
on showloginform() replace auth.login with v_login 

screenshoot
<img src="https://github.com/oryfikry/laravel-8-boilerplate/blob/beta-release/sc/sc1.png"><br>
<img src="https://github.com/oryfikry/laravel-8-boilerplate/blob/beta-release/sc/sc2.png"><br>
<img src="https://github.com/oryfikry/laravel-8-boilerplate/blob/beta-release/sc/sc3.png"><br>
