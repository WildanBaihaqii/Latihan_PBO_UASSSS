<?php
//abstract class kendaraan
abstract class Kendaraan {
    protected $id_kendaraan;
    protected $no_plat;
    protected $merk_model;
    protected $hariSewa;
    protected $tarifPerhari;
    // membuat ppublic fungsion
    public function __construct($id, $plat, $merk, $model, $tarif){
        $this->id_kendaraan = $id;
        $this->no_plat = $plat;
        $this->merk_model = $merk;
        $this->hariSewa = $sewa;
        $this->tarifSewa = $tarif;        
    }

    // abstract
    abstract public function hitungTotalSewa();
    abstract public function tampilkanSpesifikasi();
}
?>
