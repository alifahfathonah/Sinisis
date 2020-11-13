<?php
class Nilai6 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Nilai6'); 
	}
	
	function home(){
		if(isset($_POST['btnSubmit'])){
			$nama_siswa = $_POST['nama_siswa'];
			$data = array(
					'data'=>$this->Model_Nilai6->cari($nama_siswa));
			$this->load->view('App/list_sswa_nilai6',$data);
		} else{
		$data = array(
				'data'=>$this->Model_Nilai6->get_data());
		$this->load->view('App/list_sswa_nilai6',$data);
	}
	}
	
    
}