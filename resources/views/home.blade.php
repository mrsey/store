@extends('template.templatehome')
@section('main-content')

  <hr />
  <div class = "page-header">
    <h3> Latest Ads </h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5">
        <a href="#"><img src="{{ asset('img/Other-icon.png') }}" class="image mymargin" /></a>
        <h5>Iphone 7</h5>
        <h5 style="color:red">$500</h5>
      </div>

    </div>
  </div>
  <center><a href="#" class="btn btn-primary btn-block">More Product</a></center>
  <br>
@endsection
