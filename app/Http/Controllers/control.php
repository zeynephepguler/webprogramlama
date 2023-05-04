<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class control extends Controller
{
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
                $request->session()->put('LoggedUser', $userInfo->id);
                
                return redirect('anasayfa');

            }else{
                return redirect('/')->with('fail','sifre Yanlıs');
            }
        }
      }
}
