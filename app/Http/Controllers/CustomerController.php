<?php

namespace App\Http\Controllers;
use App\Models\Shop;


use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
{
    return view('customer.dashboard');
}

public function findShops(Request $request)
{
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');

    $shops = Shop::all()->map(function ($shop) use ($latitude, $longitude) {
        $shop->distance = $this->haversineDistance($latitude, $longitude, $shop->latitude, $shop->longitude);
        return $shop;
    })->filter(function ($shop) {
        return $shop->distance <= 5;  // Filter shops within 5km
    })->sortBy('distance');

    return view('customer.shops', compact('shops', 'latitude', 'longitude'));
}

private function haversineDistance($lat1, $lon1, $lat2, $lon2)
{
    $earthRadius = 6371; // km

    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);

    $a = sin($dLat/2) * sin($dLat/2) +
         cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
         sin($dLon/2) * sin($dLon/2);

    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    return $earthRadius * $c; // km
}

}
