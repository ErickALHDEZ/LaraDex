@extends('layouts.app')
@section('content')
<div id="app">
    <add-pokemon-btn></add-pokemon-btn>
   
    <pokemons-component></pokemons-component>

    <create-form-pokemon></create-form-pokemon>
   </div>
   
@endsection