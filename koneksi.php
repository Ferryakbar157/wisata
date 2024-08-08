<?php
session_start();
$k = mysqli_connect('localhost','root','','wisata');

if (!$k)
{
	die("Koneksi ke database: ".mysqli_connect_error());
}
else
{
	$tgl=date('Y-m-d');
	$no=1;
}
