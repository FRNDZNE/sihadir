@extends('layouts.app')
@section('title','Profil')
@section('content')
@php
    
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Cetak Absensi Semester {{ $data['semester']->name }} Kelas {{ $data['kelas']->name }}</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.cetak.index.kelas',[$data['semester']->id]) }}" class="btn btn-secondary">Kembali</a>
                    <hr>
                    <table class="table table-striped" id="tables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Minggu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['week'] as $w)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('admin.rekap', [$data['semester']->id, $data['kelas']->id,$w->id] ) }}">{{ $w->name }}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection