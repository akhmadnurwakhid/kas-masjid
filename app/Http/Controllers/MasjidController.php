<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MasjidRequest;
use App\Masjid;
use RealRashid\SweetAlert\Facades\Alert;


class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masjid = Masjid::first();
        return view('pages.masjid.index', ['masjid' => $masjid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('isAdmin', Masjid::class);
        $masjid = Masjid::findOrFail($id);
        return view('pages.masjid.edit', ['masjid' => $masjid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MasjidRequest $request, $id)
    {
        $this->authorize('isAdmin', Masjid::class);
        $masjid = Masjid::findOrFail($id);
        $masjid->update($request->all());
        Alert::success('Sukses', 'Profile masjid berhasil diupdate');
        return redirect()->route('masjid.index');
    }

}
