<?php

/**
 * Kreatifitas
 */
class Kreatifitas extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Kreatifitas';
    $data['css'] = 'kreatifitas';

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/kreatifitas/kreatifitas_homepage');
    $this->load->view('common/footer');
  }
}


 ?>
