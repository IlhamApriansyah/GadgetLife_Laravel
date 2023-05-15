<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang GadgetLife

Sebuah website berbasis E-Commerce dengan menggunakan Laravel 9

## Cara Pemasangan

- Gunakan "git clone" atau semacamnya untuk mendownload repository

- Jalankan "composer install" untuk instalasi package composer yang diperlukan

- Jalankan "cp .env.example .env" untuk copy-paste konfigurasi database yang digunakan 

- Jalankan "php artisan migrate" jika ingin mengimport database MySQL 

- Jalankan "php artisan key:generate" untuk generate app dari laravel

- Kemudian, jalankan "npm install && npm run build". Hal ini digunakan mengingat penggunaan Vite pada laravel dibutuhkan

- Jalankan "php artisan serve" untuk running website

## Catatan Penting

- Jika ingin melakukan perubahan routing link, lakukan di web.php

- Adminmiddleware di set menjadi 0/1 jika ingin menggunakan akses admin

- Masih ada beberapa bug yang belum ditemukan, buat issue jika ada

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
