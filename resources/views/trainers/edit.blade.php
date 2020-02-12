@extends('layouts.app')
@section('title','trainers edit')

@section('content')
<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    @include('trainers.form')
    
    <button type="submit" class="btn btn-primary">actualizar</button>


@endsection