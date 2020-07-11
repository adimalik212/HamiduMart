<?php

namespace App\Http\Controllers;

use App\lapak;
use App\user;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as image;

class lapaks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        return view('page.user.profile', compact('lapak'));
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
        $lapak = lapak::where('user_id', session('id'))->first();
        return view('page.user.editProfile', compact('lapak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lapak $lapak)
    {
        $this->validate($request, [
            'pemilik' => 'required|string',
            'email' => 'required|email',
            'hp' => 'required|integer',
            'namaLapak' => 'required|string',
            'alamat' => 'required|string',
            'kec' => 'required|string',
            'kab' => 'required|string',
            'prov' => 'required|string',
        ]);
        if (! $request->photo == '') {
            $image_path = "img_user/".$lapak->photo;
            if (file_exists($image_path)) {
                @unlink($image_path);
                $file=$request->file('photo');
                $name = rand() . '.' . $file->getClientOriginalExtension();
        
                $thumbnailpath = public_path('img_user/'.$name);
                $img = Image::make($file)->resize(500, 500, function($contan){ $contan->aspectRatio();});
                $img->save($thumbnailpath);
            }else {
                $file=$request->file('photo');
                $name = rand() . '.' . $file->getClientOriginalExtension();
        
                $thumbnailpath = public_path('img_user/'.$name);
                $img = Image::make($file)->resize(500, 500, function($contan){ $contan->aspectRatio();});
                $img->save($thumbnailpath);
            }
        } else {
            $name = $lapak->photo;
        }
        
        $data = array(
            'pemilik' => ucwords($request->pemilik),
            'hp' => $request->hp,
            'namaLapak' => ucwords($request->namaLapak),
            'alamat' => ucwords($request->alamat),
            'kec' => ucwords($request->kec),
            'kab' => ucwords($request->kab),
            'prov' => ucwords($request->prov),
            'url' => Str::slug($request->namaLapak),
            'photo' => $name,
        );
        $email = array(  
            'name' => $request->pemilik,
            'email' => $request->email,
        );

        lapak::where('id', $lapak->id)->update($data);
        user::where('id', $lapak->user_id)->update($email);
        return redirect('profile');
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
