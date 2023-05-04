@include('menu');
<?php 
use Illuminate\Support\Facades\DB;
session_start();
$kullanicilar = DB::table('kullanicis')->where('id',session('LoggedUser'))
                ->get();

                ?>
@foreach ($kullanicilar as $kullanici) 
<center>
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-9">Kullanıcı Bilgileri</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Ad Soyad:</strong> <?php echo $kullanici->kullaniciAdi ?> <?php echo $kullanici->Soyad ?></p>
                <p class="card-text"><strong>Email:</strong> <?php echo $kullanici->Email ?></p>
                <p class="card-text"><strong>Adres:</strong> <?php echo $kullanici->Adres ?></p>
                <p class="card-text"><strong>Telefon Numarası:</strong> <?php echo $kullanici->Telefon ?></p>
            </div>
        </div>
    </div>
</div>
</center>

@endforeach

