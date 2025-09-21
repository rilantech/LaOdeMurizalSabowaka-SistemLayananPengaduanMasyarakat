<?php

namespace App\Http\Controllers;

use App\Models\Datauser;
use App\Models\User;
use Illuminate\Http\Request;
class ProfiladminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dataadmin = User::all();

        $dataadmin = User::where('users.id',1);


        return view('form.profiladmin')->with([
            // 'id' => $dataadmin->id,
            'username' => $dataadmin->username,
            'email' => $dataadmin->email,
            'password' => $datadmin->password,
           
        ]);
        // $riwayatPengaduanditerima = Riwayatpengaduan::where('status_proses', 'Diproses')->count();
        // return view('form.profiladmin',[
        //     'title' => 'Daftar Pengaduan',
        //     // 'daftarpengaduan' => $daftarPengaduan,
        //     // 'search' => $search
        //   ]
        //   );
        
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
    public function show(User $akunadmin, $id)
    {
        $data = $akunadmin->find($id);
    
        return view('form.profiladmin')->with([
                'id' => $id,
                'username' => $data->username,
                'email' => $data->email,
                'password' => $data->password,
                'title' => 'Profil Akun Admin'
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
