<?xml version="1.0" encoding="UTF-8"?>
<html>
	<head>
		<title>Data Mahasiswa</title>
	</head>

	<body>

		<?php
		$books = new SimpleXMLElement('datadiri.xml', null, true);
		 
		echo "
		<table border=1>
		<tr>
		<th>NIM</th>
		<th>Alamat</th>
		<th>Agama</th>
		<th>TglLahir</th>
		</tr>
		 
		";
		 foreach($books as $data)
		{
				echo "
		<tr>
		<td>{$data['nim']}</td>
		<td>{$data->alamat}</td>
		<td>{$data->agama}</td>
		<td>{$data->tgllahir}</td>
		</tr>
		 
		";
		}
		echo '</table>';
		?>
 
	</body>
</html>