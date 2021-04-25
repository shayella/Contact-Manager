
@extends('layouts.base')

@section('title')
index
@endsection


<!-- #322348;  color-->

@section('content')
  <h2>Here are all your contacts</h2>
  <hr>

  <div class="container">
    @if(count($contacts)>0)
    <div class="row">
      @foreach($contacts as $contact)
        <div class="col-md-4">
          <div class="card shadow mt-4">
            <div class="card-header">
              <h3><a href="/contacts/{{$contact->id}}">
                @if($contact->gender == 'male')
                <i  style="color:#0260E8;" class="fas fa-male"></i>&nbsp;{{$contact->name}}
                @else
                <i style="color:#FF2970;" class="fas fa-female"></i>&nbsp;{{$contact->name}}
                @endif

              </a></h3>
            </div>
            <div class="card-body">
              <p>
                <a href="#">{{$contact->email}}</a>
              </p>
              <p>
                <a href="#">{{$contact->phone}}</a>
              </p>
              <p>{{$contact->info}}</p>
            </div>
            <div class="card-footer">
              <small>Added on: {{$contact->created_at}}</small>
            </div>
          </div>
        </div>
      @endforeach
     </div>
    @else
    <p>No contacts have been saved yet!!</p>
    @endif
  </div>

@endsection
