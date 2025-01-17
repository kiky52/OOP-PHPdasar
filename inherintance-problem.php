<?php 

class Produk {
	public 	$judul, 
			$penulis ,
			$penerbit,
			$harga,
			$jlmHalaman,
			$waktuMain,
			$tipe;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jlmHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jlmHalaman = $jlmHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;

	}
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoLengkap(){

		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if( $this->tipe == "Game" ) {
			$str .= " - {$this->waktuMain} Jam.";	
		}else if( $this->tipe == "komik" ) {
			$str .= " - {$this->jlmHalaman} Halaman.";	
		}

		return $str;

	}


}

class CetakInfoProduk{
	
	public function cetak( Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;



	}
}

$produk1 = new Produk("Naruto", "Masashi kishimoto", "Shonen jump", 30000, 100, 0, "komik");

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


 ?>