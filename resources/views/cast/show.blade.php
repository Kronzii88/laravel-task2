@extends('layout.master')

@section('title-page')
    <h3>Detail Aktor/Aktris</h3>
@endsection

@section('content')
    <div class="mt3 ml-3">
        <h4>{{$cast->name}}</h4>
        <p>{{$cast->age}}</p>
        <p>{{$cast->bio}}</p>
        <a href="/cast/{{$cast->id}}/edit" class="btn btn-default">Edit</a>
    </div>
@endsection