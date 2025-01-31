<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nis', 'nama', 'jenis_kelamin', 'kelas'];
    public $timestamp;

    public function deleteImage() {
        if ($this->cover && file_exists(public_path('images/siswa/' . $this->cover))) {
            return unlink(public_path('images/siswa/' . $this->cover));
        }
        return false; 
    }
}

// image/ siswa itu nyimpen file nanti folder image bikin folder nama siswa
