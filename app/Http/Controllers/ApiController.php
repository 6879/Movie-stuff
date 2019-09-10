<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movietrailer;
class ApiController extends Controller
{
    public function create(Request $request){
	$input=new Movietrailer; 
    $input->title=$request->title; 
	 $input->description=$request->description;
	 $input->durition=$request->durition; 
	  $input->type=$request->type; 
	 $input->date=$request->date; 
	   $input->link=$request->link; 
	  $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
 $input->save();
  return redirect('/admin/allMovieTrailers');
}
    

    public function view(){
    	  
     $input=Movietrailer::take(1)->get();
       $in=Movietrailer::orderby('movietrailers.id','desc')->take(5)->get();
  return view('welcome')->with('in',$in)->with('input',$input);

    }
    public function show(){
     $view=Movietrailer::orderby('movietrailers.id','desc')->get();
  return view('/admin/allMovieTrailers')->with('view',$view);

    }
     public function showAllMovies(){
     $in=Movietrailer::orderby('movietrailers.id','desc')->get();
  return view('allMovies')->with('in',$in);

    }
    public function detailsMovie($id){
     
 $view =Movietrailer::where('id',$id)->get();
 return view('moviedetails')->with('view',$view);
}

public function editTrailers($id){
 
 $input =Movietrailer::find($id);
                
 return view('/admin/editTrailers',['input'=>$input]);
}
public function updateTrailers(Request $request,$id){
 
 $in =Movietrailer::find($id);
 $in->title=$request->title; 
	 $in->description=$request->description;
	 $in->durition=$request->durition; 
	  $in->type=$request->type; 
	 $in->date=$request->date; 
	   $in->link=$request->link; 
	  $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$in->image=$filename;
 $in->save();
                 
 return redirect('/admin/allMovieTrailers');
}
public function deleteTrailers($id){
 $input=Movietrailer::find($id);
 $input->delete();
 return redirect('/admin/allMovieTrailers');
}
}
