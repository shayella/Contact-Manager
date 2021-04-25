@if(count($errors) > 0)
  @foreach($errors->all() as $error)

    <div class="alert alert-danger">
      {{$error}}
    </div>
  @endforeach
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible">
  {{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible">
  {{session('error')}}
</div>
@endif
