<?php

namespace App\Http\Controllers;

use App\komentar;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class komentars extends Controller
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
        $this->validate($request, [
            'nama' => 'required|string',
            'email' => 'required|email',
            'komentar' => 'required|string',
        ]);

        $data = array(
            'id' => uuid::uuid4(),
            'barang_id' => $request->barang_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'komentar' => $request->komentar,
        );

        komentar::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function show(komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function edit(komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, komentar $komentar)
    {
        $this->validate($request, [
            'balas' => 'required|string',
        ]);

        $data = array(
            'pemilikBarang' => session('name'),
            'balas' => $request->balas,
        );

        komentar::where('id', $komentar->id)->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function destroy(komentar $komentar)
    {
        //
    }
}
