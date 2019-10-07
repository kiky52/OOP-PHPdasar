<?php 


// define('NAMA', 'Kiki Khoirul');


// echo NAMA;

// echo "<br>";

// const UMUR = 20;

// echo UMUR;

// class Coba{

// 	const NAMA = 'Kiki';
// }

// echo Coba::NAMA;



// echo __FILE__;


class Coba2{
	public $kelas =__CLASS__;

}
$obj = new Coba2;
echo $obj->kelas;






 ?>