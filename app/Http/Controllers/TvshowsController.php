<?php

namespace App\Http\Controllers;
use App\Movietrailer;
use Illuminate\Http\Request;
use App\Tvshows;
class TvshowsController extends Controller
{
     public function create(Request $request){
	$input=new Tvshows; 
    $input->title=$request->title; 
	 $input->description=$request->description;
	
	 $input->date=$request->date; 
	   $input->link=$request->link; 
	  $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$input->image=$filename;
 $input->save();
  return redirect('/admin/alltvshows');
}
    

    public function view(){
    	  $in=Movietrailer::orderby('movietrailers.id','desc')->take(5)->get();
      $input=Movietrailer::take(1)->get();
       $shows=Tvshows::orderby('tvshows.id','desc')->take(5)->get();
  return view('welcome')->with('shows',$shows)->with('in',$in)->with('input',$input);

    }
    public function show(){
     $viw=Tvshows::orderby('tvshows.id','desc')->get();
  return view('/admin/alltvshows')->with('viw',$viw);

    }
     public function showalltvshows(){
     $in=Tvshows::orderby('tvshows.id','desc')->get();
  return view('alltvshows')->with('in',$in);

    }
    public function detailtvshows($id){
     
 $view =Tvshows::where('id',$id)->get();
 return view('tvshowsdetail')->with('view',$view);
}

public function edittvshows($id){
 
 $input =Tvshows::find($id);
                
 return view('/admin/edittvshows',['input'=>$input]);
}
public function updatetvshows(Request $request,$id){
 
 $in =Tvshows::find($id);
 $in->title=$request->title; 
	 $in->description=$request->description;
		 $in->date=$request->date; 
	   $in->link=$request->link; 
	  $filename = time().'.'.request()->image->getClientOriginalExtension();
request()->image->move(public_path('images'), $filename);

$in->image=$filename;
 $in->save();
                 
 return redirect('/admin/alltvshows');
}
public function deletetvshows($id){
 $input=Tvshows::find($id);
 $input->delete();
 return redirect('/admin/alltvshows');
}
}
