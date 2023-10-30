@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header"><h5>Data Dosen</h5></div>
        <div class="card-body">
            <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">Tambah</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->dosen->nip }}</td>
                        <td>{{ $d->name }}</td>
                        <td>
                            <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
