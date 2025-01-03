<?php

namespace App\Http\Controllers\Traveling;

use App\Http\Controllers\Controller;
use App\Models\City\City;
use Illuminate\Http\Request;

class TravelingController extends Controller
{
    public function about($id)
    {

        $cities = City::select()->orderBy('id', 'desc')->get()->take(5)



            ->
            where('country_id', $id)->get();
            return view('traveling.about', compact('cities'));


    }
}
