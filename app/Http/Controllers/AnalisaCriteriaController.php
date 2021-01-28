<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ahp_criteria;
use App\ahp_analisa_criteria;

class AnalisaCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analisaCriteria = ahp_criteria::all();
        return view('users.pages.analisaKriteria', compact('analisaCriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hitungBobot(Request $request)
    {
        $jumlahK1 = $request->k1b1 + $request->k1b2 + $request->k1b3 + $request->k1b4;
        $jumlahK2 = $request->k2b1 + $request->k2b2 + $request->k2b3 + $request->k2b4;
        $jumlahK3 = $request->k3b1 + $request->k3b2 + $request->k3b3 + $request->k3b4;
        $jumlahK4 = $request->k4b1 + $request->k4b2 + $request->k4b3 + $request->k4b4;

        $k1b1=$request->k1b1/$jumlahK1; $k1b2=$request->k1b2/$jumlahK1; $k1b3=$request->k1b3/$jumlahK1; $k1b4=$request->k1b4/$jumlahK1;
        $k2b1=$request->k2b1/$jumlahK2; $k2b2=$request->k2b2/$jumlahK2; $k2b3=$request->k2b3/$jumlahK2; $k2b4=$request->k2b4/$jumlahK2;
        $k3b1=$request->k3b1/$jumlahK3; $k3b2=$request->k3b2/$jumlahK3; $k3b3=$request->k3b3/$jumlahK3; $k3b4=$request->k3b4/$jumlahK3;
        $k4b1=$request->k4b1/$jumlahK4; $k4b2=$request->k4b2/$jumlahK4; $k4b3=$request->k4b3/$jumlahK4; $k4b4=$request->k4b4/$jumlahK4;


        $C1 = ($k1b1 + $k2b1 + $k3b1 + $k4b1)/4;
        $C2 = ($k1b2 + $k2b2 + $k3b2 + $k4b2)/4;
        $C3 = ($k1b3 + $k2b3 + $k3b3 + $k4b3)/4;
        $C4 = ($k1b4 + $k2b4 + $k3b4 + $k4b4)/4;

        $storeMatriksBerpasanganK1B1 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK1B1->first_criterias = "C1";
        $storeMatriksBerpasanganK1B1->intensitas_values = $request->k1b1;
        $storeMatriksBerpasanganK1B1->second_criterias = "C1";
        $storeMatriksBerpasanganK1B1->save();

        $storeMatriksBerpasanganK1B2 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK1B2->first_criterias = "C2";
        $storeMatriksBerpasanganK1B2->intensitas_values = $request->k1b2;
        $storeMatriksBerpasanganK1B2->second_criterias = "C1";
        $storeMatriksBerpasanganK1B2->save();

        $storeMatriksBerpasanganK1B3 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK1B3->first_criterias = "C3";
        $storeMatriksBerpasanganK1B3->intensitas_values = $request->k1b3;
        $storeMatriksBerpasanganK1B3->second_criterias = "C1";
        $storeMatriksBerpasanganK1B3->save();

        $storeMatriksBerpasanganK1B4 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK1B4->first_criterias = "C4";
        $storeMatriksBerpasanganK1B4->intensitas_values = $request->k1b4;
        $storeMatriksBerpasanganK1B4->second_criterias = "C1";
        $storeMatriksBerpasanganK1B4->save();



        $storeMatriksBerpasanganK2B1 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK2B1->first_criterias = "C1";
        $storeMatriksBerpasanganK2B1->intensitas_values = $request->k2b1;
        $storeMatriksBerpasanganK2B1->second_criterias = "C2";
        $storeMatriksBerpasanganK2B1->save();

        $storeMatriksBerpasanganK2B2 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK2B2->first_criterias = "C2";
        $storeMatriksBerpasanganK2B2->intensitas_values = $request->k2b2;
        $storeMatriksBerpasanganK2B2->second_criterias = "C2";
        $storeMatriksBerpasanganK2B2->save();

        $storeMatriksBerpasanganK2B3 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK2B3->first_criterias = "C3";
        $storeMatriksBerpasanganK2B3->intensitas_values = $request->k2b3;
        $storeMatriksBerpasanganK2B3->second_criterias = "C2";
        $storeMatriksBerpasanganK2B3->save();

        $storeMatriksBerpasanganK2B4 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK2B4->first_criterias = "C4";
        $storeMatriksBerpasanganK2B4->intensitas_values = $request->k2b4;
        $storeMatriksBerpasanganK2B4->second_criterias = "C2";
        $storeMatriksBerpasanganK2B4->save();



        $storeMatriksBerpasanganK3B1 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK3B1->first_criterias = "C1";
        $storeMatriksBerpasanganK3B1->intensitas_values = $request->k3b1;
        $storeMatriksBerpasanganK3B1->second_criterias = "C3";
        $storeMatriksBerpasanganK3B1->save();

        $storeMatriksBerpasanganK3B2 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK3B2->first_criterias = "C2";
        $storeMatriksBerpasanganK3B2->intensitas_values = $request->k3b2;
        $storeMatriksBerpasanganK3B2->second_criterias = "C3";
        $storeMatriksBerpasanganK3B2->save();

        $storeMatriksBerpasanganK3B3 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK3B3->first_criterias = "C3";
        $storeMatriksBerpasanganK3B3->intensitas_values = $request->k3b3;
        $storeMatriksBerpasanganK3B3->second_criterias = "C3";
        $storeMatriksBerpasanganK3B3->save();

        $storeMatriksBerpasanganK3B4 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK3B4->first_criterias = "C4";
        $storeMatriksBerpasanganK3B4->intensitas_values = $request->k3b4;
        $storeMatriksBerpasanganK3B4->second_criterias = "C3";
        $storeMatriksBerpasanganK3B4->save();



        $storeMatriksBerpasanganK4B1 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK4B1->first_criterias = "C1";
        $storeMatriksBerpasanganK4B1->intensitas_values = $request->k4b1;
        $storeMatriksBerpasanganK4B1->second_criterias = "C4";
        $storeMatriksBerpasanganK4B1->save();

        $storeMatriksBerpasanganK4B2 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK4B2->first_criterias = "C2";
        $storeMatriksBerpasanganK4B2->intensitas_values = $request->k4b2;
        $storeMatriksBerpasanganK4B2->second_criterias = "C4";
        $storeMatriksBerpasanganK4B2->save();

        $storeMatriksBerpasanganK4B3 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK4B3->first_criterias = "C3";
        $storeMatriksBerpasanganK4B3->intensitas_values = $request->k4b3;
        $storeMatriksBerpasanganK4B3->second_criterias = "C4";
        $storeMatriksBerpasanganK4B3->save();

        $storeMatriksBerpasanganK4B4 = new ahp_analisa_criteria;
        $storeMatriksBerpasanganK4B4->first_criterias = "C4";
        $storeMatriksBerpasanganK4B4->intensitas_values = $request->k4b4;
        $storeMatriksBerpasanganK4B4->second_criterias = "C4";
        $storeMatriksBerpasanganK4B4->save();


        
        $storeBobotC1 = ahp_criteria::where('code_criterias', 'C1')->first();
        $storeBobotC1->bobot=$C1;
        $storeBobotC1->save();

        $storeBobotC2 = ahp_criteria::where('code_criterias', 'C2')->first();
        $storeBobotC2->bobot=$C2;
        $storeBobotC2->save();

        $storeBobotC3 = ahp_criteria::where('code_criterias', 'C3')->first();
        $storeBobotC3->bobot=$C3;
        $storeBobotC3->save();

        $storeBobotC4 = ahp_criteria::where('code_criterias', 'C4')->first();
        $storeBobotC4->bobot=$C4;
        $storeBobotC4->save();

        return redirect('/users/analisa-ahp/ahp-kriteria');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetBobot()
    {
        $storeBobotC1 = ahp_criteria::where('code_criterias', 'C1')->first();
        $storeBobotC1->bobot=null;
        $storeBobotC1->save();

        $storeBobotC2 = ahp_criteria::where('code_criterias', 'C2')->first();
        $storeBobotC2->bobot=null;
        $storeBobotC2->save();

        $storeBobotC3 = ahp_criteria::where('code_criterias', 'C3')->first();
        $storeBobotC3->bobot=null;
        $storeBobotC3->save();

        $storeBobotC4 = ahp_criteria::where('code_criterias', 'C4')->first();
        $storeBobotC4->bobot=null;
        $storeBobotC4->save();

        ahp_analisa_criteria::truncate();

        return redirect('/users/analisa-ahp/ahp-kriteria');
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
