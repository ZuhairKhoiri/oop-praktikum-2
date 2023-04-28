<?php
 class Mahasiswa {
 public string $nim;
 public string $nama;
 public static string $agama = "Islam";
 public static string $jenis_kelamin = "Laki-laki";
 public string $prodi;
 public function setNim(string $nim) {
 return $nim;
 }

 public function setNama(string $b) {
 // $this keyword refers a non-static member of a class
return $this->nama = $b;
 }
 public function setProdi(string $p){
    return $this->prodi = $p;
 }

 public function getNama() {
 // $this keyword refers a non-static member of a class
 return $this->nama;
 }

 public static function getAgama() {
 // self keyword refers a static member of a class
 return self::$agama;
 }

 public static function getJenis_kelamin(){
    return self::$jenis_kelamin;
 }
 
 public function getProdi() {
    return $this->prodi;
 }
}
// Instantiation
 $mhsw = new Mahasiswa();
 echo $mhsw->setNim('2207101066');
 $mhsw->setNama('Zuhair Khoiri S');
 $mhsw->setprodi('Sistem Informasi');
 echo $mhsw->getNama();
 echo $mhsw->getAgama();
 echo $mhsw->getJenis_kelamin();
 echo $mhsw->getprodi();

