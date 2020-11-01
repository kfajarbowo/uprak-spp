<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kelas;
use App\Spp;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spps = Spp::all();
        return view('admin.spp.index',compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelass = Kelas::all();
        return view('admin.spp.create',compact('kelass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_kelas' => 'required',
            'price' => 'required',
        ]);
        $spp = new Spp();
        $spp->kelas_id = $request->nama_kelas;
        $spp->price = $request->price;
        $spp->save();
        return redirect()->route('spp.index')->with('successMsg','Berhasil di Buat');
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
        $spp = Spp::find($id);
        $kelass = Kelas::all();
        return view('admin.spp.edit',compact('spp','kelass'));
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
        $this->validate($request,[
            'nama_kelas' => 'required',
            'price' => 'required',
        ]);
        $spp = Spp::find($id);
        $spp->kelas_id = $request->nama_kelas;
        $spp->price = $request->price;
        $spp->save();
        return redirect()->route('spp.index')->with('successMsg','Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Spp::find($id)->delete();
        return redirect()->back()->with('successMsg','Yah Keapus');
    }
}
