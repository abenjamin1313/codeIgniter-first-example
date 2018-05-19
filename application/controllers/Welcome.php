<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['user_name'] = 'Adam';
		$data['status_group'] = ['All', 'Available', 'Unavailable'];
		$this->load->view('Layouts/header');
		$this->load->view('Layouts/foundation_nav');
		$this->load->view('properties/index.php', $data);
		$this->load->view('Layouts/footer');
	}

}
