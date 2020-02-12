@extends('layouts.app')
@section('title','entrenador')

@section('content')
@include('common.success')

<div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top:70px">
    <img style="height:100px; width:100px; background-color:beige;" class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alts="">
        <div class="card-body">
        <h5 class="card-title">{{$trainer->name}}</h5>
        
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">editar</a>

        <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>

        </div>
      </div>
    </div>

@endsection