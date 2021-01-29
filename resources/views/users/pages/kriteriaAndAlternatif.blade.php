@extends('users/layouts/main')

@section('title','AHP WASPASS | Kriteria & Alternatif')

@section('content-header', 'Kriteria & Alternatif')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="row">
  <div class="col-md-6">
    <div class="box box-danger box-solid">
      <div class="box-header">
        <h3 class="box-title">Kriteria</h3>
      </div>
      <!-- /.box-header -->

        <!-- The Modal -->
        <div class="modal" id="TambahDataKriteria">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Kriteria</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form method="post" action="/users/kriteria/tambah">
                  {{csrf_field()}}
                    
                    <div class="form-group">
                      <label for="kode_kriteria">Kode Kriteria</label>
                      <select name="kode_kriteria" class="form-control">
                      <option>Pilih</option>
                      @for($i=1; $i <= 4 ; $i++)
                      <option>C{{$i}}</option>
                      @endfor
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="nama_kriteria">Nama Kriteria</label>
                      <input required="" autocomplete="off" type="text" class="form-control" id="nama_kriteria" name="nama_kriteria">
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

        <div class="box-body">
          <div class="table table-responsive">
            <button style="margin-bottom: 5px" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#TambahDataKriteria">
              <i class="fa fa-plus"></i><span> Tambah</span>
            </button>

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
                  Aksi
                </th>                   
              </thead>


              <tbody>
                 @foreach($criteria as $b => $c)
                  <tr>
                    <td>{{$b+1}}</td>
                    <td>{{$c->criteria_code}}</td>
                    <td>{{$c->criteria_name}}</td>
                    <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#UbahDataKriteria{{$c->id}}">
                      <i class="fa fa-pen"></i><span></span>
                      </button>

                    <a onclick="return confirm('Yakin Hapus ' + '<?php echo $c->criteria_name; ?>' + ' ?');" href="/users/kriteria/hapus/{{$c->id}}" class="btn btn-danger">
                      <i class="fa fa-trash"></i><span></span>
                    </a>
                  </td>
                  </tr>

                  <!-- The Modal -->
                  <div class="modal" id="UbahDataKriteria{{$c->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Kriteria</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <form method="post" action="/users/kriteria/ubah/{{$c->id}}">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label for="nama_kriteria">Nama Kriteria</label>
                                <input required="" autocomplete="off" type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="{{$c->criteria_name}}">
                              </div>
                              <button type="submit" class="btn btn-primary">Ubah</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div> -->

                      </div>
                    </div>
                  </div>
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
        <h3 class="box-title">Alternatif</h3>
      </div>
      <!-- /.box-header -->

        <!-- The Modal -->
        <div class="modal" id="TambahDataAlternatif">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Alternatif</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <form method="post" action="/users/alternatif/tambah">
                  {{csrf_field()}}
                    
                    <div class="form-group">
                      <label for="kode_alternatif">Kode Alternatif</label>
                      <select name="kode_alternatif" class="form-control">
                      <option>Pilih</option>
                      @for($i=1; $i <= 7 ; $i++)
                      <option>A{{$i}}</option>
                      @endfor
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="nama_alternatif">Nama Alternatif</label>
                      <input required="" autocomplete="off" type="text" class="form-control" id="nama_alternatif" name="nama_alternatif">
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

        <div class="box-body">
          <div class="table table-responsive">
            <button style="margin-bottom: 5px" type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#TambahDataAlternatif">
              <i class="fa fa-plus"></i><span> Tambah</span>
            </button>

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
                  Aksi
                </th>                   
              </thead>


              <tbody>
                 @foreach($alternative as $i => $a)
                  <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$a->alternative_code}}</td>
                    <td>{{$a->alternative_name}}</td>
                    <td>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#UbahDataAlternatif{{$a->id}}">
                      <i class="fa fa-pen"></i><span></span>
                      </button>

                    <a onclick="return confirm('Yakin Hapus ' + '<?php echo $a->alternative_name; ?>' + ' ?');" href="/users/alternatif/hapus/{{$a->id}}" class="btn btn-danger">
                      <i class="fa fa-trash"></i><span></span>
                    </a>
                  </td>
                  </tr>

                  <!-- The Modal -->
                  <div class="modal" id="UbahDataAlternatif{{$a->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Ubah Data Alternatif</h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          <form method="post" action="/users/alternatif/ubah/{{$a->id}}">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label for="nama_alternatif">Nama Alternatif</label>
                                <input required="" autocomplete="off" type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" value="{{$a->alternative_name}}">
                              </div>
                              <button type="submit" class="btn btn-primary">Ubah</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div> -->

                      </div>
                    </div>
                  </div>
                  @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
    </div>
  </div>
</div>





<!-- /.content-wrapper -->
@endsection