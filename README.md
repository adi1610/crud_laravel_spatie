<p align="center"><a href="https://optimasolution.co.id" target="_blank"><img src="https://optimasolution.co.id/wp-content/uploads/sites/47/2018/06/s-soft-lg.png" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Setup Di Local Development

Jangan lupa import dulu databasenya setelah itu bisa lanjut step dibawah. Next:

- Clone project :
```bash
git clone -----
```
- jalankan perintah :
```bash
composer install
```
- buat file  <b>.env</b>  duplicat file  <b>.env.example</b>  jangan lupa rename jadi  <b>.env</b>
- buka file  <b>.env</b>  Rubah di bagian (Connection ke database kita):

```
DB_DATABASE=nama-database
DB_USERNAME=username-db
DB_PASSWORD=password-db
```

- jalankan perintah (Generate Key):
```bash
php artisan key:generate
```

- jalankan perintah (migration):
```bash
php artisan migrate:fresh --seed
```

## Menjalankan Aplikasi

```bash
php artisan serve
```

## Account Admin Default

```
email : adicahyo@mail.com
password : adi1234
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
