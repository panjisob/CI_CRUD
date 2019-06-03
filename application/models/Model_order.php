<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_order extends CI_Model{

	public function load_order(){
		$sql = $this->db->query("SELECT * FROM orders");
		return $sql->result_array();
	}

	public function simpan_data($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$ord_no = $this->db->escape($post['ord_no']);
		$purch_amt = $this->db->escape($post['purch_amt']);
		$ord_date = $this->db->escape($post['ord_date']);
		$salesman_id = $this->db->escape($post['salesman_id']);
		$customer_id = $this->db->escape($post['customer_id']);

		$sql = $this->db->query("INSERT INTO orders VALUES ($ord_no, $purch_amt, $ord_date, $salesman_id, $customer_id)");
		if($sql)
			return true;
		return false;
	}

	public function addfile($data)
	{
		$sql = $this->db->query("LOAD DATA LOCAL INFILE '$data' INTO TABLE orders COLUMNS TERMINATED BY '|';
		");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM orders WHERE ord_no = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}
	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$ord_no = $this->db->escape($post['ord_no']);
		$purch_amt = $this->db->escape($post['purch_amt']);
		$ord_date = $this->db->escape($post['ord_date']);
		$salesman_id = $this->db->escape($post['salesman_id']);
		$customer_id = $this->db->escape($post['customer_id']);

		$sql = $this->db->query("UPDATE orders SET purch_amt = $purch_amt, ord_date = $ord_date, salesman_id = $salesman_id, customer_id = $customer_id  WHERE ord_no = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("DELETE from orders WHERE ord_no = ".intval($id));
	}

}