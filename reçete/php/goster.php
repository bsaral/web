<?php
/* bağlantı */
mysql_connect("localhost", "sim", "12345") or die("Could not connect");
mysql_select_db("sim") or die("Could not select database");
$sql=mysql_query("select * from drugs");
$sql_teshis=mysql_query("select * from teshis");

/* veri alışı */
$tarih=$_POST['tarih'];
$ad=$_POST['isim'];
$protokol=$_POST['email']; 
$kurum=$_POST['website'];
$dr_ad_soyad=$_POST['konu'];
$tetkit=$_POST['tetkit'];
$teshis=$_POST['teshis']; 
$ilac=$_POST['ilac']; 
$imza=$_POST['imza'];
$alici=$_POST['alıcı'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="tr-TR">
<head>
<title>REÇETE</title>
<link href="../css/stil.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/base.css" />
<link rel="stylesheet" type="text/css" media="all" href="../css/jsDatePick.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jsDatePick.min.1.1.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>

</head>

<body style="background:white;">

<div id="genel">


		<div id="genelform"> 
			<section id="iletisimformu"> 
			 
				
				
					
				<img src= "../resim/omu.jpg"> 
				<form action="#" method="post" id="formum" > 
				<div class="kolon">
					<div class="tarih">
				
						  <input type="text"  id="takvim" disabled="disabled" value="<?php print $tarih;?>"  />
				
					</div>
				</div>
				
				
					<div class="kolon">
						
						<div class="sol"> 
							<P class="yazi">HASTANIN ADI-SOYADI</P><input type="text" name="isim" id="isim" disabled="disabled" value = "<?php print $ad;?>"  class="onaylanma"/>
							
						</div> 
						<div class="sag em"> 
							
							<P class="yazi">PROTOKOL NO</P><input type="text" name="email" id="email" disabled="disabled" value = "<?php print $protokol;?>"  class="onaylanma email" /> 
							
						</div> 
					</div> 
					<div class="kolon"> 
						<div class="sol"> 
							<P class="yazi">KURUM SİCİL NO</P><input type="text" name="website" id="website" disabled="disabled" value = "<?php print $kurum;?>" />
							
														
						</div> 
						<div class ="sag">
						<P class="yazi">DR.DİP.NO ADI SOYADI</P><textarea name="konu" disabled="disabled" id="konu"><?php print $dr_ad_soyad;?></textarea>
						</div>
						<div class="sag"> 
							<P class="tetkit">İSTENEN TETKİT VE FİLMLER</P><input type="text" disabled="disabled" name="tetkit" id="tetkit" value = "<?php print $tetkit;?>"/>
							
							
							<div class="tokenteshis">		
							<P>TEŞHİS</P>
							<?php
							
							/* tokeninput larda veri alışı  */
							
								$sec1="$teshis"; 
								$yeni1=split(",", $sec1);

								while($dizi1 = mysql_fetch_array($sql_teshis))
								{
								   $id1 = $dizi1['id'];
								   $isim1 = $dizi1['name'];
								   foreach ($yeni1 as $eleman1) {
									if($eleman1==$id1){
									echo '<input name="teshis[' . $id1 . ']" type="text" disabled="disabled" id="teshisgonder" value="' . $isim1 . '" />  ' ;
									}
									}
								  
								  
								}
								?>
								
							</div>
							
							<script type="text/javascript" src="js/jquery.tokeninput.js"></script>
							
						</div> 
					</div> 
					<div class="kolon"> 
						<div class="gereksiz"> 
						<div class="tokenilac">
							<P class="yazi">GEREKLİ TEDAVİ,İLAÇ,PROTEZ VE İYİLEŞTİRME ARAÇLARI</P>
							<?php
							
							/* tokeninput larda veri alışı  */
							
								$sec="$ilac"; 
								$yeni=split(",", $sec);

								while($dizi = mysql_fetch_array($sql))
								{
								   $id = $dizi['id'];
								   $isim = $dizi['name'];
								   foreach ($yeni as $eleman) {
									if($eleman==$id){
									echo '<input name="ilac[' . $id . ']" type="text" disabled="disabled" id="ilac" value="' . $isim . '" />  ' ;
									}
									}
								  
								  
								}
								?>
								
							</div>
							
							
						</div>
						 
						
					</div> 
					<div class="kolon">
					<div class="sag">  
							<P class="yazi">SAĞLIK KURUMU MÜHÜR,İMZA</P><input type="text" disabled="disabled" name="imza" id="imza" value = "<?php print $imza;?>"/>
							
						</div> 
						<div class="sag em"> 
							
							<P class="yazi">İLAÇLARI ALANIN AD-SOYAD</P><input type="text" disabled="disabled" name="alıcı" id="alıcı" value = "<?php print $alici;?>" />
							
							
							
						</div>
						
						 
						</div>
						
						
						
						
						
					</div>
					  
				</form> 
				
				
				
				
				
			</section> 

</div>

</body>
</html>
