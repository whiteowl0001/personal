@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>
                    <div class="panel-body">
                         @foreach ($ProjectDisplay as $ProjectDisplay)
                	    	<div class="col-md-6">
                                <div class="hovereffect portfolioImage">
                                    <img class="img-responsive center-block" width="auto" height="auto" src="{{ $ProjectDisplay->ProjectImage }}">
                                    <div class="overlay">
                                        <h2>{{ $ProjectDisplay->ProjectTitle }}</h2>
                                        <a class="info" href="/lwhome">link here</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
		            </div>
		        </div>
	        </div>
	    </div>
    </div>
</div>
@endsection
