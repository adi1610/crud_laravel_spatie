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
git clone https://github.com/adi1610/crud_laravel_spatie.git
```
- jalankan perintah :
```bash
composer install 

atau

composer update
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
atau bisa import dari sql data.sql
```

## Menjalankan Aplikasi

```bash
php artisan serve --port=8000
```

## Account Admin Default

```
user untuk admin 
 - email : superadmin
 - password : 12345678

user untuk pengunjung
 - email : pengunjung
 - password : 12345678
```

## Untuk akses Api

⚠️Untuk Port bisa disesuaikan⚠️
⚠️Untuk Id bisa disesuaikan⚠️

- GET Data
```
localhost:8000/api/penduduk
```

- GET Data Filter Id
```
localhost:8000/api/penduduk/{id}
```

- DELETE Data
```
localhost:8000/api/penduduk/{id}
```

- POST Data
```
localhost:8000/api/penduduk

json : 

{
	"penNik": "1234567887654321",
    "penNama": "adicahyo",
    "penTempatLahir": "kendal",
    "penTglLahir": "2000-01-19",
    "penImage": "data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjEwMCIgdmlld0JveD0iMCAwIDUwIDUwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHN0eWxlPSJmaWxsOiMwMDAwMDA7Ij4KICAgIDxjaXJjbGUgY3g9IjI1IiBjeT0iMTEiIHI9IjkiLz4KICAgIDxwYXRoIGQ9Ik0yNSAyMUMxNi4yIDIxIDkgMjguMiA5IDM3djcuNmMwIC41LjQuOSA5IDkuN2wzLjUgM2MuOS43IDEuNiAxLjEgMy41IDEuMWgxMC4zYzEuOSAwIDIuNi0uNCAzLjUtMS4xbDMuNS0zYzguNy0uOCA5LjMtNC40IDktOS43VjM3YzAtOC44LTcuMi0xNi0xNi0xNnoiLz4KPC9zdmc+Cg=="
}
```

- PUT Data
```
localhost:8000/api/penduduk/{id}

json :

{
	"penNik": "123456788334561",
    "penNama": "sasa",
    "penTempatLahir": "kendal",
    "penTglLahir": "2000-01-19",
    "penImage": "data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgd2lkdGg9IjEwMCIgdmlld0JveD0iMCAwIDUwIDUwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHN0eWxlPSJmaWxsOiMwMDAwMDA7Ij4KICAgIDxjaXJjbGUgY3g9IjI1IiBjeT0iMTEiIHI9IjkiLz4KICAgIDxwYXRoIGQ9Ik0yNSAyMUMxNi4yIDIxIDkgMjguMiA5IDM3djcuNmMwIC41LjQuOSA5IDkuN2wzLjUgM2MuOS43IDEuNiAxLjEgMy41IDEuMWgxMC4zYzEuOSAwIDIuNi0uNCAzLjUtMS4xbDMuNS0zYzguNy0uOCA5LjMtNC40IDktOS43VjM3YzAtOC44LTcuMi0xNi0xNi0xNnoiLz4KPC9zdmc+Cg=="
}

```



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
