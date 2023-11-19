@extends('layouts.app')
@section('title','Absensi')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{ $minggu->name }}</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('dosen.jadwal',$jadwal->id) }}" class="btn btn-secondary">Kembali</a>
                    <a href="javascript:void(0)" onclick="document.getElementById('absenForm').submit()" class="float-right btn btn-primary">Simpan</a>
                    <hr>
                    <form action="{{ route('dosen.absensi.store') }}" method="POST" id="absenForm">
                    <table class="table table-striped" id="absensiTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                @foreach ($jadwal->jam as $jam)
                                <th>Jam {{ $loop->iteration }}</th>
                                @endforeach
                            </tr>
                        </thead>
                            @csrf
                            <input type="hidden" name="week_id" value="{{ $minggu->id }}">
                            <input type="hidden" name="jadwal_id" value="{{ $jadwal->id }}">
                                @foreach ($mahasiswa as $im => $m)
                                <tr>
                                    <input type="hidden" name="mahasiswa[{{ $im }}][id]" value="{{ $m->user->id }}">  
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $m->user->name }}</td>
                                    @foreach ($jadwal->jam as $ji=> $j)
                                        <td>
                                            <div class="form-group">
                                                {{-- <input type="hidden" name="mahasiswa[{{ $im }}][absensi][{{ $ji }}][mahasiswa_id]" value="{{ $m->id }}"> --}}
                                                <input type="hidden" name="mahasiswa[{{ $im }}][absensi][{{ $ji }}][jam_id]" value="{{ $j->id }}">
                                                <select name="mahasiswa[{{ $im }}][absensi][{{ $ji }}][keterangan]" class="form-control">
                                                    @php
                                                    
                                                        $absenMahasiswa = $m->user->absensi->where('jam_id', $j->id)->first();
                                                        $status = data_get($absenMahasiswa, 'status');
                                                    @endphp
                                                    <option value="h" {{ $status == 'h' ? 'selected': '' }}>Hadir</option>
                                                    <option value="s" {{ $status == 's' ? 'selected': '' }}>Sakit</option>
                                                    <option value="i" {{ $status == 'i' ? 'selected': '' }}>Izin</option>
                                                    <option value="a" {{ $status == 'a' ? 'selected': '' }}>Alpa</option>
                                                </select>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
