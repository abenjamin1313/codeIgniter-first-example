<!-- left off researchin about routes and controllers -->


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends CI_Controller {
	// localhost - foldername - foldername - index - controller - method
	// http://localhost/CodeIgniter/codeigniter/index.php/properties/show

	public function index()
	{
		$data['user_name'] = 'Adam';
		$data['status_group'] = ['All', 'Available', 'Unavailable'];
		$this->load->view('Layouts/header');
		$this->load->view('Layouts/header_nav');
		$this->load->view('properties/index', $data);
		$this->load->view('Layouts/footer');
	}

	public function show($id) 
	{
		$data['id'] = $id;
		$this->load->model('Property');

		$data['name'] = $this->Property->get();
		$this->load->view('properties/show', $data);
	}

}
