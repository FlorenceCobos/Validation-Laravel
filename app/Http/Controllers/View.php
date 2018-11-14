<?php

namespace App\Http\Controllers;

use App\Room as Room;
use App\Status as Status;
use App\City as City;
use Illuminate\Http\Request;

class View extends Controller
{
    public function home()
    {
        $rooms = Room::all();
      
        return view('home', [
            'rooms' => $rooms, ]);
    }
    public function rooms()
    {
      $rooms = Room::all();
      $cities = City::all();
      $statuses = Status::all();
      return view('crud', [
          'rooms' => $rooms,
          'cities' => $cities,
          'statuses' => $statuses,
      ]);
    }
    public function add()
    {
      $cities = \App\City::all();
      $statuses = \App\Status::all();
      return view ('add', [
        "cities" => $cities,
        "statuses" => $statuses,
      ]);
    }
    
    public function update(Request $request)
    {
      $rooms = Room::find($request->input('id'));
      $cities = \App\City::all();
      $statuses = \App\Status::all();
      return view('update', [
        'rooms' => $rooms,
        'cities' => $cities,
        'statuses' => $statuses,
      ]);
    }
  
}
