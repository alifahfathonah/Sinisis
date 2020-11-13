<?php
class Nilai3 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Nilai3'); 
	}
	
	function home(){
		if(isset($_POST['btnSubmit'])){
			$nama_siswa = $_POST['nama_siswa'];
			$data = array(
					'data'=>$this->Model_Nilai3->cari($nama_siswa));
			$this->load->view('App/list_sswa_nilai3',$data);
		} else{
		$data = array(
				'data'=>$this->Model_Nilai3->get_data());
		$this->load->view('App/list_sswa_nilai3',$data);
	}
	}
	
       
}