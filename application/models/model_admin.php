<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	
	public function tampil_pegawai()
	{
		return $this->db->get('tbl_pegawai');
	}

	public function tampil_admin()
	{
		return $this->db->get('tbl_admin');
	}

    
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	function getDataUsers($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function getAll() {
        $this->db->select('*');
        $this->db->from('tbl_soal');
        $query = $this->db->get();
        return $query->result();
    }

	public function tampil_kehadiran()
	{
		return $this->db->query("SELECT
		  tbl_absen.nik, tbl_pegawai.nama, tbl_absen.tanggal,
		  IF(tbl_absen.status = '0', tbl_absen.jam, NULL) AS 'jam_masuk',
		  IF(tbl_absen.status = '1', tbl_absen.jam, NULL) AS 'jam_pulang'
		FROM tbl_absen INNER JOIN tbl_pegawai ON tbl_absen.nik = tbl_pegawai.nik");
	}

	public function tampil_materi()
	{
		return $this->db->query("SELECT
					d.id_jurusan,
					d.id_diklat,
					d.mata_diklat,
					j.jurusan
					FROM
					m_diklat d
					INNER JOIN m_jurusan j ON d.id_jurusan = j.id_jurusan
					");
	}


	public function tampil_departement()
	{
		return $this->db->query("SELECT * FROM m_kategori ORDER BY id_kategori DESC");
	}

	public function tampil_dosen()
	{
		return $this->db->query("SELECT * FROM m_dosen ORDER BY id");
	}

	public function tampil_users()
	{
		return $this->db->query("SELECT * FROM tbl_users");
	}
	
	public function tampil_soal_ujian()
	{
		return $this->db->query("SELECT * FROM tbl_soal ORDER by id desc");
	}	

	public function detail_kehadiran($nik, $tahun, $bulan)
	{
		return $this->db->query("SELECT
		  tbl_absen.nik, tbl_pegawai.nama, tbl_absen.tanggal,
		  IF(tbl_absen.status = '0', tbl_absen.jam, NULL) AS 'jam_masuk',
		  IF(tbl_absen.status = '1', tbl_absen.jam, NULL) AS 'jam_pulang',
		  tbl_absen.xlat, tbl_absen.xlong, tbl_absen.photo
		FROM tbl_absen INNER JOIN tbl_pegawai ON tbl_absen.nik = tbl_pegawai.nik 
		WHERE tbl_absen.nik='$nik' AND year(tbl_absen.tanggal)='$tahun' AND month(tbl_absen.tanggal)='$bulan'");
	}

	public function periode_kehadiran($tgl1, $tgl2)
	{
		$q="SELECT
		  tbl_absen.nik, tbl_pegawai.nama, tbl_absen.tanggal,
		  IF(tbl_absen.status = '0', tbl_absen.jam, NULL) AS 'jam_masuk',
		  IF(tbl_absen.status = '1', tbl_absen.jam, NULL) AS 'jam_pulang'
		FROM tbl_absen INNER JOIN tbl_pegawai ON tbl_absen.nik = tbl_pegawai.nik
		WHERE tbl_absen.tanggal BETWEEN '$tgl1' AND '$tgl2' ";

		return $this->db->query($q);
	}
	
	public function getResetAccount()
	{
		return $this->db->query("SELECT * FROM m_reset r INNER JOIN tbl_users u ON r.nis=u.nis WHERE r.status='0' GROUP BY r.nis ORDER BY r.created_date DESC ");
	}

	public function ResetAcccount($id)
	{
		return $this->db->delete('tbl_pegawai', array('nik' => $id));
	}
	
	public function getJawaban()
	{
		return $this->db->query("SELECT j.id,
				j.nis,
				j.jumlah,
				j.created_date,
				u.nama_siswa,
				u.tmplahir,
				u.tgllahir,
				(70-j.jumlah) as jml_salah,
				'70' as jml_soal, (j.jumlah*100)/70 as nilai, j.nilai_akhir
				FROM
				m_jawaban j 
				INNER JOIN tbl_users u ON j.nis = u.nis 
				WHERE j.jumlah<>0 GROUP BY j.nis
				ORDER BY j.nis");
	}


	public function getJawabanByID($id)
	{
		return $this->db->query("SELECT j.id,
				j.nis,
				j.jumlah,
				j.created_date,
				u.nama_siswa,
				u.tmplahir,
				u.tgllahir,
				(70-j.jumlah) as jml_salah,
				'70' as jml_soal, (j.jumlah*100)/70 as nilai, j.nilai_akhir
				FROM
				m_jawaban j 
				INNER JOIN tbl_users u ON j.nis = u.nis 
				WHERE j.id='$id'
				")->result_object();

		 //$this->$data->result_object();
	}

	public function hapus_jawaban($id)
	{
		return $this->db->delete('m_jawaban', array('id' => $id));
	}

	public function hapus_pegawai($id)
	{
		return $this->db->delete('tbl_pegawai', array('nik' => $id));
	}

	public function hapus_users($id)
	{
		return $this->db->delete('tbl_users', array('idtrainee' => $id));
	}

	public function hapus_dosen($id)
	{
		return $this->db->delete('m_dosen', array('id' => $id));
	}

	public function hapus_departement($id)
	{
		return $this->db->delete('m_kategori', array('id_kategori' => $id));
	}

	public function hapus_materi($id)
	{
		return $this->db->delete('tbl_materi', array('kdmateri' => $id));
	}

	public function hapus_sub_materi($id)
	{
		return $this->db->delete('tbl_sub_materi', array('kdsubmateri' => $id));
	}

	public function hapus_soal_ujian($id)
	{
		return $this->db->delete('tbl_soal_ujian', array('kdsoal' => $id));
	}
	
}
