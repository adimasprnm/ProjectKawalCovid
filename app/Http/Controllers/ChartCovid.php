<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartCovid extends Controller
{
    public function DataPositif()
    {
         $provinsi = DB::table('provinsis')
                    ->select(DB::raw('provinsis.nama_provinsi'),
                            DB::raw('SUM(trackings.positif)'))
                            ->join('kotas','provinsis.id','=','kotas.id_prov')
                            ->join('kecamatans','kotas.id','=','kecamatans.id_kot')
                            ->join('kelurahans','kecamatans.id','=','kelurahans.id_kec')
                            ->join('rws','kelurahans.id','=','rws.id_kel')
                            ->join('trackings','rws.id','=','trackings.id_rw')
                            ->groupby('groupby')->get();
        // Mengenerate warna secara acak
        for ($i=0; $i <= count($provinsi); $i++) { 
            $colours[] = '#'.
            substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan Data per Provinsi

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
}
