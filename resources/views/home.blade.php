@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Nos salles</h1>
    <table>
      <tr>
        <td><h3>Salle</h3></td>
        <td><h3>Ville</h3></td>
        <td><h3>Disponibilité</h3></td>
            
        
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
       
        </tr>
     
        @endforeach
        
    </table>
@endsection
