<?php

namespace App\Http\Controllers;

use App\Http\Requests\TambahDataUserRequest;
use App\Models\Datauser;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;

class HalamandatauserController extends Controller
{

    public function index(HttpRequest $request)
    {
        $search = $request->query('search');

        if(!empty($search)){
            $dataUser = Datauser::where('datauser.id','like','%'.$search.'%')
           ->orwhere('datauser.username','like','%'.$search.'%')
           ->paginate(10)->onEachSide(2)->fragment('srv');
        }else{
            $dataUser = Datauser::latest()->paginate(10)->onEachSide(2)->fragment('srv');
        }
        return view('tabel.halamandatauser',[
            'title' => 'Data User',
            'datauser' => $dataUser,
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
    public function store(TambahDataUserRequest $request)
    {
        $validate = $request->validated();
       
        $datauser = new Datauser;
        $image = $request->file('fotoprofil');
        $new_image = rand().'.'.$image->getClientOriginalExtension();
        $datauser-> fotoprofil = $new_image; 
        $image->move(public_path('galerifoto'), $new_image);
        $datauser->username = $request->username;
        $datauser->email = $request->email;
        $datauser->password = $request->password;
        $datauser->save();
       
        return redirect('datauser')->with('msg','Data User Berhasil Di Tambahkan !');
    }

    
    public function show(Datauser $datauser1, $id)
    {
            $data = $datauser1->find($id);

        return view('form.editdatauser')->with([
            'id' => $id,
            'fotoprofil' => $data->fotoprofil,
            'username' => $data->username,
            'email' => $data->email,
            'password' => $data->password,
            'title' => 'Edit Data User'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(HttpRequest $request, Datauser $datauser1,  $id)
    {
        $old_image_name = $request->hidden_image;
        $image = $request->file('fotoprofil');
      
        if($image != ''){

            $request->validate([
                'fotoprofil' => 'required|image|mimes:jpeg,jpg,png|max:5000',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required'
               
            ]);
    
            $image_name = $old_image_name;
            $image->move(public_path('galerifoto'), $image_name);
        
        }
        if($image == ''){

            $request->validate([
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
    
            $image_name = $old_image_name;
                   
        }

      $data = $datauser1->find($id);
      $data->fotoprofil = $image_name;
      $data->username = $request->username;
      $data->email= $request->email;
      $data->password= $request->password;
     
        
        $data->save();
        return redirect('datauser')->with('msg','Data Berhasil Di Update');
     
    }

    /**
     * Remove the specified resource from storage.
     */
   
    public function destroy(Datauser $datauser1, $id)
    {
        $data = $datauser1->find($id);
        $data->delete();
        return redirect('datauser')->with('msg','Data Berhasil Di Hapus');
        //
    }

    public function tambahdatauser(){
            return view('form.tambahdatauser')->with([
            'title' => 'Tambah Data User',
            
        ]);
    }
}
