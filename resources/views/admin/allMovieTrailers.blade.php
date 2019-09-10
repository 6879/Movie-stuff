@extends('admin/inc/header')

                  @section('content')
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>All Movie Trailers</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a href="{{ URL::to ('admin/addtrailer')}}" id="addRow" class="btn btn-info">
                                                    Add New <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                               
                                                <th class="center"> # </th>
                                                <th class="center"> Title </th>
                                                <th class="center"> Description </th>
                                                <th class="center"> Trailer </th>
                                                <th class="center"> Type </th>
                                                <th class="center"> Durition</th>
                                                <th class="center"> Release Date</th>
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($view as $input)
                                            <tr class="odd gradeX">
                                               
                                                <td class="center">{{$input->id}}</td>
                                                 <td class="center">{{$input->title}}</td>
                                                <td class="center">{{($input->description)}}</td>
                                                <td class="center">   <p style="width: 300px;">  {!! Embed::make($input->link)->parseUrl()->getIframe() !!}</p ></td>
                                                <td class="center">{{$input->type}}</td>
                                                <td class="center">{{$input->durition}}</td>
                                                <td class="center">{{$input->date}}</td>
                                               
                                                <td class="center">
                                                    <a href="editTrailers&{{$input->id}}" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a   onclick="return confirm('Are you sure to delete this post? ')"   href="deleteTrailers&{{ $input->id}}" class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </a>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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