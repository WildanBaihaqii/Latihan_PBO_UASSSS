<?php
require_once 'src/Kendaraan.php';
class RentalMotor extends Kendaraan{
    // Atribut
    private $kapasitasCC;
    private $termasukHelmbox;
    // Construct
    public function __construct($id, $plat, $merk, $hari, $tarif, $cc, $helmBox){
        parent::__construct($id, $plat, $merk, $hari, $tarif);
        $this->kapasitasCC = $cc;
        $this->termasukHelmbox = $helmBox;
    }
    // Tahap 5 
    public function hitungTotalSewa(){
        return ($this->hariSewa * $this->tarifPerhHari);
    }
    public function tampilkanSpesifikasi(){
        return "
        <strong>Kapasitas Mesin :</strong> {$this->kapasitasCC} CC<br>
        <strong>Helm Box : </strong> {$this->termasukHelmbox}";
    }
    public static function getDaftarMotor($db) {

    $query = "SELECT id_kendaraan, no_plat, merk_model, hari_sewa, tarif_per_hari, kapasitas_cc, termasuk_helm_box 
              FROM tabel_kendaraan 
              WHERE jenis_kendaraan = 'Motor'";
              
    $result = $db->query($query);
    
    $listMotor = [];
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $listMotor[] = new RentalMotor(
                $row['id_kendaraan'],
                $row['no_plat'],
                $row['merk_model'],
                $row['hari_sewa'],
                $row['tarif_per_hari'],
                $row['kapasitas_cc'],
                $row['termasuk_helm_box'] 
            );
        }
    }
    
    return $listMotor;
}
}
?>