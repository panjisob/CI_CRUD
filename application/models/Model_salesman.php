<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_salesman extends CI_Model{

	public function load_salesman(){
		$sql = $this->db->query("SELECT * FROM salesman");
		return $sql->result_array();
	}

	public function simpan_data($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$salesman_id = $this->db->escape($post['salesman_id']);
		$nama = $this->db->escape($post['nama']);
		$city = $this->db->escape($post['city']);
		$commision = $this->db->escape($post['commision']);

		$sql = $this->db->query("INSERT INTO salesman VALUES ($salesman_id, $nama, $city, $commision)");
		if($sql)
			return true;
		return false;
	}

	public function addfile($data)
	{
		$sql = $this->db->query("LOAD DATA LOCAL INFILE '$data' INTO TABLE salesman COLUMNS TERMINATED BY '|';
		");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM salesman WHERE salesman_id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}
	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$salesman_id = $this->db->escape($post['salesman_id']);
		$nama = $this->db->escape($post['nama']);
		$city = $this->db->escape($post['city']);
		$commision = $this->db->escape($post['commision']);

		$sql = $this->db->query("UPDATE salesman SET nama = $nama, city = $city, commision = $commision WHERE salesman_id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from salesman WHERE salesman_id = ".intval($id));
	}

}