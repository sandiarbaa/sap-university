@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Dashboard</h1>

    <h4>Daftar Mahasiswa</h4>

    <div class="row col-md-6">
        <form action="/">
            <div class="input-group mb-3 mt-3">
                <input type="text" class="form-control" placeholder="Cari berdasarkan nama.." name="cari" value="{{ request('cari') }}" autofocus="on">
                <button type="submit" class="input-group-text" id="basic-addon2">Cari</button>
            </div>
        </form>
    </div>
    
    @if ($mahasiswa->count())
        <ul class="list-group">
            @foreach ($mahasiswa as $mhs)
                <li class="list-group-item"><a href="/detail/{{ $mhs->nim }}" class="text-decoration-none">{{ $mhs->nama }}</a></li>
            @endforeach
        </ul>
    @else
        <p>Mahasiswa tidak ditemukan!</p>
    @endif

@endsection