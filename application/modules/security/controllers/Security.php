<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends MX_Controller {


	public function index()
	{
		echo "Security controller";
	}
	
	public function hash_password()
	{
	    echo password_hash('admin', PASSWORD_BCRYPT);
	}
}
