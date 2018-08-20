<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Super Controller
 */
class MY_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rpc');

	}

	public function getRPC($currency)
	{
		$rpc_details=$this->Rpc->rpcInfo($currency);
		return $rpc_details; 
	}
}
?>