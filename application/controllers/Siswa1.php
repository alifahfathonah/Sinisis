<?php
class Siswa1 extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Siswa1');
        
	}
	
	
	function home(){
		if(isset($_POST['btnSubmit'])){
			$nama_siswa = $_POST['nama_siswa'];
			$data = array(
					'data'=>$this->Model_Siswa1->cari($nama_siswa));
			$this->load->view('App/list_ssw1',$data);
		} else{
		$data = array(
				'data'=>$this->Model_Siswa1->get_data());
		$this->load->view('App/list_ssw1',$data);
	}
	}
	function input(){
		if (isset($_POST['btnTambah'])){
			$data = $this->Model_Siswa1->input(array (
			'nis' => $this->input->post('nis'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'id_kelas' => $this->input->post('kelas'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'tahun_ajaran' => $this->input->post('tahun_ajaran'),
			'jk' => $this->input->post('jk'),
			'agama' => $this->input->post('agama'),
			'alamat' => $this->input->post('alamat'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'tlp_ayah' => $this->input->post('tlp_ayah'),
			'tlp_ibu' => $this->input->post('tlp_ibu'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
		));
			redirect('Siswa1/home');
		}else{
			$x =$this->Model_Siswa1->get_kelas();
			$data = array(
				'kelas'=>$this->Model_Siswa1->get_kelas(),
				
				);
			$this->load->view('App/input_ssw',$data);
		}
	}
	function delete($id){
		$this->Model_Siswa1->delete($id);
		redirect('Siswa1/home');
	}
	function edit(){
		$id = $this->uri->segment(3);
		$data = array(
            'user' => $this->Model_Siswa1->get_data_edit($id),
		);
     	$data['id_kelas']= $this->Model_Siswa1->get_kelas();
     	$data['kelas']= $this->Model_Siswa1->get_kelas();
		

        $this->load->view("App/edit_ssw", $data);
	
		
	}
	
	function update(){
		$id = $this->input->post('nis');
		$insert = $this->Model_Siswa1->update(array(
                
				'nama_siswa' => $this->input->post('nama_siswa'),
				'id_kelas' => $this->input->post('kelas'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jk' => $this->input->post('jk'),
				'agama' => $this->input->post('agama'),
				'alamat' => $this->input->post('alamat'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'tlp_ayah' => $this->input->post('tlp_ayah'),
				'tlp_ibu' => $this->input->post('tlp_ibu'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				
            ), $id);
        redirect('Siswa1/home');
        }
	
}