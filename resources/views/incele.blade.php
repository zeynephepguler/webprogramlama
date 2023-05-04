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
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                        

          
        
       
       
        
       
            <a href="" style="text-decoration: none; color:rgb(71, 56, 2); vertical-align: middle; "></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </ul>
        </div>
      </div>
    </div>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-warning py-4" >
  <div class="container" style="height: 100px">  
    <a class="navbar-brand" href="/"> 
        <img style="position: absolute; top: 20px ; height: 100px; width: 100px; left:25px;" src="logo.png" alt=""><br>
    <br><p style="position: absolute; top:60px; left: 135px; ">Mutfak Malzemelerim</p>    
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a id="main" class="nav-link active" aria-current="page" href="/anasayfa"> Ürünler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/siparislerim" >Siparişlerim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sepet">Sepetim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dnmGiris">Cüzdanım</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profil">Profil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/dnmGiris">Ayarlar</a>
        </li>
       

        
      </ul>

    </div>
  </div>
</nav>
<br>
<br>
<br>
<div>
    @foreach ($bilgiler as $bilg )
    <div style="position: absolute;left: 250px; ">
    <table>
        <tr><img src="/uploads/{{ $bilg->gorsel }}" alt=""></tr>
    </table>
    </div>    
     

    <div style="position: absolute; right: 300px;">
        <h1>{{ $bilg->urunadi }}</h1>
         <table class="table table-hover">
            <tbody>
              <tr>                
                <td>Ürünün Adı :</td>
                <td>{{ $bilg->urunadi }}</td>                
              </tr>
              <tr>                
                <td>Ürünün Markası :</td>
                <td>{{ $bilg->marka }}</td>                
              </tr>
              <tr>                
                <td>Ürünün Modeli :</td>
                <td>{{ $bilg->urunadi }}</td>                
              </tr>
              <tr>                
                <td>Kategorisi :</td>
                <td>{{ $bilg->kategori }}</td>                
              </tr>
              <tr>                
                <td>Fiyat :</td>
                <td>{{ $bilg->fiyat }}</td>                
              </tr>
              <tr>                
                <td>satıcı Adı :</td>
                <td>{{ $bilg->satici }}</td>                
              </tr>
              <tr>                
                <td>Ürün Hakkında :</td>
                <td>{{ $bilg->bilgi }}</td>                
              </tr>   
              <?php session_start();
              session()->put('Urun',$bilg->id);
               ?>
              <tr><td><button  type="button" class="btn btn-warning"><a href="{{url('sepet',$bilg->id)}}" style=" text-decoration:none ;color: white;"><h3>Sepete Ekle</h3></a></button>
                </td>
              </tr>
            </tbody>
          </table>


    </div>
    @endforeach