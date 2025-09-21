<?php

namespace App\Http\Controllers;

use App\Models\Akunwisatawan;
use App\Models\Datauser;
use App\Models\User;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class AkunuserController extends Controller
{
    public function index(Request $request)
    {
        return $request->user();
    }

    public function register(Request $request)
    {
      $datauser =new Datauser();
    
      if($request->fotoprofil){
          $name = time().'.' . explode('/', explode(':', substr($request->fotoprofil, 0, strpos
          ($request->fotoprofil, ';')))[1])[1];

          $image = explode('base64,',$request->fotoprofil);
          $image = end($image);
          $image = str_replace(' ', '+', $image);

         file_put_contents(public_path("galerifoto/".$name), base64_decode($image));
  
      }

      $datauser->fotoprofil= $name;
      $datauser->username= $request->username;
      $datauser->email = $request->email;
      $datauser->password = $request->password;
      $datauser->save();
           
      

      return response()->json([
          'result' => $result,
          'status' => true,
          'message' => 'Berhasil Terdaftar'
  ]);
}
  

    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
          ]);
    
          $email = $request->input('email');
          $password = $request->input('password');
    
    
          $user = Datauser::where('email', $email)->first();
         
          
          if(!$user){
            return response()->json([
                'status' => "false",
                'message' => 'Login Gagal'
        ]);
    
          }


          $password2 = Datauser::where('password', $password)->first();
          if(!$password2){
            return response()->json([
                'status' => "false",
                'message' => 'Login Gagal'
        ]);
    
          }

                  
          return response()->json([
            'status' => "true",
            'message' => 'Login Berhasil',
            // 'data'  => $user,
            'username'  => $user['username'],
            'fotoprofil'  => $user['fotoprofil']
          ]);
              
                      
    }


    public function logout(Request $request){
        $request->user()->forceFill([
            'api_token'=> null,

        ])->save();

        return response()->json(['message'=>'success']);
        
    }

    // public function loginadmin(Request $request) {
    //     $this->validate($request, [
    //         'username' => 'required',
    //         'password' => 'required'
    //       ]);
    
    //       $username = $request->input('username');
    //       $password = $request->input('password');
    
    
    //       $admin = User::where('username', $username)->first();
       
          
    //       if(!$admin){
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Login Gagal'
    //     ]);
    
    //       }

    //       $isValidPassword = Hash::check($password, $admin->password);
    //       if(!$isValidPassword) {
    
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Gagal Masuk']);
    //       }
    
    
    //        $token = $admin->createToken('auth_token')->plainTextToken;
    
           
    //       return response()->json([
    //         'status' => true,
    //         'message' => 'Login Berhasil',
    //         'dataadmin'  => $admin,
    //         'namaadmin'  => $admin['name']
    //       ]);
              
                      
    // }
}
