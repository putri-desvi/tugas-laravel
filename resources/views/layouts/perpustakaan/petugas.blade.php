        @extends('layouts.master')

        @section('content')
            <!--ISI-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="idPetugas">ID Petugas :</label>
                            <input type="text" class="form-control" id="idPetugas" placeholder="Masukkan ID">
                        </div>
                        <div class="form-group">
                            <label for="namaPetugas">Nama Petugas :</label>
                            <input type="text" class="form-control" id="namaPetugas" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label>Jabatan Petugas :</label>
                            <select class="custom-select">
                            <option value="">Pilih Jabatan</option>
                            <option value="kepala-perpus">Kepala Perpustakaan</option>
                            <option value="asisten-kepala-perpus">Asisten Kepala Perpustakaan</option>
                            <option value="admin">Administrasi</option>
                            <option value="Lainnya">DLL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="noTelp">No. Telepon Petugas :</label>
                            <input type="text" class="form-control" id="noTelp" placeholder="Masukkan No. Telepon">
                        </div>
                        <div class="form-group">
                            <label>Alamat Petugas :</label>
                            <textarea class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
                        </div>  
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        @endsection