<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ahp_criteria;

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
