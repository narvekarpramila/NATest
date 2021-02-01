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
@stop
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1>Add Inventory </h1>
                    <div class="sparkline12-outline-icon">
                       <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                   </div>
               </div>
           </div>
           <div class="sparkline12-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="all-form-element-inner">
                            <form action="{{url('api/dealer/add-inventory')}}" method="POST" novalidate enctype="multipart/form-data">

                           <div class="form-group-inner">

                            <div class="row">
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <label class="login2 pull-right pull-right-pro"> KMs on Odometer </label>
                                </div>
                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                  <input type="hidden" name="id" <?php if (isset($inventory) && !empty($inventory)) { ?> value="{{ $inventory->id }}"  <?php } ?>>
                                   <input type="text" name="km" class="form-control" <?php if (isset($inventory) && !empty($inventory)) { ?>  value="{{ $inventory->KM }}"  <?php } ?>>
                               </div>
                           </div>

                       </div>

                       <div class="form-group-inner">
                        <div class="row">

                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <label class="login2 pull-right pull-right-pro">Major Scrathes</label>
                            </div>
                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <textarea name="major_scratches" id="summernote1"> <?php if (isset($inventory) && !empty($inventory)) { ?>  {{ $inventory->major_scratches }}  <?php } ?></textarea>
                            </div>

                        </div>
                    </div>

                 <div class="form-group-inner">                                                  
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Original Paint </label>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                           <input type="text" name="original_paints" class="form-control"  <?php if (isset($inventory) && !empty($inventory)) { ?>  value="{{ $inventory->original_paints }}"  <?php } ?>>
                       </div>
                   </div>

               </div>

                 <div class="form-group-inner">                                                  
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Number of accidents reported </label>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                           <input type="text" name="no_of_accidents" class="form-control"  <?php if (isset($inventory) && !empty($inventory)) { ?>  value="{{ $inventory->no_of_accidents }}"  <?php } ?>>
                       </div>
                   </div>

               </div>

                <div class="form-group-inner">                                                  
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Number of previous buyers, </label>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                           <input type="text" name="no_of_prev_buyers" class="form-control"  <?php if (isset($inventory) && !empty($inventory)) { ?>  value="{{ $inventory->no_of_prev_buyers }}"  <?php } ?>>
                       </div>
                   </div>

               </div>

 <div class="form-group-inner">                                                  
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <label class="login2 pull-right pull-right-pro">Registration Place </label>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

                           <input type="text" name="registration_place" class="form-control"  <?php if (isset($inventory) && !empty($inventory)) { ?>  value="{{ $inventory->registration_place }}"  <?php } ?>>
                       </div>
                   </div>

               </div>
            <div class="form-group-inner">
                <div class="login-btn-inner">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-9">
                            <div class="login-horizental cancel-wp pull-left">
                                <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
<script>

  $('#summernote1').summernote({
    tabsize: 2,
    height: 100
});

  $('#summernote2').summernote({
    tabsize: 2,
    height: 100
});

  $('#summernote3').summernote({
    tabsize: 2,
    height: 100
});
</script>
@stop
@section('footer_scripts') 

@stop