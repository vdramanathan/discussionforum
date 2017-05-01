<html>
<title>ADD / DELETE CATEGORY</title>
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
font-size:15px;
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
<?php	
if(isset($_POST['s1']))
{
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
$db_select=mysql_select_db("forum");
$a=$_POST['search'];
$select=mysql_query("select * from topic where id='$a'");
$row=mysql_fetch_assoc($select);
}
?>
<div class="container">
<h1 style="color:white;font-family:algerian;position:relative;left:450px">DISCUSSION FORUM</h1>
<div class="menu">
<ul class="list">
<li><a href="adminindex.php">USER DETAILS</a><li>
<li><a href="adminforum.php">FORUM</a><li>
<li><a href="viewcategory.php">VIEW CATEGORY</a><li>
<li><a href="add.php">ADD / DELETE USER</a><li>
<li><a href="#">ADD / DELETE CATEGORY</a><li>
<li><a href="deletecomment.php">DELETE COMMENT</a><li>
<li><a href="index.html">LOGOUT</a><li>
</ul>
<form method="post">
<table style="position:absolute;top:70px;left:400px">
<tr><td>ID</td><td><input type="text" name="search"></td></tr>
<tr><td colspan="5" align="center"><input type="submit" name="s1" value="SEARCH" style="background:blue;border-radius:10px;color:white;font-weight:bold"></td></tr>
</table>
</form>
<form method="post">
<table border='1' cellpadding='10' style="position:absolute;top:150px;left:380px">
<tr><td>ID</td><td><?php if(isset($_POST['s1'])) {echo $row['id'];} ?></td><input type="hidden" name="t1" value="<?php if(isset($_POST['s1'])) {echo $row['id'];} ?>"></tr>
<tr><td>CATEGORY</td><td><?php if(isset($_POST['s1'])) {echo $row['category'];} ?></td><input type="hidden" name="t2" value="<?php if(isset($_POST['s1'])) {echo $row['category'];} ?>"></tr>
<tr><td>TOPIC</td><td><?php if(isset($_POST['s1'])) {echo $row['topic'];} ?></td><input type="hidden" name="t3" value="<?php if(isset($_POST['s1'])) {echo $row['topic'];} ?>"></tr>
<tr><td>DESCRIPTION</td><td><?php if(isset($_POST['s1'])) {echo $row['description'];} ?></td><input type="hidden" name="t4" value="<?php if(isset($_POST['s1'])) {echo $row['description'];} ?>"></tr>
<tr><td colspan="5" align="center"><input type="submit" name="del" value="DELETE" style="background:blue;border-radius:10px;color:white;font-weight:bold"></td></tr>
</table>
</form>
</div>		
<?php
if(isset($_POST['del']))
{
$host="localhost";
$user="root";
$pass="";
$db="forum";
$con=mysql_connect($host,$user,$pass);
$a=$_POST['t1'];
{
mysql_select_db($db);
$update=mysql_query("delete from topic WHERE id='$a'");
{

    echo '<script language="javascript">';
    echo 'alert("Successfully Deleted")';
    echo '</script>';
}   
}
}	
?>	
</body>
</html>