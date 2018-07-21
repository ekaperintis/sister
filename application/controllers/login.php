<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('model_admin');
    }

    function index(){
        $this->load->view('admin/login');
    }
    
    function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->model_admin->cek_login("m_users",$where)->num_rows();
		$rows = $this->model_admin->cek_login("m_users",$where)->row();

		$sess_username ="";

		if($cek > 0){
			if ($rows->level=="2") {
				$where = array(
					'id' => $rows->kon_id
				);
				$rows_user = $this->model_admin->getDataUsers("m_dosen",$where)->row();
				$sess_username = $rows_user->nama_lengkap;
			}else{
				$sess_username = $rows->username;
			}
			
			$data = array(
                    'admin_id' => $rows->id,
                    'admin_user' => $rows->username,
                    'admin_level' => $rows->level,
                    'admin_konid' => $rows->kon_id,
                    'admin_nama' => $sess_username,
					'admin_valid' => true
                    );

			$this->session->set_userdata($data);

			$data_session = array(
				'username' => $sess_username,
				'status' => "login",
				'level' => $rows->level
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
			
		}else{
            $this->session->set_flashdata('result_login','Username atau password salah !');
            redirect(base_url("login"));
		}
	}

}

