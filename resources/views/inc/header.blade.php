<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie&Stuff</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
             .top-left {
                position: absolute;
                left: 100px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
               
                text-decoration: none;
                text-transform: ;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .bg-overlay {
    background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url('frontend/image/aquaman1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    height: 450px;
    padding-top: 50px;

}
.gallery {
  margin: 1px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
 border-radius: 25px;
}



.desc {
  padding: 15px;
  text-align: center;
}



        </style>
    </head>
    <body  >
        <div class="flex-center position-ref full-height">
             <div class="top-left links">

         <a  href="{{ URL::to ('')}} "style=" font-size: 16px; color: black;">MOVIES&STUFF</a></div>

         
                <div class="top-right links">

                  

                       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-search">Search More Movie </i></button>
                    

                        <a href="{{ URL::to ('allMovies')}}">Movies</a>

                        

                       
                            <a href="{{ URL::to ('alltvshows')}}">Tv Shows</a>
                             <a href="">Celebs&photos</a>
                              <a href="">News</a>
                       
                </div>

           
 @yield('content') 
              @include('inc/footer')