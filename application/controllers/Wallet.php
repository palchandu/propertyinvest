<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function viewWallet()
	{
		$this->load->view('wallet');
	}

	public function sendcurrency()
	{
		
		$amount = $this->input->post('amount');
		
		 if($amount>0)
        {

    	$coin_name=base64_decode($this->uri->segment('3'));
		$rpc_det=$this->getRPC($coin_name);
		$client= new Client($rpc_det[0]['host'], $rpc_det[0]['port'], $rpc_det[0]['user'], $rpc_det[0]['pass']);

    	$email=$this->session->userdata['priyankagarg1112@gmail.com'];

        ///  check pin
    	if($this->Auth_model->chkpinpass($pin))
    	{

    		$user_bal=$client->getBalance($email);
	    	$amount=$this->input->post('amount');

            /////   check balance
	    	
                $current_bal=$user_bal-$fee[0]->charge;
                //  chk balance after deduct fee
                if($current_bal>=$amount)
                {
    	    		$receive_address=$this->input->post('address');

    	    		if($client->withdraw($email, $receive_address, $amount))
    	    		{
                        $this->session->set_flashdata('success',"Your amount has been successfully sent.");
                        redirect('wallet/viewWallet');
    	    		}else{
    	    			$this->session->set_flashdata('error', "Incorrect receiver address !!!");
                        redirect('wallet/viewWallet');
    	    		}
                }else{
                    $this->session->set_flashdata('error', "you don't have sufficient balance!!!");
                    redirect('wallet/viewWallet');
                }

	    	}else{
	    		$this->session->set_flashdata('error', "you don't have sufficient balance!!!");
            	redirect('wallet/viewWallet');
	    	}

    }else{
        $this->session->set_flashdata('error', 'Please enter valid amount!!!');
            redirect('wallet/viewWallet');
    }

	}

}
