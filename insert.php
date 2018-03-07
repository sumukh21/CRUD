<?php 
    if(isset($_GET['btn_save'])) {
        $PID = $_GET['txt_pid'];
        $Name = $_GET['txt_name'];
        $OS = $_GET['txt_os'];
        $MP = $_GET['txt_mp'];
        $SOOAD = $_GET['txt_sooad'];
        $CN = $_GET['txt_cn'];
        $WT = $_GET['txt_wt'];
        $conn = new mysqli("localhost","root","","student");
        $query = "Insert into s (PID,NAME,OS,MP,SOOAD,CN,WT) values('$PID','$Name','$OS','$MP','$SOOAD','$CN','$WT')";
        mysqli_query($conn,$query);
        $conn = null;
    }
    ?>
<html>
<head>
  <title>Insert</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
    <a href="home.php">Back to home</a>   
    <form action="" method="GET">
		<center><h3>Insert</h3></center>
		<table align="center">
			<tr><td>PID</td><td><input name="txt_pid" type="text"></td></tr>
			<tr><td>Name</td><td><input name="txt_name" type="text"></td></tr>
            <tr><td>OS</td><td><input name="txt_os" type="text"></td></tr>
            <tr><td>MP</td><td><input name="txt_mp" type="text"></td></tr>
            <tr><td>SOOAD</td><td><input name="txt_sooad" type="text"></td></tr>
            <tr><td>CN</td><td><input name="txt_cn" type="text"></td></tr>
            <tr><td>WT</td><td><input name="txt_wt" type="text"></td></tr>
			<tr>
				<td></td>
				<td>
					<input name="btn_save" type="submit" Value="Save">
					<input type="Reset" value="Reset">
					<a href="home.php"><button type="button" class="btn btn-info btn-sm">Back</button></a>
				</td>
			</tr>
		</table>
	</form>
</body>    
</html>