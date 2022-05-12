# Qoute Gen

## Installation

1. Checkout the repository:

```
git@github.com:cloudy4next/Qoute-gen.git
```

2. Copy Env file & Generate Key 
```
cp .env.example .env
php artisan key:generate

```
3. Run migration: 
```
php artisan migrate
```
4. Run seeder
``` 
php artisan db:seed 
```
5. Install composer dependencies: 

```
composer install
```

6. Install Passport for Tesing api: 

```
php artisan passport:install
```
7. Start the built-in webserver (or use Apache/Nginix): 

```
php artisan serve
```

8. Browse and use ```kkdestiny@gmail.com``` as gmail and password: http://127.0.0.1:8000


## POSTMAN Api Testing 

1. Set Username and password 
![My Image](screenshort/login.png)

Copy token and add it to ``Bearer Token``.

2. Make request as showed to see following result:
![My Image](screenshort/qoute-list.png)

3. Make request as showed to see following result:
![My Image](screenshort/save-qoutes.png)
