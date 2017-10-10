<?php

/**
 * Model Admin : Berita
 */
class ModelofAdmin_berita extends CI_Model
{
  public function tambah()
  {
    $judul = $this->input->post('judul');
    $deskripsi = $this->input->post('deskripsi');
    $verifikasi = isset($_POST['verifikasi']) ? $_POST['verifikasi'] : "tidak aktif";

    if ($this->input->post('button')) {
      $sql = $this->db->query("INSERT INTO berita(
                              berita_user_id,
                              berita_judul,
                              berita_deskripsi,
                              berita_status,
                              berita_datetime_entri
                            )VALUES(
                              1,
                              '$judul',
                              '$deskripsi',
                              '$verifikasi',
                              NOW()
                            )");
      if ($sql) {
        $result = "berhasil";
      }
      else {
        $result = "gagal";
      }
      return $result;
    }
  }
  public function tampil()
  {
    return $this->db->get('berita')->result();
  }

  public function hapus()
  {
    if (isset($_POST['berita_id'])) {
      $this->db->where('berita_id',$_POST['berita_id']);
      $sql = $this->db->delete('berita');
      return $sql;
    }
  }
  public function toggle()
  {
    if (isset($_POST['berita_id'])) {
      $data = array('berita_status' => $_POST['berita_status']);

      $this->db->where('berita_id',$_POST['berita_id']);
      $sql = $this->db->update('berita',$data);
      return $sql;
    }
  }
  public function tampil_where($id)
  {
    $this->db->where('berita_id',$id);
    $sql = $this->db->get('berita');

    return $sql->result();
  }

  public function edit($id)
  {
    $data = array(
            'berita_user_id' => 1,
            'berita_judul' => $this->input->post('judul'),
            'berita_deskripsi' => $this->input->post('deskripsi')
          );
    if ($this->input->post('button')) {
      $this->db->where('berita_id',$id);
      $sql = $this->db->update('berita',$data);
      if ($sql) {
        return "berhasil";
      }
      else {
        return "gagal";
      }
    }
  }
}


 ?>
