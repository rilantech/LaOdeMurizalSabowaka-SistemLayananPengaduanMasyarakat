<?php

namespace App\Http\Controllers;
use App\Models\Daftarpengaduan;
use App\Models\Datauser;
use App\Models\Riwayatpengaduan;
use Illuminate\Http\Request as HttpRequest;

class ValidasipengaduanController extends Controller
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
    public function store(HttpRequest $request)
    {

      
       
    //     $riwayatpengaduan1 = new Riwayatpengaduan();
        
    //     $old_image_name = $request->hidden_image;
             
    //             $request->validate([
    //             'id_pesan' => 'required',
    //             'nama_pengadu' => 'required|max:500',
    //             'lokasi' => 'required',
    //             'nomorhp' => 'required',
    //             'jenis_pengaduan' => 'required',
    //             'tanggal_kirim' => 'required',
    //             'isi_pengaduan' => 'required',
    //             'status_proses' => 'required',
    //             'komentar' => 'required',
    //         ]);
    
    //         $image_name = $old_image_name;
                   
    //   $riwayatpengaduan1->id_pesan = $request->id_pesan;
    //   $riwayatpengaduan1->nama_pengadu = $request->nama_pengadu;
    //   $riwayatpengaduan1->gambar = $image_name;
    //   $riwayatpengaduan1->lokasi= $request->lokasi;
    //   $riwayatpengaduan1->nomor_hp_pelapor = $request->nomorhp;
    //   $riwayatpengaduan1->jenis_pengaduan = $request->jenis_pengaduan;
    //   $riwayatpengaduan1->tanggal_kirim = $request->tanggal_kirim;
    //   $riwayatpengaduan1->isi_pengaduan= $request->isi_pengaduan;
    //   $riwayatpengaduan1->status_proses= $request->status_proses;
    //   $riwayatpengaduan1->komentar= $request->komentar;
    //   $riwayatpengaduan1->tanggal_validasi= "20 maret";

    //     $riwayatpengaduan1->save();
    //     return redirect('daftarpengaduan')->with('msg','Data Berhasil Pindahkan');
           
         
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftarpengaduan $daftarpengaduan1, $id)
    {
        $data = $daftarpengaduan1->find($id);
        $dataUser = Datauser::all();

        return view('form.validasipengaduan')->with([
            'id' => $id,
            'id_pesan' => $data->id_pesan,
            'nama_pengadu' => $data->nama_pengadu,
            'gambar' => $data->gambar,
            'lokasi' => $data->lokasi,
            'nomorhp' => $data->nomor_hp_pelapor,
            'jenis_pengaduan' => $data->jenis_pengaduan,
            'tanggal_kirim' => $data->tanggal_kirim,
            'isi_pengaduan' => $data->isi_pengaduan,
            'title' => 'Validasi Data',
            'datauser' => $dataUser
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
    public function update(HttpRequest $request)
    {

  
      
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HttpRequest $request, Daftarpengaduan $daftarpengaduan1, $id1)
    {
    }
}
