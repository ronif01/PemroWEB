<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<?php
$fid=1;
$data_url = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
$datafix = json_decode($data_url,true);
$alldata=count($datafix);
$i=0;
?>
<?php
function from_url($url){
    $client=curl_init($url);
    curl_setopt($client,CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($client,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($client);
    return json_decode($response);
}
$url="https://api.kawalcorona.com/indonesia/";
$result=from_url($url);
$jmlh_positif=$result[0]->positif;
$jmlh_sembuh=$result[0]->sembuh;
$jmlh_meninggal=$result[0]->meninggal;
?>

</head>
<body>

<h1 align="center">Jumlah dan Data Kasus COVID-19 di Indonesia</h1>
<h4 align="center">Data by : kawalcorona.com</h4>
<nav class="navbar navbar-light bg-light justify-content-between">
<a type="button" class="btn btn-outline-success" href="https://kespel.kemkes.go.id/vaksinasi_int/vaksinasi_int_public/add">Daftar Vaksinasi</a>
  <form class="form-inline">
  <a type="button" class="btn btn-outline-success" href="dunia.php">Covid-19 di Dunia</a>
  </form>
</nav>
<marquee bgcolor="cyan">Selalu Patuhi Protokol Kesehatan <-----------> patuhi 3 M (Memakai Masker, Mencuci Tangan, Menjaga Jarak) <-----------> Segera Daftar dan Lakukan Vaksinasi <-----------> Hiburan Dikala pandemi <a href="https://matias.ma/nsfw/">klik disini</a>
</marquee>

<main role="main" class="flex-shrink-0">
<div class="container">
<hr/>
<div align="center" class="row">
  <div class="col-sm-4">
    <div class="card text-white bg-warning">
      <div class="card-body">
            <div class="col-md-8">
                <h5 class="card-title">Jumlah Kasus</h5>
                <h1> <?=$jmlh_positif;?></h1>
                <p class="card-text">Orang</p>
            </div>
      </div>
      </div>
    </div>
  
  <div class="col-sm-4">
    <div class="card text-white bg-success">
      <div class="card-body">
            <div class="col-md-8">
                <h5 class="card-title">Data Kesembuhan</h5>
                <h1> 1<?=$jmlh_sembuh;?></h1>
                <p class="card-text">Orang</p>
            </div>
        </div>
      </div>
    </div>
    
    <div class="col-sm-4">
    <div class="card text-white bg-danger">
      <div class="card-body">
            <div class="col-md-8">
                <h5 class="card-title">Data Meninggal</h5>
                <h1> <?=$jmlh_meninggal;?></h1>
                <p class="card-text">Orang</p>
            </div>
        </div>
      </div>
    </div>
    </div>
    <hr/>

</div>
</main>
<table class="table table-bordered table-striped">
            <tr>
                <th>No.</th>
                <th>Kode Provinsi</th>
                <th>Nama Provinsi</th>
                <th>Jumlah Kasus</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                
            </tr>
    <?php
                while($i < $alldata):
                   
            ?>
            <tr>
                <td><?=$fid++?></td>
                <td><?=$datafix[$i]['attributes']['Kode_Provi']?></td>
                <td><?=$datafix[$i]['attributes']['Provinsi']?></td>
                <td><?=$datafix[$i]['attributes']['Kasus_Posi']?></td>
                <td><?=$datafix[$i]['attributes']['Kasus_Semb']?></td>
                <td><?=$datafix[$i]['attributes']['Kasus_Meni']?></td>
            </tr>
        <?php  $i++ ;endwhile; //penutup perulangan while ?>
        </table>
</body>
</html>
