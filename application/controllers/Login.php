<?php
class Login extends CI_Controller{
	public $model = NULL;

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->model = $this->Login_model;

		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		if(isset($_POST['btn_log'])){
			$this->model->username = $_POST['txt_username'];
			$this->model->password = $_POST['txt_password'];
			if ($this->model->cek_log()==TRUE) {
				$this->session->set_userdata('username', $this->model->username);
				$this->load->view('App/home', ['model'=>$this->model]);
			}
			else{
				$this->model->notif = "Username dan Password Salah !!!";
				$this->load->view('Login/login_view', ['model'=>$this->model]);
				
			}
		}else{
			$this->load->view('Login/login_view', ['model'=>$this->model]);
		}
	}

	public function logout(){
		if ($this->session->has_userdata('username')) {
			$this->session->sess_destroy();
			redirect('Login');
		}
	}
}
?>