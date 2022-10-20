<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function __construct()
    {
        $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user_id = Auth ::id();

        $User= User::get();
        if (!$user = User :: find($user_id)){
            return redirect() -> route('home');
        }
        $profile = profile::where('user_id', $user_id)->first();
        return view('profile', ["user_id" => $user_id],compact('user','profile'));

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
    public function store($user_id,Request $request)
    {
        $user_id = Auth ::id();
        $profile_id = profile::where('user_id', $user_id)->first();       
        $profile_id -> dt_birth = $request->data_nasc;
        $profile_id -> CPF = $request->cpf;
        $profile_id -> RG = $request->rg;
        $profile_id -> genre = $request->sexo;
        $profile_id -> CEP = $request->cep;
        $profile_id -> address = $request->end_logradouro;
        $profile_id -> house_number = $request->end_num;
        $profile_id -> complement = $request->end_complemento;
        $profile_id -> city = $request->end_cidade;
        $profile_id -> state = $request->end_estado; 
        $profile_id->save();
        
        //profile::findOrFail($request->id) -> update($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        profile::findOrFail($request->id) -> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
