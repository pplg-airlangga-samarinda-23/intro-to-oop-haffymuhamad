<?php
class Waktu
{
    // deklarasikan atribut
    public $jam;
    public $menit;
    public $detik;

    // deklarasikan metode konstruktor
    public function __construct($jam, $menit, $detik)
    {
        $this->jam = $jam;
        $this->menit = $menit;
        $this->detik = $detik;
    }

    // Metode lain sesuai yang diminta buku bisa ditambahkan di sini
}

$contoh = new Waktu(15, 34, 50);
echo "Sekarang pukul " . $contoh->jam . ":" . $contoh->menit . ":" . $contoh->detik . "<br>";
?>