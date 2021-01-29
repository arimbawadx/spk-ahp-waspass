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
      Hitung Nilai Akhir dengan memasukan Nilai pada Data Alternatif!
    </div>

    <div class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Analisa Alternatif</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
            <a style="margin-bottom: 10px" onclick="return confirm('Yakin reset bobot kriteria?');" href="/users/analisa-ahp/ahp-kriteria/reset" class="btn btn-danger btn-sm pull-right">Reset Nilai Akhir</a>
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


  </div>

</div>

<script type="text/javascript" src="{{asset('lte/dist/js/analisa.js')}}"></script>
<!-- /.content-wrapper -->
@endsection