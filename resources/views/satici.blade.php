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
          <a class="nav-link" href="/dnmGiris">Cüzdanım</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dnmGiris">Profil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/dnmGiris">Ayarlar</a>
        </li>
       

        
      </ul>

    </div>
  </div>
</nav>

<div>
  <br><br>
  <table class="table">
    <tbody>
     
      <tr>
        <th scope="row">
          <div class="col" style="float: left;width: %40; height:%100;" >
            <br>
            <br>
            <br>
            
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Yemek Takımı</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Çatal Bıçak Seti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Baharat Takımı</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Fırın&Kek kalıbı</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Çaydanlık</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Tencere Seti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Elektronik</a>
              </li>
            </ul>
            </div>
        </th>
       
       
      @foreach ($veri as $veris )
        <td></td>
        <td name="veri[]"><div class="card" style="width: 18rem;">
          <img src="/uploads/{{ $veris->gorsel }}" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
          <div class="card-body">
            <h5 class="card-title">{{ $veris->urunadi }}</h5>
            <p class="card-text">{{ $veris->model }}</p>           
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" style="color: red;">%30 indirim</li>
            <li class="list-group-item"><del>{{ $veris->fiyat }}</del></li>
            <li class="list-group-item">70</li>
          </ul>
          <div class="card-body">
            <a href="{{url('incele',$veris->id)}}" class="card-link">İncele</a>
            <a href="#" class="card-link">Sepete Ekle</a>
          </div></td>       
                      
      @endforeach
    </tr>
      <tr>
        <th scope="row"></th>
        <td> <div class="card" style="width: 18rem;">
          <img src="cay.jpg" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
          <div class="card-body">
            <h5 class="card-title">Kütahya Porselen</h5>
            <p class="card-text">En iyilrinin En iyisi.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" style="color: red;">%30 indirim</li>
            <li class="list-group-item"><del>100</del></li>
            <li class="list-group-item">70</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">İncele</a>
            <a href="#" class="card-link">Sepete Ekle</a>
          </div>
          
        </div></td>
        <td> <div class="card" style="width: 18rem;">
          <img src="cay2.jpg" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
          <div class="card-body">
            <h5 class="card-title">Kütahya Porselen</h5>
            <p class="card-text">En iyilrinin En iyisi.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" style="color: red;">%30 indirim</li>
            <li class="list-group-item"><del>100</del></li>
            <li class="list-group-item">70</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">İncele</a>
            <a href="#" class="card-link">Sepete Ekle</a>
          </div>
          
        </div></td>
        <td> <div class="card" style="width: 18rem;">
          <img src="kahve.jpg" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
          <div class="card-body">
            <h5 class="card-title">Kütahya Porselen</h5>
            <p class="card-text">En iyilrinin En iyisi.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" style="color: red;">%30 indirim</li>
            <li class="list-group-item"><del>100</del></li>
            <li class="list-group-item">70</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">İncele</a>
            <a href="#" class="card-link">Sepete Ekle</a>
          </div>
          
        </div></td>
      </tr>
      <tr>
        <th scope="row"></th>
        <td> <div class="card" style="width: 18rem;">
          <img src="kek.jpg" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
          <div class="card-body">
            <h5 class="card-title">Kütahya Porselen</h5>
            <p class="card-text">En iyilrinin En iyisi.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" style="color: red;">%30 indirim</li>
            <li class="list-group-item"><del>100</del></li>
            <li class="list-group-item">70</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">İncele</a>
            <a href="#" class="card-link">Sepete Ekle</a>
          </div>
          
        </div></td>
        <td> <div class="card" style="width: 18rem;">
          <img src="kek2.jpg" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
          <div class="card-body">
            <h5 class="card-title">Kütahya Porselen</h5>
            <p class="card-text">En iyilrinin En iyisi.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" style="color: red;">%30 indirim</li>
            <li class="list-group-item"><del>100</del></li>
            <li class="list-group-item">70</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">İncele</a>
            <a href="#" class="card-link">Sepete Ekle</a>
          </div>
          
        </div></td>
        <td> <div class="card" style="width: 18rem;">
          <img src="tabak3.jpg" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
          <div class="card-body">
            <h5 class="card-title">Kütahya Porselen</h5>
            <p class="card-text">En iyilrinin En iyisi.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" style="color: red;">%30 indirim</li>
            <li class="list-group-item"><del>100</del></li>
            <li class="list-group-item">70</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">İncele</a>
            <a href="#" class="card-link">Sepete Ekle</a>
          </div>
          
        </div></td>
      </tr>
   
    </tbody>
  </table>


</div>
