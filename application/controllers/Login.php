<?php

/**
 *
 */
class Login extends CI_Controller
{
    // login
    public function index()
    {
      $data['title'] = 'Login';

      $this->load->view('common/meta',$data);
      $this->load->view('site/login',$data); 

    }
}


 ?>
