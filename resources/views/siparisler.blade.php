@include('saticiMenu');

<?php

// Veritabanı bağlantısı yapılır
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprogramlama";

$conn = new mysqli($servername, $username, $password, $dbname);

// Veritabanından sipariş verileri alınır
$sql = "SELECT * FROM siparislers";
$result = $conn->query($sql);
?>

<div class="container mt-4">
  <table class="table table-striped">
      <thead>
          <tr>
              <th>ID</th>
              <th>Kullanıcı ID</th>
              <th>Adres</th>
              <th>Toplam Tutar</th>
              <th>Durum</th>
              <th>Değiştir</th>
          </tr>
      </thead>
      <tbody>
          <?php while($row = $result->fetch_assoc()): ?>
          <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["kullanici_id"]; ?></td>
              <td><?php echo $row["adres"]; ?></td>
              <td><?php echo $row["toplam_tutar"]; ?></td>
              <td><?php echo $row["durum"]; ?></td>
              <td>
                  <form method='get'>
                      <input type='hidden' name='id' value='<?php echo $row["id"]; ?>'>
                      <div class="btn-group" role="group">
                          <button type="submit" name="onay" class="btn btn-success">Onaylandı</button>
                          <button type="submit" name="iptal" class="btn btn-danger">İptal Edildi</button>
                          <button type="submit" name="yolda" class="btn btn-warning">Yola Çıktı</button>
                          <button type="submit" name="teslim" class="btn btn-info">Teslim Edildi</button>
                      </div>
                  </form>
              </td>
          </tr>
          <?php endwhile; ?>
      </tbody>
  </table>
</div>

<?php
// Durum değişiklikleri için kontrol yapılır
if (isset($_GET["id"]) && isset($_GET["onay"])) {
    $id = $_GET["id"];
    $sql = "UPDATE siparislers SET durum='Kargo Onaylandı' WHERE id='$id'";
    $result = $conn->query($sql);
    header("Location: siparisler");
    exit;
} else if (isset($_GET["id"]) && isset($_GET["iptal"])) {
    $id = $_GET["id"];
    $sql = "UPDATE siparislers SET durum='Kargo İptal Edildi' WHERE id='$id'";
    $result = $conn->query($sql);
    header("Location: siparisler");
    exit;
}
 else if (isset($_GET["id"]) && isset($_GET["yolda"])) {
    $id = $_GET["id"];
    $sql = "UPDATE siparislers SET durum='Kargo Yola Çıktı' WHERE id='$id'";
    $result = $conn->query($sql);
    header("Location: siparisler");
    exit;
}
else if (isset($_GET["id"]) && isset($_GET["teslim"])) {
    $id = $_GET["id"];
    $sql = "UPDATE siparislers SET durum='Kargo Teslim Edildi' WHERE id='$id'";
    $result = $conn->query($sql);
    header("Location: siparisler");
    exit;
}

$conn->close();

?>