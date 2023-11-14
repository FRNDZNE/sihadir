@extends('layouts.app')
@section('title','Data Hari')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Data Hari</h5></div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalcreate">
              <i class="fas fa-plus"></i> Tambah
            </button>

            <!-- Modal -->
            <div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title"> Tambah Hari</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <form action="{{route('admin.day.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="day">Hari</label>
                                <input type="text" name="name" id="day" class="form-control" placeholder="Masukan Hari" aria-describedby="helpId">
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <table id="tables" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>HARI</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($day as $j)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $j->name}}</td>
                        <td>
                            <!-- Button trigger modal  Edit-->
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit-{{$j->id}}">
                            <i class="fas fa-edit"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modaledit-{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title"> Edit Hari</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <form action="{{route('admin.day.update')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="{{$j->id}}">
                                            <div class="form-group">
                                                <label for="day">Hari</label>
                                                <input type="text" name="name" id="day" value="{{$j->name}}" class="form-control" placeholder="Masukan Hari" aria-describedby="helpId">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Button trigger modal  Delete-->
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete-{{$j->id}}">
                            <i class="fas fa-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modaldelete-{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title"> Hapus Hari</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah ingin menghapus Hari {{$j->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <form action="{{route('admin.day.delete',$j->id)}}" method="post">
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
