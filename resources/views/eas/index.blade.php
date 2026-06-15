@extends('template')
@section('judul_halaman', 'Kode Soal nilai_peserta')
@section('konten')

    <p>
        <br><a href="{{ route('eas.tambah') }}" class="btn btn-primary">Tambah Data</a>
    </p>

    <table class="table table-striped table-hover" class="">
        <tr>
            {{-- <th>ID</th> --}}
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-Rata</th>
            <th>Status</th>
        </tr>
        @foreach ($nilai_peserta as $np)
                {{-- <td>{{ $np->ID }}</td> --}}
                <td>{{ $np->nopeserta }}</td>
                <td>{{ $np->nilaiteori }}</td>
                <td>{{ $np->nilaipraktek }}</td>
                <td>
                    {{ ($np->nilaiteori + $np->nilaipraktek)/2 }}
                </td>
                <td class="{{ (($np->nilaiteori + $np->nilaipraktek) / 2) >= 75 ? 'bg-success' : 'bg-danger' }} text-white">
                    @if ((($np->nilaiteori + $np->nilaipraktek)/2) >= 75)
                        Lulus
                    @else
                        Gagal
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
