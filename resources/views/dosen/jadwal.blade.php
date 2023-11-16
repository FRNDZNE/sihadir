@extends('layouts.app')
@section('title','Profil')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ $jadwal->matkul->name }}</h5>
        </div>
    </div>
@endsection