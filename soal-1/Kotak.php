<?php
class PersegiPanjang
{
    // deklarasikan panjang dan lebar
    private $panjang;
    private $lebar;

    // deklarasikan metode konstruktor
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // deklarasikan metode mutator dan asesor
    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }

    public function getPanjang()
    {
        return $this->panjang;
    }

    public function setLebar($lebar)
    {
        $this->lebar = $lebar;
    }

    public function getLebar()
    {
        return $this->lebar;
    }

    // metode untuk menghitung luas
    public function hitungLuas()
    {
        return $this->panjang * $this->lebar;
    }

    // metode untuk menghitung keliling
    public function hitungKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$contoh = new PersegiPanjang(12, 20);
echo "Luas Persegi Panjang: " . $contoh->hitungLuas() . "<br>";
echo "Keliling Persegi Panjang: " . $contoh->hitungKeliling() . "<br>";
?>