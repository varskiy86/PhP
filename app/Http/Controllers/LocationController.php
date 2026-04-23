<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Attraction;

class LocationController extends Controller
{
    // Список всех стран
    public function index()
    {
        $countries = Country::all();
        return view('locations.index', compact('countries'));
    }

    // Список городов страны
    public function showCities(Country $country)
    {
        $cities = $country->cities;
        return view('locations.cities', compact('country', 'cities'));
    }

    // Список достопримечательностей города
    public function showAttractions(City $city)
    {
        $attractions = $city->attractions;
        return view('locations.attractions', compact('city', 'attractions'));
    }

    // Страница описания достопримечательности
    public function showAttraction(Attraction $attraction)
    {
        return view('locations.attraction', compact('attraction'));
    }
}
