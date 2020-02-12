@extends('layouts.app')
@section('title','entrenadores')

@section('content')
<div class="row">
    @foreach ($trainers as $trainer)

    
    <div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top:70px">
    <img style="height:100px; width:100px; background-color:beige;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alts="">
        <div class="card-body">
        <h5 class="card-title">{{$trainer->name}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">ver mas</a>
        </div>
      </div>
    </div>
    
    @endforeach
</div>

@endsection