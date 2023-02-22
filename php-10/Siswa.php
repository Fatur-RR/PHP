<?php 
    require('Form.php');
    require('modelSiswa.php');
    class Siswa{
        var $nis;
        var $nama;
        var $tahun;
        var $kota;

        // function construct(){
        //    $this->nis="K4131";
        //    $this->nama="Kamu";
        //    $this->tahun="2005";
        //    $this->kota="Bogor";
        //    $this->CekData();
        // }

        function IsiData($nis,$nama,$tahun,$kota){
            $this->nis=$nis;
            $this->nama=$nama;
            $this->tahun=$tahun;
            $this->kota=$kota;
        }

        final public function CekData(){
            $txt = "--------------------------------------------------</br>";
            $txt .= "NIS Siswa ".$this->nis."</br>";
            $txt .= "Nama Siswa ".$this->nama."</br>";
            $txt .= "Tahun Lahir Siswa ".$this->tahun."</br>";
            $txt .= "Kota Asal Siswa ".$this->kota."</br>";
            $txt .= "Umur Siswa ".$this->HitungUmur()."</br>";
            $txt .= "--------------------------------------------------</br>";

            require('TampilData.php');
        }

        public function InputForm(){
            $formSiswa =new Form('','Input Siswa');
            $formSiswa->AddField('nis','NIS Siswa');
            $formSiswa->AddField('nama','Nama Siswa');
            $formSiswa->AddField('tahun','Tahun Lahir Siswa');
            $formSiswa->AddField('kota','Kota Asal Siswa');
                
            if(isset($_POST['tombol'])) {
                $data = $formSiswa->GetData();
                $this->nis=$data[0];
                $this->nama=$data[1];
                $this->tahun=$data[2];
                $this->kota=$data[3];
                $this->CekData();

              require('Koneksi.php');
              $modelssw = new ModelSiswa();
              $sql = $modelssw->InsertSiswa($this);
              if ($conn->query($sql)===TRUE) {
                echo "Data Berhasil Masuk";
              } else {
                echo "Error";
              }
            } else {
                $cetak = $formSiswa->DisplayForm();
                require('TampilForm.php');
            }
            //else {
               // $formSiswa->DisplayForm();
            //}
        
        }

        protected function HitungUmur(){
            $umur=date('Y') - $this->tahun - 1;
            return $umur;
        }
    }
?>