@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Projects</div>
                    <div class="panel-body">
                        <div class="col-lg-5">
                            <p>Project Title</p>
                        </div>
            	    	<div class="col-lg-10">
                            <input type="text" class="form-control" id="ProjectTitle" placeholder="Title">
                        </div>
                        <div class="col-lg-10">
                            <form enctype="multipart/form-data" action="{{url('/add/project/image')}}" method="POST">
                              {!! csrf_field() !!}
                                <lable>Select Image</lable>
                                <input type="file" name="ProfilePicture">
                                <input type="submit" class="pull-right btn btn-sm btn-primary">
                            </form>
                         </div>
		            </div>
		        </div>
	        </div>
	    </div>
    </div>
</div>
@endsection
