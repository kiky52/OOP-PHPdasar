<?php 

class Produk {
	public 	$judul = "judul", 
			$penulis = "penulis" ,
			$penerbit,
			$harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}


}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul
// var_dump($produk1);
	$produk3 = new Produk();
	$produk3->judul = "Naruto";
	$produk3->penulis = "Masashi kishimoto";
	$produk3->penerbit = "Shonen jump";
	$produk3->harga = 30000;

	$produk4 = new Produk();
	$produk4->judul = "Uncharted";
	$produk4->penulis = "Neil Druckman";
	$produk4->penerbit = "Sony Computer";
	$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();





 ?>