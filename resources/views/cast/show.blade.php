@extends('layout.master')

@section('title-page')
    <h3>Detail Aktor/Aktris</h3>
@endsection

@section('content')
    <div class="mt3 ml-3">
        <h4>{{$post->name}}</h4>
        <p>{{$post->age}}</p>
        <p>{{$post->bio}}</p>
    </div>
@endsection