<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Riwayatpengaduan;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class ApiriwayatpengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $riwayatpengaduan = Riwayatpengaduan::all();
            return response()->json($riwayatpengaduan
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
        //
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
