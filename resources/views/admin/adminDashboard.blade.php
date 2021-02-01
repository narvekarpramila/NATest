@extends('layouts.admin.webapp')

@section('title', env('APP_NAME').' - Dashboard')

@section('header_styles')
<style type="text/css">
    .ht{
        height: 150px !important;
    }
    .pl{
       padding-left: 0px !important;
       margin-left: -15px;
    }
</style>
@stop
@section('navbar')
<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                       
                            
                                <form role="search" class="" method="get" action="{{url('api/admin-dashboard')}}">
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" placeholder="Search..." class="form-control" name="search">
                                </div>
                                 <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 pl">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                                </form>
                          
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod"><a href="{{url('api/admin-dashboard')}}"> Dashboard </a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->
@stop
@section('content') 
<!-- Data table area Start-->
<div class="admin-dashone-data-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Our Avaialble Cars</h1>
                           
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
 <div class="row">
    @if (isset($oem_specs) && count($oem_specs) > 0)
@foreach($oem_specs as $oem_specs)
   
        <div class="col-md-12" style="margin-top: 30px">
              <div class="sparkline8-list shadow-reset">
                    <div class="sparkline8-hd ht">
                        <div class="main-sparkline8-hd">
            <h1> {{$oem_specs->model_name }}</h1> <hr>
            <div class="col-md-4">
            <h5>Year : {{$oem_specs->year_of_model}}</h5>
            </div>
              <div class="col-md-4">
            <h5>Price : {{$oem_specs->price}}</h5>
            </div>
              <div class="col-md-4">
            <h5>Color : {{$oem_specs->color}}</h5>
            </div>
             <div class="col-md-4">
            <h5>Mileage : {{$oem_specs->mileage}}</h5>
            </div>
             <div class="col-md-4">
            <h5>Power : {{$oem_specs->power}}</h5>
            </div>
             <div class="col-md-4">
            <h5>Max Speed : {{$oem_specs->max_speed}}</h5>
            </div>
        </div>
    </div>
</div>
        </div>
@endforeach
@endif
    </div>
</div>
</div>


@stop

@section('footer_scripts') 

@stop