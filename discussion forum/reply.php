<html>
<title>Reply</title>
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
<div class="menu">
<ul class="list">
<li><a href="forum.php">FORUM</a><li>
<li><a href="topic.php">CREATE TOPIC</a><li>
<li><a href="ask.php">ASK QUESTION</a><li>
<li><a href="logout.php">LOGOUT</a><li><h3 style="color:yellow;position:relative;left:300px;top:-20px">welcome <?php echo $reply=$_SESSION['uname']; ?></h3>
</ul>
<form method="post">
<table border='0' cellpadding='10' style="position:absolute;top:150px;left:380px">
<tr><td>Select Question</td><td><select name='t1'>
<?php 
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass);
$db="forum";
$sel_db=mysql_select_db($db);
$select_query=mysql_query("select * from title");
while($row=mysql_fetch_assoc($select_query))
{
echo "<option>".$row['question']."</option>";
} 
echo "</select>";
echo "</td>";
echo "</tr>";
?>
</option></select></td></tr>
<tr><td>Reply</td><td><textarea name="t2" cols="40" rows="5"></textarea></td></tr>
<tr><td colspan="5" align="center"><input style="background:blue;border-radius:20px;color:white;font-size:15px;font-weight:bold" type="submit" name="sub" value="Reply"></td></tr>
</table>
</form>
</div>	
<?php
if(isset($_POST['sub']))
{
$host="localhost";
$user="root";
$pass="";
$db="forum";
$con=mysql_connect($host,$user,$pass);
$a=$_POST['t1'];
$b=$_POST['t2'];
date_default_timezone_set('Asia/Kolkata');
$now =  date("d-m-Y h:i:s a", time());
if(!empty($_POST['t1']))
if(!empty($_POST['t2']))
{
mysql_select_db($db);
$ins=mysql_query("insert into reply(question,reply,dat,user)values('$a','$b','$now','$reply')");
{

    echo '<script language="javascript">';
    echo 'alert("Successfully Updated"); location.href="forum.php"';
    echo '</script>';
}   
}
}	
?>	
</body>
</html>