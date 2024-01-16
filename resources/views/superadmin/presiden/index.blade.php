@extends('superadmin.layout')

@section('content')
    <div class="container">
        <h2>Data Pemilihan Presiden</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('superadmin.presiden.create') }}" class="btn btn-primary">Tambah Data</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pemilihan</th>
                    <th>AL</th>
                    <th>AP</th>
                    <th>AJ</th>
                    <th>B1L</th>
                    <th>B1P</th>
                    <th>B1J</th>
                    <th>B2L</th>
                    <th>B2P</th>
                    <th>B2J</th>
                    <th>B3L</th>
                    <th>B3P</th>
                    <th>B3J</th>
                    <th>B4L</th>
                    <th>B4P</th>
                    <th>B4J</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>DL</th>
                    <th>DP</th>
                    <th>DJ</th>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @foreach($dataPemilihans as $dataPemilihan)
                    <tr>
                        <td>{{ $dataPemilihan->id_datapemilihan }}</td>
                        <td>{{ $dataPemilihan->nama_pemilihan }}</td>
                        <td>{{ $dataPemilihan->al }}</td>
                        <td>{{ $dataPemilihan->ap }}</td>
                        <td>{{ $dataPemilihan->aj }}</td>
                        <td>{{ $dataPemilihan->b1l }}</td>
                        <td>{{ $dataPemilihan->b1p }}</td>
                        <td>{{ $dataPemilihan->b1j }}</td>
                        <td>{{ $dataPemilihan->b2l }}</td>
                        <td>{{ $dataPemilihan->b2p }}</td>
                        <td>{{ $dataPemilihan->b2j }}</td>
                        <td>{{ $dataPemilihan->b3l }}</td>
                        <td>{{ $dataPemilihan->b3p }}</td>
                        <td>{{ $dataPemilihan->b3j }}</td>
                        <td>{{ $dataPemilihan->b4l }}</td>
                        <td>{{ $dataPemilihan->b4p }}</td>
                        <td>{{ $dataPemilihan->b4j }}</td>
                        <td>{{ $dataPemilihan->c1 }}</td>
                        <td>{{ $dataPemilihan->c2 }}</td>
                        <td>{{ $dataPemilihan->c3 }}</td>
                        <td>{{ $dataPemilihan->c4 }}</td>
                        <td>{{ $dataPemilihan->dl }}</td>
                        <td>{{ $dataPemilihan->dp }}</td>
                        <td>{{ $dataPemilihan->dj }}</td>
                        <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
