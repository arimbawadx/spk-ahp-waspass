@extends('users/layouts/main')

@section('title','AHP WASPASS | Analisa Alternatif')

@section('content-header', 'Analisa Alternatif')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="row">
  <div class="col-md-6">

    <div id="alert-nilai-akhir-null" class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-warning"></i>Hitung Nilai Akhir</h4>
      Hitung Nilai Akhir dengan memasukan Nilai pada Analisa Data Alternatif!
    </div>

    <div class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Data Alternatif</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
            <a style="margin-bottom: 10px" onclick="return confirm('Yakin reset Nilai Akhir?');" href="/users/analisa-ahp/ahp-alternatif/reset" class="btn btn-danger btn-sm pull-right">Reset Nilai Akhir</a>
            <table id="datatables" class="table table-bordered table-striped text-center">
              <thead>
                <th>
                  No
                </th>

                <th>
                  Kode Alternatif
                </th>

                <th>
                  Nama Alternatif
                </th>

                <th>
                  Nilai Akhir
                </th>                   
              </thead>


              <tbody>
                 @foreach($analisaAlternative as $i => $aa)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$aa->alternative->alternative_code}}</td>
                    <td>{{$aa->alternative->alternative_name}}</td>
                    <td>
                      @if($aa->nilai_akhir==null)
                      Nilai Akhir belum terhitung
                      @endif

                      @isset($aa->nilai_akhir)
                      <script>document.getElementById('alert-nilai-akhir-null').style.display="none";</script>
                        {{$aa->nilai_akhir}}
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

    <div style="display:<?php if (isset($analisaAlternative->first()->nilai_akhir)) {
      echo "none";
    } ?>;" class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Analisa Data Alternatif</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
            <table id="datatables" class="table table-bordered table-striped text-center">
              <thead>
                <tr>
                  <th style="vertical-align: middle;">
                    No
                  </th>

                  <th style="vertical-align: middle;">
                    Alternatif
                  </th>

                  @foreach($Criteria as $c)
                  <th style="vertical-align: middle;">
                    {{$c->criteria_code}} <br>
                    ({{$c->criteria_name}}) <br>
                    @if($c->criteria_code=="C1" OR $c->criteria_code=="C2")
                    (Likert 1-5)
                    @elseif($c->criteria_code=="C3")
                    (Likert 1-3)
                    @elseif($c->criteria_code=="C4")
                    (Presentase)
                    @endif
                  </th>
                  @endforeach
                </tr>                   
              </thead>


              <tbody>
                 @foreach($analisaAlternative as $i => $aa)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$aa->alternative->alternative_code}}</td>
                    <td>
                      <form method="post" action="/users/analisa-ahp/ahp-alternatif/hitung-nilai-akhir">
                        {{csrf_field()}}
                      <div class="form-group">
                        <input class="form-control" required type="number" name="{{$aa->alternative->alternative_code}}C1" min="1" max="5">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control" required type="number" name="{{$aa->alternative->alternative_code}}C2" min="1" max="5">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control" required type="number" name="{{$aa->alternative->alternative_code}}C3" min="1" max="3">
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                        <input class="form-control" required type="number" name="{{$aa->alternative->alternative_code}}C4" min="1" max="100">
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <button type="submit"  style="width: 100%" class="btn btn-primary">Hitung Nilai Akhir</button>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
    </div>


    <div style="display:<?php if (!isset($analisaAlternative->first()->nilai_akhir)) {
      echo "none";
    } ?>;" class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-info"></i>Info!</h4>
      Reset Nilai Akhir untuk menganalisa ulang!
    </div>

  </div>

  </div>

</div>

<script type="text/javascript" src="{{asset('lte/dist/js/analisa.js')}}"></script>
<!-- /.content-wrapper -->
@endsection