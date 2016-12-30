<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->model('Server_Model');
        $this->load->model('PCl_Model');
	}

    // SERVICE GET DATA
    function get_list_kabupaten() {
        header('Content-Type: application/json');
		$result = $this->Server_Model->get_list_kabupaten();
		echo json_encode($result);
    }

    function get_list_kecamatan($id_kabupaten) {
        header('Content-Type: application/json');
		$result = $this->Server_Model->get_list_kecamatan($id_kabupaten);
		echo json_encode($result);
    }

    function get_list_kelurahandesa($id_kabupaten, $id_kecamatan) {
        header('Content-Type: application/json');
		$result = $this->Server_Model->get_list_kelurahandesa($id_kabupaten, $id_kecamatan);
		echo json_encode($result);
    }

    function get_list_bloksensus($id_kabupaten, $id_kecamatan, $id_kelurahandesa) {
        header('Content-Type: application/json');
		$result = $this->Server_Model->get_list_bloksensus($id_kabupaten, $id_kecamatan, $id_kelurahandesa);
		echo json_encode($result);
    }

    function get_agregat($kuesioner, $wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL) {
        // wilayah1 = kabupaten
        // wilayah2 = kecamatan
        // wilayah3 = kelurahan
        // wilayah4 = blok sensus
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_agregat($kuesioner, $wilayah1, $wilayah2, $wilayah3, $wilayah4);
        $total = 0;
        foreach ($data as $item) {
            $total += $item->jumlah;
        }
        $result = array(
                    'data' => $data,
                    'total' => $total
                );
        echo json_encode($result); exit();
    }

    function get_list_modul() {
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_modul();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_list_variabel($modul) {
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_variabel($modul);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_variabel($modul, $variabel) {
        header('Content-Type: application/json');
        $tipe = $this->Server_Model->get_variabel_tipe($modul, $variabel)->tipe;
        // if ($tipe !== 'int' && $tipe !== 'decimal') {
        //
        // }
        $data = $this->Server_Model->get_variabel_data($modul, $variabel, $tipe);
        $result = array(
                    'tipe' => $tipe,
                    'data' => $data
                );
        echo json_encode($result); exit();
    }

    function get_list_unit_cacah($wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL) {
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_unit_cacah($wilayah1, $wilayah2, $wilayah3, $wilayah4);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_unit_cacah($nama) {
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_unit_cacah($nama);
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    function get_list_masalah() {
        header('Content-Type: application/json');
        $data = $this->Server_Model->get_list_masalah();
        $result = array('data' => $data);
        echo json_encode($result); exit();
    }

    // UNDER CONSTRUCTION
    function set_monitoring_status($id, $status) {
        $this->Server_Model->set_monitoring_status($id, $status);
    }

    function sent_get_location($id) { // CHANGE ME : Mungkin nanti diganti pake nim
        $this->load->library('Ci_pusher');
        // $pusher = $this->ci_pusher->get_pusher();
        // $data['message'] = 'hi';
        // $pusher->trigger('14.8261', 'my_event', $data);
        $options = array(
            'encrypted' => false
        );
        $pusher = new Pusher(
            '82bacbe7544d534f3deb',
            '1c1c217639d5b2f36461',
            '279775',
            $options
        );

        $data['message'] = 'ja';
        $pusher->trigger($id, 'my-event', $data);
    }

    function sent_email($message) {
        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => '14.8261@stis.ac.id', // change it to yours
        'smtp_pass' => '', // change it to yours
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
        );

        $message = '';  $this->email->set_newline("\r\n");
        $this->email->from('14.8261@stis.ac.id'); // change it to yours
        $this->email->to('goodgame.is.me@gmail.com');// change it to yours
        $this->email->message($message);
        $this->email->subject('Resume from JobsBuddy for your Job posting');
        if($this->email->send()){
            echo 'Email sent.'; // kasih handle untuk ngasih tau bahwa email terkirim (ajax)
        }
        else
        {
            show_error($this->email->print_debugger());
            // kasih handle untuk ngasih tau bahwa email belum terkirim (ajax)
        }

}


}
?>
