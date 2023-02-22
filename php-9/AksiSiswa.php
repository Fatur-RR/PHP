<?php
  require('siswa.php');
  $Siswa1 =new Siswa();
  $Siswa1->IsiData("K4121","Aku","2006","Sukabumi");
  $Siswa1->CetakData();

  $Siswa2 =new Siswa();
  $Siswa2->IsiData("K141","Dia","2005","Kab Bogor");
  $Siswa2->CetakData();
  //mengakses method di luar kelas
    //   echo"NIS Siswa ".$Siswa2->nis."</br>";
    //   echo"Nama Siswa ".$Siswa2->nama."</br>";
    //   echo"Tahun Lahir Siswa ".$Siswa2->tahun."</br>";
    //   echo"Kota Asal Siswa ".$Siswa2->kota."</br>";
      echo"Umur Siswa ".$Siswa2->HitungUmur()."</br>";
?>