@extends('layouts.app')
@section('title','Penjadwalan')
@section('content')
    <div class="card">
        <div class="card-header"><h5>Penjadwalan</h5></div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($semester as $s)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td><a href="{{  }}">Semester {{ $s->name}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
