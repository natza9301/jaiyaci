<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserData extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
    public function index(){
        
    }
	public function insert()
	{
		$this->load->view("user/layout/head");
		$this->load->view("user/layout/header");
		$this->load->view('user/userData/create/content');
		$this->load->view("user/layout/footer");
		$this->load->view("user/layout/foot");	
		$this->load->view("user/userData/create/script");
	}
	
	public function update()
	{
		$this->load->view("user/layout/head");
		$this->load->view("user/layout/header");
		$this->load->view('user/userData/update/content');
		$this->load->view("user/layout/footer");
		$this->load->view("user/layout/foot");	
		$this->load->view("user/userData/update/script");

		
	}
	
}
