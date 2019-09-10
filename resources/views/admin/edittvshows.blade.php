@extends('admin/inc/header')

                  @section('content')
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                               <div class="card-body row">
                                <form action="editTvshows&{{$input->id}}" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                                    <div class="col-lg-6 p-t-20"> 
                                      <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                         <input  value="{{$input->title}}" class = "mdl-textfield__input" type = "text" name="title" id = "txtRoomNo">
                                         <label class = "mdl-textfield__label">Title</label>
                                      </div>
                                    </div>
                                   
                                    <div class="col-lg-6 p-t-20"> 
                                      <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                         <input  value="{{$input->date}}"  class = "mdl-textfield__input" name="date" type = "text" id = "txtRoomNo">
                                         <label class = "mdl-textfield__label">First Episode Date</label>
                                      </div>
                                    </div>
                                     
                           <div class="col-lg-6 p-t-20"> 
                                      <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                         <input   value="{{$input->link}}" class = "mdl-textfield__input" name="link" type = "text" id = "txtRoomNo">
                                         <label class = "mdl-textfield__label">Trailer Link</label>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 p-t-20"> 
                                      <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        Add Poster
                                         <input class = ""  name="image" type = "file" id = "txtRoomNo">
                                                             </div>
                                    </div>
                                       <div class="col-lg-12 p-t-20"> 
                                      <div class = "mdl-textfield mdl-js-textfield txt-full-width">
                                         <textarea class = "mdl-textfield__input" rows =  "4" 
                                            id = "education"  name="description">{{$input->description}}</textarea>
                                         <label class = "mdl-textfield__label" for = "text7">Movie description</label>
                                      </div>
                                     </div>

                                     <div class="col-lg-12 p-t-20 text-center"> 
                                        <button  type="submit" name="submit" Value="Save" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                                       
                                    </div></form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                   <!-- start widget -->
					
                    <!-- end Payment Details -->
                   
                </div>
            </div>
         
        </div>
        <!-- end page container -->
       @stop