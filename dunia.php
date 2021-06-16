<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<?php
$fid=1;
$data_url = file_get_contents('https://api.kawalcorona.com/');
$datafix = json_decode($data_url,true);
$alldata=count($datafix);
$i=0;

?>
</head>
<body>

<h1 align="center">Data Kasus Covid-19 <br>di Masing-Masing Negara</h1>
<nav class="navbar navbar-light bg-light justify-content-between">
<a type="button" class="btn btn-outline-success" href="https://kespel.kemkes.go.id/vaksinasi_int/vaksinasi_int_public/add">Daftar Vaksinasi</a>
  <form class="form-inline">
  <a type="button" class="btn btn-outline-success" href="indonesia.php">Covid-19 di Indonesia</a>
  </form>
</nav>
<marquee bgcolor="cyan">Selalu Patuhi Protokol Kesehatan <-----------> patuhi 3 M (Memakai Masker, Mencuci Tangan, Menjaga Jarak) <-----------> Segera Daftar dan Lakukan Vaksinasi <-----------> Hiburan Dikala pandemi <a href="https://matias.ma/nsfw/">klik disini</a>
</marquee>

<table class="table table-bordered table-striped">
            <tr>
                <th>No.</th>
                <th>Nama Negara</th>
                <th>Jumlah Kasus</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                <th>Aktif</th>
                
            </tr>
    <?php
                while($i < $alldata):
                   
            ?>
            <tr>
                <td><?=$fid++?></td>
                <td><?=$datafix[$i]['attributes']['Country_Region']?></td>
                <td><?=$datafix[$i]['attributes']['Confirmed']?></td>
                <td><?=$datafix[$i]['attributes']['Recovered']?></td>
                <td><?=$datafix[$i]['attributes']['Deaths']?></td>
                <td><?=$datafix[$i]['attributes']['Active']?></td> 
            </tr>
        <?php  $i++ ;endwhile; //penutup perulangan while ?>
        </table>

</body>
</html>
