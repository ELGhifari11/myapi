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
    public function prayerTimeToday($ipaddress)
    {
        $ip = Location::get($ipaddress);
        // dd($ip);
        $cityName = $ip->cityName;

        $getCityId = $this->prayerTimeService->getCityId($cityName);
        $getDateToday = Carbon::now()->format('Y-m-d');


        if (!$ip && !$getCityId) {
            return response()->json(['error' => 'IP ADDRESS tidak terdeteksi'], 404);
        }

        $getPrayerTimeToday = $this->prayerTimeService->getPrayerTimesToday($getCityId,$getDateToday);
        dd($getPrayerTimeToday);
        return response()->json($getPrayerTimeToday);
    }

    public function prayerTimeMonthly($ipaddress)
    {
        $ip = Location::get($ipaddress);
        // dd($ip);
        $cityName = $ip->cityName;

        $getCityId = $this->prayerTimeService->getCityId($cityName);
        $getYear = Carbon::now()->format('Y');
        // dd($getYear);
        $getMonth = Carbon::now()->format('m');
        // dd($getMonth);


        if (!$ip && !$getCityId) {
            return response()->json(['error' => 'IP ADDRESS tidak terdeteksi'], 404);
        }

        $getPrayerTimeMonthly = $this->prayerTimeService->getPrayerTimesMonthly($getCityId,$getYear,$getMonth);
        dd($getPrayerTimeMonthly);
        return response()->json($getPrayerTimeMonthly);
    }





}
