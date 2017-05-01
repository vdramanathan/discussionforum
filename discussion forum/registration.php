<html>
<title>SignUp</title>
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
<script>

    function updateFileName() {
        var upload = document.getElementById('choose');
        var f_name = document.getElementById('f_name');
        var fileNameIndex = upload.value.lastIndexOf("\\");

        f_name.value = upload.value.substring(fileNameIndex + 1);
    }
	</script>
</head>
<body>
<div class="container">
<h1 style="color:white;font-family:algerian;position:relative;left:450px">DISCUSSION FORUM</h1>
<div class="image"><img src="pic5.jpg" height="250" width="500" style="position:relative;left:320px;border-radius:50px"></div>
<div class="content" 
style="height: 250px;
    width:590px;
    background:#0f3a9a;
    position: relative;
    top: 32px;
    left: 270px;
	border-radius:50px;">
	<form method="post" enctype="multipart/form-data">
	<table align="center" cellpadding="10">
	<caption>Signup</caption>
	<tr><td>Emailid</td><td><input type="email" name="t1"></td></tr>
	<tr><td>Fullname</td><td><input type="text" name="t2"></td></tr>
	<tr><td>Password</td><td><input type="password" name="t3"></td></tr>
	<tr><td>Avatar</td><td><input type="file" name="upload" id="choose" onchange="updateFileName()"><input type="hidden" id="f_name" name="filename"></td></tr>
	<tr><td colspan="10" align="center"><input type="Submit" name="sub" value="Signup" class="btn"></td></tr>
	</table>
	</form>
</div>
</div>
<?php
$host="localhost";
$user="root";
$pass="";
$db="forum";
$con=mysql_connect($host,$user,$pass);
if(isset($_POST['sub']))
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['filename'];
$e="pending";
 $sel=mysql_select_db($db);
$email =$_POST['t1'];
   $results = mysql_query("select email from registration where email='$a' ");
   $row = mysql_num_rows($results);
if ($row > 0 ) {
    echo '<script language="javascript">';
    echo 'alert("Email already exists")';
    echo '</script>';
} else {

if ($row == 0 ) {
    echo '<script language="javascript">';
    echo 'alert("Email has been added to the database")';
    echo '</script>';
echo "";
}
}
if(!empty($_POST['t1']))
if(!empty($_POST['t2']))
if(!empty($_POST['t3']))
if(!empty($_POST['filename']))
{
mysql_select_db($db);
$insert=mysql_query("INSERT INTO registration(email,name,password,avatar,status) VALUES ('$a','$b','$c','$d','$e')");
{
    echo '<script language="javascript">';
    echo 'alert("Successfully Registered"); location.href="userlogin.php"';
    echo '</script>';
}   
}
}
?>
</body>
</html>