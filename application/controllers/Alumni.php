<?php
class Alumni extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Alumni');
        
	}
	
	
	function home(){
		if(isset($_POST['btnSubmit'])){
			$nama_siswa = $_POST['nama_siswa'];
			$data = array(
					'data'=>$this->Model_Alumni->cari($nama_siswa));
			$this->load->view('App/list_alumni',$data);
		} else{
		$data = array(
				'data'=>$this->Model_Alumni->get_data());
		$this->load->view('App/list_alumni',$data);
	}
	}
	
	function delete($id){
		$this->Model_Alumni->delete($id);
		redirect('Alumni/home');
	}
}