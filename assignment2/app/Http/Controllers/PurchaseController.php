<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Resta;
use App\Menu;
use App\Pur;

class PurchaseController extends Controller
{
    function __construct(){
        $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Pur::all();
        $time = date('Y-m-d H:i:s',strtotime('-7 day'));

        // $menus
        // $menu_id = Pur::find(menu_id);
        // dd($menu_id);
        // $user_id = Menu::whereRaw('id = ?', array($id))->get(); 

        // $user_id = Menu::whereRaw('id = ?', array($id))->get(); 
        // dd($cars->users_id);

        return view('purchase.cars')->with('cars',$cars)->with('time',$time);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->url;
        $pur = new Pur();
        $pur -> users_id = Auth::user()->id;
        $pur -> menu_id = $request->menu_id;
        $pur -> save();
        return redirect("menu/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Pur::find($id);
        $car->delete();

        return redirect("menu/");
    }
}
