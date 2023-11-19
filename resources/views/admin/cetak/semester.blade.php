@extends('layouts.app')
@section('title','Cetak Absensi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>Cetak Absensi</h5></div>
                <div class="card-body">
                    <table class="table" id="tables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $s)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td><a href="{{ route('admin.cetak.index.kelas', $s->id) }}">Semester {{ $s->name}}</a></td>
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
