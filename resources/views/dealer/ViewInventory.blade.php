@extends('layouts.admin.webapp')

@section('title', env('APP_NAME').' - Dashboard')

@section('header_styles')

@stop
@section('navbar')
<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
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
                            <h1>View Inventory</h1>
                            <div class="sparkline8-outline-icon">  <a href="{{url('api/dealer/add-inventory')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Inventory </button></a>
                             
                                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">ID</th>
                                            <th data-field="welcome_text"> KMs on Odometer,</th>
                                            <th> Major Scrathes</th>
                                            <th> Original Paint</th>
                                            <th> Number of accidents reported</th>
                                            <th> Number of previous buyers,</th>
                                            <th> Registration Place</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     <?php  $i=1;?>
                                     @foreach($inventory as $inventory)
                                     <tr>
                                        <td></td>
                                        <td>{{ $i }}</td>
                                        <td> {{ $inventory->KM }}</td> 
                                        <td> {{ $inventory->major_scratches }}</td> 
                                        <td> {{ $inventory->original_paints }}</td>

                                        <td> {{ $inventory->no_of_accidents }}</td> 
                                        <td> {{ $inventory->no_of_prev_buyers }}</td> 
                                        <td> {{ $inventory->registration_place }}</td> 
                                        <td>
                                            <a href="<?php echo url('api/dealer/edit-inventory').'/'. base64_encode($inventory->id) ; ?>"><i class="fa fa-edit"></i></a>
                                            <a href="" class="identifyingClass" data-target="#myModalDelete" data-toggle="modal" data-id=><i class="fa fa-trash" ></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    @endforeach                                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @stop

    @section('footer_scripts') 

    @stop