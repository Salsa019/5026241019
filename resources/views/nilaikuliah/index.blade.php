@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')

    <p>
        <br><a href="{{ route('nilaikuliah.tambah') }}" class="btn btn-primary">Tambah Nilai Baru</a>
    </p>

    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>NilaiAngka</th>
            <th>SKS</th>
            <th>NilaiHuruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                        A
                    @elseif ($n->NilaiAngka >= 61)
                        B
                    @elseif ($n->NilaiAngka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>
                    {{ $n->SKS * $n->NilaiAngka }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
