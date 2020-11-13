<?php
class Nilai2 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Nilai2'); 
	}
	
	function home(){
		if(isset($_POST['btnSubmit'])){
			$nama_siswa = $_POST['nama_siswa'];
			$data = array(
					'data'=>$this->Model_Nilai2->cari($nama_siswa));
			$this->load->view('App/list_sswa_nilai2',$data);
		} else{
		$data = array(
				'data'=>$this->Model_Nilai2->get_data());
		$this->load->view('App/list_sswa_nilai2',$data);
	}
	}
	
       
}