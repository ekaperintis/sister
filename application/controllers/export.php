<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Export extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model(array('model_admin'));
    }

    public function export_excel(){
        $data = array( 'title' => 'Export_ke_Excel',
                'buku' => $this->model_admin->getAll());
 		

 		//var_dump($data);

 		//exit();

        $this->load->view('admin/v_excel',$data);
    }

}