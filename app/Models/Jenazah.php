<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FormPelaporan;

class Jenazah extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik_jz',
        'nama_jz',
        'jeniskelamin_jz',
        'tmptlahir_jz',
        'tglahir_jz',
        'umur_jz',
        'agama_jz',
        'pkerjaan_jz',
        'alamat_jz',
        'tmptkematian_jz',
        'tglkematian_jz',
        'jamkematian_jz',
        'sebabkematian_jz',
        'yang_menerangkan',
        'nik_ayah',
        'nama_ayah',
        'tglahir_ayah',
        'umur_ayah',
        'pkerjaan_ayah',
        'nik_ibu',
        'nama_ibu',
        'tglahir_ibu',
        'umur_ibu',
        'pkerjaan_ibu',
        'alamat_orgtua',
    ];

    public function formPelaporan() {
        return $this->hasOne(FormPelaporan::class);
    }
}