<?php

namespace App\Http\Controllers;
use App\Models\urunlers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator, Input, Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\sepet;


class urunler extends Controller
{
    public function verialma (Request $req)
    {
      $urun = new urunlers();
     
      $urun->urunadi=$req->urunadi;
      $urun->marka=$req->marka;
      $urun->model=$req->model;
      $urun->bilgi=$req->bilgi;
      $urun->fiyat=$req->fiyat;
      $urun->kategori=$req->kategori;
      $urun->satici=$req->satici;
      if($req->hasfile('gorsel'))
      {
          $file = $req->file('gorsel');
          $extenstion = $file->getClientOriginalExtension();
          $filename = $req->urunadi.$req->satici.'.'.$extenstion;
          $file->move('uploads', $filename);
          $urun->gorsel = $filename;
      }
       
      $urun->save();
      return back();
       
     }

     public function guncelle(Request $req, $id)
    {
        
            DB::table('urunlers')
                ->where('id', $id)
                ->update([
                    'gorsel' => $req->input('gorsel'),
                    'urunadi' => $req->input('urunadi'),
                    'marka' => $req->input('marka'),
                    'model' => $req->input('model'),
                    'fiyat' => $req->input('fiyat'),
                    'kategori' => $req->input('kategori'),
                    'satici' => $req->input('satici'),
                    'bilgi' => $req->input('bilgi')
                ]);
            return back(); // Ürünler sayfasına geri dön
        
        
    }


     public function urungoster(Request $req)
     {
     $veri=DB::table('urunlers')->get();
     return view('satici',['veri'=>$veri]);

     }
     public function urunler(Request $req)
     {
     $veri=DB::table('urunlers')->get();
     return view('urunlerim',['veri'=>$veri]);

     }

     

     public function incele($id)
    {

        $data=DB::table('urunlers')->where('id','=',$id)->get();

        return view('incele',['bilgiler'=>$data]);
    }
    public function sepeteEkle($id)
    {
        
        $sepet= new sepet();
        $sepet->urun_id=$id;
        $sepet->sepet_id=session('LoggedUser');
        $sepet->save();
        

        $data=DB::table('urunlers')->where('id','=',$id)->get();

        

        return back()->with('Ürün sepete eklendi');
    }
    public function favori($id)
    {

        $data=DB::table('urunlers')->where('id','=',$id)->get();

        return view('favori',['bilgiler'=>$data]);
    }

    public function sil($id)
    {

        $data=DB::table('urunlers')->where('id','=',$id)->delete();

        return back()->with('Ürün Silindi');
    }

   


}
