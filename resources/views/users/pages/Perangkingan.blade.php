@extends('users/layouts/main')

@section('title','AHP WASPASS | Perangkingan')

@section('content-header', 'Perangkingan')

@section('content')

<!-- Content Wrapper. Contains page content -->
@isset($jumlahNilaiAkhirA1)
<div class="row">
  <div class="col-md-6">
    <div align="center" id="columnchart_perangkinganAHP"></div>
    <!-- JS CHART Perangkingan -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Alternatif", "Jumlah", { role: "style" } ],
          ["A1", <?php echo $jumlahNilaiAkhirA1 ?>, "#ebabc7"],
          ["A2", <?php echo $jumlahNilaiAkhirA2 ?>, "#b4cee8"],
          ["A3", <?php echo $jumlahNilaiAkhirA3 ?>, "#f0d0e1"],
          ["A4", <?php echo $jumlahNilaiAkhirA4 ?>, "#f0e8df"],
          ["A5", <?php echo $jumlahNilaiAkhirA5 ?>, "#cfe8ee"],
          ["A6", <?php echo $jumlahNilaiAkhirA6 ?>, "#a0cece"],
          ["A7", <?php echo $jumlahNilaiAkhirA7 ?>, "#f2ddc7"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var options = {
          title: "Data Perangkingan Alternatif",
          width: 500,
          height: 400,
          bar: {groupWidth: "80%"},
          legend: { position: "none" },
          hAxis: {
            title: 'Alternatif',
            format: 'h:mm a',
            viewWindow: {
              min: [7, 30, 0],
              max: [17, 30, 0]
            }
          },
          vAxis: {
            title: 'Nilai Akhir'
          }
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_perangkinganAHP"));
        chart.draw(view, options);
    }
    </script>
    <!-- END JS CHART Perangkingan -->
  </div>


  <div class="col-md-6">

    <div class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Perangkingan</h3>
      </div>
      <!-- /.box-header -->

        <div class="box-body">
          <div class="table table-responsive">
            <table id="datatables" class="table table-bordered table-striped text-center">
              <thead>
                <th>
                  Alternatif
                </th>

                <th>
                  Nama Alternatif
                </th>

                <th>
                  Nilai Akhir
                </th>

                <th>
                  Keterangan
                </th>                   
              </thead>


              <tbody>
                <?php $peringkat=0; ?>
                 @foreach($analisaAlternative as $i => $aa)
                 <?php $peringkat++; ?>
                  <tr>
                    <td>{{$aa->alternative->alternative_code}}</td>
                    <td>{{$aa->alternative->alternative_name}}</td>
                    <td>
                      @isset($aa->nilai_akhir)
                        {{$aa->nilai_akhir}}
                      @endisset
                    </td>
                    <td>Peringkat ke-{{$peringkat}}</td>
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
@endisset
<div style="display: <?php if (isset($jumlahNilaiAkhirA1)) {
  echo "none;";
} ?>" class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-close"></i>Tidak Ada Perangkingan</h4>
  Analisa Kriteria dan Perangkingan terlebih dahulu untuk mendapatkan perangkingan. 
</div>
<script type="text/javascript" src="{{asset('lte/dist/js/analisa.js')}}"></script>
<!-- /.content-wrapper -->
@endsection