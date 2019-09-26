@extends('layouts.app')

@section('title')
  test
@endsection

@section('content')

<ul class="pagination">
      <li class="disabled">
        <span>&laquo;</span>
      </li>
      <li class="active">
        <span>1</span>
      </li>
      <li>
        <span>2</span>
      </li>
      <li>
        <span>3</span>
      </li>
    </ul>
    
if($user = Auth::user())

@if (Auth::user() )
    <button><a href='{{url("product/create")}}'>Create</a></button>


  @else
  @endif
@endsection