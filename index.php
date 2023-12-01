<?php
                                             include "koneksi.php";
                                              
                                              if( isset($_POST["submit"])) {
                                                global $conn;
                                                  //ambil data dari tiap element form 
                                              $nama	= $_POST["nama"];
                                              $alamat = $_POST["alamat"];
                                              $pert_1	= $_POST["pert_1"];
                                              $pert_2	= $_POST["pert_2"];
                                              $pert_3	= $_POST["pert_3"];
                                              $pert_4	= $_POST["pert_4"];
                                              $pert_5	= $_POST["pert_5"];
                                              $pert_6	= $_POST["pert_6"];
                                              $pert_7	= $_POST["pert_7"];
                                              $pert_8	= $_POST["pert_8"];
                                              $pert_9	= $_POST["pert_9"];
                                              $pert_10	= $_POST["pert_10"];
                                              
                                              $cari = "INSERT INTO int_user VALUES 
                                              ('', '$nama', '$alamat', '$pert_1', '$pert_2', '$pert_3', '$pert_4', '$pert_5', '$pert_6', '$pert_7', '$pert_8', '$pert_9', '$pert_10')";
                                              mysqli_query($conn, $cari);
                                              }
                                             
                                              ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Survey Kepuasan Pelanggan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/blog-post.css" rel="stylesheet">


</head>

<body background="">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index2.php">Klik Disini Untuk Lihat Pemesanan Produk</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#login" data-toggle="modal"><button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-log-in"></span> Login</button></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php" data-toggle="tab"> Azriel Cake </a></li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="container">
       
        <div class="panel panel-default" >
          <div class="panel-body" style="background-color:#e6e6e6;">
            <div class="col-lg-12">
                <img class="img-responsive" src="./images/kueazril2.jpeg" alt="" style="height:200px;width:1100px">
                <hr>
            </div>
              <div class="col-lg-12">
                  <p align="center" style="background-color:black; color:white;" > <font size="5">SURVEY KEPUASAN PELANGGAN</font></p>
              </div>
              <div class="row">
                  <div class="panel-body">
                      <form action="" method="post">
                         
                          <table class="table" > 
                              <tr >
                                  <td>
                                      <div class="form-horizontal"  style="margin-top:20px;background-color:#fff;padding-top:20px;padding-bottom:20px;">
                                          <div class="page-header" style="margin-left:30px;">
                                            <h3>Silahkan Isi Survey</h3>
                                          </div>
                                          <div class="form-group">
                                             <label for="nama" class="control-label col-sm-2">Nama</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-user"></span>
                                                     </div>
                                                     <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Anda" required/>
                                                 </div>
                                             </div>
                                          </div>
                                  
                                          <div class="form-group">
                                             <label for="alamat" class="control-label col-sm-2">Alamat</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-bookmark"></span>
                                                     </div>
                                                     <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat Anda" required/>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="pert_1" class="control-label col-sm-2" class="right" >Apakah Harga Yang Di Tawarkan Kami Sebanding dengan Kualitas Produk Makanan Kami ? </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_1" id="pert_1" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                          <label for="pert_2" class="control-label col-sm-2">Apakah Pengemasan Makanan Bersih,Rapih dan Menarik ? </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_2" id="pert_2" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                          <label for="pert_3" class="control-label col-sm-2">Apakah Produk Makanan Yang Dipesan Dalam Keadaan Baik ? </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_3" id="pert_3" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                          <label for="pert_4" class="control-label col-sm-2">Apakah Anda Akan Merekomendasikan Produk Makanan Kami Kepada Orang Lain ? </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_4" id="pert_4" class="form-control">
                                                         <option value="5">Sangat Ingin</option>
                                                         <option value="4">Ingin</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Ingin</option>
                                                         <option value="1">Sangat Tidak Ingin</option>
                                                     </select>
                                                 </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="pert_5" class="control-label col-sm-2">Seberapa Puaskah Anda Terhadap Pelayanan Kami ? </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_5" id="pert_5" class="form-control">
                                                         <option value="5">Sangat Puas</option>
                                                         <option value="4">Puas</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Puas</option>
                                                         <option value="1">Sangat Tidak Puas</option>
                                                     </select>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                             <label for="pert_6" class="control-label col-sm-2" class="right" >Apakah Harga sesuai dengan Harapan Anda?</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_6" id="pert_6" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="pert_7" class="control-label col-sm-2" class="right" >Pengemasan Produk sesuai dengan Harapan Anda? </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_7" id="pert_7" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="pert_8" class="control-label col-sm-2" class="right" >Apakah Produk Makanan Sesuai dengan Ekspetasi Anda?</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_8" id="pert_8" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="pert_9" class="control-label col-sm-2" class="right" >Apakah Produk Makanan Kami Lebih Baik Kualitasnya dari yang lain? </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_9" id="pert_9" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="pert_10" class="control-label col-sm-2" class="right" >Apakah Pelayanan Kami sudah sesuai dengan Ekspetasi Anda?</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_10" id="pert_10" class="form-control">
                                                         <option value="5">Sangat Setuju</option>
                                                         <option value="4">Setuju</option>
                                                         <option value="3">Netral</option>
                                                         <option value="2">Tidak Setuju</option>
                                                         <option value="1">Sangat Tidak Setuju</option>
                                                     </select>
                                                 </div>
                                             </div>
                                          </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td width="97%" valign="top" align="center" colspan="5" style="border-style: none; border-width: medium">
                                  <font face="Arial" size="1"><b>Mohon kesediaan Anda untuk memberikan 
                                  penilaian dan masukan kepada Kami, dimana hal ini sangat bermanfaat 
                                  untuk meningkatkan kualitas layanan kami.<br>
                                  </b><i>Silahkan diisi dengan mengklik option yang tersedia 
                                   serta keterangan sesuai dengan penilaian Anda 
                                  pada kolom yang telah disediakan</i></font>
                                  </td>
                              </tr>
                                          
                                      </table>
                                  </td>
                              </tr>
                              <tr>
                                  <td 
                                   colspan="8"> <center><button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button></center> </td>
                              </tr>
                              <br>
                                </br>
                              </div>
                              <tr>
                                  <td width="97%" valign="top" align="center" colspan="5" style="border-style: none; border-width: medium">
                                  <center class="well">
                                  <font face="Arial" size="1"><b>Terima Kasih Atas Waktu dan Masukan yang anda berikan,Semua masukan yang anda berikan </b> </i></font>
                                  <font face="Arial" size="1"><b>akan kami terima sebagai sarana bagi kami untuk meningkatkan kulaitas pelayanan kami</b>  </i></font>
                                  </center>
                                  </td>
                              </tr>
                          </table>
                      </form>
                  </div>    
              </div>
           </div>
        </div>
        
    </div>
    <nav class="navbar navbar-inverse navbar-absolut-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <center><font color="white" size="1" >Created By Arlian Collibri</font></center>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="modal fade" id="login">
        <form name="login" action="../skripsian/adminweb/cek_login.php" method="POST" onSubmit="return validasi(this)" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" bgcolor="black">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <div class="modal-title" >
                           <center><h4>Login Admin</h4></center>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                            
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class=" control-label col-sm-3"></label>
                                <div class="col-sm-1">
                                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-log-in"></span> Masuk</button>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center>Copyright &copy; 2022 Bekasi Utara <br> All rights reserved.</center>
                        <center>Created by Arlian Collibri.</center>
                    </div>
                </div>
            </div>
        </form>
    </div>

  
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
