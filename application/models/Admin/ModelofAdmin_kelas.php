<?php

/**
 *
 */
class ModelofAdmin_kelas extends CI_Model
{

  public function tambah()
  {
    $data = array(
      'kelas_name' => $this->input->post('kelas'),
      'kelas_jurusan_id' => $this->input->post('jurusan')
    );

    if ($this->input->post('button')) {
      $sql = $this->db->insert('kelas',$data);
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
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->join('jurusan','jurusan_id = kelas_jurusan_id');
    $sql = $this->db->get()->result_array();
    return $sql;
  }
  public function tampil_jurusan()
  {
    $sql = $this->db->query("SELECT * FROM jurusan")->result_array();
    return $sql;
  }
  public function tampil_where($id)
  {
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->where('kelas_id',$id);
    $this->db->join('jurusan','jurusan_id = kelas_jurusan_id');
    $sql = $this->db->get()->result_array();
    return $sql;
  }
  public function edit($id)
  {
    $data = array(
            'kelas_name' => $this->input->post('kelas'),
            'kelas_jurusan_id' => $this->input->post('jurusan')
          );
    if ($this->input->post('button')) {
      $this->db->where('kelas_id',$id);
      $this->db->update('kelas',$data);
      return TRUE;
    }
  }
  public function tampil_before_hapus($id)
  {
    $this->db->where('kelas_id',$id);
    $sql = $this->db->get('kelas')->result_array();
    return $sql;
  }
  public function hapus($id)
  {
    if ($this->input->post('button')) {
      $this->db->where('kelas_id',$id);
      $this->db->delete('kelas');
      $this->db->delete('users',array('user_kelas_id' => $id));
      $this->db->where('user_kelas_id',$id);
      $user = $this->db->get('users')->result();
      foreach ($user as $row) {
        $this->db->where('login_user_nis',$row->user_nis);
        $this->db->delete('login');
      }
      return TRUE;
    }
  }

  public function jumlah_siswa()
  {
    $sql = $this->db->get('kelas');
    foreach ($sql->result() as $row) {
      $this->db->where('user_kelas_id',$row->kelas_id);
      $return = $this->db->get('users');
    }
    return $return->num_rows();
  }
}


 ?>
