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
<div class="container md-3"><button class="btn btn-danger col-md-middle" onclick="showForm()">Ürün Ekle</button></div>
<hr>
<div id="profile_view">
  <div class="container md-3">
    <style>
        th, td {
            text-align: center;
        }
        
        .btn {
            font-size: 1.2em;
            padding: 10px 20px;
        }
    </style>
    <table class="table table-striped" >
        <thead>
            <tr>
                <th scope="col">Ürün Resmi</th>
                <th scope="col">Ürün Adı</th>
                <th scope="col">Ürün Marka</th>
                <th scope="col">Ürün Model</th>
                <th scope="col">Ürün Fiyatı</th>
                <th scope="col">Kategori</th>
                <th scope="col">Satıcı</th>
                <th scope="col">Bilgi</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($veri as $urun) { ?>
                <tr>
                    <form action="<?php echo route('guncelle', $urun->id); ?>" method="GET">
                        <input type="text" name="gorsel" value="<?php echo $urun->gorsel; ?>" style="display: none; width: 20px">
                        <td><img src="uploads/<?php echo $urun->gorsel; ?>" class="card-img-top" alt="resim" style="max-width: 100px;"></td>
                        <td><input type="text" name="urunadi" value="<?php echo $urun->urunadi; ?>" class="form-control"></td>
                        <td><input type="text" name="marka" value="<?php echo $urun->marka; ?>" class="form-control"></td>
                        <td><input type="text" name="model" value="<?php echo $urun->model; ?>" class="form-control"></td>
                        <td><input type="text" name="fiyat" value="<?php echo $urun->fiyat; ?>" class="form-control"></td>
                        <td><input type="text" name="kategori" value="<?php echo $urun->kategori; ?>" class="form-control"></td>
                        <td><input type="text" name="satici" value="<?php echo $urun->satici; ?>" class="form-control"></td>
                        <td><input type="text" name="bilgi" value="<?php echo $urun->bilgi; ?>" class="form-control"></td>
                        <td>
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <button type="submit" class="btn btn-info btn-block btn-sm">Güncelle</button>
                        </td>
                    </form>
                    <td>
                        <form action="<?php echo route('sil', $urun->id); ?>" method="GET">
                            <button class="btn btn-danger btn-block btn-sm" type="submit">Sil</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</div>
<br>
<br>
<br>


<div id="edit_form" style="display: none;" class="container md-3" >
  <div class="card">
    <div class="card-header">
      Ürün Ekle
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="urunadi">Ürün Adı</label>
          <input type="text" name="urunadi" id="urunadi" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="marka">Marka</label>
          <input type="text" name="marka" id="marka" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="model">Model</label>
          <input type="text" name="model" id="model" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="fiyat">Fiyat</label>
          <input type="text" name="fiyat" id="fiyat" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="satici">Satıcı</label>
          <input type="text" name="satici" id="satici" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select name="kategori" id="kategori" class="form-control" required>
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
          <label for="gorsel">Ürün Fotoğrafı</label>
          <input type="file" name="gorsel" id="gorsel" class="form-control-file" required>
        </div>
        <div class="form-group">
          <label for="bilgi">Ürün Bilgisi</label>
          <textarea name="bilgi" id="bilgi" class="form-control" cols="30" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Ürün Ekle</button>
      </form>
    </div>
  </div>
  

    </div>        
       
<script>
  function showForm() {
   
  var profileView = document.getElementById("profile_view");
  var editForm = document.getElementById("edit_form");

    if (editForm.style.display === "block") {
      profileView.style.display = "block";
      editForm.style.display = "none";
    } else {
      profileView.style.display = "none";
      editForm.style.display = "block";
    }
  }
</script>
        