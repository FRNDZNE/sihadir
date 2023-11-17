@extends('layouts.app')
@section('title','Profil')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $jadwal->matkul->name.' '. $jadwal->semester->name.''.$jadwal->kelas->name }}</h5>
        </div>
        <div class="card-body">
            <a href="{{ route('dosen.dashboard') }}" class="btn btn-secondary">Kembali</a>
            <hr>
            <table class="table table-striped" id="tables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Minggu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($week as $w)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('dosen.absensi',[$jadwal->id,$w->id]) }}">{{ $w->name }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection