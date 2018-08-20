<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * RPC Details Model
 */
class Rpc extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function rpcInfo($curr)
	{
		$this->db->select('*');
		$this->db->from('rpc_detail');
		$this->db->where('curr_short',$curr);
		$result=$this->db->get()->result_array();
		return $result;
	}
}
?>