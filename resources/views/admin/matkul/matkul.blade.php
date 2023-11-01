@extends('layouts.app')
@section('title','Mata Kuliah')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Mata Kuliah Semester {{ $semester->name }}</h5></div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <a href="{{ route('admin.matkul.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
              <i class="fas fa-plus"></i> Tambah
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title">Tambah Mata Kuliah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form action="{{ route('admin.matkul.smt.store', $semester->id) }}" method="post">
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Mata Kuliah</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($semester->matkul as $matkul)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $matkul->name }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit-{{$matkul->id}}">
                                <i class="fas fa-edit"></i> 
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modaledit-{{$matkul->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning">
                                            <h5 class="modal-title"> Tambah semester</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('admin.matkul.smt.update', $matkul->semester_id)}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{$matkul->id}}">
                                                <div class="form-group">
                                                    <label for="semester">semester</label>
                                                    <input type="text" name="name" id="semester" value="{{$matkul->name}}" class="form-control" placeholder="Masukan semester" aria-describedby="helpId">
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
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete-{{$matkul->id}}">
                              <i class="fas fa-trash"></i>
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modaldelete-{{$matkul->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title">Hapus semester</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            Ingin menghapus semester {{$matkul->name}} ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="{{route('admin.matkul.smt.delete',[$matkul->semester_id, $matkul->id])}}" method="post">
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
