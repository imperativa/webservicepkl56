<?php  
/**
* 
*/
class pcl_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}

	//this is just example, use quary to get data from database
	function detail_pcl($id){
		$data = '';
		switch ($id) {
			case 14.8278:
				$data = array(
					'Nama kortim' => 'M. Irsad Arif',
					'NIM pencacah' => '14.8278',
					'Nama pencacah' => 'Nadra Yudelsa Ratu',
					'Kelas pencacah' => '3KS1',
					'Blok sensus' => 'BS Bukit Intan',
					'Berhasil di cacah' => 9,
					'Belum di cacah' => 5,
					'Revisi' => 2,
					'Alamat penginapan' => 'Jl. Asri Gang Kayu 14 RT003/RW008, Kel.A, Kec.B, Pangkal Pinang',
					'No. HP' => '0857XXXXXXXX'
				);
				break;
			case 14.8260:
				$data = array(
					'Nama kortim' => 'M. Irsad Arif',
					'NIM pencacah' => '14.8260',
					'Nama pencacah' => 'M. Irsad Arif',
					'Kelas pencacah' => '3KS1',
					'Blok sensus' => 'BS Bukit Intan',
					'Berhasil di cacah' => 9,
					'Belum di cacah' => 5,
					'Revisi' => 2,
					'Alamat penginapan' => 'Jl. Asri Gang Kayu 14 RT003/RW008, Kel.A, Kec.B, Pangkal Pinang',
					'No. HP' => '0857XXXXXXXX'
				);
				break;
			case 14.8246:
				$data = array(
					'Nama kortim' => 'M. Irsad Arif',
					'NIM pencacah' => '14.8246',
					'Nama pencacah' => 'M. Iqbal A.',
					'Kelas pencacah' => '3KS1',
					'Blok sensus' => 'BS Bukit Intan',
					'Berhasil di cacah' => 9,
					'Belum di cacah' => 5,
					'Revisi' => 2,
					'Alamat penginapan' => 'Jl. Asri Gang Kayu 14 RT003/RW008, Kel.A, Kec.B, Pangkal Pinang',
					'No. HP' => '0857XXXXXXXX'
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