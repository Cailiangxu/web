@extends('layouts.app')

@section('title')
  Restaurant list
@endsection

@section('content')

  <div class="container">
    
      <h1>Restaurant list</h1><br>
      @guest
        @if ($restas)
          <ul>
          @foreach($restas as $resta)

              <a href='menu/{{$resta->id}}'><li>{{$resta->name}}</li></a>


          @endforeach
          </ul>
        @else
        No item found
        @endif
        <hr>
      @else
        @if ($restas)
          <ul>
          @foreach($restas as $resta)

              <a href='menu/{{$resta->id}}'><li>{{$resta->name}}</li></a>


          @endforeach
          </ul>
        @else
        No item found
        @endif
        <hr>
        @if(Auth::user()->status =='Resta')
        <button><a href='{{url("resta/create")}}'>Create</a></button>
        @endif
      @endguest

    
  </div>



@endsection

  