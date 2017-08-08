<?php

use Illuminate\Database\Seeder;
use App\Barangg;
use App\Pembelii;
use App\Transaksii;

class BaranggsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Barang
        $barangg1 = Barangg::create(['nama'=>'cat','merk'=>'dulux','ukuran'=>'15','harga'=>'15000']);
        //pembeli
        $pembelii1 = Pembelii::create(['id_barangg'=>$barangg1->id,'nama'=>'ujang','alamat'=>'kp.sayuran','nohp'=>'0897766','jk'=>'laki-laki']);
    }
}
