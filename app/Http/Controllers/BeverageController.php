<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;

class beverageController extends Controller
{
     // public function __construct(){
       // $this->middleware('auth');
    
//}

public function index(){ 

    $beverages = beverage::all();

  return view('beverages.index', ['beverages' => $beverages
  
  ]);

}
    public function show($id) {
        
        $beverage = beverage::findorfail($id);
        return view('beverages.show', ['beverage' => $beverage]);
    }

    public function create() {
        return view('beverages.create'); 
    }

    public function store(){
       
        $beverage = new beverage();

        $beverage->name = request('name');
        
        $beverage->type = request('type');
        
        $beverage->base = request('base');
        $beverage->toppings=request('toppings');

        $beverage-> save();

        return redirect('/')->with('mssg', 'thanks for your order');
    }

    public function destroy($id){
        $beverage =beverage::findorFail($id);
        $beverage -> delete();

        return redirect('/beverages');
    }
}
