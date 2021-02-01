<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('login')}}">Login</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  
  <div class="row">
    <div class="col-md-12" style="margin-top: 30px">
      <form class="" method="get" action="{{url('api/')}}">
                                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                   <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search" name="search">
  <div class="input-group-append">
    <button class="btn btn-success" type="submit">Go</button>
  </div>
</div>
                                </div>
                                </form>
                              </div>
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
@else
<p> Result not found</p>
@endif
    </div>
</div>

</body>
</html>
