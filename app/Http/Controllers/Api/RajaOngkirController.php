<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RajaOngkirController extends Controller
{
    public function getProvince()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: j0F1xEK0f2d5d44b790a6799CryxATZ4" // Ganti dengan API Key Anda
            ),
        ));
    }

    public function getCity()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: j0F1xEK0f2d5d44b790a6799CryxATZ4" // Ganti dengan API Key Anda
            ),
        ));
    }

    public function getCost(Request $request)
    {
        $curl = curl_init();

        $origin = $request->origin;
        $destination = $request->destination;
        $weight = $request->weight;
        $courier = $request->courier;

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: j0F1xEK0f2d5d44b790a6799CryxATZ4" // Ganti dengan API Key Anda
            ),
        ));
    }

}
