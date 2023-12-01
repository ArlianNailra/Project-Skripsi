<?php
                                             include "koneksi.php";
                                              
                                              if( isset($_POST["submit"])) {
                                                global $conn;
                                                  //ambil data dari tiap element form 
                                              $gambar	= upload ();
                                              if(!$gambar) {return false;}
                                              
                                              
                                              
                                              $cari = "INSERT INTO csi_gambar VALUES 
                                              ('', '$gambar')";
                                              mysqli_query($conn, $cari);
                                              }
                                             
                                              ?>

<html>
<head>
  <title>Form Upload Gambar</title>
</head>
<body>
  <h1>Form Upload Gambar</h1>
  <form method="post"  action="">
    <label for="gambar"> gambar : </label>
    <input type="file" id="gambar" name="gambar">
    <input type="submit" value="Upload">
  </form>
</body>
</html>