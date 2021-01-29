<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ahp_alternative;
use App\ahp_analisa_alternative;
use App\criteria;
use App\ahp_criteria;

class AnalisaAlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analisaAlternative = ahp_alternative::all();
        $Criteria = criteria::all();

        return view('users.pages.analisaAlternatif', compact('analisaAlternative', 'Criteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hitung_nilai_akhir(Request $request)
    {
        // save tb analisa
        $storeInputAnalisa = new ahp_analisa_alternative;
        $storeInputAnalisa->Alt = "A1";
        $storeInputAnalisa->C1 = $request->A1C1;
        $storeInputAnalisa->C2 = $request->A1C2;
        $storeInputAnalisa->C3 = $request->A1C3;
        $storeInputAnalisa->C4 = $request->A1C4/100;
        $storeInputAnalisa->save();

        $storeInputAnalisa = new ahp_analisa_alternative;
        $storeInputAnalisa->Alt = "A2";
        $storeInputAnalisa->C1 = $request->A2C1;
        $storeInputAnalisa->C2 = $request->A2C2;
        $storeInputAnalisa->C3 = $request->A2C3;
        $storeInputAnalisa->C4 = $request->A2C4/100;
        $storeInputAnalisa->save();

        $storeInputAnalisa = new ahp_analisa_alternative;
        $storeInputAnalisa->Alt = "A3";
        $storeInputAnalisa->C1 = $request->A3C1;
        $storeInputAnalisa->C2 = $request->A3C2;
        $storeInputAnalisa->C3 = $request->A3C3;
        $storeInputAnalisa->C4 = $request->A3C4/100;
        $storeInputAnalisa->save();

        $storeInputAnalisa = new ahp_analisa_alternative;
        $storeInputAnalisa->Alt = "A4";
        $storeInputAnalisa->C1 = $request->A4C1;
        $storeInputAnalisa->C2 = $request->A4C2;
        $storeInputAnalisa->C3 = $request->A4C3;
        $storeInputAnalisa->C4 = $request->A4C4/100;
        $storeInputAnalisa->save();

        $storeInputAnalisa = new ahp_analisa_alternative;
        $storeInputAnalisa->Alt = "A5";
        $storeInputAnalisa->C1 = $request->A5C1;
        $storeInputAnalisa->C2 = $request->A5C2;
        $storeInputAnalisa->C3 = $request->A5C3;
        $storeInputAnalisa->C4 = $request->A5C4/100;
        $storeInputAnalisa->save();

        $storeInputAnalisa = new ahp_analisa_alternative;
        $storeInputAnalisa->Alt = "A6";
        $storeInputAnalisa->C1 = $request->A6C1;
        $storeInputAnalisa->C2 = $request->A6C2;
        $storeInputAnalisa->C3 = $request->A6C3;
        $storeInputAnalisa->C4 = $request->A6C4/100;
        $storeInputAnalisa->save();

        $storeInputAnalisa = new ahp_analisa_alternative;
        $storeInputAnalisa->Alt = "A7";
        $storeInputAnalisa->C1 = $request->A7C1;
        $storeInputAnalisa->C2 = $request->A7C2;
        $storeInputAnalisa->C3 = $request->A7C3;
        $storeInputAnalisa->C4 = $request->A7C4/100;
        $storeInputAnalisa->save();
        // end save tb analisa


        // Menghitung eigen vector C1
        $A1C1 = ahp_analisa_alternative::where('Alt', 'A1')->get()->first()->C1;
        $A2C1 = ahp_analisa_alternative::where('Alt', 'A2')->get()->first()->C1;
        $A3C1 = ahp_analisa_alternative::where('Alt', 'A3')->get()->first()->C1;
        $A4C1 = ahp_analisa_alternative::where('Alt', 'A4')->get()->first()->C1;
        $A5C1 = ahp_analisa_alternative::where('Alt', 'A5')->get()->first()->C1;
        $A6C1 = ahp_analisa_alternative::where('Alt', 'A6')->get()->first()->C1;
        $A7C1 = ahp_analisa_alternative::where('Alt', 'A7')->get()->first()->C1;
        $TotalAltC1 = $A1C1 + $A2C1 + $A3C1 + $A4C1 + $A5C1 + $A6C1 + $A7C1;

        $eigenVectorA1C1 = $A1C1/$TotalAltC1;
        $eigenVectorA2C1 = $A2C1/$TotalAltC1;
        $eigenVectorA3C1 = $A3C1/$TotalAltC1;
        $eigenVectorA4C1 = $A4C1/$TotalAltC1;
        $eigenVectorA5C1 = $A5C1/$TotalAltC1;
        $eigenVectorA6C1 = $A6C1/$TotalAltC1;
        $eigenVectorA7C1 = $A7C1/$TotalAltC1;
        // END Menghitung eigen vector C1

        // Menghitung eigen vector C2
        $A1C2 = ahp_analisa_alternative::where('Alt', 'A1')->get()->first()->C2;
        $A2C2 = ahp_analisa_alternative::where('Alt', 'A2')->get()->first()->C2;
        $A3C2 = ahp_analisa_alternative::where('Alt', 'A3')->get()->first()->C2;
        $A4C2 = ahp_analisa_alternative::where('Alt', 'A4')->get()->first()->C2;
        $A5C2 = ahp_analisa_alternative::where('Alt', 'A5')->get()->first()->C2;
        $A6C2 = ahp_analisa_alternative::where('Alt', 'A6')->get()->first()->C2;
        $A7C2 = ahp_analisa_alternative::where('Alt', 'A7')->get()->first()->C2;
        $TotalAltC2 = $A1C2 + $A2C2 + $A3C2 + $A4C2 + $A5C2 + $A6C2 + $A7C2;

        $eigenVectorA1C2 = $A1C2/$TotalAltC2;
        $eigenVectorA2C2 = $A2C2/$TotalAltC2;
        $eigenVectorA3C2 = $A3C2/$TotalAltC2;
        $eigenVectorA4C2 = $A4C2/$TotalAltC2;
        $eigenVectorA5C2 = $A5C2/$TotalAltC2;
        $eigenVectorA6C2 = $A6C2/$TotalAltC2;
        $eigenVectorA7C2 = $A7C2/$TotalAltC2;
        // END Menghitung eigen vector C2

        // Menghitung eigen vector C3
        $A1C3 = ahp_analisa_alternative::where('Alt', 'A1')->get()->first()->C3;
        $A2C3 = ahp_analisa_alternative::where('Alt', 'A2')->get()->first()->C3;
        $A3C3 = ahp_analisa_alternative::where('Alt', 'A3')->get()->first()->C3;
        $A4C3 = ahp_analisa_alternative::where('Alt', 'A4')->get()->first()->C3;
        $A5C3 = ahp_analisa_alternative::where('Alt', 'A5')->get()->first()->C3;
        $A6C3 = ahp_analisa_alternative::where('Alt', 'A6')->get()->first()->C3;
        $A7C3 = ahp_analisa_alternative::where('Alt', 'A7')->get()->first()->C3;
        $TotalAltC3 = $A1C3 + $A2C3 + $A3C3 + $A4C3 + $A5C3 + $A6C3 + $A7C3;

        $eigenVectorA1C3 = $A1C3/$TotalAltC3;
        $eigenVectorA2C3 = $A2C3/$TotalAltC3;
        $eigenVectorA3C3 = $A3C3/$TotalAltC3;
        $eigenVectorA4C3 = $A4C3/$TotalAltC3;
        $eigenVectorA5C3 = $A5C3/$TotalAltC3;
        $eigenVectorA6C3 = $A6C3/$TotalAltC3;
        $eigenVectorA7C3 = $A7C3/$TotalAltC3;
        // END Menghitung eigen vector C3


        // Menghitung eigen vector C4
        $A1C4 = ahp_analisa_alternative::where('Alt', 'A1')->get()->first()->C4;
        $A2C4 = ahp_analisa_alternative::where('Alt', 'A2')->get()->first()->C4;
        $A3C4 = ahp_analisa_alternative::where('Alt', 'A3')->get()->first()->C4;
        $A4C4 = ahp_analisa_alternative::where('Alt', 'A4')->get()->first()->C4;
        $A5C4 = ahp_analisa_alternative::where('Alt', 'A5')->get()->first()->C4;
        $A6C4 = ahp_analisa_alternative::where('Alt', 'A6')->get()->first()->C4;
        $A7C4 = ahp_analisa_alternative::where('Alt', 'A7')->get()->first()->C4;
        $TotalAltC4 = $A1C4 + $A2C4 + $A3C4 + $A4C4 + $A5C4 + $A6C4 + $A7C4;

        $eigenVectorA1C4 = $A1C4/$TotalAltC4;
        $eigenVectorA2C4 = $A2C4/$TotalAltC4;
        $eigenVectorA3C4 = $A3C4/$TotalAltC4;
        $eigenVectorA4C4 = $A4C4/$TotalAltC4;
        $eigenVectorA5C4 = $A5C4/$TotalAltC4;
        $eigenVectorA6C4 = $A6C4/$TotalAltC4;
        $eigenVectorA7C4 = $A7C4/$TotalAltC4;
        // END Menghitung eigen vector C4



        // Menghitung Nilai Akhir
        $bobotC1 = ahp_criteria::where('code_criterias', 'C1')->get()->first()->bobot;
        $bobotC2 = ahp_criteria::where('code_criterias', 'C2')->get()->first()->bobot;
        $bobotC3 = ahp_criteria::where('code_criterias', 'C3')->get()->first()->bobot;
        $bobotC4 = ahp_criteria::where('code_criterias', 'C4')->get()->first()->bobot;

        $PerkalianSilangA1_1 = $eigenVectorA1C1*$bobotC1;
        $PerkalianSilangA1_2 = $eigenVectorA1C2*$bobotC2;
        $PerkalianSilangA1_3 = $eigenVectorA1C3*$bobotC3;
        $PerkalianSilangA1_4 = $eigenVectorA1C4*$bobotC4;
        $NilaiAkhirA1 = $PerkalianSilangA1_1 + $PerkalianSilangA1_2 + $PerkalianSilangA1_3 + $PerkalianSilangA1_4;

        $PerkalianSilangA2_1 = $eigenVectorA2C1*$bobotC1;
        $PerkalianSilangA2_2 = $eigenVectorA2C2*$bobotC2;
        $PerkalianSilangA2_3 = $eigenVectorA2C3*$bobotC3;
        $PerkalianSilangA2_4 = $eigenVectorA2C4*$bobotC4;
        $NilaiAkhirA2 = $PerkalianSilangA2_1 + $PerkalianSilangA2_2 + $PerkalianSilangA2_3 + $PerkalianSilangA2_4;

        $PerkalianSilangA3_1 = $eigenVectorA3C1*$bobotC1;
        $PerkalianSilangA3_2 = $eigenVectorA3C2*$bobotC2;
        $PerkalianSilangA3_3 = $eigenVectorA3C3*$bobotC3;
        $PerkalianSilangA3_4 = $eigenVectorA3C4*$bobotC4;
        $NilaiAkhirA3 = $PerkalianSilangA3_1 + $PerkalianSilangA3_2 + $PerkalianSilangA3_3 + $PerkalianSilangA3_4;

        $PerkalianSilangA4_1 = $eigenVectorA4C1*$bobotC1;
        $PerkalianSilangA4_2 = $eigenVectorA4C2*$bobotC2;
        $PerkalianSilangA4_3 = $eigenVectorA4C3*$bobotC3;
        $PerkalianSilangA4_4 = $eigenVectorA4C4*$bobotC4;
        $NilaiAkhirA4 = $PerkalianSilangA4_1 + $PerkalianSilangA4_2 + $PerkalianSilangA4_3 + $PerkalianSilangA4_4;

        $PerkalianSilangA5_1 = $eigenVectorA5C1*$bobotC1;
        $PerkalianSilangA5_2 = $eigenVectorA5C2*$bobotC2;
        $PerkalianSilangA5_3 = $eigenVectorA5C3*$bobotC3;
        $PerkalianSilangA5_4 = $eigenVectorA5C4*$bobotC4;
        $NilaiAkhirA5 = $PerkalianSilangA5_1 + $PerkalianSilangA5_2 + $PerkalianSilangA5_3 + $PerkalianSilangA5_4;

        $PerkalianSilangA6_1 = $eigenVectorA6C1*$bobotC1;
        $PerkalianSilangA6_2 = $eigenVectorA6C2*$bobotC2;
        $PerkalianSilangA6_3 = $eigenVectorA6C3*$bobotC3;
        $PerkalianSilangA6_4 = $eigenVectorA6C4*$bobotC4;
        $NilaiAkhirA6 = $PerkalianSilangA6_1 + $PerkalianSilangA6_2 + $PerkalianSilangA6_3 + $PerkalianSilangA6_4;

        $PerkalianSilangA7_1 = $eigenVectorA7C1*$bobotC1;
        $PerkalianSilangA7_2 = $eigenVectorA7C2*$bobotC2;
        $PerkalianSilangA7_3 = $eigenVectorA7C3*$bobotC3;
        $PerkalianSilangA7_4 = $eigenVectorA7C4*$bobotC4;
        $NilaiAkhirA7 = $PerkalianSilangA7_1 + $PerkalianSilangA7_2 + $PerkalianSilangA7_3 + $PerkalianSilangA7_4;
        // End Menghitung Nilai Akhir



        // Menyimpan Nilai Akhir
        $storeNilaiAkhirA1 = ahp_alternative::where('alternatives_code', 'A1')->first();
        $storeNilaiAkhirA1->nilai_akhir = $NilaiAkhirA1;
        $storeNilaiAkhirA1->save();

        $storeNilaiAkhirA2 = ahp_alternative::where('alternatives_code', 'A2')->first();
        $storeNilaiAkhirA2->nilai_akhir = $NilaiAkhirA2;
        $storeNilaiAkhirA2->save();

        $storeNilaiAkhirA3 = ahp_alternative::where('alternatives_code', 'A3')->first();
        $storeNilaiAkhirA3->nilai_akhir = $NilaiAkhirA3;
        $storeNilaiAkhirA3->save();

        $storeNilaiAkhirA4 = ahp_alternative::where('alternatives_code', 'A4')->first();
        $storeNilaiAkhirA4->nilai_akhir = $NilaiAkhirA4;
        $storeNilaiAkhirA4->save();

        $storeNilaiAkhirA5 = ahp_alternative::where('alternatives_code', 'A5')->first();
        $storeNilaiAkhirA5->nilai_akhir = $NilaiAkhirA5;
        $storeNilaiAkhirA5->save();

        $storeNilaiAkhirA6 = ahp_alternative::where('alternatives_code', 'A6')->first();
        $storeNilaiAkhirA6->nilai_akhir = $NilaiAkhirA6;
        $storeNilaiAkhirA6->save();

        $storeNilaiAkhirA7 = ahp_alternative::where('alternatives_code', 'A7')->first();
        $storeNilaiAkhirA7->nilai_akhir = $NilaiAkhirA7;
        $storeNilaiAkhirA7->save();
        // End Menyimpan Nilai Akhir

        return redirect('/users/analisa-ahp/ahp-alternatif');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetNilaiAkhir()
    {
        $storeNilaiAkhirA1 = ahp_alternative::where('alternatives_code', 'A1')->first();
        $storeNilaiAkhirA1->nilai_akhir = null;
        $storeNilaiAkhirA1->save();

        $storeNilaiAkhirA2 = ahp_alternative::where('alternatives_code', 'A2')->first();
        $storeNilaiAkhirA2->nilai_akhir = null;
        $storeNilaiAkhirA2->save();

        $storeNilaiAkhirA3 = ahp_alternative::where('alternatives_code', 'A3')->first();
        $storeNilaiAkhirA3->nilai_akhir = null;
        $storeNilaiAkhirA3->save();

        $storeNilaiAkhirA4 = ahp_alternative::where('alternatives_code', 'A4')->first();
        $storeNilaiAkhirA4->nilai_akhir = null;
        $storeNilaiAkhirA4->save();

        $storeNilaiAkhirA5 = ahp_alternative::where('alternatives_code', 'A5')->first();
        $storeNilaiAkhirA5->nilai_akhir = null;
        $storeNilaiAkhirA5->save();

        $storeNilaiAkhirA6 = ahp_alternative::where('alternatives_code', 'A6')->first();
        $storeNilaiAkhirA6->nilai_akhir = null;
        $storeNilaiAkhirA6->save();

        $storeNilaiAkhirA7 = ahp_alternative::where('alternatives_code', 'A7')->first();
        $storeNilaiAkhirA7->nilai_akhir = null;
        $storeNilaiAkhirA7->save();

        ahp_analisa_alternative::truncate();

        return redirect('/users/analisa-ahp/ahp-alternatif');
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
