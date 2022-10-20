<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pejabat extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'kuasa_pengguna_anggaran',
        'nip_kuasa_pengguna',
        'pejabat_pembuatan_komitmen',
        'nip_pejabat_komitmen',
        'pejabat_pengadaan',
        'nip_pejabat_kpengadaan',
        'bpp',
        'nip_bpp'
    ];

    protected $table = "pejabats";
    protected $primarykay = "id";
    
 
    // public function pemilik()
    // {
    // 	return $this->hasOne(pemilik::class);
    // }
}
