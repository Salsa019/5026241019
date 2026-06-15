@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')
    <p>
        <br><a href="{{ route('eas.index') }}" class="btn btn-secondary mb-4">Kembali</a>
    </p>
    <div class="card">
        <div class="card-header">
            Tambah Data
        </div>

        <div class="card-body">
            <form action="{{ route('eas.store') }}" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nopeserta" class="col-sm-2 col-form-label">No Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="nopeserta" id="nopeserta" maxlength="5" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiteori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaiteori" id="nilaiteori" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaipraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaipraktek" id="nilaipraktek" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
