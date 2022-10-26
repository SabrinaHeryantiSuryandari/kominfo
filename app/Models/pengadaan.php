<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengadaan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        // 'id', 
        'pelaksana_id',
        'jenis_pengadaan',
        'total_hps',
        'deskripsi_hps',
        'Harga Penawaran',
        'Deskripsi_penawaran',
        'nilai_negosiasi',
        'deskripsi_nilai_nego'
    ];
    
    protected $table = "pengadaans";
    protected $primarykay = "id";
 
    public function pelaksana()
    {
    	return $this->belongsTo(pelaksana::class);
    }
    public function barang()
    {
    	return $this->belongsTo(barang::class);
    }
}
