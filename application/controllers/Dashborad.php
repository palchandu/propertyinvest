<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'third_party/jsonRPCClient.php';
include_once APPPATH.'third_party/Client.php';


class Dashborad extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		
        $arrCurr=array('BTC','ETH','PIN');
		$info="";
		foreach ($arrCurr as $key => $valueCurr) {
			$rpc_det=$this->getRPC($valueCurr);
			$client= new Client($rpc_det[0]['host'], $rpc_det[0]['port'], $rpc_det[0]['user'], $rpc_det[0]['pass']);
        	$bal=$client->getBalance('priyankagarg1112@gmail.com');
        	$data[]=array('curr' =>$valueCurr,'balance'=>$bal,'fullname'=>$rpc_det[0]['curr_name'],'image'=>$rpc_det[0]['image']);
		}
		$info['data']=$data;
		//print_r($rpc_det[0]['host']);
        $this->load->view('dashborad',$info);
	}




}
