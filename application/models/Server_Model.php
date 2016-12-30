<?php
/**
*
*/
class Server_Model extends CI_Model {

	function __construct(){
		parent::__construct();
        $this->load->database();
	}

	// MENU INFORMASI PENCACAHAN
	function get_autocomplete_unit_cacah() {
		// CHANGE ME :
		$table = 'dummy_list_unit_cacah';
		$column_nama = 'nama';
		$this->db->select($column_nama);
		$this->db->distinct();
		$this->db->order_by($column_nama);
		$que = $this->db->get($table);
		return $que->result_array();
	}

	function get_autocomplete_pcl() {
		// CHANGE ME :
		$table = 'dummy_mahasiswa';
		$column_nama = 'nama';
		$this->db->select($column_nama);
		$this->db->distinct();
		$this->db->order_by($column_nama);
		$que = $this->db->get($table);
		return $que->result_array();
	}

	function get_list_unit_cacah($wilayah1 = NULL, $wilayah2 = NULL, $wilayah3 = NULL, $wilayah4 = NULL) {
		// CHANGE ME :
		$table = 'dummy_list_unit_cacah';
		$where = array();
		if ($wilayah1 != NULL) { // Kasus agregat kabupaten
            $where['kabupaten'] = $wilayah1;
        }
        if ($wilayah2 != NULL) { // Kasus agregat kecamatan;
            $where['kecamatan'] = $wilayah2;
        }
        if ($wilayah3 != NULL) { // Kasus agregat kelurahandesa;
            $where['kelurahandesa'] = $wilayah3;
        }
        if ($wilayah4 != NULL) { // Kasus agregat kecamatan;
            $where['bloksensus'] = $wilayah4;
        }
        $this->db->where($where);
		$que = $this->db->get($table);
        return $que->result();
    }

	function get_unit_cacah($nama) {
		// CHANGE ME
		$nama = urldecode($nama);
		$table = 'dummy_list_unit_cacah';
		$where = array('nama' => $nama);
		$this->db->where($where);
		$que = $this->db->get($table);
        return $que->result();
	}

	// MENU PROGRESS PENCACAHAN
	function get_list_kabupaten() {
		// CHANGE ME
		$table = 'dummy_kode_kabupaten';
		$que = $this->db->get($table);
		return $que->result();
    }

    function get_list_kecamatan($id_kabupaten) {
		// CHANGE ME
		$table = 'dummy_kode_kecamatan';
		$where = array('kabupaten' => $id_kabupaten);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->result();
    }

    function get_list_kelurahandesa($id_kabupaten, $id_kecamatan) {
		// CHANGE ME
		$table = 'dummy_kode_kelurahandesa';
		$where = array(
				'kabupaten' => $id_kabupaten,
				'kecamatan' => $id_kecamatan,
			);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->result();
    }

    function get_list_bloksensus($id_kabupaten, $id_kecamatan, $id_kelurahandesa) {
		// CHANGE ME
		$table = 'dummy_kode_bloksensus';
		$where = array(
				'kabupaten' => $id_kabupaten,
				'kecamatan' => $id_kecamatan,
				'kelurahandesa' => $id_kelurahandesa
			);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->result();
    }

