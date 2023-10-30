@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><h5>Data Dosen</h5></div>
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <h1></h1>
        </div>
    </div>
@endsection
