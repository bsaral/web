<!--NOOTTTTT= HEPSİNİ AYNI DOSYA İÇERİSİNDE BULUNDUR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
<?php
include "baglan3.php"; // MySQL bağlantımız
mysql_query("select * from survey");
 
if(isset($_POST['sil'])) // Eğer butona basıldıysa
{
  if(isset($_POST['tahlil'])) // Eğer seçeneklerden en az biri işaretlenmişse
  {
    $dizi = $_POST['tahlil']; 
    foreach($dizi as $tahlil) 
    {
      mysql_query("delete from survey where id = '$tahlil'") or die ("silinmedi"); 
    }
  }
  else // eğer hiçbir checkbox işaretlenmemişse
  {
    echo "Birşey seçmediniz!"; 
  }
}
 header("Location: index.php");// işlem tamamlandığında index.php sayfasına döner
?>
