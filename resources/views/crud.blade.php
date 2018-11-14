@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Nos salles</h1>
    <table>
      <tr>
        <td><h3>Salle</h3></td>
        <td><h3>Ville</h3></td>
        <td><h3>Disponibilité</h3></td>
        <td><h3>Delete</h3></td>
        <td><h3>Update</h3></td>
        
      </tr>
        @foreach($rooms as $room)
       
          <tr>
            <td>{{ $room->name }}</td>   
            <td>
            @foreach ($room->cities as $city)
            {{ $city->name}}
            @endforeach
            </td>
            
            <td>
            @foreach ($room->statuses as $status)
            {{ $status->disponibility }}
            @endforeach
        </td>
        <td>
            <form class="" action="/delete" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $room->id }}">
            <input type="submit" name="" value="Delete">
            
          </form>
            </td>
            
            <td>
            <form class="" action="/update" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $room->id }}">
            <input type="submit" name="" value="Update">
            
            </form>
        </td>
        </tr>
     
        @endforeach
        
    </table>
@endsection



