<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function insert()
	{
		$this->load->view("template/headLogin");
		$this->load->view("template/headerLogin");
		$this->load->view("template/banner");
		$this->load->view('user/register/create/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("user/register/create/script");
		
	}
	
	
}
