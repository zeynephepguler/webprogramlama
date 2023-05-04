<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('satici');
});

Route::get('/i', function () {
    return view('index');
});
Route::get('/giris', function () {
    return view('index');
});
Route::get('/anasayfa', function () {
    return view('anasayfa');
});
Route::get('/urunlerim', function () {
    return view('urunlerim');
});

Route::get('/satici', function () {
    return view('satici');
});
Route::get('/incele', function () {
    return view('incele');
});
Route::get('/sepet', function () {
    return view('sepet');
});
Route::get('/siparislerim', function () {
    return view('siparislerim');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/siparisler', function () {
    return view('siparisler');
});

Route::post('home-i', [App\Http\Controllers\Users::class,'kontrol'])->name('kayitkontrol');
Route::post('urunlerim', [App\Http\Controllers\Urunler::class,'verialma'])->name('urunekle');
Route::post('i', [App\Http\Controllers\Users::class,'verialma'])->name('kayitol');
Route::post('home-anasayfa', [App\Http\Controllers\Users::class,'kontrol'])->name('kayitkontrol');
Route::get('anasayfa', [App\Http\Controllers\Users::class,'kullanicibilgileriniyolla'])->name('kbilgi');

Route::get('satici', [App\Http\Controllers\Urunler::class,'urungoster'])->name('ugos');
Route::get('/incele/{id}',[App\Http\Controllers\urunler::class,'incele']);
Route::get('/sepet/{id}',[App\Http\Controllers\urunler::class,'sepeteEkle']);
Route::get('/anasayfa/{id}',[App\Http\Controllers\urunler::class,'incele']);
//if (!session('flag')) {
    //session(['flag' => true]);
   // Route::get('sepet', [App\Http\Controllers\urunler::class,'sepeteEkle']);
    
//}
Route::get('sepet',[App\Http\Controllers\sepet_controller::class,'sepetim']);

Route::get('urunlerim', [App\Http\Controllers\Urunler::class,'urunler'])->name('urunler');
Route::get('/urunlerim/{id}', [App\Http\Controllers\Urunler::class,'sil'])->name('sil');
Route::get('/home-urunlerim/{id}', [App\Http\Controllers\Urunler::class,'guncelle'])->name('guncelle');
Route::get('home-sepet/{id}',[App\Http\Controllers\sepet_controller::class,'sil'])->name('silS');

Route::post('sepet', [App\Http\Controllers\SiparisController::class, 'post'])->name('siparisPost');
//Route::post('urunlerim', [App\Http\Controllers\urunler::class, 'duzenle'])->name('duzenle');{{ route('duzenle', ['id' => $veris->id]) }}
