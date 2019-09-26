@extends('layouts.app')

@section('title')
  Order list
@endsection

@section('content')
  <div class="container">
    <h1>Order list</h1>
    <hr>
    <div class="container">
      @foreach($cars as $car)
      <p>Order's name:{{$car->users_id}}</p>
      <p>Order's total price:{{$car->menu_id}}</p>
      <p>Order's time:{{$time}}</p>

      @endforeach

      <hr>
      Total Price:
      Address:

      <hr>
      <p>
        <form method='POST' action='{{url("purchase/$car->id")}}'>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="submit" value="Pay it">
        </form>
      </p>
    </div>
  </div>
@endsection
  