<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('signupm');
	}

	public function index()
	{
		$this->load->view('register');
	}

	 public function createaccount ()
        {
  
              $data = array(
                'name' => $this->input->post('name'),
                'password'  => md5($this->input->post('password')),
                'email' => $this->input->post('email'),
                'contact_number'=>$this->input->post('mobile')
               
              );
              
                  $email = $this->input->post('email');
                  //print_r($result[0]->id); die;
                  if($email)
                  {
                        $res = $this->signupm->createaccount($data);
                        $this->session->set_flashdata('success','Thank You for Signing up with us.');
                        redirect('register');
                      } else {
                        $this->session->set_flashdata('error','please try again.');
                        redirect('register');
                      }

        } 
            
}
