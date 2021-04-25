@extends('layouts.base')

@section('title')
{{$contact->name}} details
@endsection


@section('content')
<div class="container">
  <a href="/contacts" class="btn btn-success">Back</a>

</div>
  <div class="container mt-3">
    <h2>{{$contact->name}}'s Details</h2>
    <hr>
    <div class="row">
      <div class="col-md-5">
        <div class="card shadow">
          <div class="card-header">
            <h3>Name: {{$contact->name}} </h3>
          </div>
          <div class="card-body">
            <h4>Email:
              <a href="#">{{$contact->email}}</a>
            </h4>
            <h4>Telephone Number:
              <a href="#">{{$contact->phone}}</a>
            </h4>
            <h4>More Info: &nbsp; &nbsp;{{$contact->info}}</h4>
            <h4>Gender: &nbsp; &nbsp;   @if($contact->gender == 'male')
              <i  style="color:#0260E8;" class="fas fa-male"></i>&nbsp;{{$contact->gender}}
              @else
              <i style="color:#FF2970;" class="fas fa-female"></i>&nbsp;{{$contact->gender}}
              @endif</h4>
          </div>
          <div class="card-footer">
            <h5>Added on: {{$contact->created_at}}</h5>
            <h5>Updated On: {{$contact->updated_at}} </h5>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
