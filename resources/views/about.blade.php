@extends('layouts.main')

@section('container')
    <h1> Halaman about </h1>
    <h3> {{ $nama }} </h3>
    <P> {{ $email }} </p>
    <img src="images/{{ $gambar }}" alt="{{ $nama}}" width="200px">
@endsection
