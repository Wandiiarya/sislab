<?php

namespace App\Http\Controllers;

use App\Models\lp_ruangan;
use App\Models\pm_ruangan;
use Illuminate\Http\Request;

class LpRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $lp_ruangan=lp_ruangan::all();
        return view('lp_ruangans.index',compact('lp_ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pm_ruangan=pm_ruangan::all();
    return view('lp_ruangans.create',compact('pm_ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lp_ruangan=new lp_ruangan;
        $lp_ruangan->id_peminjaman=$request->id_peminjaman;
        $lp_ruangan->keterangan=$request->keterangan;
        $lp_ruangan->save();
        return redirect()->route('lp_ruangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
        $lp_ruangan = lp_ruangan::FindOrFail($id);
        return view('lp_ruangans.show',compact('lp_ruangan',));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lp_ruangan = lp_ruangan::FindOrFail($id);
        $pm_ruangan = pm_ruangan::all();
        return view('lp_ruangans.edit', compact('lp_ruangan','pm_ruangan'));

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
        $lp_ruangan = lp_ruangan::FindOrFail($id);
        $lp_ruangan->id_peminjaman=$request->id_peminjaman;
        $lp_ruangan->keterangan=$request->keterangan;
        $lp_ruangan->save();
        return redirect()->route('lp_ruangan.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lp_ruangan =  lp_ruangan::FindOrFail($id);

        $lp_ruangan->delete();
        return redirect()->route('lp_ruangan.index');

    }
}
