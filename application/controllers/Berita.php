<?php

/**
 * Berita Controller
 */
class Berita extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelofBerita');
  }
  public function index()
  {
    $data['title'] = "Berita";
    $data['css'] = "berita";

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/berita/berita_homepage');
    $this->load->view('common/footer');
  }
  public function view($id,$slug)
  {
    $data['title'] = 'Lihat';
    $data['slug'] = $slug;
    $data['css'] = 'berita_view';

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/berita/berita_view');
    $this->load->view('common/footer');
  }
}


 ?>
