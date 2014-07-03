<?php 
include "hlavicka.php";
$id=$_GET["id"];
if (!is_numeric($id)) { 
echo "<div class='nadpis_cent'>Chyba</div><div class='text_cent'><p align='center'>ID musí být číslo! Mohlo by se jednat o SQL injection!</p></div><br>";
}
else {
$mysql_pripojeni=mysql_connect('localhost' ,'xampp' ,'');
mysql_select_db('test', $mysql_pripojeni);
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$url="http://localhost/";


$query = "SELECT * FROM clanky where id=$id ";
$mysql = mysql_query($query);
while ($vypsat=mysql_fetch_assoc($mysql))
{
echo "<div class='nadpis_cent'>".$vypsat['nazev']."</div><div class='text_cent'>".$vypsat['text']."<p align='right'>Napsal/a: ".$vypsat['autor']."</p></div><br>";
}
}

include "zapati.php";
?>

