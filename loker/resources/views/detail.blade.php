@extends('layout.template')

@section('title', $Loker['judul'])

@section('content')

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-9">
                <div class="card-body">
                    <h2 class="card-title">{{ $Loker['namaperusahaan'] }}</h2>
                    <p class="card-text">{{ $Loker['lokasi'] }}</p>
                    <p class="card-text">Kategori : {{ $Loker->category->nama_kategori }}</p>
                    <p class="card-text">Tahun : {{ $Loker['tahun'] }}</p>
                    <a href="/homepage" class="btn btn-primary">Kembali</a>

                      @auth
                    @if (auth()->user()->role == 'user')
                        <!-- Periksa apakah pengguna memiliki peran admin -->
                       <a href="/persyaratan/create2" class="btn btn-danger">Daftar Untuk Perusahan Ini</a>
                    @endif
                @endauth


                </div>
            </div>
            <div class="col-md-3">
                <img src="/images/{{ $Loker['foto_sampul'] }}" class="img-fluid rounded-end" alt="...">
            </div>
        </div>
    </div>

@endsection
