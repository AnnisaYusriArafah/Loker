@extends('layout.template')
@section('title', 'Input Data Loker')
@section('content')
    <h2 class="mb-4">Tambah Loker Baru</h2>
    <form action="/Loker/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID Loker:</label>
            <input type="text" class="form-control" id="id" name="id" required="">
        </div>
        <div class="mb-3">
            <label for="namaperusahaan" class="form-label">Nama Perusahaan:</label>
            <input type="text" class="form-control" id="namaperusahaan" name="namaperusahaan" required="">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori:</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi:</label>
            <textarea class="form-control" id="lokasi" name="lokasi" rows="4" required=""></textarea>
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun:</label>
            <input type="number" class="form-control" id="tahun" name="tahun" required="">
        </div>
        <div class="mb-3">
            <label for="foto_sampul" class="form-label">Foto Sampul:</label>
            <input type="file" class="form-control" id="foto_sampul" name="foto_sampul" required="">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/Lokers/data" class="btn btn-danger">Batal</a>
        </div>
    </form>
@endsection
