<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';

class Deposit extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function viewDeposit()
	{
		$coin_name=base64_decode($this->uri->segment('3'));
		$rpc_det=$this->getRPC($coin_name);
		$client= new Client($rpc_det[0]['host'], $rpc_det[0]['port'], $rpc_det[0]['user'], $rpc_det[0]['pass']);
		$data['address']=$client->getAddress('priyankagarg1112@gmail.com');
		$data['balance']=$client->getBalance('priyankagarg1112@gmail.com');
		$data['coin_name']=base64_decode($this->uri->segment('3'));
	
		$this->load->view('deposit',$data);
	}

}
