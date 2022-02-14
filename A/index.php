<!DOCTYPE html>
<html>
	<head>
		<title>LATIHAN 1 DPBO 2022</title>
		<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	
        <?php
        include "Mahasiswa.php";

        $mahasiswa1 = new Mahasiswa();
        $mahasiswa1->setNama('Udin');
        $mahasiswa1->setNim(1903121);
        $mahasiswa1->setGenders("Laki-laki");
        $mahasiswa1->setProdi("Ilkom");
        $mahasiswa1->setSemester("6");

        $mahasiswa2 = new Mahasiswa("Bambang", 1213114, "Laki-laki", "IPSE", "5");

        ?>

    <style>

    table, th, td {
    border: 1px solid black;
    padding: 20px;
    }
    </style>

    </head>
	
	<body>
	
	
		<div class="container">
			<br>
			<CENTER><h1>Mahasiswa</h1></CENTER>
			
		<CENTER>
			<table>
				<thead>
					<tr>
						<th scope="col">Nama</th>
						<th scope="col">NIM</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Program Studi</th>
						<th scope="col">Semester</th>
						
	
					</tr>
				</thead>
				<?php
			
						echo "<tr>";
						echo "<td>".$mahasiswa1->getNama()."</td>";
						echo "<td>".$mahasiswa1->getNim()."</td>";
						echo "<td>".$mahasiswa1->getGenders()."</td>";
						echo "<td>".$mahasiswa1->getProdi()."</td>";
						echo "<td>".$mahasiswa1->getSemester()."</td>";
						echo "</td>";
						echo "</tr>";
                        echo "<tr>";
						echo "<td>".$mahasiswa2->getNama()."</td>";
						echo "<td>".$mahasiswa2->getNim()."</td>";
						echo "<td>".$mahasiswa2->getGenders()."</td>";
						echo "<td>".$mahasiswa2->getProdi()."</td>";
						echo "<td>".$mahasiswa2->getSemester()."</td>";
						echo "</td>";
						echo "</tr>";
				
				?>
			</table>
            </CENTER>
		</div>
	</body>
</html>

