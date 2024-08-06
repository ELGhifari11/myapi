<?php

namespace App\Services;

use GuzzleHttp\Client;
// Mengimpor kelas GuzzleHttp\Client untuk digunakan dalam service PrayerTimeService.
// GuzzleHttp\Client digunakan untuk membuat HTTP requests ke API eksternal.

class PrayerTimeService {
    protected $client;
    protected $baseApi;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->baseApi = 'https://api.myquran.com/v2/sholat';
    }

    public function getCityId($cityName)
    {
        $response = $this->client->get("{$this->baseApi}/kota/cari/{$cityName}");
        $data = json_decode($response->getBody()->getContents(), true);


        if ($data['status'] && !empty($data['data'])) {
            return $data['data'][0]['id'];
        }


        return null;
    }

    public function getPrayerTimesToday($cityId, $date)
    {
        $response = $this->client->get("{$this->baseApi}/jadwal/{$cityId}/{$date}");
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getPrayerTimesMonthly($cityId,$year,$month)
    {
        $response = $this->client->get("{$this->baseApi}/jadwal/{$cityId}/{$year}/{$month}");
        return json_decode($response->getBody()->getContents(), true);
    }


}
