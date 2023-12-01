
<?php
$aksi = "modul/mod_group/aksi_group.php";
switch($_GET[act]){
	// Tampil Group
	default:

	?>
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            <i class="glyphicon glyphicon-user"></i> Data Pelanggan
	        </h1>
	        <ol class="breadcrumb">
	            <li class="active">
	                 <a href="master.php?module=group">Data Pelanggan</a>
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">

			<div class="panel-title"><span class="glyphicon glyphicon-list"></span> List Kuisioner <i style="margin-left:750px;"><?php if($_SESSION['level']=="Super") ?></div>
		</div>
		<div class="panel-body">
			<table id="tablekonten" class="table table-striped table-bordered table-responsive" style="">
				<thead>
					<th width="1%"><div id="konten">No</div></th>
					<th width="3%"><div id="konten">Nama</div></th>
					<th width="3%"><div id="konten">Alamat</div></th>
					<th width="3%"><div id="konten">Hasil 1</div></th>
					<th width="3%"><div id="konten">Hasil 2</div></th>
					<th width="3%"><div id="konten">Hasil 3</div></th>
					<th width="3%"><div id="konten">Hasil 4</div></th>
					<th width="3%"><div id="konten">Hasil 5</div></th>
					<th width="3%"><div id="konten">Hasil 6</div></th>
					<th width="3%"><div id="konten">Hasil 7</div></th>
					<th width="3%"><div id="konten">Hasil 8</div></th>
					<th width="3%"><div id="konten">Hasil 9</div></th>
					<th width="3%"><div id="konten">Hasil 10</div></th>
					<th width="5%"><div id="konten">Aksi</div></th>
					
					
				</thead>
				<tbody>
					<?php 
					
						
					    $tampil = mysqli_query($conn, "SELECT * FROM int_user");
					    $no = 1;
						while ($data = mysqli_fetch_array($tampil)){
							?>
							<tr>
								<td><div id="kontentd"><?php echo $no; ?></div></td>
								<td><div id="kontentd"><?php echo $data['nama'];?></div></td>
								<td><div id="kontentd"><?php echo $data['alamat'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_1'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_2'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_3'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_4'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_5'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_6'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_7'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_8'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_9'];?></div></td>
								<td><div id="kontentd"><?php echo $data['pert_10'];?></div></td>
								<td><div id="kontentd"><a href="<?php echo $aksi;?>?module=group&act=hapus&id=<?php echo $data['id'];?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')" ><span class="glyphicon glyphicon-trash"></span> Hapus</button></a></div>
								</td>
								</tr>

							<?php $no++; }  ?>
							
						
				</tbody>
			</table>
			
				<ul class="pagination">
					<?php echo "$linkHalaman"; ?>
				</ul>
			
			
		</div>
	</div>

	<?php
	break;
  
	// Form Tambah group
	case "tambahgroup":
	?>
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            <i class="glyphicon glyphicon-user"></i> Manajemen Group
	        </h1>
	        <ol class="breadcrumb">
	            <li class="active">
	                 <a href="master.php?module=group">Manajemen Group</a> / <a href="master.php?module=group&act=tambahgroup">Tambah Group</a>
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="panel panel-primary">
    	<div class="panel-heading">
			<div class="panel-title"><span class="glyphicon glyphicon-list"></span> Tambah Group Kuisioner <i style="margin-left:770px;"><button class="btn btn-success btn-sm " onclick="window.location.href='?module=group'"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</button></i></div>
		</div>
		<div class="panel-body">
			<form method="POST" action="<?php echo $aksi;?>?module=group&act=input" onSubmit="return validasi(this)" class="form-horizontal" >
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Nama Group</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-tags"></span>
							</div>
							<input type="text" name="grup" class="form-control" placeholder="Nama Group">
						</div>
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
  
  // Form Edit group
  case "editgroup":
	$id = $_GET["id"];
    $edit=mysqli_query($conn, "SELECT * FROM int_user WHERE groupId= $id")[0];
    $r=mysqli_fetch_array($edit);
    ?> 
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">
	            <i class="glyphicon glyphicon-user"></i> Manajemen Pelanggan
	        </h1>
	        <ol class="breadcrumb">
	            <li class="active">
	                 <a href="master.php?module=group">Manajemen Pelanggan</a> / <a href="?module=group&act=editgroup&id=<?php echo $r['groupId'];?>">Edit Pelanggan</a>
	            </li>
	        </ol>
	    </div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">
				<i class="glyphicon glyphicon-wrench"></i> Edit Pelanggan
			</div>
		</div>
		<div class="panel-body">
		<form method="POST" action="<?php echo $aksi ?>?module=group act=update"  class="form-horizontal" >
				<input type="hidden" name="id" value="<?php echo $r[id]; ?>">
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input type="hidden" name="nama" id = "nama" class="form-control"  value="<?php echo $r['groupName'];?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="alamat" class="col-sm-2 control-label">Alamat</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</div>
							<input type="hidden" name="grup" id ="alamat" class="form-control"  value="<?php echo $r['groupName'];?>">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="pert_1" class="col-sm-2 control-label">Pertanyaan 1</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_1" id="" class="form-control">
                                                         <option value="Sangat Setuju">Sangat Setuju</option>
                                                         <option value="Setuju">Setuju</option>
                                                         <option value="Tidak Setuju">Tidak Setuju</option>
                                                     </select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="pert_2" class="col-sm-2 control-label">Pertanyaan 2</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_2" id="" class="form-control">
                                                         <option value="Sangat Setuju">Sangat Setuju</option>
                                                         <option value="Setuju">Setuju</option>
                                                         <option value="Tidak Setuju">Tidak Setuju</option>
                                                     </select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="pert_3" class="col-sm-2 control-label">Pertanyaan 3</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_3" id="" class="form-control">
                                                         <option value="Sangat Setuju">Sangat Setuju</option>
                                                         <option value="Setuju">Setuju</option>
                                                         <option value="Tidak Setuju">Tidak Setuju</option>
                                                     </select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="pert_4" class="col-sm-2 control-label">Pertanyaan 4</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_4" id="" class="form-control">
                                                         <option value="Sangat Ingin">Sangat Ingin</option>
                                                         <option value="Ingin">Ingin</option>
                                                         <option value="Tidak Akan">Tidak Akan</option>
                                                     </select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="pert_5" class="col-sm-2 control-label">Pertanyaan 5</label>
					<div class="col-sm-5">
						<div class="input-group">
							<div class="input-group-addon">
							<span class="glyphicon glyphicon-tags"></span>
                                                     </div>
                                                     <select name="pert_5" id="" class="form-control">
                                                         <option value="Sangat Puas">Sangat Puas</option>
                                                         <option value="Puas">Puas</option>
                                                         <option value="Tidak Puas">Tidak Puas</option>
                                                     </select>
						</div>
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