<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trainer;
use App\Http\Requests\StoreTrainerRequest;

class trainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $request->user()->authorizeRoles('user');

        $trainers = trainer::all();
        return view('trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerRequest $request)
    {


        $trainer = new trainer();

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            
        }
        $trainer = new trainer();
        $trainer->name = $request->input('name');
        $trainer->avatar = $name;
        $trainer->slug = $request->input('slug');
        $trainer->save();

        return redirect()->route('trainers.index');
        //return 'Saved';
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(trainer $trainer)
    {
        //$trainer = trainer::find($id);
        //$trainer = trainer::where('slug','=',$slug)->firstOrFail();
        return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(trainer $trainer)
    {
      return view('trainers.edit',compact('trainer'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trainer $trainer)
    {
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar =$name;
            $file->move(public_path().'/images/',$name);
            
        }

        
        $trainer->save();
        return redirect()->route('trainers.show',[$trainer])->with('status','entrenador actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(trainer $trainer)
    {
        $file_path = public_path().'/images/'.$trainer->avatar;
        \File::delete($file_path);
    
        $trainer->delete();
        return redirect()->route('trainers.index');
        
    }
}
