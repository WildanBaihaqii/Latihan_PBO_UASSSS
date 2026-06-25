<?php
require_once 'src/Kendaraan.php';
class RentalMotor extends Kendaraan{
    private $kapasitasCC;
    private $termasukHelmbox;
    public function __construct($id, $plat, $merk, $hari, $tarif, $cc, $helmBox){
        parent::__construct($id, $plat, $merk, $hari, $tarif);
        $this->kapasitasCC = $cc;
        $this->termasukHelmbox = $helmBox;
    }
}
?>