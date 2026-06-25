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
    // Tahap 5
    public function hitungTotalSewa(){
        return ($this->hariSewa * $this->tarifPerhHari) * 0.90;
    }
    public function tampilkanSpesifikasi(){
        return "
        <strong>Daya Baterai :</strong> {$this->dayaBateraiWatt} Watt<br>
        <strong>Kapasitas Bagasi :</strong> {$this->kapasitasBagasiLiter} Liter";
    }
    // pembantu query statis
    public static function getDaftarSepedaListrik($db){
        $query = "SELECT id_kendaraan, no_plat, merk_model, hari_sewa, tarif_per_hari, daya_baterai_watt, kapasitas_bagasi_liter
                  FROM tabel_kendaraan
                  WHERE jenis_kendaraan = 'Sepeda Listrik'";
        $result = $db->query($query);
        
        $listSepedaListrik = [];
        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $listSepedaListrik[] = new RentalSepedaListrik(
                    $row['id_kendaraan'],
                    $row['no_plat'],
                    $row['merk_model'],
                    $row['hari_sewa'],
                    $row['tarif_per_hari'],
                    $row['daya_baterai_watt'],
                    $row['kapasitas_bagasi_liter']
                );
            }
        }
        return $listSepedaListrik;
    }
}
?>
