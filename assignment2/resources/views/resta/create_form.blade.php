@extends('layouts.app')

@section('title')
  Create Menu
@endsection

@section('content')
    <div class="container">

    <h3>Create Restaurant</h3>
    <br>
    <br>
    <br>
    <br>
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

                <form method='POST' action='{{url("resta")}}'>
                    {{csrf_field()}}
                    <p><label>Restaurant name:</label><input type="text" name="name" value="{{old('name')}}"></p>
                    <input type="submit" value="Create">
                    
                </form>           
            </div>
        </div>
    </div>


@endsection

  