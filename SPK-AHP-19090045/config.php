<?php
	// connection
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'database_ahp';

	$koneksi = mysqli_connect("localhost","root","");

	if (!$koneksi)
	{
		echo "Tidak dapat terkoneksi dengan server";
		exit();
	}

	if(!mysqli_select_db($koneksi, $database))
	{
		echo "Tidak dapat menemukan database";
		exit();
	}
?>