<?php
$a = $_POST['id'];
// Establish Connection with MYSQL
$con = mysql_connect("localhost","root");
// Select Database
mysql_select_db("forum", $con);
// Specify the query to Update Record
$sql = "Update registration set Status='Confirm' where id=".$Id."";
// Execute query
mysql_query($sql,$con);
// Close The Connection
mysql_close($con);
echo '<script type="text/javascript">alert("User Request Confirmed");window.location=\'adminindex.php\';</script>';
?>