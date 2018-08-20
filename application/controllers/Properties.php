<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properties extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('propertym');
	}

	public function index()
	{
		
		$res = $this->propertym->propertylist();
		$data['propertylistdata']= $res;
		$this->load->view('properties',$data);
	
	}

}
