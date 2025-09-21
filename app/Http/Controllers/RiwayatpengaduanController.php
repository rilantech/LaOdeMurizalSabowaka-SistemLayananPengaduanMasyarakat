<?php

namespace App\Http\Controllers;

use App\Models\Riwayatpengaduan;
use App\Models\Daftarpengaduan;
use App\Models\Datauser;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\Facade\Pdf as PDF;

class RiwayatpengaduanController extends Controller
{
    public function index(HttpRequest $request)
    {
        $search = $request->query('search');

        if(!empty($search)){
            $riwayatPengaduan = Riwayatpengaduan::where('riwayatpengaduan.id','like','%'.$search.'%')
           ->orwhere('riwayatpengaduan.tanggal_kirim','like','%'.$search.'%')
           ->paginate(10)->onEachSide(2)->fragment('srv');
        }else{
            $riwayatPengaduan = Riwayatpengaduan::latest()->paginate(10)->onEachSide(2)->fragment('srv');
        }

        if($request->get('export') == 'pdf'){
            $pdf = Pdf::loadView('pdf.assets',['data' => $riwayatPengaduan]);
            return $Pdf->download('Data Report.pdf');

        }
        return view('tabel.halamanriwayatpengaduan',[
            'title' => 'Riwayat Pengaduan',
            'riwayatpengaduan' => $riwayatPengaduan,
            'search' => $search
          ]
          );
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
        $dataUser = Datauser::all();

      
        return view('form.editriwayatpengaduan')->with([
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
            'datauser' => $dataUser,
            'title' => 'Edit Riwayat Pengaduan',
           
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
    public function update(HttpRequest $request, Riwayatpengaduan $riwayatpengaduan1, $id)
    {
        $old_image_name = $request->hidden_image;
        $image = $request->file('image');
      
        if($image != ''){

            $request->validate([
                'id_pesan' => 'required',
                'nama_pengadu' => 'required|max:500',
                'lokasi' => 'required',
                'nomorhp' => 'required',
                'jenis_pengaduan' => 'required',
                'tanggal_kirim' => 'required',
                'isi_pengaduan' => 'required',
                'status_proses' => 'required',
                'komentar' => 'required',
                'tanggal_validasi' => 'required',
                'image' => 'required|image|mimes:jpeg,jpg,png|max:5000'
            ]);
    
            $image_name = $old_image_name;
            $image->move(public_path('galerifoto'), $image_name);
        
        }
        if($image == ''){

            $request->validate([
                'id_pesan' => 'required',
                'nama_pengadu' => 'required|max:500',
                'lokasi' => 'required',
                'nomorhp' => 'required',
                'jenis_pengaduan' => 'required',
                'tanggal_kirim' => 'required',
                'isi_pengaduan' => 'required',
                'status_proses' => 'required',
                'komentar' => 'required',
                'tanggal_validasi' => 'required'
            ]);
    
            $image_name = $old_image_name;
                   
        }

      $data = $riwayatpengaduan1->find($id);
      $data->id_pesan = $request->id_pesan;
      $data->nama_pengadu = $request->nama_pengadu;
      $data->gambar = $image_name;
      $data->lokasi= $request->lokasi;
      $data->nomor_hp_pelapor = $request->nomorhp;
      $data->jenis_pengaduan = $request->jenis_pengaduan;
      $data->tanggal_kirim = $request->tanggal_kirim;
      $data->isi_pengaduan= $request->isi_pengaduan;
      $data->status_proses= $request->status_proses;
      $data->komentar= $request->komentar;
      $data->tanggal_validasi= $request->tanggal_validasi;
        
        $data->save();
        return redirect('riwayatpengaduan')->with('msg','Data Berhasil Di Update');
           
         
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
 


    public function destroy(HttpRequest $request, Daftarpengaduan $daftarpengaduan1, $id1)
    {
        $riwayatpengaduan2 = new Riwayatpengaduan();
    
        $old_image_name = $request->hidden_image;
             
                $request->validate([
                 
                'status_proses' => 'required',
                'komentar' => 'required',
            ]);
    
            $image_name = $old_image_name;
           
                $riwayatpengaduan2->id_pesan = $request->id_pesan;
                $riwayatpengaduan2->nama_pengadu = $request->nama_pengadu;
                $riwayatpengaduan2->gambar = $image_name;
                $riwayatpengaduan2->lokasi = $request->lokasi;
                $riwayatpengaduan2->nomor_hp_pelapor = $request->nomorhp;
                $riwayatpengaduan2->jenis_pengaduan = $request->jenis_pengaduan;
                $riwayatpengaduan2->tanggal_kirim = $request->tanggal_kirim;
                $riwayatpengaduan2->isi_pengaduan= $request->isi_pengaduan;
                $riwayatpengaduan2->status_proses= $request->status_proses;
                $riwayatpengaduan2->komentar= $request->komentar;
                $riwayatpengaduan2->tanggal_validasi= "20 maret";
          
            
            $riwayatpengaduan2->save();
            $data = $daftarpengaduan1->find($id1);
            $data->delete();
            return redirect('daftarpengaduan')->with('msg','Data Berhasil Pindahkan');
                   
       
    }

  
}
