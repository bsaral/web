<!--NOOTTTTT= HEPSİNİ AYNI DOSYA İÇERİSİNDE BULUNDUR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->


<?php

include "baglan3.php"; 

 
if(isset($_POST['ekle']))
{
	$tablo=mysql_query("SELECT * FROM tahlil_id LIMIT 0, 1;");
	while($dizi2 = mysql_fetch_array($tablo)) 
		{
			$id = $dizi2['id'];
		}
	$yaz = $_POST['yaz'];
	
	$islem=mysql_query("INSERT INTO survey (id,name,stype,value) VALUES('$id','$yaz', 'null', 'default.jpg')") ;
	$id=$id+1;
	$guncel=mysql_query("UPDATE tahlil_id SET id='$id' WHERE name='Direkt Radyografi'");
	
		
	header("Location: index.php#sekme-101");
}

if(isset($_POST['ekle1']))
{
	$tablo=mysql_query("SELECT * FROM tahlil_id LIMIT 1, 1;");
	while($dizi2 = mysql_fetch_array($tablo)) 
		{
			$id1 = $dizi2['id'];
		}
	$yaz = $_POST['yaz1'];
	
	$islem=mysql_query("INSERT INTO survey (id,name,stype,value) VALUES('$id1','$yaz', 'null', 'default.jpg')") ;
	$id1=$id1+1;
	$guncel=mysql_query("UPDATE tahlil_id SET id='$id1' WHERE name='MR'");
	header("Location: index.php#sekme-102");
}

if(isset($_POST['ekle2']))
{
	$tablo=mysql_query("SELECT * FROM tahlil_id LIMIT 2, 1;");
	while($dizi2 = mysql_fetch_array($tablo)) 
		{
			$id2 = $dizi2['id'];
		}
	$yaz = $_POST['yaz2'];
	
	$islem=mysql_query("INSERT INTO survey (id,name,stype,value) VALUES('$id2','$yaz', 'null', 'default.jpg')") ;
	$id2=$id2+1;
	$guncel=mysql_query("UPDATE tahlil_id SET id='$id2' WHERE name='BT'");
	header("Location: index.php#sekme-103");
}

if(isset($_POST['ekle3']))
{
	$tablo=mysql_query("SELECT * FROM tahlil_id LIMIT 3, 1;");
	while($dizi2 = mysql_fetch_array($tablo)) 
		{
			$id3 = $dizi2['id'];
		}
	$yaz = $_POST['yaz3'];
	
	$islem=mysql_query("INSERT INTO survey (id,name,stype,value) VALUES('$id3','$yaz', 'null', 'default.jpg')") ;
	$id3=$id3+1;
	$guncel=mysql_query("UPDATE tahlil_id SET id='$id3' WHERE name='Ultrasonografi'");
	header("Location: index.php#sekme-104");
}

if(isset($_POST['ekle4']))
{
	$tablo=mysql_query("SELECT * FROM tahlil_id LIMIT 4, 1;");
	while($dizi2 = mysql_fetch_array($tablo)) 
		{
			$id4 = $dizi2['id'];
		}
	$yaz = $_POST['yaz4'];
	
	$islem=mysql_query("INSERT INTO survey (id,name,stype,value) VALUES('$id4','$yaz', 'null', 'default.jpg')") ;
	$id4=$id4+1;
	$guncel=mysql_query("UPDATE tahlil_id SET id='$id4' WHERE name='Doppler Ultrasonografi'");
	header("Location: index.php#sekme-105");
}

if(isset($_POST['sil'])) 
{
  if(isset($_POST['tahlil'])) 
  {
    $dizi = $_POST['tahlil']; 
    foreach($dizi as $tahlil) 
    {
      mysql_query("delete from survey where id = '$tahlil'") or die ("silinmedi");
      
      }
  }
  
  header("Location: index.php");
}

if(isset($_POST['sil1'])) 
{
  if(isset($_POST['tahlil'])) 
  {
    $dizi = $_POST['tahlil']; 
    foreach($dizi as $tahlil) 
    {
      mysql_query("delete from survey where id = '$tahlil'") or die ("silinmedi");
      
      }
  }
  
  header("Location: index.php#sekme-102");
}

if(isset($_POST['sil2'])) 
{
  if(isset($_POST['tahlil'])) 
  {
    $dizi = $_POST['tahlil']; 
    foreach($dizi as $tahlil) 
    {
      mysql_query("delete from survey where id = '$tahlil'") or die ("silinmedi");
      
      }
  }
  
  header("Location: index.php#sekme-103");
}

if(isset($_POST['sil3'])) 
{
  if(isset($_POST['tahlil'])) 
  {
    $dizi = $_POST['tahlil']; 
    foreach($dizi as $tahlil) 
    {
      mysql_query("delete from survey where id = '$tahlil'") or die ("silinmedi");
      
      }
  }
  
  header("Location: index.php#sekme-104");
}

if(isset($_POST['sil4'])) 
{
  if(isset($_POST['tahlil'])) 
  {
    $dizi = $_POST['tahlil']; 
    foreach($dizi as $tahlil) 
    {
      mysql_query("delete from survey where id = '$tahlil'") or die ("silinmedi");
      
      }
  }
  
  header("Location: index.php#sekme-105");
}


 
?>
