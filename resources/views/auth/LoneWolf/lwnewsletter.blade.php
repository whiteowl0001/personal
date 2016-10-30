@extends('layout.LW_Master')


@section('content')
    <div class="container-fluid containercustom">
        <img src="/images/LW_NEWSLETTERSIGNUP.jpg" width="100%" height="auto">
        <div class="jumbotron newsjumbo">
            <legend align="center">Subscribe</legend>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                    	<input type="text"class="form-control" id="email" name="email" placeholder="email" value="{{ old('email')}}">
                    	 <label class="control-label"></label>
                    </div>
                </div>
                <div class="form-group">
                	<div class="col-md-4 col-md-offset-4 text-center">
                		<button type="submit" id="submit" class="btn btn-primary">Register</button>
                	</div>
                </div>
        </div>
    </div>
@stop