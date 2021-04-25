@extends('layouts.base')

@section('title')
  create contact
@endsection

@section('content')
  <h1>Create Contact</h1>

  <div class="row">
    <div class="col-md-6">
      {!! Form::open(['action' => 'ContactsController@store', 'method' =>'POST']) !!}
          <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','', ['class' => 'form-control','placeholder' => 'Enter name'])}}
          </div>
          <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::email('email','', ['class' => 'form-control','placeholder' => 'Enter email'])}}
          </div>
          <div class="form-group">
            {{Form::label('phone','Phone (Tel)')}}
            {{Form::text('phone','', ['class' => 'form-control','placeholder' => 'Phone number'])}}
          </div>
          <div class="form-group">
            {{Form::label('info','Info')}}
            {{Form::text('info','', ['class' => 'form-control','placeholder' => 'Enter occupation or other details'])}}
          </div>
          <div class="form-group">
            {{Form::label('gender','Gender')}}
            {{Form::select("gender",['male' => 'Male', 'female' => 'Female'], 'male',
                 [
                    "class" => "form-control",
                    "placeholder" => "What's your gender.."
                 ])
            }}
          </div>

          {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
      {!! Form::close() !!}
    </div>
  </div>

@endsection
