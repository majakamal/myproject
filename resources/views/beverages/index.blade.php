  
  
@extends('layouts.app')

  @section('content')
  <div class="wrapper beverage index">
      <h1>Order Beverages</h1>
  @foreach($beverages as $beverages)

<div class="beverage item"> 
    <img src="/img/beve.jpg" alt="beverage icon">
 <h4> <a href="/beverages/{{$beverages->id}}"> {{$beverages -> name}}</a> </h4>
</div>
@endforeach

</div>
       

   @endsection

            