<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profil.index');
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
        $username = $request->username;
        $name = $request->name;
        $email = $request->email;
        $telephone = $request->phone;
        $alamat = $request->alamat;
        $password = $request->password;
        $passwordBaru = $request->passwordBaru;
        $konfirmasiPasswordBaru = $request->konfirmasiPasswordBaru;

        try{
            $user = Auth::user();
            $user->username= $username;
            $user->name= $name;
            $user->email= $email;
            $user->telephone= $telephone;
            $user->alamat = $alamat;

            if (Hash::check(md5($password), $user->password)) {
                if($passwordBaru != NULL && $passwordBaru === $konfirmasiPasswordBaru){
                    $user->password = Hash::make(md5($passwordBaru));
                    $user->save();
                }
                else if($passwordBaru != $konfirmasiPasswordBaru){
                    return redirect('profil')->with('error','Konfirmasi Password baru tidak cocok.');
                }
                else{
                    $user->save();
                }
            }
            else{
                return redirect('profil')->with('error','Password saat ini salah.');
            }
        }
        catch(\Exception $e){
            return redirect('profil')->with('error','Update profil gagal.');
        }

        return redirect('profil')->with('success','Update profil berhasil.');
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
