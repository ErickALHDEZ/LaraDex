<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pokemonController extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
            return response()->json([
                ['id'=>1,'name'=>'pikachu'],
                ['id'=>2,'name'=>'pidgey'],
                ['id'=>3,'name'=>'metapod'],
            ]);
        }
        return view('pokemons.index');
    }

    public function store(Request $request){
        if($request->ajax()){
            $pokemon = new pokemon();
            $pokemon->name= $request->input('name');
            $pokemon->picture=$request->input('picture');
            $pokemon->save();

            return response()->json([
                "message" => "pokemon creado correctamente"
             ],200);
        }
    }
}
