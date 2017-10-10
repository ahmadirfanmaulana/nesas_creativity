<?php

foreach ($result as $key_result) {
  ?>
  <div class="col-md-12">
    <div class="card">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo PATH_THEME; ?>administrator/kelas">Kelas</a>
        </li>
        <li class="breadcrumb-item active">
          Edit Kelas
        </li>
      </ol>
      <?php
      if (!empty(isset($edit)?$edit:NULL)) {
        if ($edit == TRUE) {
        ?>
        <div class="alert alert-success">
          Berhasil Diedit. <a href="<?php echo PATH_THEME; ?>administrator/kelas">Kembali</a>
        </div>
        <?php
        }
      }
      ?>
      <form class="" action="" method="post">
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for=""></label>
              <input type="text" name="kelas" value="<?php echo $key_result['kelas_name']; ?>" class="form-control" placeholder="Isikan Nama Kelas">
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for=""></label>
              <select class="form-control" name="jurusan">
                <option value="<?php echo $key_result['kelas_jurusan_id']; ?>"><?php echo $key_result['jurusan_nama']; ?></option>
                <?php
                foreach ($tampil_jurusan as $key) {
                  if ($key['jurusan_nama'] == $key_result['jurusan_nama']) {
                    $key['jurusan_nama'] = "";
                  }
                  else {
                    ?>
                    <option value="<?php echo "$key[jurusan_id]"; ?>"><?php echo "$key[jurusan_nama]"; ?></option>
                    <?php
                  }
                  ?>
                  <?php
                }
                 ?>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button type="submit" name="button" value="button" class="btn btn-default">
                <i class="fa fa-save"></i> Simpan
              </button>
            </div>
          </div>
        </div>
        
      </form>
    </div>
  </div>

  <?php
}

 ?>
