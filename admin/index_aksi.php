<?php
// include '../function.php';
include '../koneksi.php';
if(isset($_POST['simpan']))
{
	$simpan=mysqli_query($k, "insert into kamar values(NULL, '$_POST[nama]','$_POST[alamat]','$_POST[no_hp]', '$_POST[jenkel]', '$_POST[jenis_kamar]')");
	if($simpan)
	{
		echo "<script>alert('Data berhasil disimpan')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
}
elseif(isset($_POST['ubah']))
{
	$ubah=mysqli_query($k, "update kamar set nama='$_POST[nama]', alamat='$_POST[alamat]', no_hp='$_POST[no_hp]', jenkel='$_POST[jenkel]', jenis_kamar='$_POST[jenis_kamar]' where id_kamar='$_POST[id_kamar]'");
	if($ubah)
	{
		echo "<script>alert('Data berhasil diubah')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
}
elseif(isset($_GET['hapus']))
{
	$hapus=mysqli_query($k, "delete from kamar where id_kamar='$_GET[id_kamar]'");
	if($hapus)
	{
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
}

elseif(isset($_GET['hapus']))
{
	$hapus=mysqli_query($k, "delete from kamar where id_kamar='$_GET[id_kamar]'");
	if($hapus)
	{
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
}

elseif(isset($_POST['ubah']))
{
	$ubah=mysqli_query($k, "update kamar set nama='$_POST[nama]',
                            alamat='$_POST[alamat]',
                            no_hp='$_POST[no_hp]',
                            jenkel='$_POST[jenkel]',
                            jenis_kamar='$_POST[jenis_kamar]'
                            where id_kamar='$_POST[id_kamar]'");
	if($ubah)
	{
		echo "<script>alert('Data berhasil diubah')</script>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
}
?>