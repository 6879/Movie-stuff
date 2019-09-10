@extends('inc/header')
 @section('content')
 <div   style=" width: 1100px;  padding: 0px; margin: 0px; height: 400px;   "
  >
 @foreach($view as $show )

  <p style="width: 300px; position: absolute;">  {!! Embed::make($show->link)->parseUrl()->getIframe() !!}</p >
  <div style="  width: 500px;height:auto;  padding: 10px;   margin: 0;bottom:300px; right: 120px;  position: absolute; ">  <h2>  {{$show->title}}</h2>
  	<p >{{$show->description}}</p>
  	<h5 style=" font-weight: bold"  >R |{{$show->durition}} | {{$show->type}}| {{$show->date}} </h5>


  </div>
}@endforeach  
<div style="  width: 300px;height:auto;  padding: 10px;   margin: 0;bottom:150px; right: 150px;  position: absolute;  ">
	
<fieldset class="rating">
  
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset>

</div>
</div></div>
<style>.rating {
    float:left;
}


.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}</style>
 @stop