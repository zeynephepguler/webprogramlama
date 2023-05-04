<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="css/app.css" rel="stylesheet">

</head>
  <body style="background-color: rgb(255, 248, 248) ; width: %100; overflow:-moz-scrollbars-vertical; overflow-x:hidden; overflow:-moz-scrollbars-vertical; overflow;" >
    <div class="container" style="background-color: rgb(235, 233, 233);width: %100;">
      <div class="row" style="background-color: rgb(235, 233, 233); width: %100;">
        <div class="col" style=" position: absolute;  top: 10px;">
        İndirimli ürünleri incelemek için <a href="http://">tıklayın</a>
        </div>
        <div class="col">
          <ul>
            <a href="" style="text-decoration: none; color:rgb(71, 56, 2); vertical-align: middle; position: absolute; top: 10px; right: 650px;" >Anasayfa</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" style="text-decoration: none; color:rgb(71, 56, 2); vertical-align: middle; position: absolute; top: 10px; right: 550px;">Kayıt ol</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        
            
          
          <button style=" position: absolute; top: 2px; right: 120px; height: 35px; width: 100px;" type="submit" class="btn btn-danger" onclick="location.href='{{ url('i') }}'">Çıkış Yap</button>
        
       
       
        
       
            <a href="" style="text-decoration: none; color:rgb(71, 56, 2); vertical-align: middle; "></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </ul>
        </div>
      </div>
    </div>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-warning py-4" >
  <div class="container" style="height: 100px">  
    <a class="navbar-brand" href="/"> <img style="position: absolute; top: 20px ; height: 100px; width: 100px; left:25px;" src="logo.png" alt=""><br>
    <br><p style="position: absolute; top:60px; left: 135px; ">Mutfak Malzemelerim Satıcısı</p>    
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a id="main" class="nav-link active" aria-current="page" href="/urunlerim"> Ürünlerim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/siparisler" >Siparişler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kazanc">Kazanç</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profil">Profil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/ayarlar">Ayarlar</a>
        </li>
     </ul>
        </div>
</nav>
<br>
<hr>
<?php 
use Illuminate\Support\Facades\DB;



?>

<div><h1>Ürün Ekle</h1></div>

         <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label for="">Ürün Adı</label>
                <input type="text" name="urunadi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Marka</label>
                <input type="text" name="marka" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Model</label>
                <input type="text" name="model" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Fiyat</label>
                <input type="text" name="fiyat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Satıcı</label>
                <input type="text" name="satici" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <select name="kategori" id="" class="form-control" required>
                    <option value="">Seçim Yapınız</option>
                    <option value="Yemek Takımı">Yemek Takımı</option>
                    <option value="Çatal Bıçak Seti">Çatal Bıçak Seti</option>
                    <option value="Baharat Takımı">Baharat Takımı</option>
                    <option value="Fırın&Kek Kalıbı">Fırın&Kek Kalıbı</option>
                    <option value="Çaydanlık">Çaydanlık</option>
                    <option value="Tencere Seti">Tencere Seti</option>
                    <option value="Elektronik">Elektronik</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ürün Fotoğrafı</label>
                <input type="file" name="gorsel" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Ürün Bilgisi</label>
                <br>
                <textarea name="bilgi" id="" cols="30" rows="4"></textarea>            </div>
         </div>
         <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary btn-block">Ürün Ekle</button>          
          </div>
        </form>
     </div>
<div id="profile_view">
  <table class="table table-borderless-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Görsel</th>
        <th scope="col">Ürün Adı</th>
        <th scope="col">Marka</th>
        <th scope="col">Model</th>
        <th scope="col">Fiyat</th>
        <th scope="col">Kategori</th>
        <th scope="col">Satıcı</th>
        <th scope="col">Bilgi</th>
        <th scope="col"></th>
      </tr>
    </thead>
    @foreach ($veri as $veris )
      <tbody>
      <tr>
        <th scope="row">{{ $veris->id }}</th>
        <td><img src="uploads/{{ $veris->gorsel }}" alt="" style="height: 50px; width: 50px;"></td>
        <td>{{ $veris->urunadi }}</td>
        <td>{{ $veris->marka }}</td>
        <td>{{ $veris->model }}</td>
        <td>{{ $veris->fiyat }}</td>
        <td>{{ $veris->kategori }}</td>
        <td>{{ $veris->satici }}</td>
        <td>{{ $veris->bilgi }}</td>
        <td><td><a href="{{url('urunlerim',$veris->id)}}"><button class="btn btn-danger">Sil</button></a> </td>
        
        
      </tr>
    </tbody>
    @endforeach
    <td>
      <button class="btn btn-warning" onclick="showForm({{$veris->id}})">Düzenle</button>
    </td>
  </table>
</div>
<br>
<br>
<br>









        </div>
        <div id="edit-form" style="display:none;">
          @foreach ($veri as $veris )
          <form action="" method="POST">
            @csrf
            <div id="profile_view">
              <table class="table table-borderless-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Görsel</th>
                    <th scope="col">Ürün Adı</th>
                    <th scope="col">Marka</th>
                    <th scope="col">Model</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Satıcı</th>
                    <th scope="col">Bilgi</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                
                  <tbody>
                  <tr>
                    <th scope="row">{{ $veris->id }}</th>
                    <td><img name="uploads/{{ $veris->gorsel }}" src="uploads/{{ $veris->gorsel }}" alt="" style="height: 50px; width: 50px;"></td>
                    <input type="text" name="gorsel" value="uploads/{{ $veris->gorsel }}" style="display:none;">

                    <td><input type="text" name="urunadi" value="{{ $veris->urunadi }}"></td>
                    <td><input type="text" name="marka" value="{{ $veris->marka }}"></td>
                    <td><input type="text" name="model" value="{{ $veris->model }}"></td>
                    <td><input type="text" name="fiyat" value="{{ $veris->fiyat }}"></td>
                    <td><input type="text" name="kategori" value="{{ $veris->kategori }}"></td>
                    <td><input type="text" name="satici" value="{{ $veris->satici }}"></td>
                    <td><input type="text" name="bilgi" value="{{ $veris->bilgi }}"></td>
                    <td><td><a href="{{url('urunlerim',$veris->id)}}"><button class="btn btn-danger">Sil</button></a> </td>
                    
                    
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-warning" type="submit">Kaydet</button>
                    </td>
                  </tr>
                </tbody>
           
          </form>
          @endforeach
        </div>
        <br>
        <br>
        <br>
        <script>
          function showForm() {
            var profileView = document.getElementById("profile_view");
            var editForm = document.getElementById("edit-form");
        
            if (editForm.style.display === "none") {
              profileView.style.display = "none";
              editForm.style.display = "block";
            } else {
              profileView.style.display = "block";
              editForm.style.display = "none";
            }
          }
        </script>
        