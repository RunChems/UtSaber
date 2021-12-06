<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index(Request $request)
    {
        $place = "";
        $indicator = "";
        switch ($request->place) {
            case 'san-martin':
                $place = "070000210132";
                $cord = "19.1762100,-98.4171900";

                break;
            case 'huejotzingo':
                $place = "070000210074";
                $cord = "19.2843100,-98.4388500";

                break;
        }

        switch ($request->type) {
            case 'population':
                switch ($request->gender) {
                    case "man":
                        $indicator = "1002000002";
                        break;
                    case "woman":
                        $indicator = "1002000003";
                        break;
                }
                break;
            case 'average':
                $indicator = "1005000038";
                break;
        }

        $url = "https://www.inegi.org.mx/app/api/indicadores/desarrolladores/jsonxml/INDICATOR/$indicator/es/$place/false/BISE/2.0/24c60ae1-bde2-48a9-1659-2605f5f40662?type=json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "any");
        $res = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($res, true);

        return view('demography', ["data" => $res ?? $url]);
    }

}
