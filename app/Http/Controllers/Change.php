<?php

namespace App\Http\Controllers;
use App\Room as Room;
use App\Status as Status;
use App\City as City;

use Illuminate\Http\Request;

class Change extends Controller
{
    public function insertOne(Request $request)
  {
        $room = new \App\Room;
        $room->name = $request->input('name');
        $room->city = $request->input('city');
        $room->disponibility = $request->input('disponibility');
        $room->save();
        $room->statuses()->attach($request->input('statuses'));
        $room->name()->attach($request->input('name'));
        $room->city()->attach($request->input('city'));
        return redirect('/home');
  }
  public function deleteOne(Request $request)
  {
    $id = $request->id;
    $room = \App\Room::find($id);
    $room->delete($id);
    return redirect('/home');
  }
  public function updateOne(Request $request)
    {
      $id = $request->id;
      $room = \App\Room::find($id);
      $room->name = $request->input('name');
      $room->city = $request->input('city');
      $room->disponibility = $request->input('disponibility');
      $room->save();
      $room->statuses()->detach();
      $room->statuses()->attach($request->input('statuses'));
      return redirect('/home');
    }

}
