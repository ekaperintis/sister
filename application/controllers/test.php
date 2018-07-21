<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");


class test extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->db->query("SET time_zone='+7:00'");
        $waktu_sql = $this->db->query("SELECT NOW() AS waktu")->row_array();
        $this->waktu_sql = $waktu_sql['waktu'];
        $this->opsi = array("a","b","c","d","e");
	}

	public function index() {
		$a['dosen'] = $this->db->query("SELECT * FROM m_dosen")->row();
		$this->load->view('v_ujian', $a);
	}

	public function get_soal(){
		$urutan = $this->input->post('urutan');
		$result = $this->db->query("SELECT * FROM m_soal WHERE urutan ='".$urutan."'")->row();
		echo json_encode($result);
	}


	public function upload(){
		$user_id = $this->session->userdata('admin_user');
		define("UPLOAD_DIR", "files/");

		if (!empty($_FILES["media"])) {
			$media	= $_FILES["media"];
			$ext	= pathinfo($_FILES["media"]["name"], PATHINFO_EXTENSION);
			$size	= $_FILES["media"]["size"];
			$tgl	= date("Y-m-d");

			if ($media["error"] !== UPLOAD_ERR_OK) {
				echo '<div class="alert alert-warning">'+ UPLOAD_ERR_OK + '</div>';
				exit;
			}

			// filename yang aman
			$name = preg_replace("/[^A-Z0-9._-]/i", "_", $media["name"]);

			// mencegah overwrite filename
			$i = 0;
			$parts = pathinfo($name);
			while (file_exists(UPLOAD_DIR . $name)) {
				$i++;
				$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
			}

			$success = move_uploaded_file($media["tmp_name"], UPLOAD_DIR . $name);

			$soal = $this->input->post('uraian');
			$opsi_a = $this->input->post('jawaban_a');
			$opsi_b = $this->input->post('jawaban_b');
			$opsi_c = $this->input->post('jawaban_c');
			$opsi_d = $this->input->post('jawaban_d');
			$opsi_e = $this->input->post('jawaban_e');
			$id_soal  = $this->input->post('id_soal');
			$file = $name;

			$urutan = $this->get_akhir($user_id);

			if ($success==1) {
				$pdata = array (
					'soal' => $soal,
					'opsi_a' => $opsi_a,
					'opsi_b' => $opsi_b,
					'opsi_c' => $opsi_c,
					'opsi_d' => $opsi_d,
					'opsi_e' => $opsi_e,
					'urutan' => $urutan,
					'file' =>$file,
					'id_guru' => $user_id
				);

				$cek_data = $this->cek_data($user_id, $id_soal);
				if ($cek_data <> "") {
					
					$this->db->where('id', $cek_data);
					$this->db->update('m_soal', $pdata);
					echo "true";
				}else{
					$result = $this->db->insert("m_soal", $pdata);

					if ($result) {
						echo "true";		
					}
				}
				
			}

			chmod(UPLOAD_DIR . $name, 0644);
		}
	}

	public function get_akhir($id_dosen) {
		$get_akhir	= $this->db->query("SELECT MAX(urutan) AS max FROM m_soal WHERE id_guru='".$id_dosen."' LIMIT 1")->row();
		$data		= (intval($get_akhir->max)) + 1;
		$last		= $data;
	
		return $last;
	}


	public function cek_data($id_dosen, $id_soal) {
		$rows	= $this->db->query("SELECT id FROM m_soal 
			WHERE id_guru='".$id_dosen."' AND urutan ='".$id_soal."'")->row();
		
		$last		= $rows->id;
	
		return $last;
	}


}