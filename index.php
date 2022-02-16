<!DOCTYPE html>
<html>
	<head>
		<title>LATIHAN 1 DPBO 2022</title>
		<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
        <?php
        include "TimBola.php";

		//tim 1 
        $tim1 = new TimBola();
        $tim1->setNamaTim('Gabut FC');
        $tim1->setNegara('Belanda');
        $tim1->setTahunBerdiri("1999");

        $nama_pemain = array("Udin", "Eko", "Bambang","Rudi","Eko", "Utomo", "Fandi", "Yayan", "Mad Dog","Ruslan","Jajang");

        $tim1->setPemain($nama_pemain);
		
		//tim 2
		$nama_pemain2 =array("Alexander", "Lakaka", "Jones", "Haji Maguaire", "Stephen Cow", "Misaki","Tsubasa","Hyuga", "Williams", "James","Phil");
		$tim2 = new TimBola("KST Pusat","Slovakia", "2009", $nama_pemain2 );

        ?>

      

    <style>

    table, th,td{
    border: 1px solid black;
    padding: 20px;
    border-collapse: collapse;
    }

  
    </style>

    </head>
	
	<body>
	
	
		<div class="container">
			<br>
			<CENTER><h1>Data Tim Sepakbola</h1></CENTER>
			
		<CENTER>
			<table>
				<thead>
					<tr>
						<th >Nama Tim</th>
						<th >Negara</th>
						<th >Tahun Berdiri</th>
						<th >List Pemain</th>
						
	
					</tr>
				</thead>
				<?php
						//tim 1
						echo "<tr>";
						echo "<td>".$tim1->getNamaTim()."</td>";
						echo "<td>".$tim1->getNegara()."</td>";
						echo "<td>".$tim1->getTahunBerdiri()."</td>";
                        
                        echo "<td>";
                        for($i = 0; $i<=10; $i++) {
                            if($i != 0) {
                                echo " , ";
                            }
                            echo $tim1->getPemain()[$i];
                           
                        }
						echo "</td>";
						echo "</tr>";
						//tim 2
						echo "<tr>";
						echo "<td>".$tim2->getNamaTim()."</td>";
						echo "<td>".$tim2->getNegara()."</td>";
						echo "<td>".$tim2->getTahunBerdiri()."</td>";
                        
                        echo "<td>";
                        for($i = 0; $i<=10; $i++) {
                            if($i != 0) {
                                echo " , ";
                            }
                            echo $tim2->getPemain()[$i];
                           
                        }
						echo "</td>";
						echo "</tr>";
				
				?>
			</table>
            </CENTER>
		</div>
	</body>
</html>
