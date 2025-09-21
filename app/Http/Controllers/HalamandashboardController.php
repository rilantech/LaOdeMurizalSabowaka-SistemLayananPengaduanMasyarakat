<?php

namespace App\Http\Controllers;

use App\Models\Daftarpengaduan;
use App\Models\Datauser;
use App\Models\Riwayatpengaduan;
use Illuminate\Http\Request;

class HalamandashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataUser = Datauser::all()->count();
        $dataPengaduan = Daftarpengaduan::all()->count();
        $riwayatPengaduanditerima = Riwayatpengaduan::where('status_proses', 'Diproses')->count();
        $riwayatPengaduanditolak = Riwayatpengaduan::where('status_proses', 'Ditolak')->count();
        return view('tabel.halamandashboard',[
          'datauser' => $dataUser,
          'datapengaduan' => $dataPengaduan,
          'riwayatpengaduanditerima' => $riwayatPengaduanditerima,
          'riwayatpengaduanditolak' => $riwayatPengaduanditolak,
          'title' => 'Beranda'
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
