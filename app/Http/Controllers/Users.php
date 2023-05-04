<?php

namespace App\Http\Controllers;
use App\Models\kullanici;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator, Input, Redirect;
use Illuminate\Support\Facades\DB;


class Users extends Controller
{
    public function verialma (Request $req)
    {
      $user = new kullanici();
      $user->kullaniciAdi=$req->ad;
      $user->Soyad=$req->soyad;
      $user->Telefon=$req->tel;
      $user->Adres=$req->adres;
      $user->Sifre=Hash::make($req->sifre);
      $user->Email=$req->email;
       
      $user->save();
      return view('anasayfa');
       
     }

      function kontrol(Request $request){
        //Validate requests
          $validator = Validator::make($request->all(), [
          'adi'=>'required|kullaniciAdi|unique:kullanicis',
          'sifre'=>'required|Sifre|min:2|max:12',

        ]);

        $userInfo = kullanici::where('kullaniciAdi','=', $request->adi)->first();

        if(!$userInfo){
            return back()->with('fail','E postaya kayıtlı kullanıcı yok');
        }else{
            //check password
            if(Hash::check($request->sifre, $userInfo->Sifre)){
                $request->session()->put(['LoggedUser'=> $userInfo->id,'LoggedUserName'=>$userInfo->kullaniciAdi,'LoggedUserLast'=>$userInfo->Soyad]);
                
                return redirect('anasayfa');

            }else{
                return redirect('i')->with('fail','sifre Yanlıs');
            }
        }
      }
      function kullanicibilgileriniyolla(){
        $k=DB::table('kullanicis')->where('id','=',session('LoggedUser'))->get(); 
        $veri=DB::table('urunlers')->get();
        return view('anasayfa',['LoggedUserInfo'=> $k],['veri'=>$veri]);
    }
   
    
}
