@extends('layout.template')

@section('title', 'Data pendaftar')

@section('content')


    <h1>Data Pendaftar</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="bg-info" scope="col">No</th>
                <th class="bg-info" scope="col">Nama Lengkap</th>
                <th class="bg-info" scope="col">Kategori</th>
                <th class="bg-info" scope="col">Tanggal Lahir</th>
                <th class="bg-info" scope="col">No Nisn</th>
                <th class="bg-info" scope="col">No Hp</th>
                <th class="bg-info" scope="col">Perusahaan</th>
                <th class="bg-info" scope="col">Lokasi</th>
                <th class="bg-info" scope="col">Tahun</th>
                @auth
                    @if (auth()->user()->role == 'admin')
                        <!-- Periksa apakah pengguna memiliki peran admin -->
                        <th class="bg-info" scope="col">Aksi</th>
                    @endif
                @endauth

            </tr>
        </thead>
        <tbody>
            @foreach ($persyaratans as $persyaratan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $persyaratan->nama }}</td>
                    <td>{{ $persyaratan->category->nama_kategori }}</td>
                    <td>{{ $persyaratan->tgl }}</td>
                    <td>{{ $persyaratan->nisn }}</td>
                    <td>{{ $persyaratan->hp }}</td>
                    <td>{{ $persyaratan->perusahaan }}</td>
                    <td>{{ $persyaratan->lokasi }}</td>
                    <td>{{ $persyaratan->tahun }}</td>

                    @auth
                        @if (auth()->user()->role == 'admin')
                            <!-- Periksa apakah pengguna memiliki peran admin -->
                            <td class="text-nowrap">
                                <a href="/persyaratan/delete/{{ $persyaratan->id }}" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        @endif
                    @endauth

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $persyaratans->links() }}
    </div>
@endsection
