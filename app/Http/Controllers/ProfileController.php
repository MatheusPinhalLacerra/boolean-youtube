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
       // dd($profile);
        return view('profile', ["user_id" => $user_id],compact('user','profile'));

        // $user_id = Auth ::id();
        
        // return view('profile', [$user_id]);
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
        $profile = profile::where('user_id', $user_id)->get('user_id');
        
        if ($profile == null ){
            dd("batata");
            ;
        }
//dd($request);
        $profile_id = new profile();
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
        $user_id = Auth ::id();
        $profile_id -> user_id  = $user_id;
        $profile_id->save();

        return view('profile', ["user_id" => $user_id],compact('user'));
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
        //
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
