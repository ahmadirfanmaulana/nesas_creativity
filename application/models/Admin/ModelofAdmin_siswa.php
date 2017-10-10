<?php

/**
 *
 */
class ModelofAdmin_siswa extends CI_Model
{
  public function tambah()
  {
    $this->load->library('enkription');

    $data = array(
            'user_nis'        => $this->input->post('nis'),
            'user_fullname'   => $this->input->post('nama'),
            'user_alamat'     => $this->input->post('alamat'),
            'user_gender'     => $this->input->post('jenis_kelamin'),
            'user_kelas_id'   => $this->input->post('kelas'),
            'user_active'     => isset($_POST['aktivasi'])?$_POST['aktivasi']:"tidak aktif"
            );
    $data_login = array(
              'login_user_nis' => $this->input->post('nis'),
              'login_username' => $this->input->post('username'),
              'login_password' => $this->enkription->enkription_password($this->input->post('password'))
            );
    if ($this->input->post('button')) {
      $this->db->where('user_nis',$this->input->post('nis'));
      $row = $this->db->get('users')->num_rows();
      // row login
      $this->db->where('login_username',$this->input->post('username'));
      $row_login = $this->db->get('login')->num_rows();
      // validation username
      $vaidation_username = !preg_match('/^\w{5,20}$/', $this->input->post('username'));
      // validation
      if ($row > 0 || $row_login > 0 || $this->input->post('password') != $this->input->post('try_password') || $vaidation_username) {
        if ($row > 0) {
          $validation['user_nis_valid'] = "valid";
        }
        if ($row_login > 0) {
          $validation['login_username_valid'] = "valid";
        }
        if ($vaidation_username) {
          $validation['login_username_same_valid'] = "valid";
        }
        if ($this->input->post('password') != $this->input->post('try_password')){
          $validation['login_password_valid'] = "valid";
        }
        return $validation;
      }
      else {
        $this->db->insert('users',$data);
        $this->db->insert('login',$data_login);
        return "berhasil";
      }
    }
  }
  public function input_post()
  {

    $data['post_nis'] = $this->input->post('nis');
    $data['post_nama'] = $this->input->post('nama');
    $data['post_alamat'] = $this->input->post('alamat');
    $data['post_jenis_kelamin'] = $this->input->post('jenis_kelamin');
    $data['post_kelas'] = $this->input->post('kelas');
    $data['post_jurusan'] = $this->input->post('jurusan');
    $data['post_aktivasi'] = $this->input->post('aktivasi');
    $data['post_username'] = $this->input->post('username');

    return $data;
  }
  public function tampil_kelas()
  {
    $sql = $this->db->get('kelas');
    return $sql->result();
  }
  public function tampil_jurusan()
  {
    $sql = $this->db->get('jurusan');
    return $sql->result();
  }
  public function tampil_siswa()
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('kelas' , 'kelas.kelas_id = users.user_kelas_id');
    $this->db->join('jurusan' , 'jurusan.jurusan_id = kelas.kelas_jurusan_id');

    $sql = $this->db->get();
    return $sql->result();
  }
  public function tampil_where($user_nis)
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('kelas' , 'kelas.kelas_id = users.user_kelas_id');
    $this->db->join('jurusan' , 'jurusan.jurusan_id = kelas.kelas_jurusan_id');
    $this->db->join('login' , 'login.login_user_nis = users.user_nis');
    $this->db->where('user_nis',$user_nis);

    $sql = $this->db->get();
    return $sql->result();
  }
  public function edit($siswa_nis)
  {
    $data = array(
            'user_fullname'   => $this->input->post('nama'),
            'user_alamat'     => $this->input->post('alamat'),
            'user_gender'     => $this->input->post('jenis_kelamin'),
            'user_kelas_id'   => $this->input->post('kelas')
            );
    $data_login = array(
            'login_username' => $this->input->post('username')
          );

    if ($this->input->post('button')) {
        // row login
        $username = $this->input->post('username');
        $row_login = $this->db->query("select * from login where login_username = '$username' and login_user_nis != $siswa_nis")->num_rows();
        // validation username
        $validation_username = !preg_match('/^\w{5,20}$/', $this->input->post('username'));
        if ($row_login > 0 || $validation_username) {
          if ($row_login > 0) {
            $validation['validate_username_same'] = "!valid";
          }
          if ($validation_username) {
            $validation['validation_username'] = "!valid";
          }

          return $validation;
        }
        else {
          $this->db->where('user_nis',$siswa_nis);
          $this->db->update('users',$data);
          return "berhasil";
        }
    }
  }

  public function siswa_toggle()
  {
    $data = array(
      'user_active' => $_POST['user_active']
    );

    if (isset($_POST['user_nis'])) {
      $this->db->where('user_nis',$_POST['user_nis']);
      $sql = $this->db->update('users',$data);
      if ($sql) {
        echo "Berhasil";
      }
      else {
        echo "Gagal";
      }
    }
  }

  public function hapus()
  {
    if (isset($_POST['user_nis'])) {
      $this->db->delete('users',array('user_nis' => $_POST['user_nis']));
      $this->db->delete('login',array('login_user_nis' => $_POST['user_nis']));
    }
  }
}


 ?>
