<?php

/**
 *
 */
class ModelofAdmin extends CI_Model
{
  public function get()
  {
    $berita = $this->db->get('berita')->num_rows();
    $jurusan = $this->db->get('jurusan')->num_rows();
    $kelas = $this->db->get('kelas')->num_rows();
    $siswa = $this->db->get('users')->num_rows();

    $data = array(
      'berita' => $berita,
      'jurusan' => $jurusan,
      'kelas' => $kelas,
      'siswa' => $siswa
    );

    return $data;

  }
  public function token()
  {
    $berita = $this->db->get('berita')->num_rows();
    $jurusan = $this->db->get('jurusan')->num_rows();
    $kelas = $this->db->get('kelas')->num_rows();
    $siswa = $this->db->get('users')->num_rows();

    $data = array(
      'berita' => $berita,
      'jurusan' => $jurusan,
      'kelas' => $kelas,
      'siswa' => $siswa
    );

    echo json_encode($data);
  }
}


 ?>
