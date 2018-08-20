<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';


class Exchange extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		
        $this->load->view('exchange');
	}




}
