<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller {
    
    public function __construct() 
    {
         parent::__construct();
    }

	public function login()
	{
		$data['view_file'] = "loginform";
		$this->load->module('templates');
		$this->templates->empty_template($data);
	}
}
