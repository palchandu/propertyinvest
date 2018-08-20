<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
        {
  
                $pass  = md5($this->input->post('password'));
                $email = $this->input->post('email');
              
                  $email = $this->input->post('email');
                  //print_r($result[0]->id); die;
                  if($email)
                  {
                        $res = $this->user->login($email,$pass);
                        if($res==1){
                        $this->session->set_flashdata('success','SuccessFully Login');
                        redirect('dashborad');
                        }else
                        {
                        	$this->session->set_flashdata('error','please try again.');
                        redirect('login');
                        }

                      } 
                      else {
                        $this->session->set_flashdata('error','please try again.');
                        redirect('login');
                      }

        } 
}
