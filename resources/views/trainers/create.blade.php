@extends('layouts.app')
@section('title','trainers Create')

@section('content')
   @include('common.errors')

    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
    @include('trainers.form')
    <button type="submit" class="btn btn-primary">guardar</button>

@endsection