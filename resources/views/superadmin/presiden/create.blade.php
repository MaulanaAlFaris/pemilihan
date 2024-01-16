@extends('superadmin.layout')

@section('content')
    <div class="container">
        <h2>Tambah Data Pemilihan Presiden</h2>

        <form action="{{ route('superadmin.presiden.store') }}" method="post">
            @csrf
            <ol type="I">
                <b><li>DATA PEMILIH DAN PENGGUNA HAK PILIH</li></b>
                    <br>
                    <table class="table table-bordered table-hover">
                        <thead>
                                <tr>
                                    <th colspan="2" class="text-center">URAIAN</th>
                                    <th scope="col" class="text-center">LAKI-LAKI (L)</th>
                                    <th scope="col" class="text-center">PEREMPUAN (P)</th>
                                    <th scope="col" class="text-center">JUMLAH (L + P)</th>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">(1)</td>
                                    <td scope="col" class="text-center">(2)</td>
                                    <td scope="col" class="text-center">(3)</td>
                                    <td scope="col" class="text-center">(4)</td>
                                </tr>
                                <tr>
                                    <th colspan="5">A. DATA PEMILIHAN</th>
                                </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td>Jumlah Pemilih dalam Daftar Pemilih Tetap (DPT)( Terdapat dalam Model A-Kabrko Daftar Pemilih)
                                </td>
                                <td><input type="text" class="form-control" id="al" name="al" required></td>
                                <td><input type="text" class="form-control" id="ap" name="ap" required></td>
                                <td><input type="text" class="form-control" id="aj" name="aj" readonly></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th colspan="5">B. PENGGUNA HAK PILIH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td>1. Jumlah pengguna hak pilih dalam Daftar Pemilih Tetap (DPT)</td>
                                <td><input type="text" class="form-control" id="b1l" name="b1l" required></td>
                                <td><input type="text" class="form-control" id="b1p" name="b1p" required></td>
                                <td><input type="text" class="form-control" id="b1j" name="b1j" readonly></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>2. Jumlah pengguna hak pilih dalam Daftar Pemilih Tambahan (DPTb)</td>
                                <td><input type="text" class="form-control" id="b2l" name="b2l" required></td>
                                <td><input type="text" class="form-control" id="b2p" name="b2p" required></td>
                                <td><input type="text" class="form-control" id="b2j" name="b2j" readonly></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>3. Jumlah pengguna hak pilih dalam Daftar Pemilih Khusus (DPK)</td>
                                <td><input type="text" class="form-control" id="b3l" name="b3l" required></td>
                                <td><input type="text" class="form-control" id="b3p" name="b3p" required></td>
                                <td><input type="text" class="form-control" id="b3j" name="b3j" readonly></td>
                            </tr>
                            <tr>
                                <th></th>
                                <th>4. Jumlah Pengguna Hak Pilih (B.1 + B.2 + B.3)</th>
                                <td><input type="text" class="form-control" id="b4l" name="b4l" readonly></td>
                                <td><input type="text" class="form-control" id="b4p" name="b4p" readonly></td>
                                <td><input type="text" class="form-control" id="b4j" name="b4j" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                <b><li>DATA PENGGUNAAN SURAT SUARA</li></b>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">URAIAN</th>
                                <th scope="col" class="text-center">JUMLAH</th>
                            </tr>
                            <tr>
                                <td scope="col" class="text-center">(1)</td>
                                <td scope="col" class="text-center">(2)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">1. Jumlah surat suara diterima, termasuk surat suara cadangan 2% dari DPT</td>
                                <td scope="col"><input type="text" class="form-control" id="c1" name="c1" required></td>
                            </tr>
                            <tr>
                                <td scope="col">2. Jumlah surat suara yang digunakan</td>
                                <td scope="col"><input type="text" class="form-control" id="c2" name="c2" required></td>
                            </tr>
                            <tr>
                                <td scope="col">3. Jumlah surat suara yang dikembalikan oleh pemilih (karena rusak atau keliru coblos)</td>
                                <td scope="col"><input type="text" class="form-control" id="c3" name="c3" required></td>
                            </tr>
                            <tr>
                                <td scope="col">4. Jumlah surat suara yang tidak digunakan terpakai, termasuk sisa surat suara cadangan</td>
                                <td scope="col"><input type="text" class="form-control" id="c4" name="c4" required></td>
                            </tr>
                        </tbody>
                    </table>
                <b><li>DATA PEMILIH DISABILITAS</li></b>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">URAIAN</th>
                                <th scope="col" class="text-center">LAKI-LAKI (L)</th>
                                <th scope="col" class="text-center">PEREMPUAN (P)</th>
                                <th scope="col" class="text-center">JUMLAH (L + P)</th>
                            </tr>
                            <tr>
                                <td class="text-center">(1)</td>
                                <td class="text-center">(2)</td>
                                <td class="text-center">(3)</td>
                                <td class="text-center">(4)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jumlah seluruh Pemilih disabilitas yang menggunakan hak pilih</td>
                                <td><input type="text" class="form-control" id="dl" name="dl" required></td>
                                <td><input type="text" class="form-control" id="dp" name="dp" required></td>
                                <td><input type="text" class="form-control" id="dj" name="dj" readonly></td>
                            </tr>
                        </tbody>
                    </table>
            </ol>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>


    <script>
        function hitungOtomatisAj() {
            var al = parseFloat(document.getElementById('al').value) || 0;
            var ap = parseFloat(document.getElementById('ap').value) || 0;
            var aj = al + ap;
            document.getElementById('aj').value = aj;
        }

        document.getElementById('al').addEventListener('input', hitungOtomatisAj);
        document.getElementById('ap').addEventListener('input', hitungOtomatisAj);

        function hitungOtomatisBj1() {
            var b1l = parseFloat(document.getElementById('b1l').value) || 0;
            var b1p = parseFloat(document.getElementById('b1p').value) || 0;
            var bj1 = b1l + b1p;
            document.getElementById('b1j').value = bj1;
            hitungOtomatisBj4();
        }

        document.getElementById('b1l').addEventListener('input', hitungOtomatisBj1);
        document.getElementById('b1p').addEventListener('input', hitungOtomatisBj1);

        function hitungOtomatisBj2() {
            var b2l = parseFloat(document.getElementById('b2l').value) || 0;
            var b2p = parseFloat(document.getElementById('b2p').value) || 0;
            var bj2 = b2l + b2p;
            document.getElementById('b2j').value = bj2;
            hitungOtomatisBj4();
        }

        document.getElementById('b2l').addEventListener('input', hitungOtomatisBj2);
        document.getElementById('b2p').addEventListener('input', hitungOtomatisBj2);

        function hitungOtomatisBj3() {
            var b3l = parseFloat(document.getElementById('b3l').value) || 0;
            var b3p = parseFloat(document.getElementById('b3p').value) || 0;
            var bj3 = b3l + b3p;
            document.getElementById('b3j').value = bj3;
            hitungOtomatisBj4(); 
        }

        document.getElementById('b3l').addEventListener('input', hitungOtomatisBj3);
        document.getElementById('b3p').addEventListener('input', hitungOtomatisBj3);

        function hitungOtomatisBj4() {
            var bj1 = parseFloat(document.getElementById('b1j').value) || 0;
            var bj2 = parseFloat(document.getElementById('b2j').value) || 0;
            var bj3 = parseFloat(document.getElementById('b3j').value) || 0;
            var bj4 = bj1 + bj2 + bj3;
            document.getElementById('b4j').value = bj4;
        }

        document.getElementById('b1j').addEventListener('input', hitungOtomatisBj4);
        document.getElementById('b2j').addEventListener('input', hitungOtomatisBj4);
        document.getElementById('b3j').addEventListener('input', hitungOtomatisBj4);

        function hitungOtomatisB4lB4p() {
            var b1l = parseFloat(document.getElementById('b1l').value) || 0;
            var b2l = parseFloat(document.getElementById('b2l').value) || 0;
            var b3l = parseFloat(document.getElementById('b3l').value) || 0;
            var b4l = b1l + b2l + b3l;
            document.getElementById('b4l').value = b4l;

            var b1p = parseFloat(document.getElementById('b1p').value) || 0;
            var b2p = parseFloat(document.getElementById('b2p').value) || 0;
            var b3p = parseFloat(document.getElementById('b3p').value) || 0;
            var b4p = b1p + b2p + b3p;
            document.getElementById('b4p').value = b4p;
        }

        document.getElementById('b1l').addEventListener('input', hitungOtomatisB4lB4p);
        document.getElementById('b2l').addEventListener('input', hitungOtomatisB4lB4p);
        document.getElementById('b3l').addEventListener('input', hitungOtomatisB4lB4p);
        document.getElementById('b1p').addEventListener('input', hitungOtomatisB4lB4p);
        document.getElementById('b2p').addEventListener('input', hitungOtomatisB4lB4p);
        document.getElementById('b3p').addEventListener('input', hitungOtomatisB4lB4p);
    </script>

    <script>
        function hitungOtomatis() {
            var dl = parseFloat(document.getElementById('dl').value) || 0;
            var dp = parseFloat(document.getElementById('dp').value) || 0;

            var hasil = dl + dp;
            document.getElementById('dj').value = hasil;
        }
        document.getElementById('dl').addEventListener('input', hitungOtomatis);
        document.getElementById('dp').addEventListener('input', hitungOtomatis);
    </script>


@endsection
