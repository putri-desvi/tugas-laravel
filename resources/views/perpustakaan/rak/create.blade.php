        @extends('layouts.master')

        @section('content')
            <!--ISI-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="{{ route('rak.store') }}" method="POST">
                @csrf 
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaRak">Nama Rak :</label>
                            <input type="text" class="form-control" name="nama_rak" id="namaRak" placeholder="Masukkan Nama Rak">
                        </div>
                        <div class="form-group">
                            <label for="lokasiRak">Lokasi Rak :</label>
                            <input type="text" class="form-control" name="lokasi_rak" id="lokasiRak" placeholder="Masukkan Lokasi Rak">
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