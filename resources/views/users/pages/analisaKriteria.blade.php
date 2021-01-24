@extends('users/layouts/main')

@section('title','AHP WASPASS | Analisa Pembobotan Kriteria')

@section('content-header', 'Analisa Pembobotan Kriteria')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Kriteria</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
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
    <div class="box box-danger box-solid">
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
                    <form method="" action="">
                      {{csrf_field()}}
                    <td><input required="" style="width: 80px" type="number" name="k1b{{$i+1}}" value=""></td>
                    <td><input required="" style="width: 80px" type="number" name="k2b{{$i+1}}" value=""></td>
                    <td><input required="" style="width: 80px" type="number" name="k3b{{$i+1}}" value=""></td>
                    <td><input required="" style="width: 80px" type="number" name="k4b{{$i+1}}" value=""></td>
                  </tr>
                  @endforeach

                  
              </tbody>
            </table>
          </div>
          <button type="submit"  style="width: 100%" class="btn btn-primary">Selanjutnya</button>
          </form>

          <!-- /.box-body -->
        </div>
    </div>
  </div>

</div>





<!-- /.content-wrapper -->
@endsection