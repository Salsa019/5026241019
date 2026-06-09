@extends('template')
@section('judul_halaman', 'Edit Sepeda')
@section('konten')
<a href="/sepeda" class="btn btn-secondary mb-4">Kembali</a>
    @foreach($sepeda as $s)
<div class="card">
        <div class="card-header">
            Form Edit Data Sepeda
        </div>

        <div class="card-body">
            <form action="/sepeda/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="kodesepeda" value="{{ $s->kodesepeda }}">

                <div class="row mb-3">
                    <label for="merksepeda" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merksepeda"
                            id="merksepeda"
                            maxlength="30"
                            class="form-control"
                            required
                            value="{{ $s->merksepeda }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stocksepeda" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stocksepeda"
                            id="stocksepeda"
                            min="0"
                            class="form-control"
                            required
                            value="{{ $s->stocksepeda }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control">
                            <option value="Y" {{ $s->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                            <option value="T" {{ $s->tersedia == 'T' ? 'selected' : '' }}>Tidak</option>
                        </select>
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
    @endforeach
@endsection
