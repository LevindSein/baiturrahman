<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
            'username' => ['required', 'max:100'],
            'password' => ['required', 'min:6'],
        ],$this->messages);

        $username = strtolower($request->username);
        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $username;
        }
        else if(is_numeric($username)){
            $credentials['telephone'] = $username;

            if(substr($username,0,1) == "0"){
                return redirect('login')->with('warning', 'Nomor diawali 62 atau kode negara.');
            }
        }
        else{
            $credentials['username'] = $username;
        }
        $credentials['password'] = md5($request->password);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 1 || $user->level == 2){
                return redirect('dashboard')->with('success','Selamat Datang');
            }
            else{
                return redirect('login')->with('warning','Tidak memiliki akses.');
            }
        }
        else{
            return redirect('login')->with('error','Oops! Login gagal.');
        }
    }

    public function register(Request $request){
        $request->validate([
            'userRegistration' => ['required', 'max:100'],
            'password' => ['required', 'min:6'],
            'konfirmasiPassword' => ['required', 'min:6'],
        ],$this->messages);

        $username = strtolower($request->userRegistration);

        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $username;
        }
        else if(is_numeric($username)){
            $credentials['telephone'] = $username;

            if(substr($username,0,1) == "0"){
                return redirect('login')->with('warning', 'Nomor diawali 62 atau kode negara.');
            }
        }
        else{
            $credentials['username'] = $username;
        }

        $password = $request->password;
        $confirm = $request->konfirmasiPassword;
        if($password == $confirm){
            $credentials['password'] = md5($password);
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                if ($user->level == 1 || $user->level == 2){
                    return redirect('dashboard')->with('success','Akun sudah terdaftar.');
                }
                else{
                    return redirect('login')->with('warning','Tidak memiliki akses.');
                }
            }
            else{
                $nama = $this->nama();
                $data['username'] = $nama;
                $data['name'] = $nama;
                $data['level'] = 3;
                $data['foto'] = "storage/users/user.jpg";
                $data['password'] = Hash::make(md5($password));

                if(filter_var($username, FILTER_VALIDATE_EMAIL)){
                    $data['email'] = $username;
                    $credentials['email'] = $username;
                }
                else if(is_numeric($username)){
                    $request->validate([
                        'userRegistration' => 'numeric|digits_between:10,15',
                    ],$this->messages);

                    if(substr($username,0,1) == "0"){
                        return redirect('login')->with('warning', 'Nomor diawali 62 atau kode negara.');
                    }

                    $data['telephone'] = $username;
                    $credentials['telephone'] = $username;
                }
                else{
                    return redirect('login')->with('warning','Email/No.hp tidak valid');
                }

                try{
                    User::create($data);
                }
                catch(\Exception $e){
                    return redirect('login')->with('error','Pendaftaran gagal.')->with('warning','Akun anda mungkin sudah terdaftar');
                }

                $credentials['password'] = md5($password);

                if (Auth::attempt($credentials)) {
                    $user = Auth::user();
                    if ($user->level == 3){
                        return redirect('profil')->with('success','Selamat datang.')->with('warning','Lengkapi data diri!');
                    }
                    else{
                        return redirect('login')->with('warning','Tidak memiliki akses.');
                    }
                }
                else{
                    return redirect('login')->with('error','Login Gagal.')->with('info','Akun anda mungkin sudah terdaftar');
                }
            }
        }
        else{
            return redirect('login')->with('info','Konfirmasi Password tidak cocok dengan Password');
        }
    }

    public function nama(){
        $nama = str_shuffle('abcdefghjkmnopqrstuvwxyz');
        $nama = substr($nama,0,7);
        if(User::where('username', $nama)->first() != NULL){
            $this->nama();
        }
        return $nama;
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
