<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Resta;
use App\Menu;
use App\Pur;

class MenuController extends Controller
{
    function __construct(){
        $this -> middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restas = Resta::all();

        return view('menus.resta_page')->with('restas',$restas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('menus.create_form')->with('restas',Resta::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:1',
            'resta_id' => 'exists:resta,id',

        ]);
        $image_store = requesst()->file('image')->store('menu_image','public');
        $menu = new Menu();
        $menu -> name = $request->name;
        $menu -> price = $request->price;
        $menu -> resta_id = $request->resta;
        $menu -> image = $image_store;
        $menu -> save();
        return redirect("menu");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menus = Menu::whereRaw('resta_id = ?', array($id))->paginate(5);
        // dd($menus);
        // $menus = Menu::whereRaw('resta_id = ?', array($id))->get();

        return view('menus.menus')->with('menus',$menus);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('menus.edit_form')->with('menu',$menu)->with('restas',Resta::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        //$product = new Product();
        $this -> validate($request,[
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:1'
        ]);
        // dd($request);
        $menu -> name = $request->name;
        $menu -> price = $request->price;
        $menu -> resta_id = $request->resta_id;
        $menu -> save();
        // dd($menu);
        return redirect("menu/$menu->resta_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect("menu/");
    }
}
