@extends('layouts.app')

@section('title')
  test
@endsection

@section('content')

  @foreach($user as $users)
  <div class="container">
    <h1>User details</h1>
    <hr>
    <div class="container">
      <p>User Name:{{$users->name}}</p>
      <p>User Email:{{$users->email}}</p>
      <p>User Status:{{$users->status}}</p>
      <p>User Address:{{$users->address}}</p>
    </div>
  </div>

@endforeach
@endsection