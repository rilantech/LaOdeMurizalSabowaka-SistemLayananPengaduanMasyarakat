<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayatpengaduan extends Model
{
    use HasFactory;
    protected $table = 'riwayatpengaduan';
    public $timestamps = true;
    protected $fillable = ['id_pesan','tanggal_kirim', 'gambar', 'nama_pengadu', 'lokasi', 'nomor_hp_pelapor', 'jenis_pengaduan', 'isi_pengaduan', 'status_proses', 'komentar', 'tanggal_validasi'];


}
