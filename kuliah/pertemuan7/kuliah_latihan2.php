<?php 
$mahasiswa = [
    [
        "nama" => "Wina Agustina",
        "npm" => "213040093",
        "email" => "wina.213040093@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "au1.jpg",
        "nomor" => "1"
    ],
    [
        "nama" => "Dea Abeliya",
        "npm" => "213040070",
        "email" => "dea.213040070@mail.unpas.ac.id",
        "jurusan" => "Teknik Mesin",
        "gambar" => "au2.jpg",
        "nomor" => "2"
    ],
    [
        "nama" => " Mutiara Laelani Firdaus",
        "npm" => "213040079",
        "email" => "mutiara.213040079@mail.unpas.ac.id",
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "au3.jpg",
        "nomor" => "3"
        
    ],
];
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar mahasiswa</title>
  </head>
  <body>
    
    <div claas="container">
        <h1>Daftar Mahasiswa</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($mahasiswa as $mhs){ ?>
    <tr>
      <th scope="row"><?= $mhs["nomor"]  ?></th>
      <td>
      <img src="img/<?= $mhs["gambar"]?>" height="50" class="rounded-circle">
      </td>
      <td><?= $mhs["nama"] ?></td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
          <a href="kuliah_latihan3.php?nama=<?=$mhs["nama"]; ?>&npm=<?=$mhs["npm"]; ?>&email=<?=$mhs["email"]; ?>&jurusan=<?=$mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"];?>" class="btn badge bg-info">detail</a>
      </td>
    </tr>
   <?php } ?> 
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>