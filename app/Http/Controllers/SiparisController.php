<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siparisler;
use Illuminate\Support\Facades\DB;


class SiparisController extends Controller
{
    public function post(Request $request)
    {
             

        // Sipariş kaydını oluştur
        $siparis = new siparisler();
        $siparis->kullanici_id = session('LoggedUser');
        $siparis->adres =$request->adres;
        $siparis->toplam_tutar =$request->toplam_fiyat;
        $siparis->save();

        $data=DB::table('sepets')->where('sepet_id','=',session('LoggedUser'))->delete();

        

        // Sipariş tamamlandı mesajıyla siparişler sayfasına yönlendir
        return back()->with('success', 'Siparişiniz başarıyla tamamlandı!');
    }

    
}

