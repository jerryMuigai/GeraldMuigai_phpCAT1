<!DOCTYPE html>
<html>
<head>
	<title>Months</title>

</head>
<body>
	<?php 
		$years = date("Y");
		$feb;
		if ($years % 4 == 0) {
			$feb = 29;
		}
		else{
			$feb = 28;
		}
		
		$months = [
			"january" => 31,
			"february" => $feb,
			"march" => 31,
			"april" => 30,
			"may" => 31,
			"june" => 30,
			"july" => 31,
			"august" => 31,
			"september" => 30,
			"october" => 31,
			"november" => 30,
			"december" => 31
		];

		function option($monthsArray){
			foreach ($monthsArray as $month => $days) {
				$Month = strtoupper($month);
				echo "<option value='$month'>$Month</option>";
			}
		}

	 ?>

	 <div class="jumbotron container ">
	 	<div class="text-center">
	 	<div>
	 	<table >
		 	<div class="col-md-12 ">
		 		<h1 class="jerry"><b>Jitegee Kwani hukusoma bootstrap</b></h1>
		 	</div>
		 	<div class="col-md-2 col-md-offset-3">
	 		<tbody>
	 			<tr>
	 				<td>
	 					<form role="form" method="post" action="months.php" class="loww">
	 						<div class="form-group">
	 							<div class="input-group">
	 								</i></span>
	 								<select name="month_dropdown" class="form-control">
	 									<?php
	 										option($months);
	 									?>
	 								</select>
	 							</div>
	 						</div>
	 						<input type="submit" name="submit" value="SUBMIT" class="btn btn-succes">
	 					</form><br>
	 				</td>
	 			</tr>
	 		</tbody></div>
	 	</table>
	 	</div class ="muigz" >


	 <?php
	 	if (isset($_POST['submit'])) {
	 		$monthSelected = $_POST['month_dropdown'];
	 		$days = $months[$monthSelected];

	 		if ($monthSelected !== "february") {
	 			echo "<div class='container'><h3>The month of $monthSelected has $days days</h3></div>";
	 		}

	 		else{
	 			if ($days == 29) {
	 				echo "<div class='container'><h3>The month of $monthSelected has $days days because it is a leap year</h3></div>";
	 			}

	 			else{
	 				echo "<div class='container'><h3>The month of $monthSelected has $days days because it is not a leap year</h3></div>";
	 			}
	 		}
	 		
	 	}
	 ?>
</div>



</body>
</html>
