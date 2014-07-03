<?php
ob_start();
session_start();  
include '../fckeditor/fckeditor.php';
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
<link rel="shortcut icon" href="<?php echo $url;?>ikona.ico" type="image/x-icon">       
<link rel="stylesheet" href="<?php echo $url;?>styl.css" type="text/css" media="screen">
</head>
<body>
<div class="h"><h1>www.zatecvolipiraty.cz</h1><h2>ŽatecVolíPiráty</h2><h3>Pirátská strana</h3><h3>Žatec</h3><h3>Volby</h3><h3>Cool</h3><h3>Život</h3><h4>Styl</h4><h4>Kandidatka</h4><h4>Dobrovolnik</h4><p>www.zatecvolipiraty.cz</p><p>ŽatecVolíPiráty</p><p>Pirátská strana</p><p>Žatec</p><p>Volby</p><p>Cool</p><p>Život</p><p>Styl</p><p>Kandidatka</p><p>Dobrovolnik</p></div>
<div class="center"><a href="#"><img alt="logo" src="<?php echo $url;?>logo.png" /></a></div><br>
<?php
if($_SESSION['prihlasen']==1) {  
?>
<table class="admintb"><tr>
<td class="adminleft">
<p align="center" style="font-size: 17px;"><strong>● Navigace ●</strong></p><br />
<a href="<?php echo $url;?>administrace/clanky/">Články »</a> <br><br>
<a href="<?php echo $url;?>">Zpět na web »</a>
</td>
<td valign="top" class="adminright">
<p align="center" style="font-size: 17px;"><strong>● Upravit článek ●</strong></p><br />

<?php
$id = $_POST['id'];
$_POST["clanek"]=mysql_real_escape_string($_POST["clanek"]);
$_POST["perex"]=mysql_real_escape_string($_POST["perex"]);
$a = $_POST['nazev'];
$b = $_POST['autor'];
if (!empty($a) and !empty($id) and !empty($b) and !empty($_POST["perex"]) and !empty($_POST["clanek"])) {
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("UPDATE `clanky` SET `nazev` = '$a' ,`text` = '".$_POST["clanek"]."' ,`perex` = '".$_POST["perex"]."',`autor` = '".$_POST["autor"]."' WHERE id = '$id'") or die(mysql_error());
echo "<p align='center'>Článek <strong>$a</strong> byl upraven</p>";
echo "<p align='center'><a href='index.php'><span style='color: black;'>Seznam článků</span></a></p>";
}
else {
echo "<p align='center'>Článek <strong>$a</strong> nebyl upraven.Jedno z polí nebylo vyplněno!</p>";
echo "<p align='center'><a href='upravit_clanek.php?id=$id'><span style='color: black;'>Zpět</span></a></p>";
}
?>

</td>
</tr>
</table>
<?php
} else {
echo "<p align='center' style='font-size: 20px; font-weight: bold;'>Nejste přihlášen/a jako administrátor! <br /><a href='".$url."administrace/index.php'>Přihlásit</a></p>";
}
?>
<br /><div class="center"><span class="copy">©</span> Piráti, 2014. Všechna práva vyhlazena. Sdílejte a nechte ostatní sdílet za stejných podmínek. Webovou prezentaci vytvořil <a href="http://nick.maweb.eu/"><span class="autor">Štěpán Štricz</span></a></div>
</body>
</html>
