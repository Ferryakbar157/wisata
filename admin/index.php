<?php require_once "header.php";
if(isset($_GET['ubah'])){
	$data=mysqli_fetch_array(mysqli_query($k,"select * from kamar where id_kamar='$_GET[id_kamar]'"));
}
?> 
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form TambahData Pengunjung</h6>
    </div>
    <div class="card-body">
        <form method="post" action="index_aksi.php">
        <input type="hidden" name="id_kamar" value="<?php if(isset($_GET['ubah'])){ echo $data['id_kamar']; } ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input class="form-control" placeholder="Ketik nama Pengunjung" name="nama" value="<?php if(isset($_GET['ubah'])){ echo $data['nama']; } ?>" required>
                </div>
            </div>

            <div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-10">
						<input class="form-control" placeholder="Ketik Alamat" name="alamat" value="<?php if(isset($_GET['ubah'])){ echo $data['alamat']; } ?>" required>
					</div>
				</div>

            <div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor hp</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" placeholder="Ketik NOHP" name="no_hp" value="<?php if(isset($_GET['ubah'])){ echo $data['no_hp']; } ?>" required>
					</div>
				</div>

                <div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kalamin</label>
					<div class="col-sm-10">
						<select class="form-control" name="jenkel">
							<option value="Laki-Laki" <?php if(isset($_GET['ubah'])){ if($data['jenkel']=='Laki-Laki'){ echo 'selected'; }} ?>>Laki - Laki</option>
							<option value="Sistem Informasi" <?php if(isset($_GET['ubah'])){ if($data['jenkel']=='Perempuan'){ echo 'selected'; }} ?>>Perempuan</option>
						</select>
					</div>
				</div>

                <div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kamar</label>
					<div class="col-sm-10">
						<select class="form-control" name="jenis_kamar">
							<option value="Premium-50.000" <?php if(isset($_GET['ubah'])){ if($data['jenkel']=='Premium-50.000'){ echo 'selected'; }} ?>>Premium-50.000</option>
							<option value="Reguler-20.000" <?php if(isset($_GET['ubah'])){ if($data['jenkel']=='Reguler-20.000'){ echo 'selected'; }} ?>>Reguler-20.000</option>
						</select>
					</div>
				</div>

                <div style="text-align:right;">
					<button class="btn btn-primary btn-round waves-effect waves-light" name="<?php if(isset($_GET['ubah'])){ echo 'ubah'; }else{ echo 'simpan'; } ?>">Simpan</button>
					<button type="reset" class="btn btn-danger btn-round waves-effect waves-light">Refresh</button>
				</div>
			</form>
		</div>
	</div>

    <div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Pengunjung</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th style="text-align:center;">No</th>
							<th style="text-align:center;">Nama Pengunjung</th>
							<th style="text-align:center;">Alamat</th>
							<th style="text-align:center;">Nomor Hp</th>
							<th style="text-align:center;">Jenis Kelamain</th>
                            <th style="text-align:center;">Jenis Kamar</th>
                            <th style="text-align:center;">Aksi</th>
						</tr>
					</thead>
					<tbody>
                    <?php
					$sql=mysqli_query($k,"select * from kamar");
					while($data=mysqli_fetch_array($sql)){
					?>
					<tr>
						<th scope="row" style="text-align:center;"><?= $no++; ?></th>
						<td style="text-align:center;"><?= $data['nama']; ?></td>
						<td style="text-align:center;"><?= $data['alamat']; ?></td>
						<td style="text-align:center;"><?= $data['no_hp']; ?></td>
                        <td style="text-align:center;"><?= $data['jenkel']; ?></td>
                        <td style="text-align:center;"><?= $data['jenis_kamar']; ?></td>
						<td style="text-align:center;">
						<a href='index.php?ubah&id_kamar=<?php echo $data['id_kamar']; ?>'><button class="btn btn-success btn-round waves-effect waves-light">Ubah</button></a>
						<a href='index_aksi.php?hapus&id_kamar=<?php echo $data['id_kamar']; ?>'><button class="btn btn-danger btn-round waves-effect waves-light" onclick="return confirm('Data akan dihapus?')">Hapus</button></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<?php require_once "footer.php"; ?>