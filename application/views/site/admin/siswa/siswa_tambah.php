<div class="col-md-12">
  <div class="card">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo PATH_THEME; ?>administrator/siswa">Siswa</a>
      </li>
      <li class="breadcrumb-item active">
        Tambah Siswa
      </li>
    </ol>
    <?php
    if (!empty(isset($result)?$result:NULL)) {
      if ($result == "berhasil") {
        ?>
        <div class="alert alert-success">
          Berhasil Ditambahkan. <a href="<?php echo PATH_THEME; ?>administrator/siswa">Kembali</a>
        </div>
        <?php
      }
      else {
        ?>
        <div class="alert alert-danger">
          <?php
          if (isset($result['user_nis_valid'])?$result['user_nis_valid']:NULL == "valid") {
            ?>
              NIS salah. NIS telah digunakan ! <br>
            <?php
          }
          if (isset($result['login_username_valid'])?$result['login_username_valid']:NULL == "valid") {
            ?>
              Username telah digunakan ! <br>
            <?php
          }
          if (isset($result['login_username_same_valid'])?$result['login_username_same_valid']:NULL == "valid") {
            ?>
            Username salah ! <br>
            <?php
          }
          if (isset($result['login_password_valid'])?$result['login_password_valid']:NULL == "valid") {
            ?>
            Password tidak sama !
            <?php
          }
          ?>
          </div>
          <?php
        }
      }
     ?>
    <form class="" action="" method="post">
      <div class="row">
        <div class="col-md-5">
          <div class="form-group">
              <label>NIS {Nomor Induk Siswa}</label>
              <?php
              if (!empty(isset($result)?$result:NULL)) {
                if ($result == "user_nis_valid") {
                  ?>
                  <div class="form-group has-warning has-feedback">
                    <input type="number" name="nis" value="<?php echo isset($input_post['post_nis'])?$input_post['post_nis']:NULL; ?>" class="form-control" id="inputWarning">
                    <i class="fa fa-warning form-control-feedback" style="font-size:24px;padding-top:4px"></i>
                  </div>
                  <?php
                }
                else {
                  ?>
                  <input type="number" name="nis" value="<?php echo isset($input_post['post_nis'])?$input_post['post_nis']:NULL; ?>" class="form-control" placeholder="NIS harus 8 digit angka" required>
                  <?php
                }
              }
              else {
                ?>
                <input type="number" name="nis" value="<?php echo isset($input_post['post_nis'])?$input_post['post_nis']:NULL; ?>" class="form-control" placeholder="NIS harus 8 digit angka" required>
                <?php
              }
               ?>
          </div>
        </div>
        <div class="col-md-7">
          <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" value="<?php echo isset($input_post['post_nama'])?$input_post['post_nama']:NULL; ?>" class="form-control" placeholder="Isikan Nama Lengkap" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
              <label>Alamat Siswa</label>
              <textarea name="alamat" rows="10" cols="80" class="form-control" required placeholder="Isikan Alamat Lengkap"><?php echo isset($input_post['post_alamat'])?$input_post['post_alamat']:NULL; ?></textarea>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2">
          <div class="form-group">
              <label>Jenis Kelamin</label><br>
              <?php
              $post_jenis_kelamin = isset($input_post['post_jenis_kelamin'])?$input_post['post_jenis_kelamin']:NULL;
              if ($post_jenis_kelamin == NULL) {
                ?>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" checked> Laki - Laki <br>
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                <?php
              }
              else {
                if ($post_jenis_kelamin == "Laki-Laki") {
                  $check_l = "checked";
                  $check_p = NULL;
                }
                else {
                  $check_l = NULL;
                  $check_p = "checked";
                }

                ?>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo $check_l; ?>> Laki - Laki <br>
                <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo $check_p; ?>> Perempuan
                <?php
              }
               ?>
          </div>
        </div>
        <div class="col-md-10">
          <div class="form-group">
            <label>Kelas</label>
            <select class="form-control" name="kelas" required>
              <?php
              if (empty($input_post['post_kelas'])) {
                ?>
                <option value="">Pilih Kelas</option>
                <?php
                foreach ($tampil_kelas as $key) {
                ?>
                <option value="<?php echo $key->kelas_id; ?>"><?php echo $key->kelas_name; ?></option>
                <?php
                }
              }
              else {
                foreach ($result_post_kelas as $keys) {
                  ?>
                  <option value="<?php echo $keys->kelas_id; ?>"><?php echo $keys->kelas_name; ?></option>
                  <?php
                  foreach ($tampil_kelas as $key) {
                    if ($key->kelas_id == $keys->kelas_id) {
                      # code...
                    }
                    else {
                      ?>
                      <option value="<?php echo $key->kelas_id; ?>"><?php echo $key->kelas_name; ?></option>
                      <?php
                    }
                  }
                }
              }
               ?>

            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Nama Pengguna {Username}</label>
            <input type="text" name="username" value="<?php echo isset($input_post['post_username'])?$input_post['post_username']:NULL; ?>" class="form-control" placeholder="Ketikan Nama Pengguna" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Kata Sandi {Password}</label>
            <input type="password" name="password" value="" class="form-control" placeholder="Ketikan Password" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">Ulangi Kata Sandi</label>
            <input type="password" name="try_password" value="" class="form-control" placeholder="Ketikan Ulang Password" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Verifikasi</label><br>
            <?php
            if (empty($input_post['post_aktivasi'])) {
              ?>
                <input type="checkbox" name="aktivasi" value="aktif"> Aktifkan
              <?php
            }
            else {
              ?>
                <input type="checkbox" name="aktivasi" value="aktif" checked> Aktifkan
              <?php
            }
             ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <button type="submit" value="button" name="button" class="btn btn-default"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </div>

    </form>
  </div>
</div>
