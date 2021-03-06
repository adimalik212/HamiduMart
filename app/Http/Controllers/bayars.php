<?php

namespace App\Http\Controllers;

use App\bayar;
use App\user;
use App\pilih;
use App\lapak;
use App\store;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class bayars extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $store = store::all();
        $pilih = pilih::all();
        $pembeli = bayar::where('pembeli', session('id'))->orderBy('created_at','desc')->get();
        $penjual = bayar::where('penjual', session('id'))->orderBy('created_at','desc')->get();
        return view('page.store.transaksi', compact('lapak','store','pilih','pembeli','penjual'));
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
        $this->validate($request, [
            'alamat' => 'required|string',
            'kec' => 'required|string',
            'kab' => 'required|string',
            'prov' => 'required|string',
        ]);
        $lapak = array(
            'alamat' => ucwords($request->alamat),
            'kec' => ucwords($request->kec),
            'kab' => ucwords($request->kab),
            'prov' => ucwords($request->prov),
        );

        $kode = time();
        $alamat = $request->alamat.', '.$request->kec.', '.$request->kab.', '.$request->prov;
        $bayar = array (
            'id' => uuid::uuid4(),
            'pembeli' => session('id'),
            'penjual' => $request->penjual,
            'total' => $request->total,
            'alamat' => $alamat,
            'status' => 'diPesan',
            'kode' => 'HM-'.$kode,
        );

        $pilih = array (
            'status' => 'diPesan',
            'kode' => 'HM-'.$kode,
        );

        bayar::create($bayar);
        pilih::where('kode', null)->update($pilih);
        lapak::where('user_id', session('id'))->update($lapak);
        return redirect('transaksi'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function show(bayar $bayar)
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $pembeli = bayar::where('id', $bayar->id)->first();
        $user = user::all();
        $store = store::all();
        $pilih = pilih::all();
        // $penjual = bayar::where('kode', session('id'))->orderBy('created_at','desc')->get();
        return view('page.store.transaksiDetil', compact('lapak','store','pilih','pembeli','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function edit(bayar $bayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bayar $bayar)
    {
        $data = array (
            'status' => $request->status,
        );

        bayar::where('id', $bayar->id)->update($data);
        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bayar  $bayar
     * @return \Illuminate\Http\Response
     */
    public function destroy(bayar $bayar)
    {
        //
    }
}
