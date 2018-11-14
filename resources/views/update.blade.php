@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <h1>Update</h1>
  <form class="" action="/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $rooms->id }}">
    <input required type="text" name="name" value="{{ $rooms->name }}"placeholder="room name">
    <input required type="number" name="city" value="{{ $city->name }}" placeholder="city">‡
    <select class="" name="statuses">
      @foreach ($statuses as $status)
        <option value="{{ $status->id }}"
        @foreach ($rooms->statuses as $roomStatus)
          @if ($roomStatus->id == $status->id)
            selected
          @endif
        @endforeach
        >{{ $status->disponibility }} </option>
      @endforeach
    </select>
    <input type="submit" name="" value="Insert">
  </form>
@endsection
