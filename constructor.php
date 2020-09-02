<?php 

class Buku{

	public $judul;
	public $harga;
	public $jenis;

	public function __construct( $judul="cadangan", $harga="cadangan", $jenis="cadangan" ){
		$this->judul = $judul;
		$this->harga = $harga;
		$this->jenis = $jenis; 

	}
		
	public function say(){
		// return "hello !!";
		return "$this->judul, $this->harga, $this->jenis";
	}

}
	 $buku1 = new Buku("Novel", "10.000", "Fiksi");
	 $buku2 = new Buku("Komik", "20.000");
	

	 echo "Jenis Buku : ". $buku1->say();
	 echo "<br>";
	 echo "Jenis Buku : ". $buku2->say();
	
 ?>