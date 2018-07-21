<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model(array('model_admin'));
        $this->load->helper(array('url','form'));
        $this->load->library('pdf');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
    }

	function index(){
        $a['surat_keluar']	= $this->model_admin->tampil_dosen()->num_rows();
		$a['jenis']	= $this->model_admin->tampil_dosen()->num_rows();
		$a['departement']	= $this->model_admin->tampil_dosen()->num_rows();
		$a['dosen']	= $this->model_admin->tampil_dosen()->num_rows();

		$level = $this->session->userdata('level');

		if( $level== "1"){
			$a['page']	= "soal";
			$this->load->view('admin/index', $a);
		}else if ($level =="0") {
			$a['page']	= "home";
			$this->load->view('admin/index', $a);
		}else{
			redirect(base_url("dosen"));
		}
	}


	function export(){
		$a['page']	= "export";
		$this->load->view('admin/index', $a);
	}

	function honor(){
		$a['data']	= $this->model_admin->tampil_dosen()->result_object();
		$a['page']	= "honor";
		$this->load->view('admin/index', $a);
	}

	function berita(){
		$a['data']	= $this->model_admin->tampil_dosen()->result_object();
		$a['page']	= "berita";
		$this->load->view('admin/index', $a);
	}

	/* Fungsi Pegawai */
	function pegawai(){
		$a['data']	= $this->model_admin->tampil_pegawai()->result_object();
		$a['page']	= "v_pegawai";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_pegawai(){
		$a['page']	= "tambah_pegawai";
		
		$this->load->view('admin/index', $a);
	}

	/* Cetak Honor */
	public function cetak_honor()
	{
		
		$pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'DEPARTEMEN PENDIDIKAN NASIONAL',0,1,'C');
        $pdf->SetFont('Arial','B',20);
        $pdf->Cell(190,7,'UNIVERSITAS SULTAN AGUNG TIRTAYASA',0,1,'C');
        $pdf->SetFillColor(95, 95, 95);
        $pdf->Rect(5, 27.5, 198, 1, 'FD');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->Cell(190,20,'KWITANSI',0,1,'C');

        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(80,10,'Telah Terima Dari',1,0);
        $pdf->Cell(105,10,'Bendahara Panitia Pembuatan Soal',1,0);
        $pdf->Ln();
        $pdf->Cell(80,10,'Uang Sejumlah',1,0);
        $pdf->Cell(105,10,'1.000.000,-',1,0);

        $pdf->Ln();
        $pdf->Cell(80,10,'Untuk Pembayaran',1,0);
        $pdf->Cell(105,10,'Pembuatan Soal Test Seleksi',1,0);
        $pdf->Ln();
        $pdf->Ln();
        $pdf->SetFont('Arial','i',12);
        $pdf->Cell(105,10,'Terbilang : Satu Juta Rupiah',1,0);


        $pdf->Ln();
        $pdf->Ln();
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(90,20,'Penerima,',0,0,'C');
        $pdf->Cell(105,20,'Bendahara,',0,0,'C');

        $pdf->SetFont('Arial','BU',12);
        $pdf->Ln();
        $pdf->Cell(90,20,$this->session->userdata('nama_dosen'),0,0,'C');
        $pdf->Cell(105,20,'Azhari Wahyudin',0,0,'C');

        $pdf->SetFont('Arial','',10);
        $pdf->Output();
	}


	/* Cetak Berita Acara */
	public function cetak_berita()
	{
		
		$pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',20);
        // mencetak string 
        $pdf->Cell(190,7,'BERITA ACARA',0,1,'C');
        $pdf->SetFont('Arial','B',18);
        $pdf->Cell(190,7,'PEMBUATAN NASKAH SOAL SELEKSI',0,1,'C');
        $pdf->SetFillColor(95, 95, 95);
        $pdf->Rect(5, 27.5, 198, 1, 'FD');


        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetFont('Arial','',12);
        //$pdf->MultiCell(190,8,'',0,0,'R');

        $pdf->MultiCell( 190, 10, 'Pada hari ini ........................ Tanggal ................ Bulan ................ Tahun .......... Telah berlangsung pembuatan soal sebagai berikut :', 0);

        $pdf->Ln();
        
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(80,10,'Pembuat Soal',1,0);
        $pdf->Cell(105,10,$this->session->userdata('nama_dosen'),1,0);
        $pdf->Ln();

        
        $pdf->Cell(80,10,'NIP',1,0);
        $pdf->Cell(105,10,"01010010012",1,0);
        $pdf->Ln();

        $pdf->Cell(80,10,'Jumlah Soal',1,0);
        $pdf->Cell(105,10,'100',1,0);

        $pdf->Ln();
        $pdf->Cell(80,10,'Formasi',1,0);
        $pdf->Cell(105,10,'Teknologi Sistem Informasi',1,0);

        $pdf->Ln();
        $pdf->Cell(80,10,'Jenis Soal',1,0);
        $pdf->Cell(105,10,'Teori',1,0);

        $pdf->Ln();
        $pdf->Ln();

        $pdf->SetFont('Arial','',12);
        $pdf->MultiCell( 190, 10, 'Demikian berita acara ini dibuat dengan sebenar-benarnya dan dengan penuh kesungguhan dan untuk digunakan sebagaimana mestinya', 0);

        $pdf->Ln();
        $pdf->Ln();
        $pdf->SetFont('Arial','',12);
        $pdf->Cell(90,20,'Pembuat Soal,',0,0,'C');
        $pdf->Cell(105,20,'Panitia,',0,0,'C');

        $pdf->SetFont('Arial','BU',12);
        $pdf->Ln();
        $pdf->Cell(90,20,$this->session->userdata('nama_dosen'),0,0,'C');
        $pdf->Cell(105,20,'Azhari Wahyudin',0,0,'C');

        $pdf->SetFont('Arial','',10);
        $pdf->Output();
	}

	function save_session() {
		$nama_dosen = $this->input->post('dosen');
		$this->session->set_userdata('nama_dosen',$nama_dosen);
	}

	function insert_pegawai(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$telpon = $this->input->post('telpon');
		$bagian = $this->input->post('bagian');

		$object = array(
				'nik' => $nik,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'telpon' => $telpon,
				'bagian' => $bagian,
				'password' => md5($nik)
			);
		$this->db->insert('tbl_pegawai', $object);

		redirect('admin/pegawai','refresh');
	}

	function edit_pegawai($id){
		$a['editdata']	= $this->db->get_where('tbl_pegawai',array('nik'=>$id))->result_object();		
		$a['page']	= "edit_pegawai";
		
		$this->load->view('admin/index', $a);
	}

	function update_pegawai(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$telpon = $this->input->post('telpon');
		$bagian = $this->input->post('bagian');

		$object = array(
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'telpon' => $telpon,
				'bagian' => $bagian,
				'password' => md5($nik)
			);

		

		$this->db->where('nik', $nik);
		$this->db->update('tbl_pegawai', $object); 

		redirect('admin/pegawai','refresh');
	}

	function hapus_pegawai($id){
		
		$this->model_admin->hapus_pegawai($id);
		redirect('admin/pegawai','refresh');
	}


	

	function soal(){
		$a['page']	= "soal";
		$this->load->view('admin/index', $a);
	}


	/* Fungsi Dosen */
	function dosen(){
		$a['data']	= $this->model_admin->tampil_dosen()->result_object();
		$a['page']	= "v_dosen";
		$this->load->view('admin/index', $a);
	}


	function tambah_dosen(){
		$a['page']	= "tambah_dosen";
		$this->load->view('admin/index', $a);
	}

	function insert_dosen(){
		$nis = $this->input->post('nis');
		$username = $this->input->post('username');
		$tmplahir = $this->input->post('tmplahir');
		$tgllahir = $this->input->post('tgllahir');
		$jenis_soal = $this->input->post('jenis_soal');
		$wilayah = $this->input->post('wilayah');
		$alamat = $this->input->post('alamat');
		$formasi = $this->input->post('formasi');

		$object = array(
				'nip' => $nis,
				'nama_lengkap' => $username,
				'alamat' => $alamat,
				'jenis_soal' => $jenis_soal,
				'wilayah' => $wilayah,
				'tmp_lahir' => $tmplahir,
				'tgl_lahir' => $tgllahir,
				'formasi' => $formasi
				//'password' => md5($nis)
			);
		$this->db->insert('m_dosen', $object);

		redirect('admin/dosen','refresh');
	}

	function hapus_dosen($id){
		$this->model_admin->hapus_dosen($id);
		redirect('admin/dosen','refresh');
	}

	function edit_dosen($id){
		$a['editdata']	= $this->db->get_where('m_dosen',array('id'=>$id))->result_object();		
		$a['page']	= "edit_dosen";
		
		$this->load->view('admin/index', $a);
	}

	function update_dosen(){
		$id = $this->input->post('id');
		$nis = $this->input->post('nis');
		$username = $this->input->post('username');
		$tmplahir = $this->input->post('tmplahir');
		$tgllahir = $this->input->post('tgllahir');
		$jenis_soal = $this->input->post('jenis_soal');
		$wilayah = $this->input->post('wilayah');
		$alamat = $this->input->post('alamat');
		$formasi = $this->input->post('formasi');

		$object = array(
				'nip' => $nis,
				'nama_lengkap' => $username,
				'alamat' => $alamat,
				'jenis_soal' => $jenis_soal,
				'wilayah' => $wilayah,
				'tmp_lahir' => $tmplahir,
				'tgl_lahir' => $tgllahir,
				'formasi' => $formasi
				//'password' => md5($nis)
			);
		$this->db->where('id', $id);
		$this->db->update('m_dosen', $object); 

		redirect('admin/dosen','refresh');
	}

	/* Fungsi Users */
	function users(){
		$a['data']	= $this->model_admin->tampil_users()->result_object();
		$a['page']	= "v_user";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_users(){
		$a['page']	= "tambah_users";
		$this->load->view('admin/index', $a);
	}
	
	function insert_users(){
		$nis = $this->input->post('nis');
		$username = $this->input->post('username');
		$tmplahir = $this->input->post('tmplahir');
		$tgllahir = $this->input->post('tgl_awal');
		$gender = $this->input->post('kelamin');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');


		$object = array(
				'nis' => $nis,
				'nama_siswa' => $username,
				'alamat' => $alamat,
				'agama' => $agama,
				'gender' => $gender,
				'tmplahir' => $tmplahir,
				'tgllahir' => $tgllahir,
				'password' => md5($nis)
			);
		$this->db->insert('tbl_users', $object);

		redirect('admin/users','refresh');
	}
	
	function edit_users($id){
		$a['editdata']	= $this->db->get_where('tbl_users',array('nis'=>$id))->result_object();		
		$a['page']	= "edit_users";
		
		$this->load->view('admin/index', $a);
	}

	function update_users(){
		$nis = $this->input->post('nis');
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$tmplahir = $this->input->post('tmplahir');
		$tgllahir = $this->input->post('tgl_awal');
		$gender = $this->input->post('kelamin');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');


		$object = array(
				'nama_siswa' => $username,
				'alamat' => $alamat,
				'agama' => $agama,
				'gender' => $gender,
				'tmplahir' => $tmplahir,
				'tgllahir' => $tgllahir,
				'password' => md5($nis)
			);
		$this->db->where('id', $id);
		$this->db->update('tbl_users', $object); 

		redirect('admin/users','refresh');
	}

	function hapus_users($id){
		$this->model_admin->hapus_users($id);
		redirect('admin/users','refresh');
	}
	
	/* Fungsi Kehadiran */
	function kehadiran(){
		$a['data']	= $this->model_admin->tampil_kehadiran()->result_object();
		$a['page']	= "v_kehadiran";
		
		$this->load->view('admin/index', $a);
	}

	function detail_kehadiran($nik){
		$tahun =date("Y");
		$bulan =date('m');

		$a['data']	= $this->model_admin->detail_kehadiran($nik, $tahun, $bulan)->result_object();
		$a['page']	= "detail_kehadiran";
		
		$this->load->view('admin/index', $a);
	}

	function periode_kehadiran(){
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');

		$a['data']	= $this->model_admin->periode_kehadiran($tgl_awal, $tgl_akhir)->result_object();
		$a['page']	= "v_kehadiran";

		$this->load->view('admin/index', $a);
	}
	
	/* Fungsi Departement */
	function departement(){
		$a['data']	= $this->model_admin->tampil_departement()->result_object();
		$a['page']	= "v_departement";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_departement(){
		$a['page']	= "tambah_departement";
		$this->load->view('admin/index', $a);
	}

	function insert_departement(){
		$nama_departement = $this->input->post('nama_departement');
		$object = array(
				'kategori' => $nama_departement
			);
		$this->db->insert('m_kategori', $object);

		redirect('admin/departement','refresh');
	}
	
	function edit_departement($id){
		$a['editdata']	= $this->db->get_where('m_kategori',array('id_kategori'=>$id))->result_object();		
		$a['page']	= "edit_departement";
		
		$this->load->view('admin/index', $a);
	}

	function update_departement(){
		$id = $this->input->post('id');
		$nama_departement = $this->input->post('nama_departement');
		$object = array(
				'kategori' => $nama_departement
			);
		$this->db->where('id_kategori', $id);
		$this->db->update('m_kategori', $object); 

		redirect('admin/departement','refresh');
	}

	function hapus_departement($id){
		$this->model_admin->hapus_departement($id);
		redirect('admin/departement','refresh');
	}

	/* Fungsi Materi */
	function materi(){
		$a['data']	= $this->model_admin->tampil_materi()->result_object();
		$a['page']	= "v_materi";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_materi(){
		$a['data_departement']	= $this->model_admin->tampil_departement()->result_object();
		$a['page']	= "tambah_materi";
		$this->load->view('admin/index', $a);
	}

	function insert_materi(){
		$kddepartement = $this->input->post('departement'); 
		$nama_materi = $this->input->post('nama_materi');
		$object = array(
				'nmmateri' => $nama_materi,
				'kddepartement' => $kddepartement
			);
		$this->db->insert('tbl_materi', $object);

		redirect('admin/materi','refresh');
	}
	
	function edit_materi($id){
		$a['data_departement']	= $this->model_admin->tampil_departement()->result_object();
		$a['editdata']	= $this->db->get_where('tbl_materi',array('kdmateri'=>$id))->result_object();		
		$a['page']	= "edit_materi";
		
		$this->load->view('admin/index', $a);
	}

	function update_materi(){
		$id = $this->input->post('id');
		$nama_materi = $this->input->post('nama_materi');
		$object = array(
				'nmmateri' => $nama_materi
			);
		$this->db->where('kdmateri', $id);
		$this->db->update('tbl_materi', $object); 

		redirect('admin/materi','refresh');
	}

	function hapus_materi($id){
		$this->model_admin->hapus_materi($id);
		redirect('admin/materi','refresh');
	}

	/* Fungsi SUB Materi */
	function sub_materi(){
		$a['data']	= $this->model_admin->tampil_sub_materi()->result_object();
		$a['page']	= "v_sub_materi";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_sub_materi(){
		$a['data_materi']	= $this->model_admin->tampil_materi()->result_object();
		$a['page']	= "tambah_sub_materi";
		$this->load->view('admin/index', $a);
	}

	public function insert(){
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                   
                );
 
                $this->mupload->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('upload'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

	function insert_sub_materi(){
		$kdmateri = $this->input->post('materi');
		$deskripsi = $this->input->post('deskripsi');
		$fitur = $this->input->post('fitur');
		$benefit = $this->input->post('benefit');
		$kegunaan = $this->input->post('kegunaan');
		

		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './photo/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048000'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);
        if ($_FILES['filefoto']['name']!='') {
	        if($_FILES['filefoto']['name'])
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	            	$gbr = $this->upload->data();
					$object = array(
							'kdmateri' => $kdmateri,
							'photo' => $gbr['file_name'],
							'deskripsi' => $deskripsi,
							'fitur' => $fitur,
							'benefit' => $benefit,
							'kegunaan' => $kegunaan
						);
					$this->db->insert('tbl_sub_materi', $object);
				}else{
					echo $data['imageError'] =  $this->upload->display_errors();
					exit();
				}
			}
		}else {
			$object = array(
							'kdmateri' => $kdmateri,
							'deskripsi' => $deskripsi,
							'fitur' => $fitur,
							'benefit' => $benefit,
							'kegunaan' => $kegunaan
						);
					$this->db->insert('tbl_sub_materi', $object);
		}
		redirect('admin/sub_materi','refresh');
	}
	
	function edit_sub_materi($id){
		$a['data_materi']	= $this->model_admin->tampil_materi()->result_object();
		$a['editdata']	= $this->db->get_where('tbl_sub_materi',array('kdsubmateri'=>$id))->result_object();		
		$a['page']	= "edit_sub_materi";
		
		$this->load->view('admin/index', $a);
	}

	function update_sub_materi(){
		$kdmateri = $this->input->post('materi');
		$deskripsi = $this->input->post('deskripsi');
		$fitur = $this->input->post('fitur');
		$benefit = $this->input->post('benefit');
		$kegunaan = $this->input->post('kegunaan');

		$id = $this->input->post('id');
		

		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './photo/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048000'; //maksimum besar file 2M
        $config['max_width']  = '0'; //lebar maksimum 1288 px
        $config['max_height']  = '0'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $config['overwrite'] = TRUE;

        $this->upload->initialize($config);

        if ($_FILES['filefoto']['name']!='') {
    		if($_FILES['filefoto']['name'])
	        {
	            if ($this->upload->do_upload('filefoto'))
	            {
	            	$gbr = $this->upload->data();
					$object = array(
							'kdmateri' => $kdmateri,
							'photo' => $gbr['file_name'],
							'deskripsi' => $deskripsi,
							'fitur' => $fitur,
							'benefit' => $benefit,
							'kegunaan' => $kegunaan
						);
					$this->db->where('kdsubmateri', $id);
					$this->db->update('tbl_sub_materi', $object); 
				}else{
					echo $data['imageError'] =  $this->upload->display_errors();
					exit();
				}
			}	
		}else{
			$object = array(
				'kdmateri' => $kdmateri,
				'deskripsi' => $deskripsi,
				'fitur' => $fitur,
				'benefit' => $benefit,
				'kegunaan' => $kegunaan
			);

			$this->db->where('kdsubmateri', $id);
			$this->db->update('tbl_sub_materi', $object);
		}

        
		redirect('admin/sub_materi','refresh');
	}

	function hapus_sub_materi($id){
		$this->model_admin->hapus_sub_materi($id);
		redirect('admin/sub_materi','refresh');
	}

	/* Fungsi Soal Ujian */
	function soal_ujian(){
		$a['data']	= $this->model_admin->tampil_soal_ujian()->result_object();
		$a['page']	= "v_soal_ujian";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_soal_ujian(){
		$a['data_departement']	= $this->model_admin->tampil_departement()->result_object();
		$a['page']	= "tambah_soal_ujian";
		$this->load->view('admin/index', $a);
	}

	function insert_soal_ujian(){
		$nama_soal = $this->input->post('nama_soal');
		$uraian = $this->input->post('uraian');
		$a = $this->input->post('a');
		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');
		$jawaban_benar = $this->input->post('jawaban_benar');
		$kddepartement = $this->input->post('departement');

		$object = array(
				'id_jurusan' => $kddepartement,
				//'nmsoal' => $nama_soal,
				'soal' => $uraian,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'jwaban' => $jawaban_benar
			);
		$this->db->insert('tbl_soal', $object);

		redirect('admin/soal_ujian','refresh');
	}
	
	function edit_soal_ujian($id){
		$a['editdata']	= $this->db->get_where('tbl_soal',array('id'=>$id))->result_object();
		$a['page']	= "edit_soal_ujian";
		$this->load->view('admin/index', $a);
	}

	function update_soal_ujian(){
		$id = $this->input->post('id');
		$nama_soal = $this->input->post('nama_soal');
		$uraian = $this->input->post('uraian');
		$kddepartement = $this->input->post('departement');

		$a = $this->input->post('a');
		$b = $this->input->post('b');
		$c = $this->input->post('c');
		$d = $this->input->post('d');
		$jawaban_benar = $this->input->post('jawaban_benar');

		$object = array(
				//'kddepartement' => $kddepartement,
				'nama_soal' => $nama_soal,
				'soal' => $uraian,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'jwaban' => $jawaban_benar
			);
		$this->db->where('id', $id);
		$this->db->update('tbl_soal', $object); 

		redirect('admin/soal_ujian','refresh');
	}

	function hapus_soal_ujian($id){
		$this->model_admin->hapus_soal_ujian($id);
		redirect('admin/soal_ujian','refresh');
	}

    function logout(){
    	$data = array(
                    'admin_id' 		=> "",
                    'admin_user' 	=> "",
                    'admin_level' 	=> "",
                    'admin_konid' 	=> "",
                    'admin_nama' 	=> "",
					'admin_valid' 	=> false
                    );
        $this->session->set_userdata($data);
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}


	/* Fungsi Reset Account */
	function reset_account(){
		$a['data']	= $this->model_admin->getResetAccount()->result_object();
		$a['page']	= "v_reset";
		
		$this->load->view('admin/index', $a);
	}

	function reset_nis($id){
		$id = $id;
		$status="0";

		$object = array(
				'status_ujian' => $status
			);
		$this->db->where('nis', $id);
		$this->db->update('tbl_users', $object); 

		$status="1";
		$object = array(
				'status' => $status
			);
		$this->db->where('nis', $id);
		$this->db->update('m_reset', $object); 

		redirect('admin/reset_account','refresh');
	}

	/*
	function tambah_soal_ujian(){
		$a['data_departement']	= $this->model_admin->tampil_departement()->result_object();
		$a['page']	= "tambah_soal_ujian";
		$this->load->view('admin/index', $a);
	} */

	/* Fungsi Jawaban */
	function jawaban(){
		$a['data']	= $this->model_admin->getJawaban()->result_object();
		$a['page']	= "v_jawaban";
		$this->load->view('admin/index', $a);
	}

	function edit_jawaban($id){
		$a['editdata']	= $this->model_admin->getJawabanByID($id); //--result_object();
		$a['page']	= "edit_jawaban";
		$this->load->view('admin/index', $a);
	}
	
	function update_jawaban(){
		$id = $this->input->post('id');
		$nilai_akhir = $this->input->post('nilai_akhir');

		$object = array(
			'nilai_akhir' => $nilai_akhir
		);
		$this->db->where('id', $id);
		$this->db->update('m_jawaban', $object); 

		redirect('admin/jawaban','refresh');
	}

	function hapus_jawaban($id){
		$this->model_admin->hapus_jawaban($id);
		redirect('admin/jawaban','refresh');
	}

}

