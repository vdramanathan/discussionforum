<html>
<title>Admin Signin</title>
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
<div class="container">
<h1 style="color:white;font-family:algerian;position:relative;left:450px">DISCUSSION FORUM</h1>
<div class="image"><img src="c3.ico" height="250" width="300" style="position:relative;left:430px;border-radius:50px"></div>
<div class="content" 
style="height: 250px;
    width:590px;
    background:#0f3a9a;
    position: relative;
    top: 32px;
    left: 270px;
	border-radius:50px;">
	<form method="post">
	<table align="center" cellpadding="10">
	<caption>Admin Signin</caption>
	<tr><td>Admin</td><td><input type="text" name="t1"></td></tr>
		<tr><td>Password</td><td><input type="password" name="t2"></td></tr>
	<tr><td colspan="10" align="center"><input type="Submit" name="sub" value="Signin" class="btn"></td></tr>
	</table>
	</form>
</div>
</div>
<?php 
if(isset($_POST['sub']))
{
	if(!empty($_POST['t1']=="Admin")&&($_POST['t2']=="Admin"))
	{
	    echo '<script language="javascript">';
    echo 'location.href="adminindex.php"';
    echo '</script>';
	}
	else
	{
	    echo '<script language="javascript">';
    echo 'alert("Invalid username or Password"); location.href="admin.php"';
    echo '</script>';
	}
}
?>
</body>
</html>