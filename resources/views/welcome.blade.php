@extends('inc/header')

                  @section('content')
           <div>
                <div class="container bg-overlay">
    <div class="row text-center">@foreach($input as $int)
      <a href="details&{{ $int->id }}" ><img src="{{asset('images/'.$int->image)}}"  style="height:250px; width:150px ; position: absolute; left: 300px; bottom:190px; "></a><div style="  width: 500px;height: 200px;  padding: 10px;   margin: 0;bottom:200px; left: 450px;  position: absolute;"> <h2 style="">{{$int->title}}</h2>
         <p style=""  class="card-text">
         {{$int->description}}
 </p>
 <h5 style=""  >
R |{{$int->durition}} | {{$int->type}}| {{$int->date}}
 </h5>    </div> 
      @endforeach

              
    </div>
</div>

 
</div>

</div>

<!-- movie trailers  -->
<div  style=" width: 1100px;
    padding: 20px;  margin: 15px;">
<h4 style=" left:100px;position:absolute; " > Popular Movie</h4>
   <a href="{{ URL::to ('allMovies')}}" style="right:190px;position:absolute; " > View all Movies</a></div>
<div   style="
  width: 1100px;
   padding: 0px;
  margin: 0px;
  height: 200px"
  >

    
 
<div class="container" >
  
  <div class="row" style="left:100px;position:absolute;"> @foreach($in as $input)
    <div class="col-md-4" style="width: 200px;">
      <div class="">
     
  <a target="_blank" href="details&{{ $input->id }}">
    <img src="{{asset('images/'.$input->image)}}" alt="Cinque Terre" width="100" height="200" style=" width: 100%;
  height: 180px; border-radius:20px;
  ">
  </a> </div>
    </div>
@endforeach
</div></div></div>
<!-- movie trailers -->
<hr>
<!-- TV shows -->
<div  style=" width: 1100px;
    padding: 20px;  margin: 15px;">
<h4 style=" left:100px;position:absolute; " > Popular Tv Shows</h4>
   <a href="{{ URL::to ('alltvshows')}}" style="right:190px;position:absolute; " > View all Tv shows</a></div>
<div   style="
  width: 1100px;
   padding: 0px;
  margin: 0px;
  height: 200px"
  >

    
 
<div class="container" >
  
  <div class="row" style="left:100px;position:absolute;"> @foreach($shows as $input)
    <div class="col-md-4" style="width: 200px;">
      <div class="">
     
  <a target="_blank" href="detailtvshows&{{ $input->id }}">
    <img src="{{asset('images/'.$input->image)}}" alt="Cinque Terre" width="100" height="200" style=" width: 100%;
  height: 180px; border-radius:20px;
  ">
  </a> </div>
    </div>
@endforeach
</div></div></div>
 
  <!-- TV shows -->
  
<div   style="
 background-color: black;
 height: 350px;
  width: 1150px;
  
  padding: 50px;
  margin: 20px;
  left:500px;"
  > <h2 style="text-indent: 240px; color:white;">Get the best Movie & Tv Shows trailers </h2>
<h2 style="text-indent: 263px; color:white;">straight in your inbox each week.</h2>
</br>
<input type="text"   placeholder="First name"style="left:350px; position:absolute;">
<input type="text"   placeholder="Email Address"style="right:500px; position:absolute;">
</br></br>
<button class="button" style="left:480px; position:absolute;   background-color: #4CAF50;  border: none;
  color: white; width:150px; height:30px;  border-radius: 10px;">Subscripe</button>
</div>
<!-- footer  -->

  
  


@stop