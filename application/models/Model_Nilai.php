<?php
class Model_Nilai extends CI_Model {
	
	public $id;
	function get_table(){
        return $this->db->get("siswa");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas AND kelas.kelas='1'  ");
		return $query->result();
	}
	
	function get_data1($id, $id1, $kelas){
		$query = $this->db->query("SELECT * FROM nilai JOIN mapel JOIN raport WHERE nilai.id_mapel=mapel.id_mapel AND nilai.id_raport=raport.id_raport AND  nis = '$id' AND semester = '$id1' AND id_kelas = '$kelas'");
		return $query->result();
	}
	
	function get_data2($id, $id1, $kelas){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas JOIN nilai JOIN mapel JOIN raport WHERE siswa.nis=nilai.nis AND siswa.id_kelas=kelas.id_kelas AND nilai.id_mapel=mapel.id_mapel AND nilai.id_raport=raport.id_raport  AND siswa.nis = '$id' AND nilai.semester='$id1' AND nilai.id_kelas= '$kelas'");
		return $query->result();
	}

function cari($nama_siswa){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas AND siswa.nama_siswa='$nama_siswa'");
		return $query->result();
	}
	
	
	// function get_kelas(){
	// 	$query = $this->db->query("SELECT * FROM kelas");
	// 	return $query->result();
	// }
	
}