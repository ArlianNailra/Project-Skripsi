
</script>
<?php
$aksi = "modul/mod_deskripsi/aksi_deskripsi.php";
switch($_GET[act]){
	// Tampil deskripsi
	default:
	?>
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            <i class="glyphicon glyphicon-book"></i> Kriteria CSI
	        </h1>
	        <ol class="breadcrumb">
	            <li class="active">
	                 <a href="master.php?module=description">Kriteria CSI</a>
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">

			<div class="panel-title"><span class="glyphicon glyphicon-list"></span> <center>Kriteria CSI</center> <i style="margin-left:710px;"></div>
		</div>
		<div class="panel-body">
			<table id="tablekonten" class="table table-striped table-bordered table-responsive" style="">
				<thead>
					<th width="1%"><div id="konten">No</div></th>
					<th width="13%"><div id="konten"><center>Nilai Index (%)</center></div></th>
					<th width="13%"><div id="konten"><center>Kriteria Costumer Satisfaction Index (CSI)</center></div></th>
					
					
				</thead>
				<tbody>
					<?php 
					
						
					$tampil = mysqli_query($conn, "SELECT * FROM csi");
					$no = 1;
					while ($data = mysqli_fetch_array($tampil)){
							?>
							<tr>
							<td><div id="kontentd"><?php echo $no; ?></div></td>
								<td><div id="kontentd"><?php echo $data['k1'];?></div></td>
								<td><div id="kontentd"><?php echo $data['k2'];?></div></td>
								
								
							</tr>

							<?php
							$no++;
						}
						

						
					?>
				</tbody>
			</table>
			
			<?php echo "<ul class='pagination'> $linkHalaman </ul>"; ?>
		</div>
	</div>


	<?php
	break;
  
	// Form Tambah Deskripsi
	case "tambahpertanyaan":
	?>
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            <i class="glyphicon glyphicon-user"></i> Manajemen Deskripsi
	        </h1>
	        <ol class="breadcrumb">
	            <li class="active">
	                 <a href="master.php?module=description">Manajemen Deskripsi</a> / <a href="master.php?module=description&act=tambahpertanyaan">Tambah Deskripsi</a>
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="panel panel-primary">
    	<div class="panel-heading">
			<div class="panel-title"><span class="glyphicon glyphicon-list"></span> Tambah Deskripsi <i style="margin-left:770px;"><button class="btn btn-success btn-sm " onclick="window.location.href='?module=description'"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button></i></div>
		</div>
		<div class="panel-body">
			<form method="POST" action="<?php echo $aksi;?>?module=description&act=input" onSubmit="return validasi(this)" class="form-horizontal" >
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Grup </label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-tags"></span>
							</div>
							<select name="groupId" id="" class="form-control">
								<?php 
								$sql = mysql_query("SELECT * FROM tgroup ORDER BY groupId");
								while ($data = mysql_fetch_array($sql)){
									echo "<option value='$data[groupId]'> $data[groupName]</option>";
								}
								?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Deskripsi/Pertanyaan </label>
					<div class="col-sm-5">
						<textarea class="form-control" rows="4" name="deskripsi" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label"></label>
					<div class="col-sm-6">
						<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button> &nbsp;<button class="btn btn-danger" type="button" onclick="self.history.back()"><span class="glyphicon glyphicon-remove"></span> Batal</button>
					</div>
					
				</div>
			</form>
		</div>
    </div>
	<?php
     break;
  
  // Form Edit deskripsi
  case "editdescription":
    $edit = mysql_query("SELECT * FROM tdescription WHERE descriptionId='$_GET[id]'");
    $r = mysql_fetch_array($edit);
    ?>
	
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            <i class="glyphicon glyphicon-user"></i> Manajemen Deskripsi
	        </h1>
	        <ol class="breadcrumb">
	            <li class="active">
	                 <a href="master.php?module=description">Manajemen Deskripsi</a> / <a href="master.php?module=description&act=editdescription&id=<?php echo $r['descriptionId'];?>">Edit Deskripsi</a>
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">
				<i class="glyphicon glyphicon-wrench"></i> Edit Deskripsi
			</div>
		</div>
		<div class="panel-body">
			<form method="POST" action="<?php echo $aksi ?>?module=description&act=update"  class="form-horizontal" >
				<input type="hidden" name="id" value="<?php echo $r[descriptionId]; ?>">
				<div class="form-group">
					<label for="group" class="col-sm-2 control-label">Grup </label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-list"></span>

							</div>
							<select name="groupId"  class="form-control">
								<?php 
								$sql = mysql_query("SELECT * FROM tgroup");
								  while($data = mysql_fetch_array($sql)){
									if($r[groupId] == $data[groupId]){
										echo "<option value='$data[groupId]' SELECTED>$data[groupName]</option>";
									}
									else{
										echo "<option value='$data[groupId]'>$data[groupName]</option>";
									}
								  }
	  
								?>
							</select>
							
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Deskripsi/Pertanyaan </label>
					<div class="col-sm-5">
						<textarea name="description" id="" class="form-control">
							<?php echo $r[description]; ?>
						</textarea>
					</div>
				</div>
				
		
				<div class="form-group">
					<label for="" class="col-sm-2 control-label"></label>
					<div class="col-sm-6">
						<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Simpan</button> &nbsp;<button class="btn btn-danger" type="button" onclick="self.history.back()"><span class="glyphicon glyphicon-remove"></span> Batal</button>
					</div>
					
				</div>
				
			</form>
		</div>
	</div>

    <?php
    break;  
}
?>