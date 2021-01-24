@extends('users/layouts/main')

@section('title','AHP WASPASS | Dashboard')

@section('content-header', 'Dashboard')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="box box-danger box-solid">
  <div class="box-header">
    <h3 class="box-title">Data Penduduk</h3>
  </div>

  <!-- The Modal -->
  <div class="modal" id="TambahDataPenduduk">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Penduduk</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="/users/data-penduduk/tambah">
            {{csrf_field()}}
              
              <div class="form-group">
                <label for="no_kk">No KK</label>
                <input required="" autocomplete="off" type="number" class="form-control" id="no_kk" name="no_kk">
              </div>
              <div class="form-group">
                <label for="nik">NIK</label>
                <input required="" autocomplete="off" type="number" class="form-control" id="nik" name="nik">
              </div>
              <div class="form-group">
                <label for="nama_penduduk">Nama Penduduk</label>
                <input required="" autocomplete="off" type="text" class="form-control" id="nama_penduduk" name="nama_penduduk">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <select name="alamat" class="form-control">
                  <option>Pilih</option>
                  <option>Banjar Peken</option>
                  <option>Banjar Selat</option>
                  <option>Banjar Pasek</option>
                  <option>Banjar Perempatan</option>
                  <option>Banjar Sale</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input required="" autocomplete="off" type="text" class="form-control" id="pekerjaan" name="pekerjaan">
              </div>
              <div class="form-group">
                <label for="penghasilan">Penghasilan</label>
                <input required="" autocomplete="off" type="number" class="form-control" id="penghasilan" name="penghasilan">
              </div>
              <div class="form-group">
                <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                <input required="" autocomplete="off" type="number" class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan">
              </div>
               <div class="form-group">
                <label for="kondisi_rumah">Kondisi Rumah (persen)</label>
                <input required="" autocomplete="off" type="number" min="0" max="100" class="form-control" id="kondisi_rumah" name="kondisi_rumah">
              </div>

              
              

              <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>

        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

      </div>
    </div>
  </div>
  <!-- /.box-header -->
  
  <div class="box-body">
    <div class="Contains">
      <div class="row">
        <div class="col-md-12">
          <button style="margin-bottom: 20px" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#TambahDataPenduduk">
            <i class="fa fa-plus"></i><span> Tambah</span>
          </button>

          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table id="datatables" class="table table-bordered table-striped text-center">
                <thead>
                  <th>
                    No
                  </th>

                  <th>
                    No KK
                  </th>

                  <th>
                    NIK
                  </th>

                  <th>
                  Nama Penduduk
                  </th>

                  <th>
                    Alamat
                  </th>

                  <th>
                    Pekerjaan
                  </th>

                  <th>
                    Penghasilan
                  </th>

                  <th>
                    Jumlah Tanggungan
                  </th>

                  <th>
                    Kondisi Rumah
                  </th>
                  <th>
                    Aksi
                  </th>

                  
                </thead>


                <tbody>
                   <!-- foreach -->
                    <tr>
                      <td>1</td>
                      <td>1313</td>
                      <td>31</td>
                      <td></td>
                      <td>1</td>
                      <td>1313</td>
                      <td>31</td>
                      <td></td>
                      <td>1</td>
                      <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalUbahDataPenduduk">
                          <i class="fa fa-pen"></i><span></span>
                          </button>

                        <button class="btn btn-danger">
                        <i class="fa fa-trash"></i><span></span>
                      </td>
                    </tr>

                      <!-- The Modal -->
                      <div class="modal" id="myModalUbahDataPenduduk">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Ubah Data Customer</h4>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                              <form method="post" action="/admins/data-customers/ubah/">
                                {{csrf_field()}}
                                  <div class="form-group">
                                    <label for="nama_customer">Nama Customer</label>
                                    <input autocomplete="off" type="text" class="form-control" id="nama_customer" name="nama_customer" value="">
                                  </div>
                                  <div class="form-group">
                                    <label for="no_hp">No HP </label>
                                    <input autocomplete="off" type="number" class="form-control" id="no_hp" name="no_hp" value="">
                                  </div>

                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>

                            <!-- Modal footer -->
                            <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div> -->

                          </div>
                        </div>
                      </div>
                    <!-- endforeach -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>


<!-- /.content-wrapper -->


<!-- <script type="text/javascript">
  function initialize() {
    var propertiPeta={
      center:new google.maps.LatLng(-1.5187812, 122.9853305),
      zoom:12
    }
    var peta = new google.maps.Map(document.getElementById('googleMap'), propertiPeta);
    // membuat marker
    var marker = new google.maps.Marker({
        position:new google.maps.LatLng(-8.5520982, 115.3668175),
        map:peta,
        animation:google.maps.Animation.BOUNCE
    });
  }
  initialize();
</script> -->
@endsection