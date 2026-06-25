<?php
require_once 'src/Kendaraan.php';
class RentalMobil extends Kendaraan{
    // Atribut
    private $kapasitasPenumpang;
    private $asuransiId;

    // Construct
    public function __construct($id, $plat, $merk, $hari, $tarif, $kapasitas, $asuransi){
        parent::__construct($id, $plat, $merk, $hari, $tarif);
        $this->kapasitasPenumpang = $kapasitas;
        $this->asuransiId = $asuransi;
    }
}
?>