<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class Dosen extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->db->query("SET time_zone='+7:00'");
        $waktu_sql = $this->db->query("SELECT NOW() AS waktu")->row_array();
        $this->waktu_sql = $waktu_sql['waktu'];
        $this->opsi = array("a","b","c","d","e");

        $this->load->model('mdosen');
        $this->load->library('cart');
	}
	
	public function get_servertime() {
		$now = new DateTime(); 
        $dt = $now->format("M j, Y H:i:s O"); 

        j($dt);
	}

	public function index() {
		$this->cek_aktif();
		if ($this->session->userdata('admin_level')=="2") {
			$data['sess_level'] = $this->session->userdata('admin_level');
			$data['sess_user'] = $this->session->userdata('admin_user');
			$data['sess_konid'] = $this->session->userdata('admin_konid');
			$data['dosen'] = $this->mdosen->getData($this->session->userdata('admin_user'));
			$this->load->view('dosen/v_ujian', $data);
		}else{
			redirect('admin');
		}
		
	}

	public function save_referensi(){
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$penerbit = $this->input->post('penerbit');
		$tahun = $this->input->post('tahun');

		$data = array(
	        'id'      => '1001',
	        'qty'     => 12,
	        'price'   => 11111,
	        'name'    => $judul,
	        'options' => array('pengarang' => $pengarang, 'penerbit' => $penerbit, 'tahun' => $tahun)
		);

		$this->cart->insert($data);
	}

	public function save_soal(){
		$soal = $this->input->post('uraian');
		$opsi_a = $this->input->post('jawaban_a');
		$opsi_b = $this->input->post('jawaban_a');
		$opsi_c = $this->input->post('jawaban_a');

			

			//if ($success==1) {
				$pdata = array (
					'soal' => $soal,
					'opsi_a' => $opsi_a,
					'opsi_b' => $opsi_b,
					'opsi_c' => $opsi_c
				);

				$result = $this->db->insert("m_soal", $pdata);

				if ($result) {
					echo "true";		
				}
			//}
	}

	public function cek_aktif() {
		if ($this->session->userdata('admin_valid') == false && $this->session->userdata('admin_id') == "") {
			redirect('admin');
		} 
	}
	
	public function jvs() {
		$this->cek_aktif();
		
		$data_soal 		= $this->db->query("SELECT id, gambar, soal, opsi_a, opsi_b, opsi_c, opsi_d, opsi_e FROM m_soal ORDER BY RAND()")->result();
		
		j($data_soal);
		exit;
	}
	public function rubah_password() {
		$this->cek_aktif();
		
		//var def session
		$a['sess_admin_id'] = $this->session->userdata('admin_id');
		$a['sess_level'] = $this->session->userdata('admin_level');
		$a['sess_user'] = $this->session->userdata('admin_user');
		$a['sess_konid'] = $this->session->userdata('admin_konid');

		//var def uri segment
		$uri2 = $this->uri->segment(2);
		$uri3 = $this->uri->segment(3);
		$uri4 = $this->uri->segment(4);
		//var post from json
		$p = json_decode(file_get_contents('php://input'));
		$ret = array();
		if ($uri3 == "simpan") {
			$p1_md5 = md5($p->p1);
			$p2_md5 = md5($p->p2);
			$p3_md5 = md5($p->p3);
			$cek_pass_lama = $this->db->query("SELECT password FROM m_admin WHERE id = '".$a['sess_admin_id']."'")->row();
			if ($cek_pass_lama->password != $p1_md5) {
				$ret['status'] = "error";
				$ret['msg'] = "Password lama tidak sama...";
			} else if ($p2_md5 != $p3_md5) {
				$ret['status'] = "error";
				$ret['msg'] = "Password baru konfirmasinya tidak sama...";
			} else if (strlen($p->p2) < 6) {
				$ret['status'] = "error";
				$ret['msg'] = "Password baru minimal terdiri dari 6 huruf..";
 			} else {
				$this->db->query("UPDATE m_admin SET password = '".$p3_md5."' WHERE id = '".$a['sess_admin_id']."'");
				$ret['status'] = "ok";
				$ret['msg'] = "Password berhasil diubah...";
			}
			j($ret);
			exit;
		} else {
			$data = $this->db->query("SELECT id, kon_id, level, username FROM m_admin WHERE id = '".$a['sess_admin_id']."'")->row();
			j($data);
			exit;
		}
	}

	public function act_login() {
		
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		
		$password2	= md5($password);
		
		$q_data		= $this->db->query("SELECT * FROM m_users WHERE username = '".$username."' AND password = '$password2'");
		$j_data		= $q_data->num_rows();
		$a_data		= $q_data->row();
		
		$_log		= array();
		if ($j_data === 1) {
			$sess_nama_user = "";
			if ($a_data->level == "siswa") {
				$det_user = $this->db->query("SELECT nama_lengkap FROM m_dosen WHERE id = '".$a_data->kon_id."'")->row();
				if (!empty($det_user)) {
					$sess_nama_user = $det_user->nama;
				}
			} else if ($a_data->level == "2") {
				$det_user = $this->db->query("SELECT nama_lengkap FROM m_dosen WHERE id = '".$a_data->kon_id."'")->row();
				if (!empty($det_user)) {
					$sess_nama_user = $det_user->nama_lengkap;
				}
			} else {
				$sess_nama_user = "Administrator Pusat";
			}
			$data = array(
                    'admin_id' => $a_data->id,
                    'admin_user' => $a_data->username,
                    'admin_level' => $a_data->level,
                    'admin_konid' => $a_data->kon_id,
                    'admin_nama' => $sess_nama_user,
					'admin_valid' => true
                    );
            $this->session->set_userdata($data);
			$_log['log']['status']			= "1";
			$_log['log']['keterangan']		= "Login berhasil";
			$_log['log']['detil_admin']		= $this->session->userdata;
		} else {
			$_log['log']['status']			= "0";
			$_log['log']['keterangan']		= "Maaf, username dan password tidak ditemukan";
			$_log['log']['detil_admin']		= null;
		}
		
		j($_log);
	}
	

	//fungsi tambahan
	public function get_akhir($tabel, $field, $kode_awal, $pad) {
		$get_akhir	= $this->db->query("SELECT MAX($field) AS max FROM $tabel LIMIT 1")->row();
		$data		= (intval($get_akhir->max)) + 1;
		$last		= $kode_awal.str_pad($data, $pad, '0', STR_PAD_LEFT);
	
		return $last;
	}
}

/*
		//https://www.codeigniter.com/userguide3/libraries/cart.html
		//https://www.formget.com/codeigniter-shopping-cart/
		//https://stackoverflow.com/questions/15117078/codeigniter-unable-to-show-the-specific-value-from-cart-option-in-the-view-page?rq=1
		//https://stackoverflow.com/questions/15117078/codeigniter-unable-to-show-the-specific-value-from-cart-option-in-the-view-page
*/