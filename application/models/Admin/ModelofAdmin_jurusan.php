<?php

/**
 *
 */
class ModelofAdmin_jurusan extends CI_Model
{
  public function tambah()
  {
    $this->jurusan_nama = $this->input->post('jurusan');
    if ($this->input->post('button')) {
      $sql = $this->db->insert('jurusan',$this);
      if ($sql) {
        $result = TRUE;
      }
      else {
        $result = FALSE;
      }
      return $result;
    }
  }
  public function tampil()
  {
    $sql = $this->db->query("SELECT * FROM jurusan")->result_array();
    return $sql;
  }
  public function hapus()
  {
    if (isset($_POST['jurusan_id'])) {
      $this->db->delete('jurusan',array('jurusan_id' => $_POST['jurusan_id']));
    }
  }
  public function tampil_where($id)
  {
    $this->db->where('jurusan_id',$id);
    $sql = $this->db->get('jurusan');
    return $sql->result();
  }
  public function edit($id)
  {
      $data = array('jurusan_nama' => $this->input->post('jurusan'));
      if ($this->input->post('button')) {
        $this->db->where('jurusan_id',$id);
        $sql = $this->db->update('jurusan',$data);
        if ($sql) {
          return TRUE;
        }
        else {
          return FALSE;
        }
      }
  }
}


 ?>
