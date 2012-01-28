<!--NOOTTTTT= HEPSİNİ AYNI DOSYA İÇERİSİNDE BULUNDUR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->


<?php

include "baglan3.php"; 

$id = $_POST['id'];
$isim = $_POST['isim'];
$guncel=mysql_query("UPDATE survey SET name='$isim' WHERE id='$id'") or die ("olmadı bu!!!");

?>
