<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkunAdmin;
use App\Http\Requests\TambahDataUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session as FacadesSession;

class HalamanregisterController extends Controller
{
    Public function index()
    {
        return view('registrasi.registrasi',[
          'title' => 'Registrasi'
        ]
        );
    }

    public function store(Request $request)
    {
        // $validate = $request->validated();
        $akunadmin = new User();
    
        $akunadmin->username = $request->username;
        $akunadmin->email = $request->email;
        $akunadmin->password = $request->password;
        $akunadmin->save();
       
        return redirect('/login')->with('msg','Registrasi Sukses ! Silahkan Login');
    }

      
    
}
