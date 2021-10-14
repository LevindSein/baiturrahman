<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $messages;

    public function __construct(){
        $this->messages = config('messages');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Hash::make("a32e60b6551a006186b9f7dc62402dd0");
        return view('home.login');
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
        $request->validate([
            'username' => ['required', 'max:50'],
            'password' => ['required', 'min:5'],
        ],$this->messages);

        $username = strtolower($request->username);
        if (strpos($username, '@') !== false && substr_count($username, '@') == 1) {
            $credentials['email'] = $username;
        }
        else if(is_numeric($username)){
            $credentials['telephone'] = $username;
        }
        else{
            $credentials['username'] = $username;
        }
        $credentials['password'] = md5($request->password);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect('dashboard')->with('success','Selamat Datang');
            }

            return redirect('login')->with('warning','Tidak ada akses.');
        }
        else{
            return redirect('login')->with('error','Oops! Akun tidak ditemukan');
        }
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

    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        return Redirect('login')->with('success', 'Sampai bertemu kembali');
    }
}
