<?php

namespace App\Http\Controllers;

use App\store;
use App\lapak;
use App\kategori;
use App\komentar;
use App\pilih;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class stores extends Controller
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
        return view('page.store.store', compact('lapak','store','pilih'));
    }

    public function product()
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $store = store::all();
        $lpk = lapak::all();
        return view('page.store.myProduct', compact('lapak','store','lpk'));
    }

    public function addStore()
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $kategori = kategori::all();
        return view('page.store.add', compact('lapak','kategori'));
    }

    public function editStore(store $store)
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $kategori = kategori::all();
        $store = store::where('id', $store->id)->first();
        return view('page.store.edit', compact('lapak','kategori','store'));
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
            'namaBarang' => 'required|string',
            'kategori' => 'required|string',
            'kondisi' => 'required|string',
            'harga' => 'required|integer',
            'bobot' => 'required|integer',
            'volume' => 'required|string',
            'deskripsi' => 'required|string',
            // 'photo' => 'required|string',
        ]);

        $data = array(
            'id' => Uuid::uuid4(),
            'lapak_id' => $request->lapak_id,
            'namaBarang' => ucwords($request->namaBarang),
            'kategori' => ucwords($request->kategori),
            'harga' => $request->harga,
            'bobot' => $request->bobot,
            'volume' => $request->volume,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi,
            // 'photo' => $request->photo,
            'url' => str::slug($request->namBarang)
        );

        store::create($data);
        return redirect('myProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(store $store)
    {
        $lapak = lapak::where('user_id', session('id'))->first();
        $store = store::where('id', $store->id)->first();
        $komen = komentar::where('barang_id', $store->id)->get();
        $pilih = pilih::where('pembeli', session('id'))->get();
        return view('page.store.detil', compact('lapak','store','komen','pilih'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, store $store)
    {
        $this->validate($request, [
            'namaBarang' => 'required|string',
            'kategori' => 'required|string',
            'kondisi' => 'required|string',
            'harga' => 'required|integer',
            'bobot' => 'required|integer',
            'volume' => 'required|string',
            'deskripsi' => 'required|string',
            // 'photo' => 'required|string',
        ]);

        $data = array(
            'id' => Uuid::uuid4(),
            'lapak_id' => $request->lapak_id,
            'namaBarang' => ucwords($request->namaBarang),
            'kategori' => ucwords($request->kategori),
            'harga' => $request->harga,
            'bobot' => $request->bobot,
            'volume' => $request->volume,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi,
            // 'photo' => $request->photo,
            'url' => str::slug($request->namBarang),
        );

        store::where('id', $store->id)->update($data);
        return redirect('myProduct');
    }

    public function lapakUpdate(Request $request, lapak $lapak)
    {
        $this->validate($request, [
            'namaLapak' => 'required|string',
            'kab' => 'string',
            'kec' => 'string',
        ]);
        $data = array(
            'namaLapak' => $request->namaLapak,
            'kab' => ucwords($request->kab),
            'kec' => ucwords($request->kec),
            'url' => Str::slug($request->namaLapak),
        );
        lapak::where('id', $lapak->id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(store $store)
    {
        store::where('id', $store->id)->delete();
        return redirect()->back();
    }
}
