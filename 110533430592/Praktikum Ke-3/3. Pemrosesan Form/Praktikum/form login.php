<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Login</title>
<style type="text/css">

#luar label
{
	position: absolute;
	left: 478px;
	top: 86px;
	width: 334px;
	z-index: 1;
	background-color: lavender;
	border: 7px solid #88C4FF;
	visibility: visible;
	right: auto;
	bottom: auto;
	margin: 2px;
	padding: 20px;
	font-size: 40px;
	font-style: oblique;
	font-weight: bold;
	font-family: Snap ITC, Geneva, Snap ITC;
	color: #06F;
	text-align: center;
	height: 288px;
	border-radius : 50px;
}


#dalam 
{
	position: absolute;
	left: 560px;
	top: 205px;
	width: 233px;
	height: 184px;
	z-index: 2;
	color: #09F;
	background-color: lavender;
	font-size: 20px;
}
</style>
<script>
function cek(n) {
al = /^[A-Za-z]{1,}$/; //validasi huruf
return al.test(n);
}
function val(){
var v=document.forms["myForm"]["nama"].value;
var i=document.forms["myForm"]["password"].value;
if (v==null || v=="" && i==null || i=="") //tidak boleh kosong
  {
  alert("Username atau Password Kosong");
  myForm.nama.focus();
  return false;
  }
if (!cek(v) || !cek(i)){ //cek username dan password
	alert ('Username dan Password dalam huruf!');
	return false;
}}
</script>
</head>
<body bgcolor="gray">
<?php  

session_start();    
?>  
<div id="luar" align="left">
    <label align="center"><b>Login</b></label>
	
  <hr align="center" width="300" size="5" color="gray">
</div>
  
<div id="dalam" align="left">
   <form name="myForm" method="POST" action="tujuan.php" onSubmit="return val()">
    <label><i>Username</i> :</label>
    <br>
    <input type="text" name="nama" id="nama" width="200" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
    <br><br>
    <label><i>Password</i> :</label>
    <br>
    <input type="password" name="pass" id="pass" width="200">
    <br><br>
    <input type="submit" name="Login" value="Login", style=font-family:"Courier New">
    <input type="reset" name="Reset" value="Reset", style=font-family:"Courier New">
  </form>
</div>
</body>
</html>
