@extends('layout.master')
@section('content')

<div class="container-fluid container-portfolio">
        <div class="row paddingPort">
            <div class="col-md-4">
                <div class="hovereffect portfolioImage">
                    <img class="img-responsive center-block" src="/images/lone.png">
                    <div class="overlay">
                        <h2>Lone Wolf</h2>
                        <a class="info" href="#">link here</a>
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
