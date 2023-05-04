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

     public function duzenle(Request $req, $id)
    {
        $urun = urunlers::find($id);
        $urun->gorsel = $req->input('gorsel');
        $urun->urunadi = $req->input('urunadi');
        $urun->marka = $req->input('marka');
        $urun->model = $req->input('model');
        $urun->fiyat = $req->input('fiyat');
        $urun->kategori = $req->input('kategori');
        $urun->satici = $req->input('satici');
        $urun->bilgi = $req->input('bilgi');
        $urun->save();
        return redirect('/satici');
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
