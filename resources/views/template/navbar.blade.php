<!-- Start NavBar -->
  <nav class="navbar navbar-default" style="height:100%">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ asset('home') }}"><img src="{{ asset('img/logo.png') }}" style="width:200px" /></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a  href="{{ asset('home') }}">Home</a></li>
          <li><a href="#">Find Job</a></li>
          <li><a href="#">Blog News</a></li>
          <li><a href="#">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{asset('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="{{ asset('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="product/create" class="btn btn-warning" style="color:#fff"><span class="glyphicon glyphicon-plus"></span> Post Free Ads</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of NavBar -->
