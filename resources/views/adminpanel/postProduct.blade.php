@extends('template.templatebackend')
@section('main-content')
{!! Form::open(['method' => 'POST']) !!}
<div class="col-lg-2">
</div>
<div class="col-lg-8 mymarginbot">
      <div class="form-group">
          {!! Form::label('inputname', 'Category') !!}
          {!! Form::select('category', ['L' => 'Large', 'S' => 'Small'],null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
          {!! Form::label('inputname', 'Title') !!}
          {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('inputname', 'Price') !!}
          {!! Form::text('price', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('inputname', 'Description') !!}
          {!! Form::textarea('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
            {!! Form::label('inputname', 'Your Image') !!}
            {!! Form::file('image1') !!}
            <br>
            {!! Form::file('image2') !!}
            <br>
            {!! Form::file('image3') !!}
            <br>
            {!! Form::file('image4') !!}
            <br>
            {!! Form::file('image5') !!}
        </div>
        <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
            {!! Form::label('inputname', 'Your Name') !!}
            {!! Form::text('contactname', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
        <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
            {!! Form::label('inputname', 'Contact Number') !!}
            {!! Form::textarea('contactnumber', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('inputname') }}</small>
        </div>
        <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
            {!! Form::label('inputname', 'Address') !!}
            {!! Form::textarea('contactaddress', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('inputname') }}</small>
        </div>
  {!! Form::reset("Reset", ['class' => 'btn btn-danger btn-block']) !!}
  {!! Form::submit("Add", ['class' => 'btn btn-primary btn-block']) !!}
</div>



{!! Form::close() !!}
@endsection
