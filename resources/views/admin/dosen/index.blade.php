@extends('layouts.app')
@section('title','Data Dosen')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Data Dosen</h5></div>
        <div class="card-body">
            <a href="{{ route('admin.dosen.create') }}" class="btn btn-primary">Tambah</a>
            <hr>
            <table id="tables" class="table">
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
                            <a href="{{ route('admin.dosen.edit', $d->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#modeldelete-{{ $d->id }}">
                              <i class="fas fa-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modeldelete-{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title">Hapus Dosen</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            Ingin menghapus {{ $d->name }} dari daftar dosen
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <form action="{{ route('admin.dosen.delete', $d->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
