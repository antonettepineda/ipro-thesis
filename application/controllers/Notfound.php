<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	
	public function index()
	{
		$data['title'] = "Error 404";
		$data['subtitle'] = "Page Not Found";
		$data['view_isi'] = "view_home";
		$this->load->view('layout/template', $data);
	}
}
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	
	public function index()
	{
		$data['title'] = "Error 404";
		$data['subtitle'] = "Page Not Found";
		$data['view_isi'] = "view_home";
		$this->load->view('layout/template', $data);
	}
}
>>>>>>> adding files
