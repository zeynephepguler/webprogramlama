@php
    session_start(); 

if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_destroy();
   
}

@endphp
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
    
    <div class="container" style="background-color: rgb(235, 233, 233);width: %100; height:45px;">
      <div class="row" style="background-color: rgb(235, 233, 233); width: %100;">
        <div class="col" style=" position: absolute;  top: 10px;">
          
        İndirimli ürünleri incelemek için <a href="">tıklayın</a>
        </div>
        <div class="col">
          <ul>
            <a href="" style="text-decoration: none; color:rgb(71, 56, 2); vertical-align: middle; position: absolute; top: 10px; right: 650px;" >Anasayfa</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" style="text-decoration: none; color:rgb(71, 56, 2); vertical-align: middle; position: absolute; top: 10px; right: 550px;">Kayıt ol</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <form action="{{ route('kayitkontrol') }}" method="post">
                         @if(Session::get('fail'))
            <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
                        @csrf
              <input name="adi" style="width: 130px; position: absolute; top: 2px; right: 350px;" type="text" class="form-control" placeholder="Kullanıcı Adı" aria-label="Username" aria-describedby="basic-addon1">
              <input name="sifre" style="width: 130px; position: absolute; top: 2px; right: 210px;" type="text" class="form-control" placeholder="Şifre" aria-label="Username" aria-describedby="basic-addon1">
              <button style=" position: absolute; top: 2px; right: 120px;" type="submit" class="btn btn-success">Giriş Yap</button>
             
            </form> 
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
    <br><p style="position: absolute; top:60px; left: 135px; ">Mutfak Malzemelerim</p>    
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a id="main" class="nav-link active" aria-current="page"> Ürünler</a>
        </li>     

        
      </ul>

    </div>
  </div>
</nav>
    <div class="col">
      <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="esya3.jpg" alt="First slide" style="position: absolute; top:200px; height: 500px; width: 200px; ">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="esya2.png" alt="Second slide" style="position: absolute; top:200px; height: 500px; width: 200px; ">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="esya1.png" alt="Third slide">
            </div>
          </div>
          
        </div>
      </div>
      <center>
        <br>
        
        
     <img src="esya1.jpg" alt="" style="height: 400px; width: %100;"><img src="esya2.jpg" alt="" style="height: 400px; width: %100;">
    </center>
    </div>
    <br>
    <section style="background-color: rgb(235, 233, 233); ">
      <center>
        <br>
      <h1>En Çok Satılan Ürünler</h1>
      <p>Kaçırma</p>
      <br>
      </center>
    </section>  
    <center>
      <br>
    <section>
      
      <div class="row"   >
        &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;
        &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;
            <div class="card" style="width: 18rem;">
              <img src="tabak.jpg" class="card-img-top" alt="..." style="width: 262 px; height:262 px;">
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
              
            </div>
            &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;
            <div class="card" style="width: 18rem;">
              <img src="tabak2.jpg" class="card-img-top" alt="..." style="width: 50 px; height: 50 px;">
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
              
            </div>
            &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;
            <div class="card" style="width: 18rem;">
              <img src="tabak3.jpg" class="card-img-top" alt="..." style="width: 50 px; height: 50 px;">
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
        </div>
    </div>
  
    </section>
  </center>

  <section style="background: rgb(131,58,180);
  background: radial-gradient(circle, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 54%, rgba(252,176,69,1) 100%);; ">
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center>
    <h1 style="color: white;">Fırsatları Kaçırma</h1>
    
  <button  type="button" class="btn btn-light" onclick="location.href='{{ url('anasayfa') }}'"><h3>Alışverişe başla</h3></button>
  
</center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <br>
   
   <center>
    <img src="catal2.jpg" alt="" style="height: 300px; width: %100;"><img src="bhrt.jpg" alt="" style="height: 300px; width: %100;"><img src="cay.jpg" alt="" style="height: 300px; width: %100;"><img src="kek.jpg" alt="" style="height: 300px; width: %100;"><img src="tncre.jpg" alt="" style="height: 300px; width: %100;"><img src="kahve.jpg" alt="" style="height: 300px; width: %100;">
</center>
<br>
    <section style="background-color: rgb(235, 233, 233); ">
      <center>
        
        <br>
      <h1>Hemen Kayıt Ol</h1>
      <p>Alışverişe Başla</p>
      <br>
      </center>
    </section>  
    <center>
    
    <section>
     
      <section style="background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);">
        <div>
        <form action="{{ route('kayitol') }}" method="post">
          @csrf
          <br><br>
          <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="e-mail"  name="email" style="width: 300px">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Ad" name="ad" style="width: 300px">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Soyad" name="soyad" style="width: 300px">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Şifre" name="sifre" style="width: 300px">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Telefon" name="tel" style="width: 300px">
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Adres" name="adres" style="width: 300px">
          <br>
          <button type="submit" class="btn btn-primary"><a href="#basla"></a> Kayıt Ol</button>
          
        </div>
        </form>
       <br><br>
      </section>


