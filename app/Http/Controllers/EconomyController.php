<?php

namespace App\Http\Controllers;

use App\Models\LocalData;
use Illuminate\Http\Request;

class EconomyController extends Controller
{
    public function index()
    {
        $mun = LocalData::all();

        return view('economy', compact('mun'));

    }

    public function getInfo(Request $request)
    {
        $url = "https://www.inegi.org.mx/app/api/denue/v1/consulta/buscar/$request->giro/$request->place/1000/" . env('INEGI_KEY_V1');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "any");
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);
        $mun = LocalData::all();
        return view('economy', ["mun" => $mun, "res" => $res]);
    }

}
