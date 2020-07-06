 
@extends('layouts.app')

@section('content')
    <div class="wrapper beverage-details"> 
    <h1> Order for {{$beverage-> name}}</h1>
    <p class="type">Type - {{$beverage -> type}}</p> 
    <p class="base">Base - {{$beverage -> base}}</p> 
    <p class="toppings">Extra toppings:</p>
    <ul>
    @foreach($beverage->toppings as $toppings)
    <li>{{$toppings}}</li>
    @endforeach 

    </ul>
    
    </div>

    <form action="/beverages/{{$beverage->id}}"  method="POST">
    @csrf
    @method('DELETE')  
    <button>complete order</button>
    
    
    </form>
    </div>
    <a href="/beverages" class="back"><- back to all beverages</a>

 @endsection

         