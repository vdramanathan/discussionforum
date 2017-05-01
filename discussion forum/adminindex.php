<html>
<title>Manage User Details</title>
<head>
<link rel="shorcut icon" href="df.png">
<style>

.sub
{
    position: absolute;
    top: 50px;
    left: 206px;
}
.sub li
{
list-style:none;
padding:0px;
float:none;
}
.sub1
{
    position: absolute;
    top: 50px;
    left: 70px;
}
.sub1 li
{
list-style:none;
padding:0px;
float:none;
}
.list li:hover .sub
{
display:block;
}
.sub
{
display:none;
}
.sub li a
{
 line-height:1.5;
 color:red;
}
.list li:hover .sub1
{
display:block;
}
.sub1
{
display:none;
}
.sub1 li a
{
 line-height:1.5;
 color:red;
}
.menu
{
    height: 50px;
    width: 1160px;
    background: #0f3a9a;
    margin: 0 auto;
    position: absolute;
    top: 10px;
	left:15px;
	border-radius:0px;
}
.list li
{
list-style:none;
padding:0px;
float:left;
    position: relative;
    left: -260px;
}
li a
{
    color: white;
    text-decoration: none;
    position: relative;
    left: 250px;
    top: 0px;
	font-size:14px;
    font-weight: bold;
	border-right:solid 1px white;
	border-left:solid 1px white;
    padding: 15px;
}
.container
{
height:660px;
width:1190px;
background:#071354;
position:relative;
left:70px;
border-radius:40px;
}
table
{
color:white;
font-size:20px;
font-weight:bold;
}
.btn
{
background:blue;
border-radius:50px;
color:white;
font-weight:bold;
font-size:18px;
}
</style>
</head>
<body>
<div class="container">
<h1 style="color:white;font-family:algerian;position:relative;left:450px">DISCUSSION FORUM</h1>
<div class="menu">
<ul class="list">
<li><a href="#">USER DETAILS</a><li>
<li><a href="adminforum.php">FORUM</a><li>
<li><a href="viewcategory.php">VIEW CATEGORY</a><li>
<li><a href="add.php">ADD / DELETE USER</a><li>
<li><a href="managecategory.php">ADD / DELETE CATEGORY</a><li>
<li><a href="deletecomment.php">DELETE COMMENT</a><li>
<li><a href="index.html">LOGOUT</a><li>
</ul>
</div>
<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
$db_select=mysql_select_db("forum");
$select=mysql_query("select * from registration");
echo "<table border='1' width='900'align='center' cellpadding='0' cellspacing='0' style='font-size:16px;position:absolute;top:100px;left:100px'>";
echo "<th style='color:blue;background:white'>USER ID</th>";
echo "<th style='color:blue;background:white'>EMAILID</th>";
echo "<th style='color:blue;background:white'>NAME</th>";
echo "<th style='color:blue;background:white'>STATUS</th>";
echo "<th style='color:blue;background:white'>ADD / DELETE USER</th>";
while($row=mysql_fetch_assoc($select))
{
echo "<tr>";
echo "<td style='color:white;'>".$row['id']."</td>";
echo "<td style='color:white;'>".$row['email']."</td>";
echo "<td style='color:white;'>".$row['name']."</td>";
echo "<td style='color:white;'>".$row['status']."</td>";
echo "<td style='color:white;'><a style='color:white;font-size:15px' href='add.php'>ADD USER / </a>  <a style='color:white;font-size:15px' href='add.php'>DELETE USER</a></td>";
}
echo "</table>";
?>
<?php 
$records = mysql_num_rows($select);   
?>                
<td colspan='4'><div style="position:absolute;top:70px;color:white;font-weight:bold;left:500px"><?php echo 'Total '.$records.' Records'; ?> </div></td>
                    	</tr>
						
</body>
</html>