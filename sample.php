 <?php
 $sql = "SELECT * FROM events WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($db,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				
			
				

				
				}
			}
				$sql1 = "SELECT * FROM events WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql1 .=$id. ",";
			}
			$sql1=substr($sql1,0,-1) . ") ORDER BY id ASC";
				$query1 = mysqli_query($db,$sql1);
				while($row = mysqli_fetch_array($query1)){
				$namee = $row['event'];
				$unit = $row['amt'];
				$total = $_SESSION['cart'][$row['id']]['quantity']*$row['amt'];
				}
				
				?>