@extends('layouts.app')
@section('title','Data Semester')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Data Semester</h5></div>
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
                            <h5 class="modal-title"> Tambah Semester</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <form action="{{route('admin.semester.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <input type="text" name="name" id="semester" class="form-control" placeholder="Masukan semester" aria-describedby="helpId">
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
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Semester</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($semester as $k)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $k->name}}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit-{{$k->id}}">
                                <i class="fas fa-edit"></i> 
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modaledit-{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title"> Tambah semester</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('admin.semester.update')}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{$k->id}}">
                                                <div class="form-group">
                                                    <label for="semester">semester</label>
                                                    <input type="text" name="name" id="semester" value="{{$k->name}}" class="form-control" placeholder="Masukan semester" aria-describedby="helpId">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-warning">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>  
                            </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete-{{$k->id}}">
                              <i class="fas fa-trash"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modaldelete-{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title">Hapus semester</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            Ingin menghapus semester {{$k->name}} ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="{{route('admin.semester.delete',$k->id)}}" method="post">
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
