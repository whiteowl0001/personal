@extends('layout.master')
@section('content')

<div class="container-fluid container-custom2">
          <nav class="navbar navbar-inverse">
                <ul class="nav navbar-nav navbar-right1">
                <a class="navbar-brand" href="/homepage">Home</a>
                <a class="navbar-brand" href="/portfolio">Portfolio</a>
                <a class="navbar-brand CustomContact" href="/contact">Contact</a>
                </ul>
          </nav>
      </div>



<div class="container-fluid container-portfolio">
        <div class="row paddingPort">
            <div class="col-md-4">
                <div class="hovereffect portfolioImage">
                    <img class="img-responsive center-block" src="/images/lone.png">
                    <div class="overlay">
                        <h2>Lone Wolf</h2>
                        <a class="info" href="/lonewolf">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="hovereffect portfolioImage">
                    <img class="img-responsive center-block" src="/images/guitar.png">
                    <div class="overlay">
                        <h2>Guitar Lesson</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
        </div>
</div>

@stop
