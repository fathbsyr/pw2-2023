<?php
  $m_fruits = [
    ["id" => "01", "name" => "Apel", "color" => "Merah" ,"stock" => 20, "price" => 'Rp 15.000', "description" => "manis namun sedikit asam"],
    ["id" => "02", "name" => "Mangga", "color" => "Hijau", "stock" => 30, "price" => 'Rp 20.000', "description" => "asam namun manis"],
    ["id" => "03", "name" => "Durian", "color" => "Hijau", "stock" => 7, "price" => 'Rp 40.000', "description" => "buah yang sangat tajam"],
    ["id" => "04", "name" => "Tomat", "color" => "Merah", "stock" => 90, "price" => 'Rp 5.000', "description" => "buah yang biasa di sayur"],
    ["id" => "05", "name" => "Manggis", "color" => "Coklat", "stock" => 15, "price" => 'Rp 10.000', "description" => "buah dengan daging ungu"],
    ["id" => "06", "name" => "Pisang", "color" => "Kuning", "stock" => 60, "price" => 'Rp 15.000', "description" => "buah yang disukai monyet"],
    ["id" => "07", "name" => "Stroberi", "color" => "Merah", "stock" => 80, "price" => 'Rp 10.000', "description" => "buah asam tetapi favorit"],
    ["id" => "03", "name" => "Salak", "color" => "Hitam", "stock" => 25, "price" => 'Rp 20.000', "description" => "manis dan sedikit kecut"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($m_fruits as $fruit) {
            echo '<tr>';
            echo '<td>'.$fruit["id"].'</td>';
            echo '<td>'.$fruit["name"].'</td>';
            echo '<td>'.$fruit["color"].'</td>';
            echo '<td>'.$fruit["stock"].'</td>';
            echo '<td>'.$fruit["price"].'</td>';
            echo '<td>'.$fruit["description"].'</td>';
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>