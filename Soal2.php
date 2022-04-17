<?php
 $prov = array(
    array(
      "provinsi" => "Jawa Timur",
      "kabupaten" => "Surabaya",
      "kecamatan" => "Jambangan",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Surabaya",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Kediri",
        "kecamatan" => "Plosoklaten",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Kediri",
        "kecamatan" => "Gurah",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "kecamatan 2",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "kecamatan 2",
    ),
  );
  
?>
<style type="text/css">
	.clear {
		clear: both;
	}

	table {
        margin-top: 100px;
	  border-collapse: collapse;
	  width: 50%;
      border: 1px solid black;
	}

	th {
	  background-color: #40DFEF;
	  color: white;
	}

	th, td {
	  padding: 8px;
	  text-align: left;
	  border-bottom: 1px solid #ddd;
      border: 1px solid black;
	}

	tr:hover {background-color:#B9F8D3;}

</style>
<center>
<h2>Data Penduduk Provinsi Pulau Jawa</h2>
</center>
<table border ="1" width = "900" align = "center">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Kabupaten</th>
      <th scope="col">Kecamatan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no =1;
    foreach($prov as $b){
      echo "<tr>";
      echo "<td>".$no."</td>
      <td>".$b['provinsi']."</td>
      <td>".$b['kabupaten']."</td>
      <td>".$b['kecamatan']."</td>";
      echo "</tr>";
      $no++;
    }
    ?>
  </tbody>
</table>