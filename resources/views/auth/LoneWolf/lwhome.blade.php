@extends('layouts.LW_Master')


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
                    <img class="img-responsive center-block" src="/images/LW_Banner3.jpg" alt="..." width="734px" height="auto">
                <div class="carousel-caption">
                    ...
                </div>
                </div>
                <div class="item">
                    <img class="img-responsive center-block" src="/images/LW_Banner2.jpg" width="700px" height="auto">
                <div class="carousel-caption">
                    ...
                </div>
                </div>
                <div class="item">
                    <img class="img-responsive center-block" src="/images/LW_Banner.jpg" width="700px" height="auto">
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



    <div class="container-fluid footermain">
            <ul class=" col-md-2  dashright">
				<li class="uppercase  orange">QUICK LINKS</li>
					<div class="white">
					<li><a href="#">Service Department</a></li>
					<li><a href="#">Parts Department</a></li>
					<li><a href="#">Events Calendar</a></li>
					<li><a href="#">Financing</a></li>		
					<li><a href="#">Test Ride</a></li>
					</div>
			</ul>
			<ul class="col-md-3  dashright">
					<li class="uppercase orange">LONE WOLF H-D</li>
					<div class="white">
					<li><a href="#">19011 E Cataldo Ave</a></li>
					<li><a href="#">Spokane Valley, WA 99016</a></li>
					<li class="orange">Phone:<a>(509)-927-7433</a></li>		
					<li class="orange">Fax:<a>(509)-927-3306</a></li>
					<li class="uppercase orange">Map & Hours</li>
					</div>
			</ul>
			<ul class="col-md-2  dashright">
					<li class="uppercase orange">FIND A BIKE</li>
					<div class="white">
					<li><a href="#">New Inventory</a></li>
					<li><a href="#">Pre-Owned</a></li>
					<li><a href="#">Financing</a></li>		
					<li><a href="#">Get A Quote</a></li>
					<a></a>
					</div>
			</ul>
				<ul class="col-md-4 ">
		        	<a class="btn btn-social-icon btn-facebook">
                    <span class="fa fa-facebook"></span>
                    </a>
                    <a class="btn btn-social-icon btn-google">
                    <span class="fa fa-google"></span>
                    </a>
                    <a class="btn btn-social-icon btn-instagram">
                    <span class="fa fa-instagram"></span>
                    </a>
			</ul>
    </div>
@stop