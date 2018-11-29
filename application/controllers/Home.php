<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		
		parent::__construct() ;
		$this->load->helper('url');
		$this->load->library('session');	
		$this->load->model('ipro_model', '', TRUE);
		
	}
	 public function search()
	{
   		$this->load->model('ipro_model');
    	$employee = $this->input->post('search');
    	$data['employees'] =  $this->ipro_model->search($employee);
    	$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_employee";
		$this->load->view('layout/template', $data);
	}
	public function searchProductSales()
	{
   		$this->load->model('ipro_model');
    	$employee = $this->input->post('search');
    	$data['reports'] =  $this->ipro_model->searchProductSales($report);
    	$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_reports";
		$this->load->view('layout/template', $data);
	}
	public function searchInventory()
	{
   		$this->load->model('ipro_model');
    	$inventory = $this->input->post('search');
    	$data['inventorys'] =  $this->ipro_model->searchInventory($inventory);
    	$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_inventory";
		$this->load->view('layout/template', $data);
	}
	public function index()
	{
		
		$this->load->view('view_login');
	}
    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $this->index();
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('home');
        }        
    }
	public function home()
	{
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_home";
		$this->load->view('layout/template', $data);
	}
	public function employees()
	{
		
		$data['employees'] = $this->ipro_model->getData('users');
		//echo json_encode($data['employees']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_employee";
		$this->load->view('layout/template', $data);
	}
	public function sales()
	{
		$data['sales'] = $this->ipro_model->getData('tbl_sales_view');
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_sales";
		$this->load->view('layout/template', $data);
	}
	
	public function addsales()
	{
		$data['employees'] = $this->ipro_model->getData('users');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_addsales";
		$this->load->view('layout/template', $data);
	}
	
	public function processAddSales() {
			$data = array();
				$data['Product'] = $this->input->post('Product');
				$data['code'] = $this->input->post('Code');
				$data['quantity'] = $this->input->post('Quantity');
				$data['unit_price'] = $this->input->post('unit_price');
		
		$inStock = $this->ipro_model->getInventory($data['Product'])[0]['Stock'];
		if ($data['quantity'] > $inStock) {
			echo json_encode('Error');
		} else {
			$this->ipro_model->add_sales($data);
			$this->ipro_model->updateInventory($data['quantity'], $data['Product']);
			echo json_encode('Okay');
		}
		
		
	}
	
	public function showProduct() {
		
		$data['inventory'] = $this->ipro_model->getInventory($this->input->get('barcode'))[0];
		echo json_encode($data['inventory']);
		
	}
	
	
	public function inventory()
	{
		$data['inventorys'] = $this->ipro_model->getData('tbl_inventory');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_inventory";
		$this->load->view('layout/template', $data);
	}
	public function addProduct()
	{
		$data['inventorys'] = $this->ipro_model->getData('tbl_inventory');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_addproduct";
		$this->load->view('layout/template', $data);
	}
	public function addEmployee()
	{
		$data['employees'] = $this->ipro_model->getData('users');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_addemployee";
		$this->load->view('layout/template', $data);
	}
	
	public function reports()
	{
		$data['reports'] = $this->ipro_model->getDataSales('tbl_sales_view');
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_reports";
		$this->load->view('layout/template', $data);
	}
	public function filterReports() {
		$data = $this->ipro_model->filterReports($this->input->post('from'), $this->input->post('to'));
		echo json_encode($data);
	}
	public function calendar()
	{
		
		$data['view_isi'] = "view_calendar";
		$this->load->view('view_calendar', $data);
	}
	public function history()
	{
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_history";
		$this->load->view('layout/template', $data);
	}
	public function login()
	{
		
		$data['view_isi'] = "view_login";
		$this->load->view('view_login', $data);
	}
	public function insertEmployee()
	{
		$data = array();
        $data['fname'] = $this->input->post('fname');
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
		
		$this->ipro_model->addData($data);
		
		redirect('home/employees');

	}
	public function editEmployee($id)
	{
		//$data['employees'] = $this->ipro_model->getData('users');
		$data['employee'] = $this->ipro_model->getUserWithID($id)[0];
		
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_editEmployee";
		$this->load->view('layout/template', $data);
	}
	public function saveEmployee()
	{
	
		$data = array();
		$data['id'] = $this->input->post('id');
        $data['fname'] = $this->input->post('fname');
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
		
		$this->ipro_model->saveEmploee($data, "users", $data['id'], "id");
		
		redirect('home/employees');
	}
	public function deleteEmployee($id)
	{
		$this->ipro_model->delete_employee($id);
		
		redirect('home/employees');
	}
	public function insertProduct()
	{
		$data = array();
        $data['category'] = $this->input->post('category');
        $data['brand'] = $this->input->post('brand');
        $data['type'] = $this->input->post('type');
        $data['unit'] = $this->input->post('unit');
		$data['stock'] = $this->input->post('stock');
		$data['price'] = $this->input->post('price');
		
		$this->ipro_model->add_product($data);
		
		redirect('home/inventory');
	}
	
	public function editProduct($barcode)
	{
		//$data['employees'] = $this->ipro_model->getData('users');
		$data['inventory'] = $this->ipro_model->getInventory($barcode)[0];
		
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_editProduct";
		$this->load->view('layout/template', $data);
	}
	public function saveProduct()
	{
		$data = array();
		$data['Barcode'] = $this->input->post('barcode');
        $data['Category'] = $this->input->post('category');
        $data['Brand'] = $this->input->post('brand');
        $data['Type'] = $this->input->post('type');
        $data['Unit'] = $this->input->post('unit');
		$data['Stock'] = $this->input->post('stock');
		$data['Price'] = $this->input->post('price');

		$this->ipro_model->save_product($data, "tbl_inventory", $data['Barcode'], "barcode");
		//echo json_encode($data);
		redirect('home/inventory');
		
	}
	public function deleteProduct($barcode)
	{
		$this->ipro_model->delete_product($barcode);
		
		redirect('home/inventory');
	}
}
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		
		parent::__construct() ;
		$this->load->helper('url');
		$this->load->library('session');	
		$this->load->model('ipro_model', '', TRUE);
		
	}
	 public function search()
	{
   		$this->load->model('ipro_model');
    	$employee = $this->input->post('search');
    	$data['employees'] =  $this->ipro_model->search($employee);
    	$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_employee";
		$this->load->view('layout/template', $data);
	}
	public function searchProductSales()
	{
   		$this->load->model('ipro_model');
    	$employee = $this->input->post('search');
    	$data['reports'] =  $this->ipro_model->searchProductSales($report);
    	$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_reports";
		$this->load->view('layout/template', $data);
	}
	public function searchInventory()
	{
   		$this->load->model('ipro_model');
    	$inventory = $this->input->post('search');
    	$data['inventorys'] =  $this->ipro_model->searchInventory($inventory);
    	$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_inventory";
		$this->load->view('layout/template', $data);
	}
	public function index()
	{
		
		$this->load->view('view_login');
	}
    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $this->index();
        }else{
            // If user did validate, 
            // Send them to members area
            redirect('home');
        }        
    }
	public function home()
	{
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_home";
		$this->load->view('layout/template', $data);
	}
	public function employees()
	{
		
		$data['employees'] = $this->ipro_model->getData('users');
		//echo json_encode($data['employees']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_employee";
		$this->load->view('layout/template', $data);
	}
	public function sales()
	{
		$data['sales'] = $this->ipro_model->getData('tbl_sales_view');
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_sales";
		$this->load->view('layout/template', $data);
	}
	
	public function addsales()
	{
		$data['employees'] = $this->ipro_model->getData('users');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_addsales";
		$this->load->view('layout/template', $data);
	}
	
	public function processAddSales() {
			$data = array();
				$data['Product'] = $this->input->post('Product');
				$data['code'] = $this->input->post('Code');
				$data['quantity'] = $this->input->post('Quantity');
				$data['unit_price'] = $this->input->post('unit_price');
		
		$inStock = $this->ipro_model->getInventory($data['Product'])[0]['Stock'];
		if ($data['quantity'] > $inStock) {
			echo json_encode('Error');
		} else {
			$this->ipro_model->add_sales($data);
			$this->ipro_model->updateInventory($data['quantity'], $data['Product']);
			echo json_encode('Okay');
		}
		
		
	}
	
	public function showProduct() {
		
		$data['inventory'] = $this->ipro_model->getInventory($this->input->get('barcode'))[0];
		echo json_encode($data['inventory']);
		
	}
	
	
	public function inventory()
	{
		$data['inventorys'] = $this->ipro_model->getData('tbl_inventory');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_inventory";
		$this->load->view('layout/template', $data);
	}
	public function addProduct()
	{
		$data['inventorys'] = $this->ipro_model->getData('tbl_inventory');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_addproduct";
		$this->load->view('layout/template', $data);
	}
	public function addEmployee()
	{
		$data['employees'] = $this->ipro_model->getData('users');
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_addemployee";
		$this->load->view('layout/template', $data);
	}
	
	public function reports()
	{
		$data['reports'] = $this->ipro_model->getDataSales('tbl_sales_view');
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_reports";
		$this->load->view('layout/template', $data);
	}
	public function filterReports() {
		$data = $this->ipro_model->filterReports($this->input->post('from'), $this->input->post('to'));
		echo json_encode($data);
	}
	public function calendar()
	{
		
		$data['view_isi'] = "view_calendar";
		$this->load->view('view_calendar', $data);
	}
	public function history()
	{
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_history";
		$this->load->view('layout/template', $data);
	}
	public function login()
	{
		
		$data['view_isi'] = "view_login";
		$this->load->view('view_login', $data);
	}
	public function insertEmployee()
	{
		$data = array();
        $data['fname'] = $this->input->post('fname');
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
		
		$this->ipro_model->addData($data);
		
		redirect('home/employees');

	}
	public function editEmployee($id)
	{
		//$data['employees'] = $this->ipro_model->getData('users');
		$data['employee'] = $this->ipro_model->getUserWithID($id)[0];
		
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_editEmployee";
		$this->load->view('layout/template', $data);
	}
	public function saveEmployee()
	{
	
		$data = array();
		$data['id'] = $this->input->post('id');
        $data['fname'] = $this->input->post('fname');
        $data['username'] = $this->input->post('username');
        $data['password'] = md5($this->input->post('password'));
		
		$this->ipro_model->saveEmploee($data, "users", $data['id'], "id");
		
		redirect('home/employees');
	}
	public function deleteEmployee($id)
	{
		$this->ipro_model->delete_employee($id);
		
		redirect('home/employees');
	}
	public function insertProduct()
	{
		$data = array();
        $data['category'] = $this->input->post('category');
        $data['brand'] = $this->input->post('brand');
        $data['type'] = $this->input->post('type');
        $data['unit'] = $this->input->post('unit');
		$data['stock'] = $this->input->post('stock');
		$data['price'] = $this->input->post('price');
		
		$this->ipro_model->add_product($data);
		
		redirect('home/inventory');
	}
	
	public function editProduct($barcode)
	{
		//$data['employees'] = $this->ipro_model->getData('users');
		$data['inventory'] = $this->ipro_model->getInventory($barcode)[0];
		
		//echo json_encode($data['inventorys']);
		$data['title'] = "IPRO";
		$data['subtitle'] = "Website CodeIgniter";
		$data['view_isi'] = "view_editProduct";
		$this->load->view('layout/template', $data);
	}
	public function saveProduct()
	{
		$data = array();
		$data['Barcode'] = $this->input->post('barcode');
        $data['Category'] = $this->input->post('category');
        $data['Brand'] = $this->input->post('brand');
        $data['Type'] = $this->input->post('type');
        $data['Unit'] = $this->input->post('unit');
		$data['Stock'] = $this->input->post('stock');
		$data['Price'] = $this->input->post('price');

		$this->ipro_model->save_product($data, "tbl_inventory", $data['Barcode'], "barcode");
		//echo json_encode($data);
		redirect('home/inventory');
		
	}
	public function deleteProduct($barcode)
	{
		$this->ipro_model->delete_product($barcode);
		
		redirect('home/inventory');
	}
}
>>>>>>> adding files
