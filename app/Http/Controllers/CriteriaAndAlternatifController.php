<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\criteria;
use App\alternative;
use App\ahp_criteria;
use App\ahp_alternative;

class CriteriaAndAlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criteria = criteria::all();
        $alternative = alternative::all();
        return view('users.pages.kriteriaAndAlternatif', compact('criteria', 'alternative'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function kriteria_store(Request $request)
    {
        $criteria = new criteria;
        $criteria->criteria_code=$request->kode_kriteria;
        $criteria->criteria_name=$request->nama_kriteria;
        $criteria->save();

        $ahp_criteria = new ahp_criteria;
        $ahp_criteria->criterias_id=$criteria->id;
        $ahp_criteria->code_criterias=$criteria->criteria_code;
        $ahp_criteria->save();
        return redirect('users/kriteria-alternatif');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alternatif_store(Request $request)
    {
        $alternative = new alternative;
        $alternative->alternative_code=$request->kode_alternatif;
        $alternative->alternative_name=$request->nama_alternatif;
        $alternative->save();

        $ahp_alternative = new ahp_alternative;
        $ahp_alternative->alternatives_id=$alternative->id;
        $ahp_alternative->save();
        return redirect('users/kriteria-alternatif');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kriteria_update(Request $request, $id)
    {
        $criteria = criteria::where('id', $id)->first();
        $criteria->criteria_name=$request->nama_kriteria;
        $criteria->save();
        return redirect('users/kriteria-alternatif');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alternatif_update(Request $request, $id)
    {
        $alternative = alternative::where('id', $id)->first();
        $alternative->alternative_code=$request->kode_alternatif;
        $alternative->alternative_name=$request->nama_alternatif;
        $alternative->save();
        return redirect('users/kriteria-alternatif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kriteria_destroy($id)
    {
        $criteria = criteria::where('id', $id)->first();
        $criteria->delete();
        $ahp_criteria = ahp_criteria::where('criterias_id', $id)->first();
        $ahp_criteria->delete();
        return redirect('users/kriteria-alternatif');
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function alternatif_destroy($id)
    {
        $alternative = alternative::where('id', $id)->first();
        $alternative->delete();
        $ahp_alternative = ahp_alternative::where('alternatives_id', $id)->first();
        $ahp_alternative->delete();
        return redirect('users/kriteria-alternatif');
    }
}
