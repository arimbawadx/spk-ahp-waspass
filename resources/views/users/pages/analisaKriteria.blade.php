@extends('users/layouts/main')

@section('title','AHP WASPASS | Analisa Pembobotan Kriteria')

@section('content-header', 'Analisa Pembobotan Kriteria')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="row">
  <div class="col-md-6">

    <div id="alert-bobot-null" class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-warning"></i>Hitung Bobot Kriteria</h4>
      Hitung bobot kriteria pada Matriks Perbandingan Berpasangan Antar Kriteria dengan memasukan Nilai Kepentingan/Intensitas berdasarkan Tabel Skala Saaty!
    </div>

    <div class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Kriteria</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
            <a style="margin-bottom: 10px" onclick="return confirm('Yakin reset bobot kriteria?');" href="/users/analisa-ahp/ahp-kriteria/reset" class="btn btn-danger btn-sm pull-right">Reset Bobot</a>
            <table id="datatables" class="table table-bordered table-striped text-center">
              <thead>
                <th>
                  No
                </th>

                <th>
                  Kode Kriteria
                </th>

                <th>
                  Nama Kriteria
                </th>

                <th>
                  Bobot
                </th>                   
              </thead>


              <tbody>
                 @foreach($analisaCriteria as $i => $ac)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$ac->criteria->criteria_code}}</td>
                    <td>{{$ac->criteria->criteria_name}}</td>
                    <td>
                      @if($ac->bobot==null)
                      Bobot Kriteria belum terhitung
                      @endif

                      @isset($ac->bobot)
                      <script>document.getElementById('alert-bobot-null').style.display="none";</script>
                      <script>document.getElementById('hide-skala-saaty').style.display="none";</script>
                        {{$ac->bobot}}
                      @endisset
                    </td>
                  </tr>

                  @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
    </div>
  </div>

  <div class="col-md-6">
    <div style="display:<?php if (isset($analisaCriteria->first()->bobot)) {
      echo "none";
    } ?>;" class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Matriks Perbandingan Berpasangan Antar Kriteria (Skala Saaty)</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
            <table id="datatables" class="table table-bordered table-striped text-center">
              <thead>
                <th style="width: 300px; background-color: black; color: white"></th>
                @foreach($analisaCriteria as $i => $ac)
                <th style="width: 300px; background-color: black; color: white; vertical-align: middle;">
                  {{$ac->criteria->criteria_name}}
                </th>
                @endforeach                   
              </thead>


              <tbody>
                 @foreach($analisaCriteria as $i => $ac)
                  <tr>
                    <th style="height: 60px; background-color: black; color: white; vertical-align: middle;">{{$ac->criteria->criteria_name}}</th>
                    <form method="post" action="/users/analisa-ahp/ahp-kriteria/hitung-bobot">
                      {{csrf_field()}}
                    <td><input id="k1b{{$i+1}}" onmouseup="changeOtomatic();" onkeyup="changeOtomatic();" required="" style="width: 80px; text-align: center; font-weight: bold;" type="number" step="any" name="k1b{{$i+1}}"></td>
                    <td><input id="k2b{{$i+1}}" onmouseup="changeOtomatic();" onkeyup="changeOtomatic();" required="" style="width: 80px; text-align: center; font-weight: bold;" type="number" step="any" name="k2b{{$i+1}}"></td>
                    <td><input id="k3b{{$i+1}}" onmouseup="changeOtomatic();" onkeyup="changeOtomatic();" required="" style="width: 80px; text-align: center; font-weight: bold;" type="number" step="any" name="k3b{{$i+1}}"></td>
                    <td><input id="k4b{{$i+1}}" onmouseup="changeOtomatic();" onkeyup="changeOtomatic();" required="" style="width: 80px; text-align: center; font-weight: bold;" type="number" step="any" name="k4b{{$i+1}}"></td>
                  </tr>
                  @endforeach

                  
              </tbody>
            </table>
          </div>
          <button type="submit"  style="width: 100%" class="btn btn-primary">Hitung Bobot Kriteria</button>
          </form>

          <!-- /.box-body -->
        </div>
    </div>

    <div style="display:<?php if (isset($analisaCriteria->first()->bobot)) {
      echo "none";
    } ?>;" class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Tabel Skala Saaty</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
            <table id="datatables" class="table table-bordered table-striped text-center">
              <thead>
                <th>
                  Nilai Kepentingan/Intensitas
                </th>

                <th>
                  Keterangan / Linguistik
                </th>                  
              </thead>

              <tbody>
                  <tr>
                    <td>1</td>
                    <td>Sama penting (equal)</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Cukup penting (moderat)</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Lebih penting (strong)</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Sangat lebih penting (demonstrated)</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Mutlak lebih penting (extreme)</td>
                  </tr>
                  <tr>
                    <td>2,4,6,8</td>
                    <td>Nilai tengah diantara nilai berdekatan (intermediate value)</td>
                  </tr>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
    </div>


    <div style="display:<?php if (!isset($analisaCriteria->first()->bobot)) {
      echo "none";
    } ?>;" class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-info"></i>Info!</h4>
      Reset Bobot untuk menganalisa ulang!
    </div>

    @if($CR<0.1)
    <div style="display:<?php if (!isset($analisaCriteria->first()->bobot)) {
      echo "none";
    } ?>;" class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i>Memenuhi syarat CR < 0,1</h4>
      𝜆𝑚𝑎𝑥 = {{$nmax}}
      <br>
      CI = {{$CI}}
      <br> 
      CR = {{$CR}}
      <br> 
    </div>
    @else
    <div style="display:<?php if (!isset($analisaCriteria->first()->bobot)) {
      echo "none";
    } ?>;" class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-close"></i>Tidak memenuhi syarat CR < 0,1</h4>
      𝜆𝑚𝑎𝑥 = {{$nmax}}
      <br>
      CI = {{$CI}}
      <br> 
      CR = {{$CR}}
      <br> 
    </div>
    @endif


  </div>

</div>

<script type="text/javascript" src="{{asset('lte/dist/js/analisa.js')}}"></script>
<!-- /.content-wrapper -->
@endsection