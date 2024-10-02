<?php
class Mobil {
    // Atribut mobil
    public $merk;
    public $warna;
    public $kecepatan;
    public $bahanBakar;

    // Konstruktor untuk inisialisasi atribut
    public function __construct($merk, $warna, $bahanBakar) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatan = 0; // kecepatan awal 0
        $this->bahanBakar = $bahanBakar;
    }

    // Metode melaju
    public function melaju() {
        echo "Mobil sedang melaju.<br>";
    }

    // Metode untuk menambah kecepatan
    public function tambahKecepatan($kecepatan) {
        $this->kecepatan += $kecepatan;
        echo "Mobil melaju dengan kecepatan: " . $this->kecepatan . " km/jam.<br>";
    }

    // Metode untuk mengerem
    public function mengerem() {
        $this->kecepatan = 0;
        echo "Mobil berhenti.<br>";
    }

    // Metode untuk membunyikan klakson
    public function bunyikanKlakson() {
        echo "Mobil membunyikan klakson: Beep! Beep!<br>";
    }
}

// Buat sebuah objek mobil dan lengkapi atributnya
$mobilSaya = new Mobil("Toyota", "Merah", "Bensin");

// Panggil keempat metode yang terdapat pada kelas Mobil
$mobilSaya->melaju();
$mobilSaya->tambahKecepatan(60);
$mobilSaya->bunyikanKlakson();
$mobilSaya->mengerem();
?>