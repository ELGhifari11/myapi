<?php

namespace App\Http\Controllers;

use App\Services\PrayerTimeService;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Carbon\Carbon;



class PrayerTimeController extends Controller
{

    protected $prayerTimeService;
    protected $ipAddress;

    public function __construct(PrayerTimeService $prayerTimeService)
    {
        $this->prayerTimeService = $prayerTimeService;

    }
    public function prayerTimeToday($cityName)
    {
        // $ip = Location::get($ipaddress);

        // $GetCityName = $ip->cityName;

        $getCityId = $this->prayerTimeService->getCityId($cityName);
        $getDateToday = Carbon::now()->format('Y-m-d');


        if (!$getCityId) {
            return response()->json(['error' => 'Nama Kota tidak terdeteksi'], 404);
        }

        $getPrayerTimeToday = $this->prayerTimeService->getPrayerTimesToday($getCityId,$getDateToday);
        return response()->json($getPrayerTimeToday);
    }

    public function prayerTimeMonthly($cityName)
    {
        // $ip = Location::get($ipaddress);
        // dd($ip);
        // $GetCityName = $ip->cityName;

        $getCityId = $this->prayerTimeService->getCityId($cityName);
        $getYear = Carbon::now()->format('Y');
        // dd($getYear);
        $getMonth = Carbon::now()->format('m');
        // dd($getMonth);


        if (!$getCityId) {
            return response()->json(['error' => 'Nama Kota tidak terdeteksi'], 404);
        }

        $getPrayerTimeMonthly = $this->prayerTimeService->getPrayerTimesMonthly($getCityId,$getYear,$getMonth);
        dd($getPrayerTimeMonthly);
        return response()->json($getPrayerTimeMonthly);
    }





}
