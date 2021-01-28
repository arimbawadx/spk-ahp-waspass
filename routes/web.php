<?php

use Illuminate\Support\Facades\Route;


// users
// ===================================================================================
// dashboard
Route::get('/', function(){
	return redirect('/users/dashboard');
});
Route::get('users/dashboard', 'DashboardController@index');
// ===================================================================================


// ===================================================================================
// kriteria and alternatif
Route::get('users/kriteria-alternatif', 'CriteriaAndAlternatifController@index');

// kriteria
Route::post('users/kriteria/tambah', 'CriteriaAndAlternatifController@kriteria_store');
Route::post('users/kriteria/ubah/{id}', 'CriteriaAndAlternatifController@kriteria_update');
Route::get('users/kriteria/hapus/{id}', 'CriteriaAndAlternatifController@kriteria_destroy');

// alternatif
Route::post('users/alternatif/tambah', 'CriteriaAndAlternatifController@alternatif_store');
Route::post('users/alternatif/ubah/{id}', 'CriteriaAndAlternatifController@alternatif_update');
Route::get('users/alternatif/hapus/{id}', 'CriteriaAndAlternatifController@alternatif_destroy');
// ===================================================================================


// ===================================================================================
// Analisa AHP
// Analisa Criteria
Route::get('users/analisa-ahp/ahp-kriteria', 'AnalisaCriteriaController@index');
Route::get('users/analisa-ahp/ahp-kriteria/reset', 'AnalisaCriteriaController@resetBobot');
Route::post('users/analisa-ahp/ahp-kriteria/hitung-bobot', 'AnalisaCriteriaController@hitungBobot');