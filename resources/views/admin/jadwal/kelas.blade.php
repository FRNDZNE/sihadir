@extends('layouts.app')
@section('title','Penjadwalan')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Penjadwalan Semester {{ $semester->name }}</h5></div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>KELAS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $k)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td><a href="{{ route('admin.penjadwalan.kelas.index',[$semester->id, $k->id]) }}">{{ $k->name}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
