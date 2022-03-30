<?php
	$conn = mysqli_connect('localhost', 'root', '', 'app_ujian');
	// Check connection
	if ($conn == false) {
		die("Koneksi Gagal: " . mysqli_connect_error());
	}