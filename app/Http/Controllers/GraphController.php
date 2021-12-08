<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalData;

class GraphController extends Controller
{
    public function index(Request $request)
    {
        $mun = LocalData::all();

        return view('demography', compact('mun'));
    }

    public function getInfo(Request $request)
    {
        $_SESSION['m_key'] = $request->place;
        $local = LocalData::where('code', $request->place)->first();


        switch ($request->type) {
            case 'population':
                $_SESSION['type'] = "population";
                $_SESSION['indicator'] = $request->gender;
                $indicator = $request->gender;


                $_SESSION['label'] = "Población" . (str_ends_with($request->gender, '2') ? " Hombres en " : " Mujeres en ") . $local->name ?? '';
                break;
            case 'average':
                $_SESSION['type'] = "average";
                $indicator = "1005000038";
                $_SESSION['label'] = "Promedio de escolaridad en " . $local->name;

                break;
        }
        $url = "https://www.inegi.org.mx/app/api/indicadores/desarrolladores/jsonxml/INDICATOR/$indicator/es/$request->place/false/BISE/2.0/" . env("INEGI_KEY") . "?type=json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "any");
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);
        $mun = LocalData::all();

        return view('demography', ["data" => $res ?? $url, "mun" => $mun]);
    }

}
