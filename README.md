# Laravel Blog API

A simple blog for demonstration purpose. Based on Laravel 5.8

## Requirements

- Laravel 5.8
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension



## Installation

```
git clone https://github.com/gourab-dev/laravel-blog.git blog
cd blog
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

## Demo login info

user: reach@test.in | password: password

## API Endpoints

This projects exposes only these API endpoints. You could request those endpoints with the `api_token` passed as query parameters, like this- `/api/tags?api_token=YOUR_API_KEY`. The API key could be obtained from `/api/auth/token` endpoint. Available endpoints are-

```
/api/tags
/api/categories
/api/users     // only accessible by admin
/api/posts

example call from browser: http://127.0.0.1:8000/api/posts?api_token=gDGgG2nsEwvqvxPp3f9NRJkzVVz6Yt5eVib3bRFFI1BAqZiyiy

I copy this token directly from DB for use here
```

## Author

- [Gourab Kirtania](gourab.mailme@gmail.com)

Feel free to email me, if you have any question.
