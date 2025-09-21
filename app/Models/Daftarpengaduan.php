<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarpengaduan extends Model
{
    use HasFactory;
    protected $table = 'daftarpengaduan';
    public $timestamps = true;
    protected $fillable = ['id_pesan','tanggal_kirim', 'gambar', 'nama_pengadu', 'lokasi', 'nomor_hp_pelapor', 'jenis_pengaduan', 'isi_pengaduan'];
}
