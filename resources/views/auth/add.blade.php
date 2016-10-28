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
                        <div class="col-lg-5">
                            <p>Select Image</p>
                        </div>
                        <div class="col-lg-10">
                             <button type="button" style="background-color:#428bca, text-color:#f9f9f9"class="btn btn-default CustomButton">File</button>
                         </div>
		            </div>
		        </div>
	        </div>
	    </div>
    </div>
</div>
@endsection