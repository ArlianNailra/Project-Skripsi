<?php
session_start();
include "../../../koneksi.php";
$module = $_GET[module];
$act = $_GET[act];

// Hapus Group
if ($module='id' AND $act='hapus'){
	$aksi=mysqli_query($conn, "DELETE FROM int_user WHERE id='$_GET[id]'");
	header('location:../../master.php?module=group');
}


// Update Group
elseif ($module=='id' AND $act=='update'){
	 {
		
									$pert_1		= $_POST['pert_1'];
									$pert_2		= $_POST['pert_2'];
									$pert_3		= $_POST['pert_3'];
									$pert_4		= $_POST['pert_4'];
									$pert_5		= $_POST['pert_5'];
									
									$edit=mysqli_query($conn, "UPDATE int_user SET pert_1='$pert_1', pert_2='$pert_2', pert_3='$pert_3', pert_4='$pert_4', pert_5='$pert_5'");
		header('location:../../master.php?module=group');
	}
	
  {
    echo "gagal";
  }
}

?>
