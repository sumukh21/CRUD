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

    if(isset($_GET['btn_update'])) {
        $PID = $_GET['txt_pid'];
        $Name = $_GET['txt_name'];
        $OS = $_GET['txt_os'];
        $MP = $_GET['txt_mp'];
        $SOOAD = $_GET['txt_sooad'];
        $CN = $_GET['txt_cn'];
        $WT = $_GET['txt_wt'];
    
        $conn = new mysqli("localhost","root","","student");
        $query = "Update s Set NAME='$Name',OS='$OS',MP='$MP',SOOAD='$SOOAD',CN='$CN',WT='$WT' Where PID='$PID'";
        mysqli_query($conn,$query);      
    }
    
    $conn = null;
?>

<html>
<head>
    
</head>
    
<body>
    <a href="home.php">Back to home</a>
    
    <form action="" method="GET">
		<h3>Update</h3>
        
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
					<input name="btn_update" type="submit" Value="Update">
				</td>
			</tr>
		</table>
	</form>
</body>    
</html>