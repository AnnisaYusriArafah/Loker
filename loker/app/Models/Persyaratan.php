<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'category_id', 'tgl', 'nisn', 'hp', 'perusahaan', 'lokasi', 'tahun',  'foto_sampul'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
