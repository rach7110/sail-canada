@extends('layout')
@section('header')
  <h2>Sail Canada Sail Number Registry</h2>
@stop
@section('content')
  <p>Sail numbers are required for boat identification while racing and are useful for safety purposes. Sailboat owners must apply to Sail Canada for a sail number unless the boat is affiliated with a Sail Canada member class association that issues its own sail numbers.</p>
<!-- Column header: -->
  <div class="row clearfix" id="column-header">
    <div class="column fifth">
      <p>Options:</p>
    </div>
    <div class="column fifth">
      <p>Number:</p>
    </div> 
    <div class="column fifth">
      <p>Unit Price:</p>
    </div>
    <div class="column fifth">
      <p>Sub Total:</p>
    </div>
    <div class="column fifth">
      <p>Remove:</p>
    </div> 
  </div>
  <!-- 1: Next Available -->
  <div class="row clearfix" >
    <form action="/my-handling-form-page" method="post">
      <div class="column fifth">
        <button> Next Available</button>
      </div>
      <div class="column fifth">
        <input type="text" id="sail-number">
      </div> 
      <div class="column fifth">
        <p>$125.00:</p>
      </div>
      <div class="column fifth">
        <input type="text" id="price">
      </div>
      <div class="column fifth button" id="rm">
        <button type="reset"><img src="{{('images/remove.png')}}"></button>
      </div>
    </form>
  </div>
@stop