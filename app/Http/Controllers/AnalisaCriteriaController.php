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

        $k1b1 = ahp_analisa_criteria::where('first_criterias', 'C1')->where('second_criterias', 'C1')->get()->first();
        $k1b2 = ahp_analisa_criteria::where('first_criterias', 'C2')->where('second_criterias', 'C1')->get()->first();
        $k1b3 = ahp_analisa_criteria::where('first_criterias', 'C3')->where('second_criterias', 'C1')->get()->first();
        $k1b4 = ahp_analisa_criteria::where('first_criterias', 'C4')->where('second_criterias', 'C1')->get()->first();

        $k2b1 = ahp_analisa_criteria::where('first_criterias', 'C1')->where('second_criterias', 'C2')->get()->first();
        $k2b2 = ahp_analisa_criteria::where('first_criterias', 'C2')->where('second_criterias', 'C2')->get()->first();
        $k2b3 = ahp_analisa_criteria::where('first_criterias', 'C3')->where('second_criterias', 'C2')->get()->first();
        $k2b4 = ahp_analisa_criteria::where('first_criterias', 'C4')->where('second_criterias', 'C2')->get()->first();

        $k3b1 = ahp_analisa_criteria::where('first_criterias', 'C1')->where('second_criterias', 'C3')->get()->first();
        $k3b2 = ahp_analisa_criteria::where('first_criterias', 'C2')->where('second_criterias', 'C3')->get()->first();
        $k3b3 = ahp_analisa_criteria::where('first_criterias', 'C3')->where('second_criterias', 'C3')->get()->first();
        $k3b4 = ahp_analisa_criteria::where('first_criterias', 'C4')->where('second_criterias', 'C3')->get()->first();

        $k4b1 = ahp_analisa_criteria::where('first_criterias', 'C1')->where('second_criterias', 'C4')->get()->first();
        $k4b2 = ahp_analisa_criteria::where('first_criterias', 'C2')->where('second_criterias', 'C4')->get()->first();
        $k4b3 = ahp_analisa_criteria::where('first_criterias', 'C3')->where('second_criterias', 'C4')->get()->first();
        $k4b4 = ahp_analisa_criteria::where('first_criterias', 'C4')->where('second_criterias', 'C4')->get()->first();


        $bobotC1 = ahp_criteria::where('code_criterias', 'C1')->get()->first();
        $bobotC2 = ahp_criteria::where('code_criterias', 'C2')->get()->first();
        $bobotC3 = ahp_criteria::where('code_criterias', 'C3')->get()->first();
        $bobotC4 = ahp_criteria::where('code_criterias', 'C4')->get()->first();

        if (isset($k1b1)) {
            $k1b1KaliBobotC1=$k1b1->intensitas_values*$bobotC1->bobot;
            $k2b1KaliBobotC2=$k2b1->intensitas_values*$bobotC2->bobot;
            $k3b1KaliBobotC3=$k3b1->intensitas_values*$bobotC3->bobot;
            $k4b1KaliBobotC4=$k4b1->intensitas_values*$bobotC4->bobot;
            $nmaxb1=$k1b1KaliBobotC1+$k2b1KaliBobotC2+$k3b1KaliBobotC3+$k4b1KaliBobotC4;


            $k1b2KaliBobotC1=$k1b2->intensitas_values*$bobotC1->bobot;
            $k2b2KaliBobotC2=$k2b2->intensitas_values*$bobotC2->bobot;
            $k3b2KaliBobotC3=$k3b2->intensitas_values*$bobotC3->bobot;
            $k4b2KaliBobotC4=$k4b2->intensitas_values*$bobotC4->bobot;
            $nmaxb2=$k1b2KaliBobotC1+$k2b2KaliBobotC2+$k3b2KaliBobotC3+$k4b2KaliBobotC4;


            $k1b3KaliBobotC1=$k1b3->intensitas_values*$bobotC1->bobot;
            $k2b3KaliBobotC2=$k2b3->intensitas_values*$bobotC2->bobot;
            $k3b3KaliBobotC3=$k3b3->intensitas_values*$bobotC3->bobot;
            $k4b3KaliBobotC4=$k4b3->intensitas_values*$bobotC4->bobot;
            $nmaxb3=$k1b3KaliBobotC1+$k2b3KaliBobotC2+$k3b3KaliBobotC3+$k4b3KaliBobotC4;


            $k1b4KaliBobotC1=$k1b4->intensitas_values*$bobotC1->bobot;
            $k2b4KaliBobotC2=$k2b4->intensitas_values*$bobotC2->bobot;
            $k3b4KaliBobotC3=$k3b4->intensitas_values*$bobotC3->bobot;
            $k4b4KaliBobotC4=$k4b4->intensitas_values*$bobotC4->bobot;
            $nmaxb4=$k1b4KaliBobotC1+$k2b4KaliBobotC2+$k3b4KaliBobotC3+$k4b4KaliBobotC4;

            $nmaxhasilbagi1 = $nmaxb1/$bobotC1->bobot; 
            $nmaxhasilbagi2 = $nmaxb2/$bobotC2->bobot;
            $nmaxhasilbagi3 = $nmaxb3/$bobotC3->bobot;
            $nmaxhasilbagi4 = $nmaxb4/$bobotC4->bobot;
            $nmax = ($nmaxhasilbagi1 + $nmaxhasilbagi2 + $nmaxhasilbagi3 + $nmaxhasilbagi4) / 4;
            $CI = ($nmax - 4) / 3;
            $CR = $CI / 0.8815;
        }
        

        if (isset($nmax)) {
            return view('users.pages.analisaKriteria', compact('analisaCriteria', 'nmax', 'CI', 'CR'));
        }else{
            return view('users.pages.analisaKriteria', compact('analisaCriteria'));
        }
        
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
