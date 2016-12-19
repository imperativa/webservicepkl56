<?php 
/**
* 
*/
class uc_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	//this is just example, use quary to get data from database
	function detail_uc($id){
		$data = '';
		switch ($id) {
			case 0:
				$data = array(
					'Kode kuesioner' => 'PKL2016-BB-1-001',
					'Nama responden' => 'Rizki Nagari',
					'Alamat responden' => 'Jl. Dahlia RT006/RW009, Kel.A, Kec.B, Pangkal Pinang',
					'No Telf/HP responden' => '0812XXXXXXX',
					'Kontak lain yang bisa dihubungi' => 'Pak Joko(RT) 0823XXXXXXXX'
				);
				break;
			case 1:
				$data = array(
					'Kode kuesioner' => 'PKL2016-BB-1-002',
					'Nama responden' => 'Pradiva Nur A.',
					'Alamat responden' => 'Jl. Dahlia RT006/RW009, Kel.A, Kec.B, Pangkal Pinang',
					'No Telf/HP responden' => '0812XXXXXXX',
					'Kontak lain yang bisa dihubungi' => 'Pak Joko(RT) 0823XXXXXXXX'
				);
				break;
			case 2:
				$data = array(
					'Kode kuesioner' => 'PKL2016-BB-1-003',
					'Nama responden' => 'Irsad Arief',
					'Alamat responden' => 'Jl. Dahlia RT006/RW009, Kel.A, Kec.B, Pangkal Pinang',
					'No Telf/HP responden' => '0812XXXXXXX',
					'Kontak lain yang bisa dihubungi' => 'Pak Joko(RT) 0823XXXXXXXX'
				);
				break;
			default:
				# code...
				break;
		}

		return $data;
	}
}

?>