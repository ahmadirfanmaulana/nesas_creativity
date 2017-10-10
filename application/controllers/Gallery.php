<?php

/**
 * Gallery
 */
class Gallery extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Gallery";
    $data['css'] = "berita";
    
    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/gallery/gallery_homepage');
    $this->load->view('common/footer');
  }
}


 ?>
