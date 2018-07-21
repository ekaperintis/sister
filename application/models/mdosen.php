<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mdosen extends CI_Model {	

	public function getData($key){
		$result = $this->db->query("SELECT * FROM m_dosen WHERE nip='".$key."'")->row();
		return $result;
	}
}