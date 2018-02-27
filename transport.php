<!DOCTYPE html>
<html>
<head>
	<title>Transportation</title>
	
</head>
<body>
	<div class="jumbotron container text-center">
	<?php
		$Transportation = ["Automobile", "jet", "train", "ferry"];
		echo "<div class='container text-center'><h4 class='well text-'>Travel takes many forms, whether across the country, or around the earth. here is a list of some common means of transportation:</h4>";
		echo "<ul class='text-center'>";
		foreach ($Transportation as $key => $value) {
			echo "<li style='list-style: none;'><b><i>$value</b></i></li>";
		}
		echo "</ul></div>";

	?>

		</style>
</head>
<body>
	
	<div class="container">
	<div class="col-md-6 col-md-offset-3 text-center">
		<form role="form" method="post" action="transport.php">
			<div class="row form-group">
				<label for="add" class="alert alert-danger  col-md-12"> Add other forms of transportation(separated by commas)</label><br>
				<input type="text" class="form-control text-center col-md-2 col-md-offset-3" style="width:220px;" name="additions" placeholder=" Item1, Item2, Item3....">
			</div>
			<input type="submit" name="submit" class="btn btn-info">
		</form></div>
	</div>

	
	
		      	 <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
	 			<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>