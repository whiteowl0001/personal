@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Projects</div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{url('/add/project/image')}}" method="POST">
                        {!! csrf_field() !!}
                            <div class="col-lg-5">
                                                                <!--Add Project-->
                                <p>Project Title</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="ProjectTitle" name="ProjectTitle" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>Select Image</p>
                            </div>
                            <div class="form-group col-lg-10">
                                <input type="file" id="ProjectImage" name="ProjectImage">
                            </div>
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                            <div class="col-lg-5">
		            </div>
		        </div>
		    </div>
	    </div>
		        <br>
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
		        <div class="panel-heading">Add Blog</div>
                    <div class="panel-body">
                        <form enctype="multipart/form-data" action="{{url('/add/project/image')}}" method="POST">
                        {!! csrf_field() !!}
                            <div class="col-lg-5">
                                                                <!--Add Blog-->
                                <p>Blog Title</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="ProjectTitle" name="ProjectTitle" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>Select Image</p>
                            </div>
                            <div class="form-group col-lg-10">
                                <input type="file" id="ProjectImage" name="ProjectImage">
                            </div>
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                            <div class="col-lg-5">
		            </div>
		        </div>
	        </div>
	    </div>
    </div>
</div>
@endsection
