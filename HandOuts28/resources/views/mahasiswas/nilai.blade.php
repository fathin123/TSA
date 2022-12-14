@extends('mahasiswas.layout')
@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h3><strong>KARTU HASIL STUDI (KHS)</strong></h3>
        </div>
        <div class="col-12 my-4">
            <p class="m-0"><strong>Nama:</strong> {{ $mhs->nama }}</p>
            <p class="m-0"><strong>NIM:</strong> {{ $mhs->nim }}</p>
            <p class="m-0"><strong>Kelas:</strong> {{ $mhs->kelas->nama_kelas }}</p>

        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
                @foreach ($mhs->matakuliah as $matakuliah)
                    <tr>
                        <td>{{ $matakuliah->nama_matkul }}</td>
                        <td>{{ $matakuliah->sks }}</td>
                        <td>{{ $matakuliah->jam }}</td>
                        <td>{{ $matakuliah->semester }}</td>
                        <td>{{ $matakuliah->pivot->nilai }}</td>
                    </tr>
                @endforeach
            </table>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-success">Kembali</a>
        </div>
    </div>
@endsection