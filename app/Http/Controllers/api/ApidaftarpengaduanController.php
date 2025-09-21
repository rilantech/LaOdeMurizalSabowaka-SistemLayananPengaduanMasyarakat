<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Daftarpengaduan;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;


class ApidaftarpengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $daftarpengaduan = Daftarpengaduan::all();
            return response()->json($daftarpengaduan
                // 'kodewisata' => $datawisata->id,
                // 'kategori' => $datawisata->kategori,
                // 'namawisata' => $datawisata->namawisata,
                // 'alamat' => $datawisata->alamat,
                // 'biaya' => $datawisata->biaya,
                // 'longitude' => $datawisata->longitude,
                // 'latitude' => $datawisata->latitude,
                // 'info' => $datawisata->info,
                // 'foto' => asset('kumpulanfoto/'. $datawisata->foto)
            
            ,
 HttpResponse::HTTP_OK);
        } catch (QueryException $e){
            $error = [
                'error' => $e-> getMessage()
            ];
            return response()->json($error, 
            HttpResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
        $search = $request->query('search');

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
        $daftarpengaduan =new Daftarpengaduan;
        // $image = $request->gambar;
        if($request->gambar){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos
            ($request->gambar, ';')))[1])[1];

            $image = explode('base64,',$request->gambar);
            $image = end($image);
            $image = str_replace(' ', '+', $image);

           file_put_contents(public_path("galerifoto/".$name), base64_decode($image));
    
        }

        $daftarpengaduan->id_pesan = $request->id_pesan;
        $daftarpengaduan->nama_pengadu = $request->nama_pengadu;
    
        $daftarpengaduan->gambar= $name;
        $daftarpengaduan->lokasi= $request->lokasi;
        $daftarpengaduan->nomor_hp_pelapor = $request->nomor_hp_pelapor;
        $daftarpengaduan->jenis_pengaduan = $request->jenis_pengaduan;
        $daftarpengaduan->tanggal_kirim = $request->tanggal_kirim;
        $daftarpengaduan->isi_pengaduan= $request->isi_pengaduan;

        $daftarpengaduan->save();
             
        

        return response()->json([
            'result' => $result,
            'status' => true,
            'message' => 'Berhasil Terdaftar'
    ]);
    }

    public function register(Request $request)
    {
        
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
