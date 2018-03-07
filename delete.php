<?php 
    $pid="";
    $name="";
    $os="";
    $mp="";
    $sooad="";
    $cn="";
    $wt="";

    $conn = new mysqli("localhost","root","","student");
    if(isset($_GET['btn_get'])) {
        $pid = $_GET['txt_pid'];
        $query = "SELECT * from s where PID='$pid'";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
        
        $name=$data['NAME'];
        $os=$data['OS'];
        $mp=$data['MP'];
        $sooad=$data['SOOAD'];
        $cn=$data['CN'];
        $wt=$data['WT'];
    }

    if(isset($_GET['btn_delete'])) { 
		$pid = $_GET['txt_pid'];
        $query = "DELETE from s where PID='$pid'";
		mysqli_query($conn,$query);   
		$pid="";
		$name="";
		$os="";
		$mp="";
		$sooad="";
		$cn="";
		$wt="";   
    }
?>

<html>
<head>
    
</head>
    
<body>
    <a href="home.php">Back to home</a>
    
    <form action="" method="GET">
		<h3>Delete</h3>
        
		<table align="left">
			<tr><td>PID</td><td><input name="txt_pid" type="text" value="<?php echo $pid ?>"></td></tr>
			<tr><td>Name</td><td><input name="txt_name" type="text" value="<?php echo $name ?>"></td></tr>
            <tr><td>OS</td><td><input name="txt_os" type="text" value="<?php echo $os ?>"></td></tr>
            <tr><td>MP</td><td><input name="txt_mp" type="text" value="<?php echo $mp ?>"></td></tr>
            <tr><td>SOOAD</td><td><input name="txt_sooad" type="text" value="<?php echo $sooad ?>"></td></tr>
            <tr><td>CN</td><td><input name="txt_cn" type="text" value="<?php echo $cn ?>"></td></tr>
            <tr><td>WT</td><td><input name="txt_wt" type="text" value="<?php echo $wt ?>"></td></tr>
			<tr>
				<td></td>
				<td>
                    <input name="btn_get" type="submit" Value="Get">
					<input name="btn_delete" type="submit" Value="Delete">
				</td>
			</tr>
		</table>
	</form>
</body>    
</html>