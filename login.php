<!DOCTYPE html>
<html>
<head>
<title>pdam Tirta Musi Palembang</title>
<style type="text/css">
body { font-family: Verdana; font-size: 14px; background-color: #grey; }
#utama{
width: 350px;
margin: 0 auto;
margin-top: 11%;}
input, button { padding: 7px; }
button { cursor: pointer; }
.container { background-color:  #d6eadf; border: 3px solid #809bce; padding: 10px; width: 400px; margin: 0 auto; }
.container .form-control { margin-bottom: 10px; width: 100%; }
.container .form-control:last-child { margin-bottom: 0; }
.container .form-control input { width: 380px; }
.container .form-control button { width: 397px; }
.container .pesan { color: #d6eadf; text-align: center; padding: 7px; background-color: #FF0000; font-weight: bold; }

</style>
</head>
<body background="header3-bg.jpg">
    <div id="utama">
      
<div class="container">
   <center> <img src="pdamlogo.png" width="140" height="150"></center>
<h1><center>LOGIN TO SYSTEM</center></h1>
<hr />
<form action="cek_login.php" method="POST">
<div class="form-control">
  <input type="text" name="user" placeholder="Masukan username">
</div>
<div class="form-control">
  <input type="password" name="pass" placeholder="Masukan password">
</div>
<div class="form-control">
  <button type="submit" name="submit">LOGIN</button>
</div>

</form>
</div>
</body>
</html>
