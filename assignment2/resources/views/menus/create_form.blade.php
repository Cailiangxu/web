@extends('layouts.app')

@section('title')
  Create Menu
@endsection

@section('content')
    <div class="container">

        <h3>Create dishe</h3>
        <div class="container">
            <div class="col-md-8">
                @if (count($errors) > 0)
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method='POST' action='{{url("menu")}}'>
                    {{csrf_field()}}
                    <p><label>Name:</label><input type="text" name="name" value="{{old('name')}}"></p>
                    <p><label>Price:</label><input type="text" name="price" value="{{old('price')}}"></p>
                    <p><input type="file" name="image"></p>
                    <p><select name="resta">
                    @foreach($restas as $resta)
                        @if($resta->id == old('resta'))
                            <option value="{{$resta->id}}" selected="selected">{{$resta->name}}</option>
                        @else
                            <option value="{{$resta->id}}">{{$resta->name}}</option>  
                        @endif      
                    @endforeach
                    </select></p>
                    <input type="submit" value="Create">
                    
                </form>

                <hr>
            </div>
        </div>
    </div>

@endsection

  