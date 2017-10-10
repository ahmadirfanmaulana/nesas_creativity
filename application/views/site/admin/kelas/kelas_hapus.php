<div class="col-md-12">
  <div class="card">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo PATH_THEME; ?>administrator/kelas">Kelas</a>
      </li>
      <li class="breadcrumb-item active">
        Hapus Kelas
      </li>
    </ol>
    <form class="" action="" method="post">
      <div class="row">
        <div class="col-md-12">
          <h4>Konfirmasi Penghapusan</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <?php
          if (!empty(isset($result)?$result:NULL)) {
            if ($result == TRUE) {
              ?>
              Berhasil Dihapus
              <?php
            }
          }
          else {
            ?>
            Apakah anda ingin menghapus kelas
            <?php foreach ($tampil as $key) { echo $key['kelas_name']; } ?> ?
            <?php
          }
           ?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <?php
          if (empty(isset($result)?$result:NULL)) {
            ?>
            <button type="submit" name="button" value="button" class="btn btn-danger">
              <i class="fa fa-trash"></i> Hapus
            </button>
            <?php
          }
          else {
            ?>
            <a href="<?php echo PATH_THEME; ?>administrator/kelas">
              <button type="button" name="button" value="button" class="btn btn-default">
                <i class="fa fa-chevron-left"></i> Kembali
              </button>
            </a>
            <?php
          }
           ?>
        </div>
      </div>
      
    </form>
  </div>
</div>
