<?php 
include "hlavicka.php";
?>
<div class="nadpis_cent">
Hlavní stránka Pirátů Žatec
</div><div class="text_cent">
Hnutí Duha sestavilo stručnou, informativní brožuru o rizicích začlenění mezinárodní obchodní dohody TTIP do evropské legislativy. Sdílíme.
</div><br>
<?php
$mysql_pripojeni=mysql_connect('localhost' ,'xampp' ,'');
mysql_select_db('test', $mysql_pripojeni);
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_results=utf8");
$url="http://localhost/";
$vyber55=mysql_query("select * from clanky");
$pocet55 = mysql_num_rows($vyber55);
if ($pocet55=='0') {
echo "<p align='center'><br /><span style='color: red;'>Žádné články nebyly přidané</span></p>";
}
$PZS = 5; 
$str = 1;  
if(isset($_GET["str"]) && $_GET["str"] > 0) {$str = $_GET["str"];} 
$start = ($str - 1) * $PZS;
$query = "SELECT * FROM clanky ORDER BY id DESC ";
$pocetVysledku = mysql_num_rows(mysql_query($query)); 
$query .= " LIMIT $PZS OFFSET $start";
$mysql = mysql_query($query);
while ($vypsat=mysql_fetch_assoc($mysql))
{
echo "<div class='nadpis_cent'>".$vypsat['nazev']."</div><div class='text_cent'>".$vypsat['perex']."<p align='right'>Napsal/a: ".$vypsat['autor']." | <a href='clanek.php?id=".$vypsat['id']."'>Celý článek »</a></p></div><br>";
}
if ($pocetVysledku>$PZS)  {
$pocetStran = (($pocetVysledku % $PZS)> 0) ? (int)($pocetVysledku / $PZS) + 1 : $pocetVysledku / $PZS;    
echo     "<br class='clear'>";
echo     "<p align='center'><bold><span class='pageofpage'>Strana $str z $pocetStran</span><br /><br /></bold></p>";
echo "<div align='center' id='tnt_pagination' >";

for ($i = 1; $i <= $pocetStran; $i++) {
    if ($i != $str) {
        echo "&nbsp;&nbsp;<a href='?str=".$i."'>".$i."</a>&nbsp;&nbsp;";
    } else {
        echo "&nbsp;&nbsp;<span class='active_page'><bold>".$i."</bold></span>&nbsp;&nbsp;";
    }
 }
echo "</div>";
}                                                                                                                                                                                              
else {}
include "zapati.php";
?>

