@extends('layout.LW_Master')

@section('content')
<div class="container-fluid containercustom"
                                     <!---Carousel Picture Slider---->
        <div id="carousel-example-generic" class="carousel slide navcustom gap" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive center-block" src="/images/LWImages/LW_Banner3.jpg" alt="..." width="734px" height="auto">
                <div class="carousel-caption">
                    ...
                </div>
                </div>
                <div class="item">
                    <img class="img-responsive center-block" src="/images/LWImages/LW_Banner2.jpg" width="700px" height="auto">
                <div class="carousel-caption">
                    ...
                </div>
                </div>
                <div class="item">
                    <img class="img-responsive center-block" src="/images/LWImages/LW_Banner.jpg" width="700px" height="auto">
                <div class="carousel-caption">
                    ...
                </div>
                </div>
            </div>
              <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>

        <div class="container-fluid navcustom">
	        <div class="row " id="change">
		        <div class="col-md-3 col-sm-4 col-xs-6">
                  <img class="img-responsive custom" src="/images/imgres.jpg" width="250px" height="auto">
      	        </div>
      	        <div class="col-md-3 col-sm-4 col-xs-6">
                  <img class="img-responsive custom" src="/images/imgres-1.jpg" width="300px" height="auto">
      	        </div>
            </div>
        </div>
    </div>
 </div>
</div>
@stop