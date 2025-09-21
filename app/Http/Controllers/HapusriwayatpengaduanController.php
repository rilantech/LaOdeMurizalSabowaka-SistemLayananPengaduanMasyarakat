<?php

namespace App\Http\Controllers;
use App\Models\Riwayatpengaduan;
use Illuminate\Http\Request;

class HapusriwayatpengaduanController extends Controller
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
    public function destroy(Riwayatpengaduan $riwayatpengaduan1, $id)
    {
        $data = $riwayatpengaduan1->find($id);
        $data->delete();
        return redirect('riwayatpengaduan')->with('msg','Data Berhasil Di Hapus');
    }
}
