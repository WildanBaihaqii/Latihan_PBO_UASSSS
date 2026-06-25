<?php
require_once 'src/Kendaraan.php';
class RentalMobil extends Kendaraan{
    private $kapasitasPenumpang;
    private $asuransiId;
    public function __construct($id, $plat, $merk, $hari, $tarif, $kapasitas, $asuransi){
        parent::__construct($id, $plat, $merk, $hari, $tarif);
        $this->kapasitasPenumpang = $kapasitas;
        $this->asuransiId = $asuransi;
    }
    //Tahap 5 
    public function hitungTotalSewa(){
        return ($this->hariSewa * $this->tarifPerhHari) + 150000;
    }
    // Tahap 5 
    public function tampilkanSpesifikasi(){
        return "
        <strong>Kapasitas Penumpang :</strong> {$this->kapasitasPenumpang} Orang<br>
        <strong>Asuransi :</strong> {$this->asuransiId}";
    }
    // Pembantu query static
    public static function getDaftarMobil($db) {
        $query = "SELECT id_kendaraan, no_plat, merk_model, hari_sewa, tarif_per_hari, kapasitas_penumpang, asuransi_id 
                  FROM tabel_kendaraan 
                  WHERE jenis_kendaraan = 'Mobil'";
        $result = $db->query($query);
        $listMobil = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $listMobil[] = new RentalMobil(
                    $row['id_kendaraan'],
                    $row['no_plat'],
                    $row['merk_model'],
                    $row['hari_sewa'],
                    $row['tarif_per_hari'],
                    $row['kapasitas_penumpang'],
                    $row['asuransi_id']
                );
            }
        }
        
        return $listMobil;
    }

}
?>