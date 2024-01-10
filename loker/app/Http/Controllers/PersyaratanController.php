<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Persyaratan;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PersyaratanController extends Controller
{
    public function pendaftar()
    {
        $persyaratans = Persyaratan::paginate(10);
        return view('data-pendaftar', compact('persyaratans'));
    }


    public function create2()
    {
        $categories = Category::all();
        return view('persyaratan', compact('categories'));
    }

    public function store2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'tgl' => 'required|date',
            'nisn' => 'required|integer',
            'hp' => 'required|string|max:255',
            'perusahaan' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'tahun' => 'required|string',
            'foto_sampul' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/persyaratan/data')
                ->withErrors($validator)
                ->withInput();
        }

        // Handle file upload
        if ($request->hasFile('foto_sampul')) {
            $fileName = $request->file('foto_sampul')->store('images', 'public');
        } else {
            $fileName = 'default.jpg';
        }

        // Simpan data ke tabel Persyaratan
        Persyaratan::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'category_id' => $request->category_id,
            'tgl' => $request->tgl,
            'nisn' => $request->nisn,
            'hp' => $request->hp,
            'perusahaan' => $request->perusahaan,
            'lokasi' => $request->lokasi,
            'tahun' => $request->tahun,
            'foto_sampul' => $fileName,
        ]);

        return redirect()->route('persyaratans.data')->with('success', 'Data berhasil disimpan');
    }


    public function data()
    {
        $persyaratans = Persyaratan::latest()->paginate(10);
        return view('data-pendaftar', compact('persyaratans'));
    }

    public function delete($id)
    {
        $persyaratan = Persyaratan::findOrFail($id);

        if (File::exists(public_path('images/' . $persyaratan->foto_sampul))) {
            if ($persyaratan->foto_sampul != 'default.jpg') {
                File::delete(public_path('images/' . $persyaratan->foto_sampul));
            }
        }

        $persyaratan->delete();

        return redirect('/persyaratan/data')->with('success', 'Data berhasil dihapus');
    }
}
