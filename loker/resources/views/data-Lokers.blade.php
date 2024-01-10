@extends('layout.template')

@section('title', 'Data Loker')

@section('content')



    <h1>Data Loker</h1>
    
    <table class="table table-hover">
        <div class="bg-secondary">
        <thead>
            <tr>
                <th class="bg-info" scope="col">No</th>
                <th class="bg-info" scope="col">Nama Perusahaan</th>
                <th class="bg-info" scope="col">Lokasi</th>
                <th class="bg-info" scope="col">Kategori</th>
                <th class="bg-info" scope="col">Tahun</th>

                <th class="bg-info" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Lokers as $Loker)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $Loker->namaperusahaan }}</td>
                    <td>{{ $Loker->lokasi }}</td>
                    <td>{{ $Loker->category->nama_kategori }}</td>
                    <td>{{ $Loker->tahun }}</td>
                    <td class="text-nowrap">
                        <a href="/Loker/{{ $Loker['id'] }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/Loker/delete/{{ $Loker->id }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $Lokers->links() }}
    </div>
</div>
@endsection
