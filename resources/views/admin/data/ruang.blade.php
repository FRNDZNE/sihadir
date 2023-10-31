@extends('layouts.app')
@section('title','Data Ruang')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Data Ruang</h5></div>
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
                            <h5 class="modal-title"> Tambah Ruang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <form action="{{route('admin.ruangan.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ruang">Ruang</label>
                                <input type="text" name="name" id="ruang" class="form-control" placeholder="Masukan Ruang" aria-describedby="helpId">
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
                        <th>Ruang</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $k)
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
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title"> Tambah Ruang</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <form action="{{route('admin.ruangan.update')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="{{$k->id}}">
                                            <div class="form-group">
                                                <label for="ruang">Ruang</label>
                                                <input type="text" name="name" id="ruang" value="{{$k->name}}" class="form-control" placeholder="Masukan Ruang" aria-describedby="helpId">
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete-{{$k->id}}">
                                <i class="fas fa-trash"></i> 
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="modaldelete-{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-primary">
                                                <h5 class="modal-title"> Hapus Ruang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        
                                            <div class="modal-body">
                                                Apakah ingin menghapus kelas {{$k->name}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <form action="{{route('admin.ruangan.delete',$k->id)}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Simpan</button>
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