<?php
				$flight=$_POST['flight'];
				$name=$_POST['nom'];
				$email=$_POST['email'];
				$number=$_POST['numClient'];
				$modePaiement=$_POST['modePaiment'];
				$addClient=$_POST['addClient'];
				$datas=array();
				$nombre=0;

				$conn=new mysqli("localhost","root","","pfe0");
					if($conn->connect_error){
						die("Connection failed: " . $conn->connect_error);
					}
					else{
						$sql="select nbPersonnes from flight;";
						$result=mysqli_query($conn,$sql);
						$resultcheck=mysqli_num_rows($result);

						if($resultcheck>0){
							while($row = mysqli_fetch_assoc($result)){
								$datas[]=$row;
							}
						}
						$sql1="INSERT INTO `client`(`FullName`, `addClient`, `email`, `Number`) VALUES ('".$name."','".$addClient."','".$email."','".$number."')";
						$result1=mysqli_query($conn,$sql1);
						$last_id = $conn->insert_id;

						$sql2="INSERT INTO `reservation`(`nbrpersonnes`, `dateReservation`, `modePaiement`, `numclient`, `idCircuit`) VALUES ('".$datas[0]['nbPersonnes']."',CURDATE(),'".$modePaiement."','".$last_id."','".$flight."')";
						$result2=mysqli_query($conn,$sql2);
						echo $datas[0]['nbPersonnes'];
						$sql3="UPDATE `voyage` SET `nbPlaces`=nbPlaces-".$datas[0]['nbPersonnes']." where idCircuit='".$flight."'";
						$result3=mysqli_query($conn,$sql3);
						$sql4="DELETE FROM `flight` ";
						$result2=mysqli_query($conn,$sql4);
					}
			
?>