<?php

namespace App\Http\Controllers;
use App\Models\stagiaire;
use Illuminate\Http\Request;
use App\Http\Requests\StagiaireRequest;

class controllerressource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $v=stagiaire::all();
        return view("index",["all"=>$v]);
    }
    public function stimuler(Request $request)
    {  
              $num=$request->mc;

        $urSheet=[
            "Annee1"=>'d',
            "Annee2"=>'3',
            "Annee3"=>$num
        ];



        
        return view("test",compact("urSheet"));
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("stagiaireinscription");

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StagiaireRequest $request)
    {

        // $st=new stagiaire();
        Stagiaire::create($request->all());
        // $st->name=$request->input("name");
        // $st->email=$request->input("email");
        // $st->save();
        return redirect()->route("stagiaire.index");
        
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $st=stagiaire::find($id);   
        return view("edit",["st"=>$st]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $st=stagiaire::find($id);
        $st->name=$request->input("namemod");
        $st->email=$request->input("emailmod");
        $st->save();
        // $inputs = $request->all();
        // $st->update($inputs);
        // return redirect();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $st=stagiaire::find($id);
        $st->delete();
        return redirect()->route('stagiaire.index');
        //
    }
}
