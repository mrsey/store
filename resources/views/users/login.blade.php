@extends('template.templatebackend')
@section('main-content')

{!! Form::open(['method' => 'POST', 'class' => 'form-horizontal']) !!}
<div class="col-lg-3">
</div>
<div class="col-lg-5 mymarginbot">
  <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
      {!! Form::label('inputname', 'Username') !!}
      {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!}
      <small class="text-danger">{{ $errors->first('inputname') }}</small>
  </div>
  <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
      {!! Form::label('inputname', 'Password') !!}
      {!! Form::text('password', null, ['class' => 'form-control', 'required' => 'required']) !!}
      <small class="text-danger">{{ $errors->first('inputname') }}</small>
      <br>
        {!! Form::submit("Login", ['class' => 'btn btn-primary btn-block']) !!}
  </div>

  </div>
{!! Form::close() !!}
@endsection
