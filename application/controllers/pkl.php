<?php

/**
*
*/
class pkl extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('session');
		$this->load->model('Server_Model');
	}

	function index() {
		$this->dashboard();
	}

	function dashboard(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_dashboard');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_dashboard');
		$this->load->view('frames/page_end');
	}

	// MENU INFORMASI LISTING > GAK TAU DIPAKE ATAU ENGGA
	function progres_agregat_listing(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_progres_agregat_listing');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_select_data');
		$this->load->view('frames/page_end_script_progres_agregat_listing');
		$this->load->view('frames/page_end');
	}

	function progres_listing($id_kabupaten = NULL){
		$data['id_kabupaten'] = $id_kabupaten; // id_kabupaten apabila halaman dipanggil dari progres agregat listing
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_progres_listing');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_select_data');
		$this->load->view('frames/page_end_script_progres_listing', $data);
		$this->load->view('frames/page_end');
	}

	// MENU INFORMASI PENCACAHAN
	public function unit_cacah() {
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_list_unit_cacah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_unit_cacah');
		$this->load->view('frames/page_end');
	}

	function search_unit_cacah(){
		$result = $this->Server_Model->get_autocomplete_unit_cacah();
		// CHANGE ME
		$column_nama = 'nama'; // Nama kolom yang menunjukkan nama yang akan digunakan di autocomplete
		$data['autocomplete'] = array_column($result, $column_nama);
		// echo json_encode($data['autocomplete']);
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_search_unit_cacah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_select_data');
		$this->load->view('frames/page_end_script_search_unit_cacah', $data);
		// $this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

	// TO BE REMOVED
	function profile_unit_cacah($id){
		$this->load->model('map_model');
		$this->load->model('uc_model');
		$data['LocsG'] = $this->map_model->single_map($id);
		$data_uc['detail'] = $this->uc_model->detail_uc($id);

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_unit_cacah', $data_uc);

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

	public function pcl() {
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_list_pcl');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_pcl');
		$this->load->view('frames/page_end');
	}

	function search_pcl(){
		$result = $this->Server_Model->get_autocomplete_pcl();
		// CHANGE ME
		$column_nama = 'nama';
		$data['autocomplete'] = array_column($result, $column_nama);

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_search_pcl');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_select_data');
		$this->load->view('frames/page_end_script_search_pcl', $data);
		$this->load->view('frames/page_end');
	}

	// TO BE REMOVED
	function profile_pcl($id){
		$this->load->model('map_model');
		$this->load->model('pcl_model');
		$data['LocsG'] = $this->map_model->single_map_pcl($id);
		$data_p['detail'] = $this->pcl_model->detail_pcl($id);

		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_pcl', $data_p);

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_map', $data);
		$this->load->view('frames/page_end');
	}

	// MENU PROGRESS PENCACAHAN
	function progres_agregat_cacah(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_progres_agregat_cacah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		// $this->load->view('frames/page_end_chart');
		// $this->load->view('frames/page_end_table');
		// Jadinya digabung satu script untuk satu halaman
		$this->load->view('frames/page_end_script_select_data');
		$this->load->view('frames/page_end_script_progres_agregat_cacah');
		$this->load->view('frames/page_end');
	}

	function progres_cacah($id_kabupaten = NULL){
		$data['id_kabupaten'] = $id_kabupaten; // id_kabupaten apabila halaman dipanggil dari progres agregat cacah
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_progres_cacah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		// $this->load->view('frames/page_end_chart');
		$this->load->view('frames/page_end_script_select_data');
		$this->load->view('frames/page_end_script_progres_cacah', $data);
		$this->load->view('frames/page_end');
	}

	function analisis_realtime(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/page_analisis_rt');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_analisis_realtime');
		$this->load->view('frames/page_end');
	}

	// MENU MONITORING MASALAH
	function monitoring_masalah(){
		$this->load->view('frames/page_head');
		$this->load->view('frames/nav');

		$this->load->view('contents/monitoring_masalah');

		$this->load->view('frames/wrapper_end');
		$this->load->view('frames/page_end_js');
		$this->load->view('frames/page_end_script_monitoring_masalah');
		$this->load->view('frames/page_end');
	}

}
?>
