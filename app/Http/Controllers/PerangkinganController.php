<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ahp_alternative;

class PerangkinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analisaAlternative = ahp_alternative::all()->sortByDesc('nilai_akhir');

        $jumlahNilaiAkhirA1 = ahp_alternative::where('alternatives_code', 'A1')->get()->first()->nilai_akhir;
        $jumlahNilaiAkhirA2 = ahp_alternative::where('alternatives_code', 'A2')->get()->first()->nilai_akhir;
        $jumlahNilaiAkhirA3 = ahp_alternative::where('alternatives_code', 'A3')->get()->first()->nilai_akhir;
        $jumlahNilaiAkhirA4 = ahp_alternative::where('alternatives_code', 'A4')->get()->first()->nilai_akhir;
        $jumlahNilaiAkhirA5 = ahp_alternative::where('alternatives_code', 'A5')->get()->first()->nilai_akhir;
        $jumlahNilaiAkhirA6 = ahp_alternative::where('alternatives_code', 'A6')->get()->first()->nilai_akhir;
        $jumlahNilaiAkhirA7 = ahp_alternative::where('alternatives_code', 'A7')->get()->first()->nilai_akhir;

        return view('users.pages.Perangkingan', compact('analisaAlternative', 'jumlahNilaiAkhirA1', 'jumlahNilaiAkhirA2', 'jumlahNilaiAkhirA3', 'jumlahNilaiAkhirA4', 'jumlahNilaiAkhirA5', 'jumlahNilaiAkhirA6', 'jumlahNilaiAkhirA7'));
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
