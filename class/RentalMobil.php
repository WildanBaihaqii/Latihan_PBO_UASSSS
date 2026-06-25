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
    //Tahap 5 : Overiding Hitung Total Sewa Mobil
    public function hitungTotalSewa(){
        return ($this->hariSewa * $this->tarifPerhHari) + 150000;
    }
    // Tahap 5 : Tampilan Spesifik Unik Mobil
    public function tampilkanSpesifikasi(){
        return "
        <strong>Kapasitas Penumpang :</strong> {$this->kapasitasPenumpang} Orang<br>
        <strong>Asuransi :</strong> {$this->asuransiId}";
    }
}
?>