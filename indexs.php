<?php
$nama = "Aditya";
$nama1 = "PUTRA";
$pekerjaan = "Mahasiswa";
$tentangsaya = "TENTANG SAYA";
$alamat = "ALAMAT";
$kontak = "KONTAK SAYA"; 
$telepon = "Telepon   : 082281436560";
$email = "Email     : dittputra0502@gmail.com";
$ig = "Instagram  : @iyaaditt";
$twitter = "Twitter : @aadityaputraa";
$riwayat = "Riwayat Organisasi";
$organisasi = "-2011 : ANGGOTA OSIS DISMP N 7 SALATIGA";
$organisasi1 = "-2015 - 2016 : ANGGOTA LAB DI SMK SENOPATI SEDATI";
$organisasi2 = "-2019 : ANGGOTA DIVISI KOMUNIKASI DI UK3 UPN 'VETERAN' JAWA TIMUR";
$organisasi3 = "-2020 : KOOR DIVISI KOMUNIKASI DI UK3 UPN 'VETERAN' JAWA TIMUR";
$organisasi4 = "-2020 : ANGGOTA DI MOBILE DEVLOPER UPN 'VETERAN' JAWA TIMUR";
$riwayatpendidikan = "Riwayat Pendidikan";
$pendidikan = "-2005 - 2006 : TK PUTRA JAYA";
$pendidikan1 = "-2006 - 2012 : SDN DUKUH 1 SALATIGA";
$pendidikan2 = "-2012 - 2015 : SMPN 7 SALATIGA";
$pendidikan3 = "-2015 - 2018 : SMK SENOPATI SEDATI SIDOARJO";
$pendidikan4 = "-2018 - SEKARANG : UPN 'VETERAN' JAWA TIMUR";
$prestasi = "Prestasi";
$prestasi1 = "-PANITIA NATAL 2018 UPN 'VETERAN' JAWATIMUR KOOR DIVISI PDD ";
$prestasi2 = "-PANITIA NATAL 2019 UPN 'VETERAN' JAWA TIMUR KOOR DIVISI PDD";
$prestasi3 = "-PANITIA OMKB 2019 UPN 'VETERAN' JAWA TIMUR KOOR DIVISI PDD";
$prestasi4 = "-PANITIA BAKSOS 2019 UK3 UPN 'VETERAN' JAWA TIMUR DI DIVISI PDD";
$prestasi5 = "-PANITIA YOUTHCAMP 2018 UK3 UPN 'VETERAN' JAWA TIMUR DIVISI PDD";
$hobi = "Hobby";
$hobi1 = "-BERMAIN GAME";
$hobi2 = "-BASKET";
$hobi3 = "-FOTOGRAFI";
$hobi4 = "-EDITING VIDEO DAN FOTO";
?>
<!DOCTYPE html>
<html>
<head>
	<title>my cv</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="resume">
   		<div class="resume_left">
     		<div class="resume_profile">
     			<img src="img/e.jpg">
     		</div>
     	<div class="resume_content">
       		<div class="resume_item resume_info">
         		<div class="title">
           			<p class="bold"><?php echo $nama ?></p>
           			<p class="boldd"><?php echo $nama1 ?></p>
           			<p class="regular"><?php echo $pekerjaan ?></p>
         		</div>
         		<div class="title2">
           			<p class="bold1"><?php echo $tentangsaya ?></p>
           			<p class="regular1">saya aditya putra pratama saya umur 20 tahun saya tinggal di sidoarjo jawa timur sekarang saya berkuliah di UPN "VETERAN" Jawa Timur</p>
         		</div>
         		<div class="title3">
           			<p class="bold2"><?php echo $alamat ?></p>
           			<p class="regular2">- Perum Surya Residance Blok 4E-41 Damarsi , Buduran , Sidoarjo.</p>
         		</div>
         		<div class="title4">
         			<p class="bold3"><?php echo $kontak ?></p>
             		<p class="regular3"><?php echo $telepon ?></p>
             		<p class="regular4"><?php echo $email ?></p>
             		<p class="regular5"><?php echo $ig ?></p>
             		<p class="regular6"><?php echo $twitter ?></p>
           		</div>
        	</div>
    	</div>
    </div>
    <div class="resume_right">
    	<div class="resume_item resume_work">
        	<div class="title">
           		<p class="bold"><?php echo $riwayat ?></p>
         	</div>
        <ul>
            <li>
                <div class="date"><?php echo $organisasi ?></div> 
            </li>
            <li>
              <div class="date"><?php echo $organisasi1 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $organisasi2 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $organisasi3 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $organisasi4 ?></div>
            </li>
        </ul>
    	</div>
    		<div class="resume_item resume_work">
        		<div class="title">
           			<p class="bold"><?php echo $riwayatpendidikan ?></p>
         		</div>
        	<ul>
            	<li>
                	<div class="date"><?php echo $pendidikan ?></div> 
            	</li>
            	<li>
              		<div class="date"><?php echo $pendidikan1 ?></div>
            	</li>
            	<li>
              		<div class="date"><?php echo $pendidikan2 ?></div>
            	</li>
            	<li>
              		<div class="date"><?php echo $pendidikan3 ?></div>
            	</li>
            	<li>
              		<div class="date"><?php echo $pendidikan4 ?></div>
            	</li>
        	</ul>
    	</div>
    	<div class="resume_item resume_work">
        	<div class="title">
           		<p class="bold"><?php echo $prestasi ?></p>
         	</div>
        <ul>
            <li>
                <div class="date"><?php echo $prestasi1 ?></div> 
            </li>
            <li>
              <div class="date"><?php echo $prestasi2 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $prestasi3 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $prestasi4 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $prestasi5 ?></div>
            </li>
        </ul>
    	</div>
    	<div class="resume_item resume_work">
        	<div class="title">
           		<p class="bold"><?php echo $hobi ?></p>
         	</div>
        <ul>
            <li>
                <div class="date"><?php echo $hobi1 ?></div> 
            </li>
            <li>
              <div class="date"><?php echo $hobi2 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $hobi3 ?></div>
            </li>
            <li>
              <div class="date"><?php echo $hobi4 ?></div>
            </li>
        </ul>
    	</div>
  	</div>
	</div>
</body>
</html>