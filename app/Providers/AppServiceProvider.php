<?php

namespace App\Providers;
// Namespace Declaration
// Memberi tahu di mana file ini berada dalam struktur proyek.

use App\Services\PrayerTimeService;
use Illuminate\Support\ServiceProvider;
// use digunakan untuk Mengimpor kelas-kelas yang diperlukan.


class AppServiceProvider extends ServiceProvider
// Kita Membuat kelas yang mengatur layanan-layanan aplikasi.
// Extends berarti mewarisi atau menggunakan fungsi-fungsi dari kelas ServiceProvider


{
    /**
     * Register any application services.
     */
    public function register(): void
    // Fungsi register ini digunakan untuk mendaftarkan layanan atau service
    // yang kita buat agar bisa digunakan di seluruh aplikasi.
    {
        $this->app->singleton(PrayerTimeService::class, function($app){
            // 1. $this->app->singleton: Ini memberitahu Laravel
            // Memastikan hanya ada satu instance dari PrayerTimeService di seluruh aplikasi.
            // 2. Instance adalah istilah lain dari objek suatu kelas
            // Sebuah objek yang dibuat dari prototipe kelas.
            // 3. PrayerTimeService::class: Ini adalah cara untuk merujuk ke kelas PrayerTimeService.
            // 4. Function Closure (function($app)): Fungsi anonim (tanpa nama)
            // yang dipanggil untuk membuat instance PrayerTimeService.
            return new PrayerTimeService(new \GuzzleHttp\Client());
            // 5. Membuat instance baru dari PrayerTimeService
            // dengan mengirimkan objek GuzzleHttp\Client sebagai parameter.

            // >>> Kode ini bertujuan untuk mendaftarkan PrayerTimeService sebagai layanan
            // yang bisa digunakan di seluruh aplikasi Laravel. Dengan pendekatan ini,
            // setiap kali kita membutuhkan PrayerTimeService, Laravel akan memberikan instance yang sama,
            // memastikan efisiensi dan konsistensi.
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
