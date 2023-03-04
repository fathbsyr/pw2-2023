<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            margin-top: 80px;
            background-color: #C0EEF2;
        }
		.table {
			background-color: white;
			border-radius: 15px 40px 15px 40px;
		}
    </style>
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>NO KTP</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>89809</td>
					<td>Fakhirul Akmal</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+6287855516976</td>
				</tr>
				<tr>
					<td>63985</td>
					<td>Arul Ferdiansyah</td>
					<td>arul@gmail.com</td>
					<td>Bogor</td>
					<td>+6285655563530</td>
				</tr>
				<tr>
					<td>10659</td>
					<td>Ferdi Ahmad</td>
					<td>ferdi@gmail.com</td>
					<td>Jakarta</td>
					<td>+6285487683330</td>
				</tr>
				<tr>
					<td>64781</td>
					<td>Sambo Hutapea</td>
					<td>sambo@gmail.com</td>
					<td>Jakarta</td>
					<td>+6284308564387</td>
				</tr>
				<tr>
					<td>73954</td>
					<td>Putri Kurniawan</td>
					<td>putri@gmail.com</td>
					<td>Lampung</td>
					<td>+6286432096675</td>
				</tr>
				<tr>
					<td>48756</td>
					<td>Chandra Wita</td>
					<td>chand@gmail.com</td>
					<td>Medan</td>
					<td>+6281645894440</td>
				</tr>
				<tr>
					<td>09009</td>
					<td>Puan Siti</td>
					<td>siti@gmail.com</td>
					<td>Blitar</td>
					<td>+6289387540987</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */
                  if ( isset ($_POST['submit'])) {
						//menimpan data
						$nama_lengkap = $_POST['nama'];
						$email = $_POST['email'];
						$alamat = $_POST['alamat'];
						$telepon = $_POST['telepon'];
						$ktp = $_POST['ktp'];
	
					//menampilkan data
						echo '<tr>';
						echo '<td>' . $ktp;
						echo '<td>' . $nama_lengkap;
						echo '<td>' . $email;
						echo '<td>' . $alamat;
						echo '<td>' . $telepon;

                  }
				?>

			</tbody>
		</table>
	</div>
</body>
</html>