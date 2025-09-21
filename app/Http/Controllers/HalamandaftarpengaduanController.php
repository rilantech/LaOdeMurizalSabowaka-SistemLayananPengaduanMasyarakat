<?php

namespace App\Http\Controllers;

use App\Http\Requests\TambahDataPengaduanRequest;
use App\Models\Daftarpengaduan;
use App\Models\Datauser;

use Illuminate\Http\Request as HttpRequest;


class HalamandaftarpengaduanController extends Controller
{
    public function index(HttpRequest $request)
    {
        $search = $request->query('search');

        if(!empty($search)){
            $daftarPengaduan = Daftarpengaduan::where('daftarpengaduan.id','like','%'.$search.'%')
           ->orwhere('daftarpengaduan.nama_pengadu','like','%'.$search.'%')
           ->paginate(10)->onEachSide(2)->fragment('srv');
        }else{
            $daftarPengaduan = Daftarpengaduan::latest()->paginate(10)->onEachSide(2)->fragment('srv');
        }
        return view('tabel.halamandaftarpengaduan',[
            'title' => 'Daftar Pengaduan',
            'daftarpengaduan' => $daftarPengaduan,
            'search' => $search
          ]
          );
        }

    /**
     * Display a listing of the resource.
     */
   

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
    public function store(TambahDataPengaduanRequest $request)
    {
        $validate = $request->validated();
       
        $daftarpengaduan =new Daftarpengaduan;
        $daftarpengaduan->id_pesan = $request->id_pesan;
        $daftarpengaduan->nama_pengadu = $request->nama_pengadu;

        $image = $request->file('gambar');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $daftarpengaduan-> gambar = $new_image; 
        $image->move(public_path('galerifoto'), $new_image);

        $daftarpengaduan->lokasi= $request->lokasi;
        $daftarpengaduan->nomor_hp_pelapor = $request->nomorhp;
        $daftarpengaduan->jenis_pengaduan = $request->jenis_pengaduan;
        $daftarpengaduan->tanggal_kirim = $request->tanggal_kirim;
        $daftarpengaduan->isi_pengaduan= $request->isi_pengaduan;

        $daftarpengaduan->save();
      
        return redirect('daftarpengaduan')->with('msg','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftarpengaduan $daftarpengaduan1, $id)
    {
        $data = $daftarpengaduan1->find($id);
        $dataUser = Datauser::all();

        return view('form.editdatapengaduan')->with([
            'id' => $id,
            'id_pesan' => $data->id_pesan,
            'nama_pengadu' => $data->nama_pengadu,
            'gambar' => $data->gambar,
            'lokasi' => $data->lokasi,
            'nomorhp' => $data->nomor_hp_pelapor,
            'jenis_pengaduan' => $data->jenis_pengaduan,
            'tanggal_kirim' => $data->tanggal_kirim,
            'isi_pengaduan' => $data->isi_pengaduan,
            'title' => 'Edit Data Pengaduan',
            'datauser' => $dataUser
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HttpRequest $request, Daftarpengaduan $daftarpengaduan1, $id)
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
            ]);
    
            $image_name = $old_image_name;
                   
        }

      $data = $daftarpengaduan1->find($id);
      $data->id_pesan = $request->id_pesan;
      $data->nama_pengadu = $request->nama_pengadu;
      $data->gambar = $image_name;
      $data->lokasi= $request->lokasi;
      $data->nomor_hp_pelapor = $request->nomorhp;
      $data->jenis_pengaduan = $request->jenis_pengaduan;
      $data->tanggal_kirim = $request->tanggal_kirim;
      $data->isi_pengaduan= $request->isi_pengaduan;
        
        $data->save();
        return redirect('daftarpengaduan')->with('msg','Data Berhasil Di Update');
           
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftarpengaduan $daftarpengaduan1, $id)
    {
        $data = $daftarpengaduan1->find($id);
        $data->delete();
        return redirect('daftarpengaduan')->with('msg','Data Berhasil Di Hapus');
    }

    public function tambahdatapengaduan(){
        $dataUser = Datauser::all();

        return view('form.tambahdatapengaduan')->with([
        'title' => 'Tambah Data Pengaduan',
        'datauser' => $dataUser
        
    ]);
}
}
