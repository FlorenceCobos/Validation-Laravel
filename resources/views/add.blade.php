@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <h1>Add one Room</h1>
    <form class="" action="/insert" method="post">
      @csrf
      <input required type="text" name="name" placeholder="Room name">
      <select name="status" id="">
          @foreach ($statuses as $status)
          <option value="{{ $status->id}}">{{ $status->disponibility}}</option>
            @endforeach
      </select>
      <select name="city" id="">
            @foreach ($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
              @endforeach
        </select>
      
      
      <input type="submit" value="add">
@endsection





      
    
   