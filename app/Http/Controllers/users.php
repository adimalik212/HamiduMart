<?php

namespace App\Http\Controllers;

use App\user;
use App\lapak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password, $data->password)){
                Session::put('id',$data->id);
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('role',$data->role);
                Session::put('status',$data->status);
                Session::put('photo',$data->photo);
                Session::put('login',TRUE);
                // $notif = Toastr::success('Anda berhasil Login :)','Selamat');
                return redirect('/dashboard');
            }
            else{
                // $notif = Toastr::error('Password atau e-mail anda salah :)','Perhatian');
                return redirect('login');
            }
        }
        else{
            // $notif = Toastr::error('Password atau e-mail anda salah :)','Perhatian');
            return redirect('login');
        }
    }

    public function login(){
        return view('page.login');
    }

    public function register(){
        return view('page.register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
        ]);
        $id = Uuid::uuid4();
        $data = array(
            'id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'Reguler',
            'status' => '1',
            'password' => bcrypt($request->password),
        );
        $lapak = array(
            'id' => Uuid::uuid4(),
            'user_id' => $id,
            'pemilik' => $request->name,
        );

        // $notif = Toastr::success('Kamu berhasil Register :)','Selamat');
        user::create($data);
        lapak::create($lapak);
        return redirect('/login');
    }

    public function logout(){
        session()->flush();
        // $notif = Toastr::warning('Kamu sudah Logout :(','Info');
        return redirect('/login');
    }
}
