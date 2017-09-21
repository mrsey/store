@extends('template.templatebackend')
@section('main-content')
<center><h1>Registeration</h1></center>
{!! Form::open(['method' => 'POST', 'route' => 'user.store', 'class' => 'form-horizontal','file'=>'true']) !!}
<div class="col-lg-3">
</div>
<div class="col-lg-5 mymarginbot">
  <div class="form-group">
      {!! Form::label('name', 'Username') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}

  </div>
  <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}

  </div>
  <div class="form-group">
      {!! Form::label('password', 'Password') !!}
      {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}

  </div>
  <div class="form-group">
      {!! Form::label('profile', 'Your Picture') !!}
      {!! Form::file('profile') !!}

      <br>
        {!! Form::submit("Register", ['class' => 'btn btn-primary btn-block']) !!}
  </div>


  </div>
{!! Form::close() !!}
@endsection
