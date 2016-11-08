@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lone Wolf Add Motorcycle</div>
                    <div class="panel-body">
                        <form  enctype="multipart/form-data"  action="{{url('/lw_motorcycle_display')}}" method="POST">
                         {!! csrf_field() !!}
                            <div class="col-lg-5">
                                <p>Motorcycle Title</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="motorcycle_title" name="motorcycle_title" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>Stock</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="stock" name="stock" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>Color</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="color" name="color" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>Condition</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="condition" name="condition" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>milage</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="milage" name="milage" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>price</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="price" name="price" placeholder="Title">
                                <br>
                            </div>
                            <div class="col-lg-5">
                                <p>year</p>
                            </div>
            	    	    <div class="form-group col-lg-10">
                                <input type="text" class="form-control" id="year" name="year" placeholder="Title">
                                <br>
                            </div>
                               <div class="col-lg-5">
                                <p>Select Image</p>
                            </div>
                            <div class="form-group col-lg-10">
                                <input type="file" id="motorcycle_image" name="motorcycle_image">
                            </div>
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
		            </div>
		        </div>
	        </div>
	    </div>
    </div>
</div>
@endsection