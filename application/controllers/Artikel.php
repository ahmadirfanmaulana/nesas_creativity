<?php

/**
 *
 */
class Artikel extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Artikel';
    $data['css'] = 'berita';

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/artikel/artikel_homepage');
    $this->load->view('common/footer');
  }
  public function view($id,$slug)
  {
    $data['title'] = 'Lihat Artikel';
    $data['css'] = 'berita_view';
    $data['slug'] = $slug;

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/artikel/artikel_view');
    $this->load->view('common/footer');
  }
}


 ?>
