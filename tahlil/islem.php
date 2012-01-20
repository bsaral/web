<!--NOOTTTTT= HEPSİNİ AYNI DOSYA İÇERİSİNDE BULUNDUR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
<?php
include "baglan3.php"; // MySQL bağlantımız
mysql_query("select * from survey");
 
if(isset($_POST['sil'])) // Eğer butona basıldıysa
{
  if(isset($_POST['tahlil'])) // Eğer seçeneklerden en az biri işaretlenmişse
  {
    $dizi = $_POST['tahlil']; // Post ile gelen seçenekler diziye aktarılır.
    foreach($dizi as $tahlil) // dizinin her elemanı için tekrar eden döngü
    {
      mysql_query("delete from survey where id = '$tahlil'") or die ("silinmedi"); // MySQL'dan işbu veriyi silme
    }
  }
  else // eğer hiçbir checkbox işaretlenmemişse
  {
    echo "Birşey seçmediniz!"; // ekrana bu yazılır.
  }
}
 header("Location: index.php");// işlem tamamlandığında arayuz.php sayfasına döner
?>
