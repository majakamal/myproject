 
  
@extends('layouts.app')

@section('content')
     <div class="wrapper create-beverage">
     <h1>Order new Beverage</h1>
     <form action="/beverages" method="POST">
     @csrf
     <label for="name"> your name:</label>
     <input type="text" name="name" id="name" required>

     <label for="type"> choose a beverage type</label>
     <select name="type" id="type">
     <option value="Fruits"> Fruits</option>
     <option value="Alcohol"> Alcohol</option>
     <option value="Soda"> Soda</option>
     <option value="whiskey"> whiskey</option>
     </select>

     
     <label for="base"> choose a base:</label>
     <select name="base" id="type">
     <option value="Beer"> Beer</option>
     <option value="ginger"> ginger</option>
     <option value="water"> water</option>
     <option value="Magic Moment"> Magic Moment</option>
     </select>

     
     <fieldset>
     <lable>Extra toppings</lable>
     <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
     <input type="checkbox" name="toppings[]" value="tekila">Tekila<br/>
     <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
     <input type="checkbox" name="toppings[]" value="smooth">Smooth<br/>

      </fieldset>




     <input type="submit" value="order beverage">
     </form>
     </div>
 @endsection

         