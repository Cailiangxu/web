@extends('layouts.app')

@section('title')
  Updata Menu
@endsection

@section('content')
    <div class="container">
    <h1>Update dishe</h1>
        <div class="container">
            <div class="col-md-8">

                @if (count($errors) > 0)
                    <form method='POST' action='{{url("menu/$menu->id")}}'>
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <p><label>Name:</label>            
                        <input type="text" name="name" value="{{old('name')}}">
                        <label class="alert">{{$errors->first("name")}}</label></p>
                        <p><label>Price:</label>
                        <input type="text" name="price" value="{{old('price')}}">
                        <label class="alert">{{$errors->first("price")}}</label><br></p>
                        <input type="hidden" name="resta_id" value="{{$menu->resta_id}}">
                        <input type="hidden" name="image" value="{{$menu->image}}">
                        <input type="submit" value="Update">
                        
                    </form>
                @else
                    <form method='POST' action='{{url("menu/$menu->id")}}'>
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <p><label>Name:</label>
                        <input type="text" name="name" value="{{$menu->name}}"></p>
                        <p><label>Price:</label>
                        <input type="text" name="price" value="{{$menu->price}}"><br></p>
                        <input type="hidden" name="resta_id" value="{{$menu->resta_id}}">
                        <input type="submit" value="Update">
                        
                    </form>

                @endif         
                <hr>
            </div>
        </div>
    </div>

@endsection

  