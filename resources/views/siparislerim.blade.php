@include('menu');
<head>
	<title>Siparişler</title>
	
	<?php
// Veritabanı bağlantısı
use Illuminate\Support\Facades\DB;

$siparisler = DB::table('siparislers')
                ->where('kullanici_id', session('LoggedUser'))
                ->get();
                ?>

<div class="container">
    <div class="row">
        @foreach($siparisler as $siparis)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sipariş #{{ $siparis->id }}</h5>
                    <p class="card-text">Toplam Tutar: {{ $siparis->toplam_tutar }}</p>
                    <p class="card-text">Tarih: {{ $siparis->created_at }}</p>
                    @if ($siparis->durum == "Onay Bekliyor")
                    <p class="card-text">Durum: <span class="badge bg-primary">{{ $siparis->durum }}</span></p>
                    @elseif ($siparis->durum == "Kargo Onaylandı")
                    <p class="card-text">Durum: <span class="badge bg-warning text-dark">{{ $siparis->durum }}</span></p>
                    @elseif ($siparis->durum == "Kargo Teslim Edildi")
                    <p class="card-text">Durum: <span class="badge bg-success">{{ $siparis->durum }}</span></p>
                    @elseif ($siparis->durum == "Kargo İptal Edildi")
                    <p class="card-text">Durum: <span class="badge bg-danger">{{ $siparis->durum }}</span></p>
                    @elseif ($siparis->durum == "Kargo Yola Çıktı")
                    <p class="card-text">Durum: <span class="badge bg-light">{{ $siparis->durum }}</span></p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