    function get_agregat($kuesioner, $wilayah1, $wilayah2, $wilayah3, $wilayah4) {
        // CHANGE ME : kalo nanti nama column di kuesioner finalnya beda
        // wilayah1 = kabupaten
        // wilayah2 = kecamatan
        // wilayah3 = kelurahan
        // wilayah4 = blok sensus
        // Kasus agregat total
        $kuesioner;
        $where = array();
        $group_by = 'BLOK1_B1R1'; // atribut kabupaten
        $join_table = 'dummy_kode_kabupaten';

        if ($wilayah1 != NULL) { // Kasus agregat kabupaten
            $where['BLOK1_B1R1'] = $wilayah1;
            $where['kabupaten'] = $wilayah1;
            $group_by = 'BLOK1_B1R2'; // atribut kecamatan
            $join_table = 'dummy_kode_kecamatan';
        }
        if ($wilayah2 != NULL) { // Kasus agregat kecamatan
            $where['BLOK1_B1R2'] = $wilayah2;
            $where['kabupaten'] = $wilayah1;
            $where['kecamatan'] = $wilayah2;
            $group_by = 'BLOK1_B1R3'; // atribut kelurahan
            $join_table = 'dummy_kode_kelurahandesa';
        }
        if ($wilayah3 != NULL) { // Kasus agregat kelurahan
            $where['BLOK1_B1R3'] = $wilayah3;
            $where['kabupaten'] = $wilayah1;
            $where['kecamatan'] = $wilayah2;
            $where['kelurahan'] = $wilayah3;
            $group_by = 'BLOK1_B1R4'; // atribut blok sensus
            $join_table = 'dummy_kode_bloksensus';
        }
        if ($wilayah4 != NULL) { // Kasus agregat blok sensus
            $where['BLOK1_B1R4'] = $wilayah4;
            $group_by = '';
        }

        $this->db->select("$join_table.id, $join_table.nama AS wilayah, COUNT(*) AS jumlah");
        $this->db->join($join_table, "$join_table.id = $kuesioner.$group_by");
        $this->db->group_by($group_by);
        $this->db->where($where);
        $que = $this->db->get($kuesioner);
        // echo $this->db->get_compiled_select($kuesioner);
        return $que->result();
    }

	function get_list_modul() {
		// CHANGE ME
		$table = 'dummy_list_modul';
		$que = $this->db->get($table);
		return $que->result();
	}

	function get_modul_data($modul) {
		// CHANGE ME
		$table = 'dummy_list_modul';
		$where = array(
			'id' => $modul,
		);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->row();
	}

	function get_list_variabel($modul){ // Fungsi untuk melihat daftar variabel yang ingin di analisis berdasarkan modul
		// CHANGE ME
		$table = 'dummy_list_variabel';
		$where = array('modul' => $modul);
		$this->db->where($where);
		$que = $this->db->get($table);
		return $que->result_array();
	}


	function get_variabel_tipe($modul, $variabel){
		$modul_data = $this->get_modul_data($modul);
		// CHANGE ME
		$kuesioner_modul = 'dummy_' . $modul_data->kuesioner . '_core';
		$where = array(
					'table_name' => $kuesioner_modul,
					'column_name' => $variabel
				);
		$this->db->where($where);
		$this->db->select('DATA_TYPE AS tipe');
		$que = $this->db->get('INFORMATION_SCHEMA.COLUMNS');
		//$que = $this->db->query("SELECT DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = '$modul' AND table_schema = 'odk_prod' AND column_name = '$variabel'");
		return $que->row();
	}

	function get_variabel_data($modul, $variabel, $tipe){
		$modul_data = $this->get_modul_data($modul);
		 // CHANGE ME
		$kuesioner_modul = 'dummy_' . $modul_data->kuesioner . '_core';
		if ($tipe !== 'int' && $tipe !== 'decimal') {
			$select = array(
		                "COUNT($variabel) as value",
		                "$variabel as label"
		            );
			$this->db->group_by($variabel);
			$this->db->select($select);
		} else {
			$select = array("$variabel as value");
			$this->db->select($select);
		}
		$que = $this->db->get($kuesioner_modul);
		//$this->db->group_by($variabel);
		//$this->db->select(COUNT($variabel) as value, $variabel as label);
		//$que = $this->db->get($modul);
		//$que = $this->db->query("SELECT COUNT($variabel) as value, $variabel as label FROM $modul GROUP BY $variabel");
		return $que->result();
	}

	// MENU MONITORING MASALAH
    function get_list_masalah() {
        // CHANGE ME : join table dan source tablenya nanti diganti
        $table_pengaduan = 'dummy_form_pengaduan';
        $table_pengaduan_gambar = 'dummy_form_pengaduan_gambar';
        $this->db->select("nama, judul, alamat, keterangan, lokasi_long, lokasi_lat, waktu, nomor_perangkat, nomor_lain, gambar, status");
        $this->db->join($table_pengaduan_gambar, "$table_pengaduan.id = $table_pengaduan_gambar.id", 'left');
        $que = $this->db->get($table_pengaduan);
        return $que->result();
    }

	function set_masalah_status($id) {

	}

}

?>
