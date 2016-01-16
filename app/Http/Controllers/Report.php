<?php   namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Lap
 * Date: 1/15/2016
 * Time: 10:21 AM
 */
use App\Http\Controllers\Controller;

use Cmfcmf\OpenWeatherMap;
use Illuminate\Support\Facades\Input;


class Report extends Controller{




    /**
     *For showing weather report
     */

    public function getWeatherReport(){

        // Language of data (try your own language here!):
        $lang = 'en';

        // Units (can be 'metric' or 'imperial' [default]):
        $units = 'metric';


        $cityName=Input::get("selectedCityName");

        $owm = new OpenWeatherMap();

        //To get the current weather by passing arguments city name , unit , language and open map api key
        $weather = $owm->getWeather( $cityName, $units, $lang,"125a338d7e70a75c62592fe7efed8060");

        $returnData['selectedCity']=$cityName;
        $returnData['now']=$weather->temperature->now->getValue();
        $returnData['min']=$weather->temperature->min->getValue();
        $returnData['max']=$weather->temperature->max->getValue();
        $returnData['unit']=$weather->temperature->max->getUnit();

        return view("home.ShowWeatherReport",compact("returnData"));

    }

};

?>