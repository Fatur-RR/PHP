<?php 
    class ModelSiswa{
        public function InsertSiswa($data){
            $sql = "INSERT INTO siswa (nis,nama,tahun,kota
            VALUES ('". $data->nis ."','"
            . $data->nama ."','"
            . $data->tahun ."','"
            . $data->kota ."',')";
        return $sql;
        }
    }
?>