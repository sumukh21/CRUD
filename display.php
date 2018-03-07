<?php

	$conn = new mysqli("localhost","root","","student");
	$query = "Select * from s";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result) > 0) {
		 echo "<table><tr><th>PID</th><th>NAME</th><th>OS</th><th>MP</th><th>SOOAD</th><th>CN</th><th>WT</th></tr>";

		 while($row = mysqli_fetch_assoc($result)) {
		 	echo "<tr><td>".$row["PID"]."</td><td>".$row["NAME"]."</td><td>".$row["OS"]."</td><td>".$row["MP"]."</td><td>".$row["SOOAD"]."</td><td>".$row["CN"]."</td><td>".$row["WT"]."</td></tr>";
		 }
		 echo "</table>";
	}
	else {
		echo "0 results";
	}
?>

<HTML>
<head>
	<title>Display</title>
</head>
<body>
	<a href="home.php">Back to home</a>


</body>
</HTML>