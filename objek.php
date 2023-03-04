<?php
class kendaraan
{
    var $warna;
    var $jenis;
    var $bahan_bakar;

    public function berjalan_maju()
    {
        echo 'Saya bisa berjalan maju';
    }
    public function berjalan_belok()
    {
        echo 'Saya bisa berjalan belok';
    }
    public function mundur()
    {
        echo 'Saya bisa berjalan mundur';
    }
}

class MakhlukHidup
{
    var $pernapasan = 'paru-paru';

    public function bernapas()
    {
        echo 'saya bernapas dengan hidung' . $this->pernapasan;
    }

    public function makan()
    {
        echo 'saya makan nasi';
    }
}
$mobil = new kendaraan();
// echo $mobil->mundur();
$manusia = new MakhlukHidup();
$manusia->bernapas();
