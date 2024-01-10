<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class LokerController extends Controller
{

    public function index()
    {

        $query = Loker::latest();
        if (request('search')) {
            $query->where('namaperusahaan', 'like', '%' . request('search') . '%')
                ->orWhere('lokasi', 'like', '%' . request('search') . '%');
        }
        $Lokers = $query->paginate(6)->withQueryString();
        return view('homepage', compact('Lokers'));
    }

    public function hometamu()
    {
        $Loker = Loker::all();
        return view('hometamu');
    }



    public function detail($id)
    {
        $Loker = Loker::find($id);
        return view('detail', compact('Loker'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('input', compact('categories'));
    }




    public function store(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'string', 'max:255', Rule::unique('Lokers', 'id')],
            'namaperusahaan' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'lokasi' => 'required|string',
            'tahun' => 'required|integer',
            'foto_sampul' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Jika validasi gagal, kembali ke halaman input dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect('Lokers/create')
                ->withErrors($validator)
                ->withInput();
        }

        $randomName = Str::uuid()->toString();
        $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
        $fileName = $randomName . '.' . $fileExtension;

        // Simpan file foto ke folder public/images
        $request->file('foto_sampul')->move(public_path('images'), $fileName);
        // Simpan data ke table Lokers
        Loker::create([
            'id' => $request->id,
            'namaperusahaan' => $request->namaperusahaan,
            'category_id' => $request->category_id,
            'lokasi' => $request->lokasi,
            'tahun' => $request->tahun,
            'foto_sampul' => $fileName,
        ]);

        return redirect('/homepage')->with('success', 'Data berhasil disimpan');
    }





    public function data()
    {
        $Lokers = Loker::latest()->paginate(10);
        return view('data-Lokers', compact('Lokers'));
    }

    public function edit($id)
    {
        $Loker = Loker::find($id);
        $categories = Category::all();
        return view('form-edit', compact('Loker', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'namaperusahaan' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'lokasi' => 'required|string',
            'tahun' => 'required|integer',
            'foto_sampul' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Jika validasi gagal, kembali ke halaman edit dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect("/Loker/{$id}/edit")
                ->withErrors($validator) 
                ->withInput();
        }

        // Ambil data Loker yang akan diupdate
        $Loker = Loker::findOrFail($id);

        // Jika ada file yang diunggah, simpan file baru
        if ($request->hasFile('foto_sampul')) {
            $randomName = Str::uuid()->toString();
            $fileExtension = $request->file('foto_sampul')->getClientOriginalExtension();
            $fileName = $randomName . '.' . $fileExtension;

            // Simpan file foto ke folder public/images
            $request->file('foto_sampul')->move(public_path('images'), $fileName);

            // Hapus foto lama jika ada
            if (File::exists(public_path('images/' . $Loker->foto_sampul))) {
                File::delete(public_path('images/' . $Loker->foto_sampul));
            }

            // Update record di database dengan foto yang baru
            $Loker->update([
                'namaperusahaan' => $request->namaperusahaan,
                'lokasi' => $request->lokasi,
                'category_id' => $request->category_id,
                'tahun' => $request->tahun,
                'foto_sampul' => $fileName,
            ]);
        } else {
            // Jika tidak ada file yang diunggah, update data tanpa mengubah foto
            $Loker->update([
                'namaperusahaan' => $request->namaperusahaan,
                'lokasi' => $request->lokasi,
                'category_id' => $request->category_id,
                'tahun' => $request->tahun,
            ]);
        }

        return redirect('/Lokers/data')->with('success', 'Data berhasil diperbarui');
    }

    public function delete($id)
    {
        $Loker = Loker::findOrFail($id);

        // Delete the Loker's photo if it exists
        if (File::exists(public_path('images/' . $Loker->foto_sampul))) {
            if ($Loker->foto_sampul != 'default.jpg') {
                File::delete(public_path('images/' . $Loker->foto_sampul));
            }
        }

        // Delete the Loker record from the database
        $Loker->delete();

        return redirect('/Lokers/data')->with('success', 'Data berhasil dihapus');
    }
}
