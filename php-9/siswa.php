<?php
class Siswa{
    var $nis;       //secara default bernilai public
    public $nama;   //semua file bisa mengakses
    protected $tahun;   //hanya bisa diakses di kelas ini dan turunannya
    protected $kota;      

    function __construct(){
        $this->nis="K4131";
        $this->nama="Kamu";
        $this->tahun="2005";
        $this->kota="Bogor";
        $this->CetakData();
    }

    function IsiData($nis,$nama,$tahun,$kota){
        $this->nis=$nis;
        $this->nama=$nama;
        $this->tahun=$tahun;
        $this->kota=$kota;
    }
    final public function CetakData(){        //bisa diakses file lain
        echo"NIS Siswa " .$this->nis."</br>";
        echo"Nama Siswa ".$this->nama."</br>";
        echo"Tahun Lahir Siswa ".$this->tahun."</br>";
        echo"Kota Asal Siswa ".$this->kota."</br>";
        echo"Umur Siswa ".$this->HitungUmur()."</br>";
    }

    protected function HitungUmur(){      //hanya bisa diakses di class ini
        $umur=date('Y') - $this->tahun;
        return $umur;
    }
}
?>