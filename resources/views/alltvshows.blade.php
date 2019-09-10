@extends('inc/header')
 @section('content')
<div   style=" width: 1100px;  padding: 0px; margin: 0px; height: 400px;  "
  >


<div class="container">
  
  <div class="row" style="left:100px;position:absolute;"> @foreach($in as $input)
    <div class="col-md-4" style="width: 200px;">
      <div class="">
     
  <a target="_blank" href="detailtvshows&{{ $input->id }}">
    <img src="{{asset('images/'.$input->image)}}" alt="Cinque Terre" width="100" height="200" style=" width: 100%;
  height: 180px; border-radius:20px;
  ">
  </a> </div>
    </div>
@endforeach
</div></div> </div> </div>

                 
                  @stop