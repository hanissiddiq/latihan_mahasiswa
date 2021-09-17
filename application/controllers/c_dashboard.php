<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('v_dashboard');
	}
}
