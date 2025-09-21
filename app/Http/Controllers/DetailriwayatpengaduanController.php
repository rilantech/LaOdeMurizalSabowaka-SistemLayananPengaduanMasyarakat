<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Riwayatpengaduan;
class DetailriwayatpengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Riwayatpengaduan $riwayatpengaduan1, $id)
    {
        $data = $riwayatpengaduan1->find($id);
      
        return view('form.detailriwayatpengaduan')->with([
            'id' => $id,
            'id_pesan' => $data->id_pesan,
            'nama_pengadu' => $data->nama_pengadu,
            'gambar' => $data->gambar,
            'lokasi' => $data->lokasi,
            'nomorhp' => $data->nomor_hp_pelapor,
            'jenis_pengaduan' => $data->jenis_pengaduan,
            'tanggal_kirim' => $data->tanggal_kirim,
            'isi_pengaduan' => $data->isi_pengaduan,
            'status_proses' => $data->status_proses,
            'isi_pengaduan' => $data->isi_pengaduan,
            'komentar' => $data->komentar,
            'tanggal_validasi' => $data->tanggal_validasi,
            'title' => 'Detail Riwayat Pengaduan',
           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
