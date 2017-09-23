<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MX_Controller {

	public function index()
	{
		echo "Templates controller";
	}
	
	public function dashboard()
	{
		$data['navbar_title'] = "Vadības panelis";
		$this->load->view('dashboard', $data);
	}
	
	public function empty_template($data)
	{
		$this->load->view('empty_template', $data);
	}
}
