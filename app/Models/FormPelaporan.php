<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Jenazah;
use App\Models\Pelapor;
use App\Models\Saksi;

class FormPelaporan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'form_kec',
        'nik_kk',
        'nama_kk',
        'status_pelaporan',
        'jenazah_id',
        'pelapor_id',
        'saksi_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jenazah() {
        return $this->belongsTo(Jenazah::class, 'jenazah_id');
    }

    public function pelapor() {
        return $this->belongsTo(Pelapor::class, 'pelapor_id');
    }
    public function saksi() {
        return $this->belongsTo(Saksi::class, 'saksi_id');
    }

}
