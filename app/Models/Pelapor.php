<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FormPelaporan;

class Pelapor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik_plapor',
        'nama_plapor',
        'tglahir_plapor',
        'umur_plapor',
        'pkerjaan_plapor',
        'alamat_plapor',
    ];

    public function formPelaporan() {
        return $this->hasOne(FormPelaporan::class);
    }
}
