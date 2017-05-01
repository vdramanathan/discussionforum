<html>
<title>Ask Question</title>
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
    top: 320px;
	left:0px;
	border-radius:0px;
}
.list li
{
list-style:none;
padding:0px;
float:left;
}
li a
{
    color: white;
    text-decoration: none;
    position: relative;
    left: 250px;
    top: 0px;
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
<?php
session_start();
$id=$_SESSION['uname'];
if(empty($id))
{
header("Location:userlogin.php");
}
?>
<div class="container">
<h1 style="color:white;font-family:algerian;position:relative;left:450px">DISCUSSION FORUM</h1>
<div class="image"><img src="logo.jpg" height="250" width="300" style="position:relative;left:450px;border-radius:50px"></div>
<div class="menu">
<ul class="list">
<li><a href="forum.php">FORUM</a><li>
<li><a href="topic.php">CREATE TOPIC</a><li>
<li><a href="#">ASK QUESTION</a><li>
<li><a href="logout.php">LOGOUT</a><li><h3 style="color:yellow;position:relative;left:300px;top:-20px">welcome <?php echo $ask=$_SESSION['uname']; ?></h3>
</ul>
</div>
<div class="content" 
style="height: 250px;
    width:590px;
    background:#0f3a9a;
    position: relative;
    top: 70px;
    left: 270px;
	border-radius:50px;">
	<form method="post">
		<table align="center" cellpadding="10">
	<caption>Question</caption>
		<tr><td>Title</td><td><input type="text" name="t1"></td></tr>
	<tr><td>Question</td><td><textarea name="t2"  rows="3" cols="40"></textarea></td></tr>
	<tr><td colspan="10" align="center"><input type="Submit" name="sub" value="Post" class="btn"></td></tr>
	</table>
	</form>
</div>
</div>
<?php
$host="localhost";
$user="root";
$pass="";
$db="forum";
date_default_timezone_set('Asia/Kolkata');
$now =  date("d-m-Y h:i:s a", time());$con=mysql_connect($host,$user,$pass);
if(isset($_POST['sub']))
{
$a=$_POST['t1'];
$b=$_POST['t2']; 
if(!empty($_POST['t1']))
if(!empty($_POST['t2']))
{
mysql_select_db($db);
$insert=mysql_query("INSERT INTO title(title,question,dat,user) VALUES ('$a','$b','$now','$ask')");
{
    echo '<script language="javascript">';
    echo 'alert("Posted Successfully"); location.href="forum.php"';
    echo '</script>';
}   
}
}
?>
</body>
</html>