@extends('layouts.main')

@section('container')
    <h1>Detail mahasiswa</h1>
    <ul>
        <li>Nama : {{ $mahasiswa->nama }}</li>
        <li>NIM : {{ $mahasiswa->nim }}</li>
        <li>Email : {{ $mahasiswa->email }}</li>
        <li>Prodi : {{ $mahasiswa->prodi }}</li>
    </ul>

    <a href="/" class="text-decoration-none btn btn-primary">Dashboard</a>
@endsection