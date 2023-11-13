@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard Dosen</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data as $jadwal)
                                <div class="col-md-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="card card-widget widget-user">
                                        <div class="widget-user-header bg-info">
                                            <h3 class="widget-user-username">{{ $jadwal->day->name }}</h3>
                                            <h5 class="widget-user-desc">{{ $jadwal->matkul->name }}</h5>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle elevation-2"
                                                src="{{ asset('/') }}/template/dist/img/user1-128x128.jpg"
                                                alt="User Avatar">
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header">Kelas</h5>
                                                        <span
                                                            class="description-text">{{ $jadwal->semester->name . '' . $jadwal->kelas->name }}</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <div class="col-sm-4 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header">Mahasiswa</h5>
                                                        @php
                                                            $count = $counter
                                                                ->where('semester_id', $jadwal->semester_id)
                                                                ->where('kelas_id', $jadwal->kelas_id)
                                                                ->first();

                                                            $total = data_get($count, 'total', 0);
                                                        @endphp
                                                        <span
                                                            class="description-text">{{ $total }}</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header">JAM</h5>
                                                        <span class="description-text"></span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
