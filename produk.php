<?php 

class Produk {
	public 	$judul = "judul", 
			$penulis = "penulis" ,
			$penerbit,
			$harga = 0;


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
	$produk3->harga = "30000";
echo "komik : $produk3->penulis, $produk3->penerbit";

 ?>