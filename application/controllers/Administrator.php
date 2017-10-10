<?php

/**
 * Administrator
 */
class Administrator extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin/ModelofAdmin');
    $this->load->model('Admin/ModelofAdmin_berita');
    $this->load->model('Admin/ModelofAdmin_jurusan');
    $this->load->model('Admin/ModelofAdmin_siswa');
    $this->load->model('Admin/ModelofAdmin_kelas');
  }
  public function index()
  {
    $data['dashboard'] = 'active';
    $data['get'] = $this->ModelofAdmin->get();
    $data['css'] = 'dashboard';

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/dashboard');
    $this->load->view('common/admin/footer');
  }
  public function dashboard()
  {
    $this->ModelofAdmin->token();
  }

  // berita
  public function berita()
  {
    $data['berita'] = 'active';
    $data['rows'] = $this->ModelofAdmin_berita->tampil();

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/berita/berita_homepage',$data);
    $this->load->view('common/admin/footer');
  }
  public function berita_tambah()
  {
    $data['berita'] = 'active';
    $data['result'] = $this->ModelofAdmin_berita->tambah();

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/berita/berita_tambah',$data);
    $this->load->view('common/admin/footer');
  }
  public function berita_hapus()
  {
    $this->ModelofAdmin_berita->hapus();
  }
  public function berita_toggle()
  {
    $this->ModelofAdmin_berita->toggle();
  }
  public function berita_edit($id)
  {
    $data['berita'] = 'active';
    $data['result'] = $this->ModelofAdmin_berita->edit($id);
    $data['tampil'] = $this->ModelofAdmin_berita->tampil_where($id);

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/berita/berita_edit',$data);
    $this->load->view('common/admin/footer');
  }

  public function artikel()
  {
    $data['artikel'] = 'active';

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/artikel/artikel_homepage');
    $this->load->view('common/admin/footer');
  }

  // siswa
  public function siswa()
  {
    $data['siswa'] = 'active';
    $data['result'] = $this->ModelofAdmin_siswa->tampil_siswa();

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/siswa/siswa_homepage',$data);
    $this->load->view('common/admin/footer');
  }
  public function siswa_toggle()
  {
    $this->ModelofAdmin_siswa->siswa_toggle();
  }
  public function siswa_tambah()
  {
    $data['siswa'] = 'active';
    $data['result'] = $this->ModelofAdmin_siswa->tambah();
    $data['tampil_kelas'] = $this->ModelofAdmin_siswa->tampil_kelas();
    $data['tampil_jurusan'] = $this->ModelofAdmin_siswa->tampil_jurusan();

    // get kelas
    $this->db->where('kelas_id',$this->input->post('kelas'));
    $data['result_post_kelas'] = $this->db->get('kelas')->result();
    // get jurusan
    $this->db->where('jurusan_id',$this->input->post('jurusan'));
    $data['result_post_jurusan'] = $this->db->get('jurusan')->result();

    if ($data['result'] != 'berhasil') {
      $data['input_post'] = $this->ModelofAdmin_siswa->input_post();
    }

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/siswa/siswa_tambah',$data);
    $this->load->view('common/admin/footer');
  }
  public function siswa_hapus()
  {
    $this->ModelofAdmin_siswa->hapus();
  }
  public function siswa_search()
  {
    $this->ModelofAdmin_siswa->search();
  }
  public function siswa_edit($siswa_nis)
  {
    $data['siswa'] = 'active';
    $data['result'] = $this->ModelofAdmin_siswa->edit($siswa_nis);
    $data['rows'] = $this->ModelofAdmin_siswa->tampil_where($siswa_nis);
    $data['tampil_kelas'] = $this->ModelofAdmin_siswa->tampil_kelas();
    $data['tampil_jurusan'] = $this->ModelofAdmin_siswa->tampil_jurusan();

    // get kelas
    $this->db->where('kelas_id',$this->input->post('kelas'));
    $data['result_post_kelas'] = $this->db->get('kelas')->result();
    // get jurusan
    $this->db->where('jurusan_id',$this->input->post('jurusan'));
    $data['result_post_jurusan'] = $this->db->get('jurusan')->result();

    if ($data['result'] != "berhasil") {
      $data['input_post'] = $this->ModelofAdmin_siswa->input_post();
    }

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/siswa/siswa_edit',$data);
    $this->load->view('common/admin/footer');
  }
  // Kelas
  public function kelas()
  {
    $data['kelas'] = 'active';
    $data['result'] = $this->ModelofAdmin_kelas->tampil();
    $data['jumlah_siswa'] = $this->ModelofAdmin_kelas->jumlah_siswa();

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/kelas/kelas_homepage',$data);
    $this->load->view('common/admin/footer');
  }
  public function kelas_tambah()
  {
    $data['kelas'] = 'active';
    $data['result'] = $this->ModelofAdmin_kelas->tambah();
    $data['jurusan_tampil'] = $this->ModelofAdmin_kelas->tampil_jurusan();

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/kelas/kelas_tambah',$data);
    $this->load->view('common/admin/footer');
  }
  public function kelas_edit($id)
  {
    $data['kelas'] = 'active';
    $data['edit'] = $this->ModelofAdmin_kelas->edit($id);
    $data['tampil_jurusan'] = $this->ModelofAdmin_kelas->tampil_jurusan();
    $data['result'] = $this->ModelofAdmin_kelas->tampil_where($id);

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/kelas/kelas_edit',$data);
    $this->load->view('common/admin/footer');
  }
  public function kelas_hapus($id)
  {
    $data['kelas'] = 'active';
    $data['result'] = $this->ModelofAdmin_kelas->hapus($id);
    $data['tampil'] = $this->ModelofAdmin_kelas->tampil_before_hapus($id);

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/kelas/kelas_hapus',$data);
    $this->load->view('common/admin/footer');
  }

  // jurusan
  public function jurusan()
  {
    $data['jurusan'] = 'active';
    $data['result'] = $this->ModelofAdmin_jurusan->tampil();

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/jurusan/jurusan_homepage',$data);
    $this->load->view('common/admin/footer');
  }
  public function jurusan_tambah()
  {
    $data['jurusan'] = 'active';
    $data['result'] = $this->ModelofAdmin_jurusan->tambah();

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/jurusan/jurusan_tambah',$data);
    $this->load->view('common/admin/footer');
  }
  public function jurusan_hapus()
  {
    $this->ModelofAdmin_jurusan->hapus();
  }
  public function jurusan_edit($id)
  {
    $data['jurusan'] = 'active';
    $data['result'] = $this->ModelofAdmin_jurusan->edit($id);
    $data['rows'] = $this->ModelofAdmin_jurusan->tampil_where($id);
    $data['input_post'] = $this->input->post('jurusan');

    $this->load->view('common/admin/meta',$data);
    $this->load->view('common/admin/header');
    $this->load->view('site/admin/jurusan/jurusan_edit',$data);
    $this->load->view('common/admin/footer');
  }
}


 ?>
