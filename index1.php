<?php
$barang = [
      [
            "nama" => "laptop",
            "merk" => "lenovo",
            "warna" => "white",
            "harga" => "5jt",
            "gambar" => "lenovo.jpg"
      ],
      [
            "nama" => "macbook",
            "merk" => "imac",
            "warna" => "white",
            "harga" => "10jt",
            "gambar" => "mac.jpg"
      ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tokopin</title>
</head>

<body>


      <?php foreach ($barang as $brg) { ?>
            <ul>
                  <li>
                        <img src="img<?= $brg["gambar"]; ?>">
                  </li>
                  <li>nama: <?php echo $brg["nama"]; ?></li>
                  <li>merk: <?php echo $brg["merk"]; ?></li>
                  <li>warna: <?php echo $brg["warna"]; ?></li>
                  <li>harga: <?php echo $brg["harga"]; ?></li>
            </ul>
      <?php } ?>

</body>

</html>