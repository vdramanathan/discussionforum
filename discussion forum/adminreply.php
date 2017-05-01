<html>
<title>View Reply</title>
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
    width: 1190px;
    background: #0f3a9a;
    margin: 0 auto;
    position: absolute;
    top: 40px;
	left:0px;
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
    font-weight: bold;
	font-size:14px;
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
<li><a href="adminindex.php">USER DETAILS</a><li>
<li><a href="adminforum.php">FORUM</a><li>
<li><a href="viewcategory.php">VIEW CATEGORY</a><li>
<li><a href="add.php">ADD / DELETE USER</a><li>
<li><a href="managecategory.php">ADD / DELETE CATEGORY</a><li>
<li><a href="deletecomment.php">DELETE COMMENT</a><li>
<li><a href="index.html">LOGOUT</a><li>
</ul>
</div>
</div>
<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
$db_select=mysql_select_db("forum");
$select=mysql_query("select * from reply");
$records = mysql_num_rows($rep);  
echo "<table border='0' width='900'align='center' cellpadding='5' cellspacing='0' style='font-size:16px;position:absolute;top:150px;left:220px'>";
echo "<th style='color:blue;background:white'>QUESTION</th>";
echo "<th style='color:blue;background:white'>REPLIES</th>";
while($row=mysql_fetch_assoc($select))
{
echo "<tr>";
echo "<td style='color:white;'>".$row['question']."</td>";
echo "<td style='color:white;'>".$row['reply']."</td>";
echo "<td style='color:white;'>Posted By: ".$row['user']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='color:white;'>Posted on: ".$row['dat']."</td>";
while($row=mysql_fetch_assoc($rep))
{
echo "<td style='color:white;'><a style='color:white;font-size:15px' href='adminreply.php'>VIEW REPLIES</a></td>";
}
echo "<td style='color:white;'><a style='color:#00f1ff;font-size:15px' href='adminforum.php'> BACK TO FORUM</a></td>";
echo "</tr>";
}
echo "</table>";
?>

</body>
</html>