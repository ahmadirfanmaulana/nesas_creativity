<?php

/**
 * Story Jurusan
 */
class StoryJurusan extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Story Jurusan';
    $data['css'] = 'story_jurusan';
    $data['js'] = 'story_jurusan';

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/story_jurusan/story_jurusan_homepage');
    $this->load->view('common/footer');
  }

  public function jurusan($jurusan_name)
  {
    $data['title'] = $jurusan_name;
    $data['css'] = 'story_jurusan_view';
    $data['slug'] = $jurusan_name;

    $this->load->view('common/meta',$data);
    $this->load->view('common/header');
    $this->load->view('site/story_jurusan/story_jurusan_view');
    $this->load->view('common/footer');
  }
}


 ?>
