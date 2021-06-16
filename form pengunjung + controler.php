  <!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <title>Log in</title>
    </head>
    <body>
      <div class="wrapper mx-auto mt-5">
        <h2 class="text-center mb-4">data pengunjung</h2>
        <form method="POST" action="">
          <div class="row">
            <div class="col-12 mt-3">
              <input type="text" class="form-control" placeholder="Nama"               
               name="username" required>
            </div>
            <div class="col-12 mt-3">
              <input type="text" class="form-control" placeholder="Umur" 
              name="umur" required>
            </div>
          </div>
          <input type="submit" name="login" class="btn btn-secondary mt-4 w-100 
           login-btn" value="masuk" href="indonesia.php">
        </form>
      </div>
    </body>
  </html>
 
  <?php  
    include("connection.php");
    error_reporting(0);

    if($_POST['login']) {
      $nama=$_POST["username"];
      $umur=$_POST["umur"];
      
      //Query input menginput data kedalam tabel barang
      $sql="insert into pengunjung (Nama,umur) values
      ('$nama','$umur')";
      //Mengeksekusi/menjalankan query diatas	
      $hasil=mysqli_query($kon,$sql);
      if ($hasil) {
        header('location:indonesia.php');
        exit;
      } else {
?>
    <!-- <script>
            alert("Gagal insert data");
        </script> -->
        <?php
      }
    }
   
  
