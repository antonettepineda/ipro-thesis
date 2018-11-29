<<<<<<< HEAD

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ipro_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	function search($employee){
    	$this->db->select('*');
    	$this->db->from('users');
    	$this->db->like('fname',$employee);
    	$this->db->or_like('username',$employee);
    	$query = $this->db->get();
   		return $query->result_array();
	}
	function searchProductSales($report){
    	$this->db->select('*');
    	$this->db->from('tbl_sales');
    	$this->db->like('Category',$report);
    	$this->db->or_like('Brand',$report);
    	$query = $this->db->get();
   		return $query->result_array();
	}
	function searchInventory($inventory){
    	$this->db->select('*');
    	$this->db->from('tbl_inventory');
    	$this->db->like('Category',$inventory);
    	$this->db->or_like('Brand',$inventory);
    	$query = $this->db->get();
   		return $query->result_array();
	}
	function getDataSales($tbl) {
		$this->db->select('*');
		$result =$this->db->get($tbl);
		return $result->result_array(); 	
	}
	function getData($tbl) {
		$this->db->select('*');
		$result =$this->db->get($tbl);
		return $result->result_array(); 	
	}
	function addData($data) {
		$this->db->insert('users', $data);
	}
	function filterReports($from, $to) {
			$this->db->select('*');
		$this->db->where('date(order_date) >= "' . $from . '" AND date(order_date) <= "' . $to . '"');
		$result =$this->db->get('tbl_sales_view');
		return $result->result_array();
	}
	function getUserWithID($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		$result =$this->db->get('users');
		return $result->result_array(); 	
	}
	
	function saveEmploee($data, $tbl, $pk, $field)
	{
		$this->db->where($field, $pk);
		$this->db->update($tbl, $data);
	
	}
	
	function delete_employee($pk){	
		$this->db->where('id', $pk);
		$this->db->delete('users');
	}
	
	function add_product($data) {
		$this->db->insert('tbl_inventory', $data);
	}
	
	
	function add_sales($data) {
		$this->db->insert('tbl_sales', $data);
	}
	
	function updateInventory($quantity, $barcode) {
			$sql = 'UPDATE tbl_inventory SET Stock = Stock -  ' . $quantity . ' WHERE Barcode = ' . $barcode . '';
		
			$this->db->query($sql);
		}
	
	function getInventory($barcode) {
		$this->db->select('*');
		$this->db->where('barcode', $barcode);
		$result =$this->db->get('tbl_inventory');
		return $result->result_array(); 	
	}
	
	function save_product($data, $tbl, $pk, $field)
	{
		$this->db->where($field, $pk);
		$this->db->update($tbl, $data);
	}
	
	function delete_product($pk){	
		$this->db->where('Barcode', $pk);
		$this->db->delete('tbl_inventory');
	}
=======

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ipro_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	function search($employee){
    	$this->db->select('*');
    	$this->db->from('users');
    	$this->db->like('fname',$employee);
    	$this->db->or_like('username',$employee);
    	$query = $this->db->get();
   		return $query->result_array();
	}
	function searchProductSales($report){
    	$this->db->select('*');
    	$this->db->from('tbl_sales');
    	$this->db->like('Category',$report);
    	$this->db->or_like('Brand',$report);
    	$query = $this->db->get();
   		return $query->result_array();
	}
	function searchInventory($inventory){
    	$this->db->select('*');
    	$this->db->from('tbl_inventory');
    	$this->db->like('Category',$inventory);
    	$this->db->or_like('Brand',$inventory);
    	$query = $this->db->get();
   		return $query->result_array();
	}
	function getDataSales($tbl) {
		$this->db->select('*');
		$result =$this->db->get($tbl);
		return $result->result_array(); 	
	}
	function getData($tbl) {
		$this->db->select('*');
		$result =$this->db->get($tbl);
		return $result->result_array(); 	
	}
	function addData($data) {
		$this->db->insert('users', $data);
	}
	function filterReports($from, $to) {
			$this->db->select('*');
		$this->db->where('date(order_date) >= "' . $from . '" AND date(order_date) <= "' . $to . '"');
		$result =$this->db->get('tbl_sales_view');
		return $result->result_array();
	}
	function getUserWithID($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		$result =$this->db->get('users');
		return $result->result_array(); 	
	}
	
	function saveEmploee($data, $tbl, $pk, $field)
	{
		$this->db->where($field, $pk);
		$this->db->update($tbl, $data);
	
	}
	
	function delete_employee($pk){	
		$this->db->where('id', $pk);
		$this->db->delete('users');
	}
	
	function add_product($data) {
		$this->db->insert('tbl_inventory', $data);
	}
	
	
	function add_sales($data) {
		$this->db->insert('tbl_sales', $data);
	}
	
	function updateInventory($quantity, $barcode) {
			$sql = 'UPDATE tbl_inventory SET Stock = Stock -  ' . $quantity . ' WHERE Barcode = ' . $barcode . '';
		
			$this->db->query($sql);
		}
	
	function getInventory($barcode) {
		$this->db->select('*');
		$this->db->where('barcode', $barcode);
		$result =$this->db->get('tbl_inventory');
		return $result->result_array(); 	
	}
	
	function save_product($data, $tbl, $pk, $field)
	{
		$this->db->where($field, $pk);
		$this->db->update($tbl, $data);
	}
	
	function delete_product($pk){	
		$this->db->where('Barcode', $pk);
		$this->db->delete('tbl_inventory');
	}
>>>>>>> adding files
}