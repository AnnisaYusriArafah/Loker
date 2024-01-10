@extends('layout.template')

@section('title', 'Homepage')

@section('content')
    <div class="bg-dark">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="bg-dark">
            <img src="/images/10.jpg" class="card-img bg-dark" alt="...">
        </div>
        <h1 class="text-center bg-secondary ">Lowongan Teratas</h1>
        <div class="row">
            @foreach ($Lokers as $Loker)
                    <div class="card-group">
                        <div class="card">
                            <img src="/images/{{ $Loker['foto_sampul'] }}" class="img-fluid rounded-start" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">{{ $Loker['lokasi'] }}</p>
                                <a href="/Loker/{{ $Loker['id'] }}" class="btn btn-warning">Lihat Selanjutnya</a>
                            </div>
                        </div>
                        <div class="card">
                           <img src="/images/{{ $Loker['foto_sampul'] }}" class="img-fluid rounded-start" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">{{ $Loker['lokasi'] }}</p>
                                <a href="/Loker/{{ $Loker['id'] }}" class="btn btn-warning">Lihat Selanjutnya</a>
                            </div>
                        </div>
                        <div class="card">
                           <img src="/images/{{ $Loker['foto_sampul'] }}" class="img-fluid rounded-start" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">{{ $Loker['lokasi'] }}</p>
                                <a href="/Loker/{{ $Loker['id'] }}" class="btn btn-warning">Lihat Selanjutnya</a>
                            </div>
                        </div>
                    </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $Lokers->links() }}
            </div>
        </div>
    </div>
@endsection
