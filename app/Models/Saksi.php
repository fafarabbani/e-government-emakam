<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FormPelaporan;

class Saksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik_saksi',
        'nama_saksi',
        'tglahir_saksi',
        'umur_saksi',
        'pkerjaan_saksi',
        'alamat_saksi',
    ];

    public function formPelaporan() {
        return $this->hasOne(FormPelaporan::class);
    }
}
