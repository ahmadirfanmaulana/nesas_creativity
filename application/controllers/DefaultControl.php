<?php

/**
 * Default Controller
 */
class DefaultControl extends CI_Controller
{
  // page homepage
  public function homepage()
  {
    $data['title'] = "Home";

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/homepage');
    $this->load->view('common/footer');
  }
  // page error or not found
  public function error_page()
  {
    $data['title'] = "Error";

    $this->load->view('common/meta',$data);
    $this->load->view('common/error_page');
  }
  // page about
  public function tentang()
  {
    $data['title'] = 'Tentang';
    $data['css'] = 'berita_view';

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/tentang',$data);
    $this->load->view('common/footer');
  }

}


 ?>
