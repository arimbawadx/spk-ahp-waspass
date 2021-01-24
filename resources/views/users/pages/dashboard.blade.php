@extends('users/layouts/main')

@section('title','AHP WASPASS | Dashboard')

@section('content-header', 'Dashboard')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="box box-danger box-solid">
  <div class="box-header">
    <h3 class="box-title">Dashboard</h3>
  </div>
  <!-- /.box-header -->

    <div class="box-body">

      	<div class="row">
      		<div class="col-sm-12">

            <!-- callout -->           
            <div class="row">
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4>Sistem Pendukung Keputusan Pemilihan Terhadap Bantuan RASKIN Kepada Masyarakat Kurang Mampu</h4>

                  <p>Pada sebuah desa ingin melakukan pemilihan terhadap bantuan RASKIN kepada masyarakat kurang mampu. Adapun masyarakat yang sedang dianalisis terdapat 7 kandidat(Alternatif), dengan 4 kriteria penilaian.</p>
                </div>
              </div>
            </div>
            <!-- end callout -->

            <!-- count C and A -->
            <div class="row">
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3>{{$countCriteria}}</h3>

                    <p>Jumlah Kriteria</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>{{$countAlternative}}</h3>

                    <p>Jumlah Alternatif</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- end count C and A -->

            <!-- DATA CRITERIA and ALTERNATIF -->
            <div class="row">
              <!-- tb Criteria -->
              <div class="col-md-6 table-responsive">
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
                  </thead>


                  <tbody>
                      @foreach($criteria as $i => $c)
                      <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$c->criteria_code}}</td>
                        <td>{{$c->criteria_name}}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- end tb Criteria -->


              <!-- tb Alternatif -->
              <div class="col-md-6 table-responsive">
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
                  </thead>


                  <tbody>
                     @foreach($alternative as $i => $a)
                      <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$a->alternative_code}}</td>
                        <td>{{$a->alternative_name}}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- end tb Alternatif -->
            </div>
            <!-- End DATA CRITERIA and ALTERNATIF -->

        </div>
        <!-- /.box-body -->
    </div>
</div>





<!-- /.content-wrapper -->
@endsection