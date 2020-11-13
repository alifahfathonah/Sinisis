<?php
class Model_Alumni extends CI_Model {
	
	function get_table(){
        return $this->db->get("siswa");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas AND kelas.kelas='0' ");
		return $query->result();
	}
	
	function get_kelas(){
		$query = $this->db->query("SELECT * FROM kelas");
		return $query->result();
	}

	function cari($nama_siswa){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas AND siswa.nama_siswa='$nama_siswa'");
		return $query->result();
	}
	
	function delete($id){
		$this->db->where('nis', $id);
        return $this->db->delete('siswa');
	}
	
}