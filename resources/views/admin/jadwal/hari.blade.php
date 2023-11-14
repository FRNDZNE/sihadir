@extends('layouts.app')
@section('title','Penjadwalan')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Penjadwalan Semester {{ $semester->name }} Kelas {{ $kelas->name }}</h5></div>
        <div class="card-body">
            <table id="tables" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>HARI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($day as $d)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td><a href="{{ route('admin.penjadwalan.hari.index', [$semester->id, $kelas->id, $d->id]) }}">{{ $d->name }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
