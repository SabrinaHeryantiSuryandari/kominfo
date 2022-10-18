<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengadaan extends Model
{
    use HasFactory;

    
    protected $table = "pengadaan";
    protected $primarykay = "id";
    
    protected $fillable = [
        // 'id', 
        'perusahaan_id',
        'jenis_pengadaan',
        'tanggal_acara',
        'deskripsi_tgl_acara',
        'waktu_acara',
        'tempat_acara',
        'total_hps',
        'deskripsi_hps',
        'nilai_negosiasi',
        'nilai_negosiasi'

    ];
 
    public function pelaksana()
    {
    	return $this->belongsTo(pelaksana::class);
    }
    public function barang()
    {
    	return $this->belongsTo(barang::class);
    }
}
