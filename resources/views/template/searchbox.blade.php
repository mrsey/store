<div class="contains-fluid bg-primary">
  <div class="container">
    <div class="col-lg-3">

    </div>
    <div class="col-lg-5 mypaddingbot">
      {{ Form::open(array('url' => 'foo/bar')) }}
      <center><h2>  {{ Form::label('search', 'What Are You Looking For ?') }}</h2></center>
      {{ Form::text('search', '',['class'=>'form-control']) }}<br>
      {{ Form::submit('search',['class'=>'btn btn-danger btn-block']) }}
      {{ Form::close() }}
    </div>

  </div>
</div>
