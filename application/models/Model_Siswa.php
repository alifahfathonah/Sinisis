<?php
class Model_Siswa extends CI_Model {
	
	function get_table(){
        return $this->db->get("siswa");
    }
    
	function get_data(){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas ORDER BY siswa.nama_siswa ASC  ");
		return $query->result();
	}
	
	function get_data1($id){
		$query = $this->db->query("SELECT * FROM nilai JOIN mapel JOIN raport WHERE nilai.id_mapel=mapel.id_mapel AND nilai.id_raport=raport.id_raport AND  nis = '$id'");
		return $query->result();
	}

	function updateAll(){
		$sql=sprintf("UPDATE siswa JOIN nilai JOIN raport SET  siswa.id_kelas = siswa.id_kelas +1 WHERE siswa.nis=nilai.nis AND siswa.id_kelas=nilai.id_kelas AND nilai.id_raport=raport.id_raport AND raport.status = 'NAIK'");
		$this->db->query($sql);
	} 
	
	function get_kelas(){
		$query = $this->db->query("SELECT * FROM kelas");
		return $query->result();
	}
	
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM siswa WHERE nis = '$id'");
		return $query->result_array();
	}

	function cari($nama_siswa){
		$query = $this->db->query("SELECT * FROM siswa JOIN kelas  WHERE siswa.id_kelas=kelas.id_kelas AND siswa.nama_siswa='$nama_siswa'");
		return $query->result();
	}
	
	function input($data = array()){
		return $this->db->insert('siswa',$data);
		
	}
	
	function delete($id){
		$this->db->where('nis', $id);
        return $this->db->delete('siswa');
	}
	
	function update($data = array(),$id){
		$this->db->where('nis',$id);
		return $this->db->update('siswa',$data);
	}

	
}