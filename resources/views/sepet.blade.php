@include('menu');
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bootstrap Sepetim Sayfası</title>
    <!-- Bootstrap CSS dosyası -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    />
  </head>
  
  <body>
    <?php 
    use Illuminate\Support\Facades\DB;
    
     ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ürünleriniz</h5>
        
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Fiyatı</th>
                    <th scope="col">Miktarı</th>
                    <th scope="col">Toplam Fiyat</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($urunler) > 0)
                  @foreach ($urunler as $urun )
               
                    <?php                                      
                    $urun_detay = DB::table('urunlers')->where('id', '=', $urun->urun_id)->first();
                     ?>
                    <tr name="urun_detay []">
                      <th scope="row"></th>
                      <td>{{ $urun_detay->urunadi }}</td>
                      <td>{{ $urun_detay->fiyat }}</td>
                      <td>{{ $urun->toplam_adet }}</td>
                      <td>₺{{ $urun_detay->fiyat * $urun->toplam_adet }}</td>
                      <td>
                        <form action=" {{ route('silS', $urun->urun_id) }}" method="GET">
                          <button class="btn btn-danger btn-block btn-sm" type="submit">Sil</button>
                      </form>
                      </td>
                    </tr>
                  @endforeach
                @endif
               
              
                 </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
         
              <h5 class="card-title">Sipariş Özeti</h5>
              
              <table class="table">
                <tbody>
                  <tr>
                    <th scope="row">Adres:</th>
                    <td name="adres">{!! $kullanici !!}</td>
                  </tr>
                  <tr>
                    <?php $toplam_fiyat = 0;
                    foreach ($urunler as $urun) {
                      $urun_detay = DB::table('urunlers')->where('id', '=', $urun->urun_id)->first();
                      $toplam_fiyat += $urun_detay->fiyat * $urun->toplam_adet;
                    }
                    ?>
                    <th scope="row">Toplam Fiyat:</th>
                    <td name="toplam_fiyat">₺{{ $toplam_fiyat }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <br>
        <form action="{{ route('siparisPost') }}" method="post">
          @csrf
          <input type="hidden" name="adres" value="{{ $kullanici }}">
          <input type="hidden" name="toplam_fiyat" value="{{ $toplam_fiyat }}">
          <button type="submit" class="btn btn-primary float-end">Siparişi Tamamla</button>
        </form>
        
       
        
                 
