<?php

namespace App\Http\Controllers;

use App\prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search !== null){
		  $profs =prof::orderBy('created_at','DESC')->whereCin($request->search)->get();
		 return view('profs.index')->with([
		'profs'=>$profs,
		'title'=>"Resultat trouvés pour:".$request->search 
		]);
		}else{
		return  view('profs.index')->with(['profs'=>prof::all(),
		
		'title'=>"Toutes les enseignants"
		]);
		
    }
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
		'cin' =>'required',
		'nom' =>'required',
		'prenom' =>'required',
		'sexe' =>'required',
		'tel' =>'required',
		'email' =>'required',
		'depart' =>'required',
		]);
		
	prof::create([
	    'cin' =>$request->cin,
		'nom' =>$request->nom,
		'prenom' =>$request->prenom,
		'sexe' =>$request->sexe,
		'tel' =>$request->tel,
		'email' =>$request->email,
		'depart' =>$request->depart,
		]);
		return redirect()->route('admins.index')->withSuccess('bien ajoutée');
	
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function show(prof $prof)
    {
        // 
		return  view('profs.show')->withProf($prof);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function edit(prof $prof)
    {
        return view('profs.edit')->withProf($prof);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prof $prof)
    {
       $this->validate($request,[
		'cin' =>'required',
		'nom' =>'required',
		'prenom' =>'required',
		
		'tel' =>'required',
		'email' =>'required',
		'depart' =>'required',
	
		]);
		
	$prof->update([
	    'cin' =>$request->cin,
		'nom' =>$request->nom,
		'prenom' =>$request->prenom,
		
		'tel' =>$request->tel,
		'email' =>$request->email,
		'depart' =>$request->depart,
		
		]);
		return redirect()->route('admins.index')->withSuccess('bien modifié');
	  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prof  $prof
     * @return \Illuminate\Http\Response
     */
    public function destroy(prof $prof)
    {
        //
		$prof->delete();
		return redirect()->route('admins.index')->withSuccess('bien supprimé');
		
    }
}
