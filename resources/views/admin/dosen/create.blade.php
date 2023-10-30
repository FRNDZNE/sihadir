@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-primary"><h5>Tambah Data Dosen</h5></div>
        <form action="{{ route('admin.dosen.store') }}" method="post" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nip">Nip</label>
                            <input type="text" name="nip" id="nip" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" id="nama" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Jenis Kelamin</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="laki" value="pria">
                                    <label class="form-check-label" for="laki">
                                        Pria
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="perempuan" value="wanita" checked>
                                    <label class="form-check-label" for="perempuan">
                                        Wanita
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
