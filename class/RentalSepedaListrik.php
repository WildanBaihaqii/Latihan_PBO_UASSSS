<?php
require_once 'src/Kendaraan.php';

class RentalSepedaListrik extends Kendaraan{
    private $dayaBateraiWatt;
    private $kapasitasBagasiLiter;

    public function __construct($id, $plat, $merk, $hari, $tarif, $baterai, $bagasi){
        parent::__construct($id, $plat, $merk, $hari, $tarif);
        $this->dayaBateraiWatt = $baterai;
        $this->kapasitasBagasiLiter = $bagasi;
    }
}
?>
