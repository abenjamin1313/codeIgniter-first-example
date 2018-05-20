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
		$data['properties'] = $this->Property->all();

		$data['selected_filter'] = $this->session->selected_filter;

		$this->load->view('Layouts/header');
		$this->load->view('Layouts/header_nav');
		$this->load->view('properties/index', $data);
		$this->load->view('Layouts/footer');
	}

	public function set_filter() 
	{
		$seesion_data['selected_filter'] = $this->input->get('filter');
		$this->session->set_userdata($session_data);
		redirect('properties/index');
	}

	public function show($id) 
	{
		$data['id'] = $id;
		$data['name'] = $this->Property->get();
		//$version = $this->Property->get_version();
		//$data['version'] = $version->conn_id->server_info;
		$this->load->view('properties/show', $data);
	}

	public function edit($id)
   	{

		if($_POST)
		{

		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$new_data['name'] = $name;
		$new_data['description'] = $description;

		$this->Property->update($id, $new_data);
		redirect('properties/index');
		}

      $data['property'] = $this->Property->get($id);
      $this->load->view('layouts/header');
      $this->load->view('Layouts/header_nav');
      $this->load->view('properties/edit', $data);
      $this->load->view('layouts/footer');
   }


}
