<?php
class Skincare {
    public $nama = "Serum Vitamin C";
    protected $kategori = "Serum Wajah";
    private $harga = 85000;

    public function getHarga() {
        return $this->harga;
    }
}

class SkincareWajah extends Skincare {
    public function getKategori() {
        return $this->kategori; // protected bisa diakses oleh subclass
    }
}

$skincare = new Skincare();
echo $skincare->nama . "<br>";      // public: bisa diakses dari luar class
// echo $skincare->kategori;        // error: protected tidak bisa diakses dari luar
// echo $skincare->harga;           // error: private tidak bisa diakses dari luar

$wajah = new SkincareWajah();
echo $wajah->getKategori() . "<br>";
echo "Rp " . number_format($skincare->getHarga(), 0, ',', '.');
?>