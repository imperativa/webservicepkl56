<?php  
	/**
	* 
	*/
	class map_model extends CI_Model {
		
		function __construct(){
			parent::__construct();
			$this->load->helper('array');
		}

		//this is just example, use quary to get data from database
		function groupMap_uc(){
			$LocsG[0] = array(
		        'lat' => 45.9,
		        'lon' => 10.9,
		        'title' => 'Rizky Nagari',
		        'html' => '<h3>Rizky Nagari</h3><a href="profile_unit_cacah/0">detail</a>'
			);

			$LocsG[1] = array(
		        'lat' => 44.8,
		        'lon' => 1.7,
		        'title' => 'Pradiva Nur A.',
		        'html' => '<h3>Pradiva Nur A.</h3><a href="profile_unit_cacah/1">detail</a>'
			);

			$LocsG[2] = array(
		        'lat' => 51.5,
		        'lon' => -1.1,
		        'title' => 'Irsad Arief',
		        'html' => '<h3>Irsad Arief</h3><a href="profile_unit_cacah/2">detail</a>'
			);

			return $LocsG;
		}

		function groupMap_pcl(){
			$LocsG[0] = array(
		        'lat' => -6.174465,
		        'lon' => 106.822745,
		        'title' => '14.8278',
		        'html' => "<h3>Nadra Yudelsa R.</h3><a href='profile_pcl/14.8278'>detail</a>"
			);

			$LocsG[1] = array(
		        'lat' => -6.917464,
		        'lon' => 107.619123,
		        'title' => '14.8260',
		        'html' => "<h3>M. Irsad A.</h3><a href='profile_pcl/14.8260'>detail</a>"
			);

			$LocsG[2] = array(
		        'lat' => -6.202394,
		        'lon' => 106.652710,
		        'title' => '14.8246',
		        'html' => "<h3>M. Iqbal A.</h3><a href='profile_pcl/14.8246'>detail</a>"
			);

			return $LocsG;
		}

		function single_map($id){
			$LocsG = '';
			switch ($id) {
				case 0:
					$LocsG[0] = array(
				        'lat' => 45.9,
				        'lon' => 10.9,
				        'title' => 'Rizky Nagari',
				        'html' => '<h3>Rizky Nagari</h3>'
					);
					break;
				case 1:
					$LocsG[0] = array(
				        'lat' => 44.8,
				        'lon' => 1.7,
				        'title' => 'Pradiva Nur A.',
				        'html' => '<h3>Pradiva Nur A.</h3>'
					);
					break;
				case 2:
					$LocsG[0] = array(
				        'lat' => 51.5,
				        'lon' => -1.1,
				        'title' => 'Irsad Arief',
				        'html' => '<h3>Irsad Arief</h3>'
					);
					break;
				default:
					# code...
					break;
			}
			return $LocsG;
		}

		function single_map_pcl($id){
			$LocsG = '';
			switch ($id) {
				case 14.8278:
					$LocsG[0] = array(
				        'lat' => -6.174465,
				        'lon' => 106.822745,
				        'title' => '14.8278',
				        'html' => "<h3>Nadra Yudelsa R.</h3><a href='profile_unit_cacah/14.8278'>detail</a>"
					);
					break;
				case 14.8260:
					$LocsG[0] = array(
				        'lat' => -6.917464,
				        'lon' => 107.619123,
				        'title' => '14.8260',
				        'html' => "<h3>M. Irsad A.</h3><a href='profile_unit_cacah/14.8260'>detail</a>"
					);
					break;
				case 14.8246:
					$LocsG[0] = array(
				        'lat' => -6.202394,
				        'lon' => 106.652710,
				        'title' => '14.8246',
				        'html' => "<h3>M. Iqbal A.</h3><a href='profile_unit_cacah/14.8246'>detail</a>"
					);
					break;
				default:
					# code...
					break;
			}
			return $LocsG;
		}

	}

?>