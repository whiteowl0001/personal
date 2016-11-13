@extends('layout.LW_Master')

@section('content')
<div class="container-fluid containercustom2">
    @foreach ($CreateMotorcycleDisplays as $CreateMotorcycleDisplay)
    <div class="panel panelcustom">
        <div class="row">
            <div class="col-md-4">
                <img class="imgpre" src="/images/LWImages/Motorcycles/{{$CreateMotorcycleDisplay->motorcycle_image}}" width="200px" height="auto">
            </div>
            <div class="col-md-6">
                <div class="orange2 ">{{$CreateMotorcycleDisplay->motorcycle_title}}</div>
            </div>
             <div class="col-md-2">
                  <div class="orange2">{{$CreateMotorcycleDisplay->price}}</div>
            </div>
             <div class="col-sm-8">
                  <div class="underline"></div>
            </div>
            <div class="col-md-1">
                <div class="whitecolor">Stock:</div>
                <div class="whitecolor">Condition:</div>
            </div>
            <div class="col-md-2">
                <div class="whitecolor">{{$CreateMotorcycleDisplay->stock}}</div>
                 <div class="whitecolor">{{$CreateMotorcycleDisplay->condition}}</div>
            </div>
            <div class="col-md-1">
                <div class="whitecolor">Color:</div>
                <div class="whitecolor"> Milage:</div>
            </div>
            <div class="col-md-2">
                <div class="whitecolor">{{$CreateMotorcycleDisplay->color}}</div>
                <div class="whitecolor">{{$CreateMotorcycleDisplay->milage}}</div>
            </div>
                <div class="col-md-2">
                  <img src="/images/LWImages/LW_logo-hd.png" width="70px" height="auto">
                </div>
            <div class="btn-group preowned-text">
                    <a href="#" class="btn btn-finance"><i class="fa fa-comment-o fa-2x icon-orange" aria-hidden="true"></i>Get a quote</a>
                    <a href="#" class="btn btn-finance"><i class="fa fa-arrows-h fa-2x icon-orange" aria-hidden="true"></i>Value Your Trade</a>
                    <a href="#" class="btn btn-finance"><i class="fa fa-money fa-2x icon-orange" aria-hidden="true"></i>Get finance</a>
                    <a href="#" class="btn btn-finance2">View Details</a>
            </div>
        </div>
         @endforeach
    </div>
@stop