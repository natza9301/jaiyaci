<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospital extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
	}
	public function update($_id,$nameofhospital,$lattiude,$longitude,$provinceId,$tell)
	{
		
		$data =array(
			"_id"=>$_id,
			"nameofhospital"=>$nameofhospital,
			"lattiude"=>$lattiude,
			"longitude"=>$longitude,
			"provinceId"=>$provinceId,
			"tell"=>$tell
		);
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view('admin/hospital/update/content',$data);
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/hospital/update/script");
		
	}
	public function insert()
	{
		
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view('admin/hospital/create/content');
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/hospital/create/script");
		
		
	}
	public function index()
	{
		
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view('admin/hospital/content');
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/hospital/script");
		
		
	}
	
	
}
