@extends('layouts.app')
@section('title','Penjadwalan')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>Cetak Absensi Semester {{ $data['semester']->name }}</h5></div>
                <div class="card-body">
                    <a href="{{ route('admin.cetak.index') }}" class="btn btn-secondary">Kembali</a>
                    <hr>
                    <table id="tables" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>KELAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['kelas'] as $k)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td><a href="{{ route('admin.cetak.index.minggu',[$data['semester']->id,$k->id]) }}">{{ $k->name}}</a></td>
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
