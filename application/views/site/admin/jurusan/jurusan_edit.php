<?php

foreach ($rows as $row) {
  ?>
  <div class="col-md-12">
    <div class="card">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo PATH_THEME; ?>administrator/jurusan">Jurusan</a>
        </li>
        <li class="breadcrumb-item active">
          Edit Jurusan
        </li>
      </ol>

      <?php
      if (!empty(isset($result)?$result:NULL)) {
        if ($result == TRUE) {
          ?>
        <div class="alert alert-success">
          Berhasil Ditambahkan. <a href="<?php echo PATH_THEME; ?>administrator/jurusan">Kembali</a>
        </div>
          <?php
        }
        else {
          ?>
          <div class="alert alert-danger">
            Gagal
          </div>
          <?php
        }
      }
       ?>
      <form class="" action="" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="">Nama Jurusan</label>
              <input type="text" name="jurusan" value="<?php echo isset($input_post)?$input_post:$row->jurusan_nama ?>" placeholder="Isikan Nama Jurusan" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <button type="submit" name="button" value="button" class="btn btn-default">
              <i class="fa fa-save"></i> Simpan
            </button>
          </div>
        </div>
        
      </form>
    </div>
  </div>

  <?php
}

 ?>
