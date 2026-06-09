@extends('template')
@section('judul_halaman', 'Data Sepeda')
@section('konten')

    <p>
        <br><a href="/sepeda/tambah" class="btn btn-primary">Tambah Sepeda Baru</a>
    </p>

    <p>Cari Data Sepeda :</p>
    <form action="/sepeda/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Merk Sepeda ..." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sepeda as $s)
            <tr>
                <td>{{ $s->kodesepeda }}</td>
                <td>{{ $s->merksepeda }}</td>
                <td>{{ $s->stocksepeda }}</td>
                <td>{{ $s->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="/sepeda/edit/{{ $s->kodesepeda }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/sepeda/hapus/{{ $s->kodesepeda }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sepeda->links() }}
@endsection
