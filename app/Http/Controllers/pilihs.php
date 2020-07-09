<?php

namespace App\Http\Controllers;

use App\pilih;
use App\bayar;
use App\lapak;
use App\store;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class pilihs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $pilih = pilih::where('pembeli', session('id'))->where('status', null)->get();
        $store = store::all();
        $lpk = lapak::all();
        return view('page.store.myCart', compact('lapak','pilih','store','lpk'));
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
        // $kode = time();
        $data = array (
            'id' => uuid::uuid4(),
            'barang_id' => $request->barang_id,
            'harga' => $request->harga,
            'jumlah' => '1',
            'total' => $request->harga * 1,
            'pembeli' => session('id'),
            // 'kode' => $kode,
        );
        // $bayar = array (
        //     'id' => uuid::uuid4(),
        //     'kode' => $kode,
        // );

        pilih::create($data);
        // bayar::create($bayar);
        return redirect('myCart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pilih  $pilih
     * @return \Illuminate\Http\Response
     */
    public function show(pilih $pilih)
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $pilih = pilih::where('pembeli', session('id'))->where('status', null)->get();
        $store = store::all();
        $lpk = lapak::all();
        return view('page.store.bayar', compact('lapak','pilih','store','lpk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pilih  $pilih
     * @return \Illuminate\Http\Response
     */
    public function edit(pilih $pilih)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pilih  $pilih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pilih $pilih)
    {
        switch ($request->input('jml')) {
            case 'min':
                $j = $pilih->jumlah - 1;
                $data = array (
                    'jumlah' => $j,
                    'total' => $pilih->harga * $j,
                );
                break;
            
            case 'plus':
                $j = $pilih->jumlah + 1;
                $data = array (
                    'jumlah' => $j,
                    'total' => $pilih->harga * $j,
                );
                break;
        }

        pilih::where('id', $pilih->id)->update($data);
        return redirect('myCart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pilih  $pilih
     * @return \Illuminate\Http\Response
     */
    public function destroy(pilih $pilih)
    {
        pilih::where('id', $pilih->id)->delete();
        return redirect()->back();
    }
}
