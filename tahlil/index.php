<!--NOOTTTTT= HEPSİNİ AYNI DOSYA İÇERİSİNDE BULUNDUR !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->

<?php include "baglan3.php"; 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang = "TR" lang = "tr">
  <head>
    <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/public/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="/public/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/public/css/jquery-ui-1.7.1.custom.css" />

    <!-- neredeyse tüm uygulamalar -->
    <script type="text/javascript" src="/public/js/jquery.js"></script>

    <!-- facebox -->
    <script type="text/javascript" src="/public/js/facebox.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $('a[rel*=facebox]').facebox();
      })
    </script>

    <!-- doz alımı -->
    <script type="text/javascript" src="/public/js/jquery.tools.min.js"></script>
    <!-- accordion & tetkik ve tüm ui'ler için -->
    <script type="text/javascript" src="/public/js/jquery-ui.min.js"></script>
    <!-- multiselect tahlil penceresi -->
    <script type="text/javascript" src="/public/js/jquery.multiselect.js"></script>
    <!-- tooltip » vtip -->
    <script type="text/javascript" src="/public/js/vtip.js"></script>

    <!-- form validate -->
    <script type="text/javascript" src="/public/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/public/js/messages_tr.js"></script>
    

    

    <title>TAHLİL</title>
  </head>

 


  <body>
  
    <div id="wrapper">
      <div id="container">
        <p id="header-notice">
        Ondokuz Mayıs Üniversitesi Medikal Simülasyon Eğitim Merkezi        </p>
        <ul class="tabs">
	  <li><a href="/a/">Ana Sayfa</a></li>
	  <li><a href="/a/list">Olgular</a></li>
	  <li><a href="/a/personal/edit">Hesabım</a></li>
	  <li><a href="/a/personal/logout">Çıkış</a></li>
        </ul>
      </div>
    </div>

    <div id="content">
      <div id="sidebar">
        <span class="mod">Mod:
                              Öğrenci        </span>

        <div id="sidebar-image"></div>

        <span>student1 </span>

        

        
	
	      </div>

      <!-- sayfayı içe aktaralım -->
      <h2>
  <!--div id="time"></div-->
  Tahlil  </h2>

<p>Hastanın gelen ambulans ile tam teşekkülü devlet hastanesi acil servisine sevki gerçekleşmiştir. Ambulans gelene kadar bol ılık su ile vücudu yıkanmış ve üzerine temiz bir çarşaf örtülmüştür. Tarım ilacı ile kontaminasyon şüphesi olan elbiseleri imha/analiz edilmek üzere tehlikeli tıbbi atık çöpüne atılmıştır.::</p>


<p class="question">Acil serviste bu hastaya yönelik olarak hangi tetkikleri istersiniz?</p>

<p class="answer">Görüntülemek istediğiniz tahlilleri seçiniz.</p>

<script type="text/javascript">$(function(){		$("#tabs").tabs();$('#tabs-1').tabs();$('#tabs-2').tabs();$('#tabs-3').tabs();$('#tabs-4').tabs();$('#tabs-5').tabs();});</script>

