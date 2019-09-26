@extends('layouts.app')

@section('title')
  Menus list
@endsection

@section('content')
    <div class="container">
        <h1>Restaurant menus list</h1>

        <hr>
        @foreach($menus as $menu)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @guest
                        <div class="card">
                            <p>Name:{{$menu->name}}</p>
                            <p>Price:{{$menu->price}}</p>
                            @if($menu->image != '')
                                <img src="{{url($menu->image)}}" width= "50" lenght = "50" alt="user image">
                            @else
                                <p>Phtot:No any picture for this diste</p>
                            @endif
                    
                        </div>
                    
                    @else
                        <div class="card">
                            <p>Name:{{$menu->name}}</p>
                            <p>Price:{{$menu->price}}</p>
                            @if($menu->image != '')
                                <img src="{{url($menu->image)}}" width= "50" lenght = "50" alt="user image">
                            @else
                                <p>Phtot:No any picture for this diste</p>
                            @endif
                    
                        </div>
                    
                        @if(Auth::user()->status =='Cons')
                            <form method="post" action='{{url("purchase")}}'>
                                {{csrf_field()}}
                                <input type="hidden" name="menu_id" value="{{$menu->id}}">
                                <input type="hidden" name="resta_id" value="{{$menu->resta_id}}">
                                <input type="hidden" name="url" value="{{URL::previous()}}">
                                


                                <input type="submit" value="Buy">
                            </form>
                        @endif

                        @if(Auth::user()->status =='Resta')
                                
                        <button><a href='{{url("menu/create")}}'>Create</a></button>
                        <form method='POST' action='{{url("menu/$menu->id")}}'>
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" value="Delete">
                        </form><br>
                            
                        <button><a href='{{url("menu/$menu->id/edit")}}'>Edit</a></button>

                        @endif
                    @endguest
                </div>    
                <hr>

        @endforeach

                <hr>
            </div>
        </div>
    </div>
    


    

    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <button><a href='{{url("resta")}}'>Home</a></button>
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>

        @for($i=1;$i<=$menus->lastPage();$i++)
            <li class="page-item"><a class="page-link" href="{{$menus->url($i)}}">{{$i}}</a></li>
        @endfor
        <li class="page-item">
        <a class="page-link" href="#">Next</a>
        </li>

    </ul>
    </nav>          

@endsection

  