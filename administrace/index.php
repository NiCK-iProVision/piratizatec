<?php
ob_start();
session_start();  
include 'fckeditor/fckeditor.php';
if($_SESSION['prihlasen']==1) {  
?>
<script>
window.location.href="admin.php";
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="cs" dir="ltr">
<head>        
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ŽatecVolíPiráty.CZ</title>
<meta name="description" content="Žatec volí Piráty">
<meta name="keywords" content="zatec, piratska, strana, volime, piraty">
<meta name="author" content="Pirátská strana">
<meta name="robots" content="index,follow">
<link rel="shortcut icon" href="http://localhost/ikona.ico" type="image/x-icon">       
<link rel="stylesheet" href="http://localhost/styl.css" type="text/css" media="screen">
</head>
<body>
<div class="h"><h1>www.zatecvolipiraty.cz</h1><h2>ŽatecVolíPiráty</h2><h3>Pirátská strana</h3><h3>Žatec</h3><h3>Volby</h3><h3>Cool</h3><h3>Život</h3><h4>Styl</h4><h4>Kandidatka</h4><h4>Dobrovolnik</h4><p>www.zatecvolipiraty.cz</p><p>ŽatecVolíPiráty</p><p>Pirátská strana</p><p>Žatec</p><p>Volby</p><p>Cool</p><p>Život</p><p>Styl</p><p>Kandidatka</p><p>Dobrovolnik</p></div>
<form method="post" action="prihlasit.php">
<div class="center" style="position: relative;left: 145px;"><br><input class="volby" type="password" name="heslo" placeholder="Přihlášení do administrace"> <input class="volby" type="submit" style="width: 50px;" value="»"></div>
<div class="center"><a href="#"><img alt="logo" src="http://localhost/logo.png" /></a></div><br>
</form>

<div class="center"><span class="copy">©</span> Piráti, 2014. Všechna práva vyhlazena. Sdílejte a nechte ostatní sdílet za stejných podmínek. Webovou prezentaci vytvořil <a href="http://nick.maweb.eu/"><span class="autor">Štěpán Štricz</span></a></div>
</body>
</html>