<form action="islem.php" method='post'>
<div id='tabs'>
	<ul>
		<li><a href='#sekme-1'>Radyolojik</a></li>
		<li><a href='#sekme-2'>Biyokimya</a></li>
		<li><a href='#sekme-3'>Patolojik</a></li>
		<li><a href='#sekme-4'>Mikrobiyoloji</a></li>
		<li><a href='#sekme-5'>Nükleer Tıp</a></li>
	</ul>

	<div id='sekme-1'>
		<div id='tabs-1'>
			<ul>
				<li><a href='#sekme-101'>Direkt Radyografi</a></li>
				<li><a href='#sekme-102'>MR</a></li>
				<li><a href='#sekme-103'>BT</a></li>
				<li><a href='#sekme-104'>Ultrasonografi</a></li>
				<li><a href='#sekme-105'>Doppler Ultrasonografi</a></li>
			</ul>

			<div id='sekme-101'>
			<table id='box-table-b'>
				 <input  align="right" value="submit" type= "image" src="img/add.png" name="ekle" />
				 <input type="image" value="Submit" src="img/delete.png"  align="right" name="sil"/>

				 <tr>
				 
				<?php
				$say=-1;
				$sql=mysql_query("select * from survey");
				 while($dizi = mysql_fetch_array($sql)) // Tablodan gelen her satır için bir liste elemanı
					{
					
						$id = $dizi['id'];
						$isim = $dizi['name'];
						$say=$say+1;
						
						
						if ($id[3]==1 && $id[1]!=2){
							
							if($say==3){
								echo '<tr><td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim .'</td>';
								 
								
								$say=0;
							}
							
							else{
							
						echo '<td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim .'</td>';} 
					}
					
					
				  
				}

				?>
				
			</table>
			</div>
			<div id='sekme-102'>
				<table id='box-table-b'>
				<input align="right" value="submit" type= "image" src="img/add.png" name="ekle" />
				 <input type="image" value="Submit" src="img/delete.png"  align="right" name="sil"/>
				 <?php
				$say=0;
				$sql=mysql_query("select * from survey");
				 while($dizi = mysql_fetch_array($sql)) // Tablodan gelen her satır için bir liste elemanı
					{
					
						$id = $dizi['id'];
						$isim = $dizi['name'];
						$say=$say+1;
						if ($id[3]==2){
							
							if($say%3==0){
								echo '<tr><td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim . '</td>'; 
								$say=0;
							}
						else
							echo '<td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim .'</td>'; 
					}
				  
				}

				?>
				 
				</table>
			</div>
			<div id='sekme-103'>
				<table id='box-table-b'>
				<input align="right" value="submit" type= "image" src="img/add.png" name="ekle" />
				 <input type="image" value="Submit" src="img/delete.png"  align="right" name="sil"/>
				 
				<?php
				$say=-1;
				$sql=mysql_query("select * from survey");
				 while($dizi = mysql_fetch_array($sql)) // Tablodan gelen her satır için bir liste elemanı
					{
					
						$id = $dizi['id'];
						$isim = $dizi['name'];
						$say=$say+1;
						if ($id[3]==3){
							
							if($say%3==0){
								echo '<tr><td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim . '</td>'; 
								$say=0;
							}
						else
							echo '<td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim .'</td>'; 
					}
				  
				}

				?>
				</table>
			</div>
			<div id='sekme-104'>
				<table id='box-table-b'>
				<input align="right" value="submit" type= "image" src="img/add.png" name="ekle" />
				 <input type="image" value="Submit" src="img/delete.png"  align="right" name="sil"/>
				 
				<?php
				$say=0;
				$sql=mysql_query("select * from survey");
				 while($dizi = mysql_fetch_array($sql)) // Tablodan gelen her satır için bir liste elemanı
					{
					
						$id = $dizi['id'];
						$isim = $dizi['name'];
						$say=$say+1;
						if ($id[3]==4){
							
							if($say%3==0){
								echo '<tr><td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim . '</td>'; 
								$say=0;
							}
						else
							echo '<td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim .'</td>'; 
					}
				  
				}

				?>
				</table>
			</div>
			<div id='sekme-105'>
				<table id='box-table-b'>
				<input align="right" value="submit" type= "image" src="img/add.png" name="ekle" />
				 <input type="image" value="Submit" src="img/delete.png"  align="right" name="sil"/>
				
				 <?php
				$say=1;
				$sql=mysql_query("select * from survey");
				 while($dizi = mysql_fetch_array($sql)) // Tablodan gelen her satır için bir liste elemanı
					{
					
						$id = $dizi['id'];
						$isim = $dizi['name'];
						$say=$say+1;
						if ($id[3]==5){
							
							if($say%3==0){
								echo '<tr><td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim . '</td>'; 
								$say=0;
							}
						else
							echo '<td><input name="tahlil[' . $id . ']" type="checkbox" value="' . $id . '" /> ' . $isim .'</td>'; 
					}
				  
				}

				?>
				</table>
			</div>
		</div>
	</div>
	<div id='sekme-2'>
		<div id='tabs-2'>
			<ul>
				<li><a href='#sekme-201'>Rutin Biyokimya</a></li>
				<li><a href='#sekme-202'>Hemogram</a></li>
				<li><a href='#sekme-203'>Rutin İdrar Tetkiki</a></li>
				<li><a href='#sekme-204'>Kan Gazı</a></li>
				<li><a href='#sekme-205'>İlaç Düzeyleri</a></li>
				<li><a href='#sekme-206'>BOS Biyokimya</a></li>
				<li><a href='#sekme-207'>HPLC Testleri</a></li>
				<li><a href='#sekme-208'>İdrar Biyokimya</a></li>
				<li><a href='#sekme-209'>Hormon Testleri</a></li>
			</ul>

			<div id='sekme-201'>
				<table id='box-table-b'>
				<input align="right" value="submit" type= "image" src="img/add.png" name="ekle" />
				 <input type="image" value="Submit" src="img/delete.png"  align="right" name="sil"/>
				 
				 <tr>
					<td><input type='checkbox' value='20101' name='tahlil[]' >foo</td>
					<td><input type='checkbox' value='20102' name='tahlil[]' >bar</td>
				</table>
			</div>
			<div id='sekme-202'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-203'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-204'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-205'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-206'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-207'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-208'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-209'>
				<table id='box-table-b'>
				</table>
			</div>
		</div>
	</div>
	<div id='sekme-3'>
		<div id='tabs-3'>
			<ul>
			</ul>

		</div>
	</div>
	<div id='sekme-4'>
		<div id='tabs-4'>
			<ul>
				<li><a href='#sekme-401'>Merkez Mikrobiyoloji Tetkik</a></li>
				<li><a href='#sekme-402'>Hematolojik Testler</a></li>
				<li><a href='#sekme-403'>İmmünolojik Testler</a></li>
				<li><a href='#sekme-404'>Merkez Lab. Adli Toksikoloji</a></li>
			</ul>

			<div id='sekme-401'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-402'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-403'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-404'>
				<table id='box-table-b'>
				</table>
			</div>
		</div>
	</div>
	<div id='sekme-5'>
		<div id='tabs-5'>
			<ul>
				<li><a href='#sekme-501'>Pozitron Emisyon Tomografi</a></li>
				<li><a href='#sekme-502'>I-131 MIBG Sintigrafisi</a></li>
				<li><a href='#sekme-503'>In-111 Octreotid Sintigrafisi</a></li>
				<li><a href='#sekme-504'>Tc-99m Hmpao İşaretli Lökosit Sintigrafi</a></li>
			</ul>

			<div id='sekme-501'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-502'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-503'>
				<table id='box-table-b'>
				</table>
			</div>
			<div id='sekme-504'>
				<table id='box-table-b'>
				</table>
			</div>
		</div>
	</div>
</div>
    <input type="hidden" name="cid" 	value="1">
    <input type="hidden" name="id" 		value="35">
    <input type="hidden" name="ntype" 	value="exam">

    
</form>    </div>

    <div id="footer">
      <ul>
	<li><a href="/a/">Ana Sayfa</a></li>
	<li><a href="/a/list">Olgular</a></li>
	<li><a href="/a/personal/edit">Hesabım</a></li>
	<li><a href="/a/personal/logout">Çıkış</a></li>
      </ul>

      <p class="copyright">
      &copy; 2011
      OMÜ Medikal Simülasyon Eğitim Merkezi.  Tüm Hakları Saklıdır.
      </p>
    </div>

  </body>
</html>
