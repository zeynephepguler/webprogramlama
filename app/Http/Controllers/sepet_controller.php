<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator, Input, Redirect;
use Illuminate\Support\Facades\DB;

class sepet_controller extends Controller
{
    public function sepetim(Request $req)
    {
        $urunIds = DB::table('sepets')->where('sepet_id', '=', session('LoggedUser'))->pluck('urun_id');
        
        $urunler = DB::table('sepets')
        ->select('urun_id', DB::raw('SUM(adet) as toplam_adet'))
        ->where('sepet_id','=',session('LoggedUser'))
        ->groupBy('urun_id')
        ->get();
        $kullanici = DB::table('kullanicis')->where('id', '=', session('LoggedUser'))->pluck('adres');
        foreach ($urunler as $key => $urun) {
            $urun_detay = DB::table('urunlers')->where('id', '=', $urun->urun_id)->get();

        }
        
        
        return view('sepet', ['urunler' => $urunler],['kullanici'=>$kullanici]);
    }

    public function aktar()
    {        

        return view('sepetim');
    }
}
