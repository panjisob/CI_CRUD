<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_customer(){
		$sql = $this->db->query("SELECT * FROM customer");
		return $sql->result_array();
	}

	public function simpan_cust($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$customer_id = $this->db->escape($post['customer_id']);
		$cust_name = $this->db->escape($post['cust_name']);
		$city = $this->db->escape($post['city']);
		$grade = $this->db->escape($post['grade']);
		$salesman_id = $this->db->escape($post['salesman_id']);

		$sql = $this->db->query("INSERT INTO customer VALUES ($customer_id, $cust_name, $city, $grade, $salesman_id)");
		if($sql)
			return true;
		return false;
	}

	public function addfile($data)
	{
		$sql = $this->db->query("LOAD DATA LOCAL INFILE '$data' INTO TABLE customer COLUMNS TERMINATED BY '|';
		");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM customer WHERE customer_id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}
	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$customer_id = $this->db->escape($post['customer_id']);
		$cust_name = $this->db->escape($post['cust_name']);
		$city = $this->db->escape($post['city']);
		$grade = $this->db->escape($post['grade']);
		$salesman_id = $this->db->escape($post['salesman_id']);

		$sql = $this->db->query("UPDATE customer SET cust_name = $cust_name, city = $city, grade = $grade, salesman_id = $salesman_id WHERE customer_id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from customer WHERE customer_id = ".intval($id));
	}

}