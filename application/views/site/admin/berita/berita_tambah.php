<div class="col-md-12">
  <div class="card">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo PATH_THEME; ?>administrator/berita">Berita</a>
      </li>
      <li class="breadcrumb-item active">
        Tambah Berita
      </li>
    </ol>
    <?php
    if (!empty(isset($result)?$result:NULL)) {
      if ($result == "berhasil") {
        ?>
        <div class="alert alert-success">
          Berhasil
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
    <form class="" action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-7">
          <div class="form-group">
            <label for="">Judul Berita</label>
            <input type="text" name="judul" value="" class="form-control" placeholder="Ketikan Judul Berita" required>
          </div>
        </div>
        <div class="col-md-5">
          <label for="">Gambar Berita</label>
          <input type="file" name="foto" value="" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Deskripsi Berita</label>
            <textarea name="deskripsi" id="editor" required></textarea>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="">Verifikasi</label><br>
            <input type="checkbox" name="verifikasi" value="aktif"> Publikasikan
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-default" value="button">
             <i class="fa fa-save"></i>  Simpan
            </button>
          </div>
        </div>
      </div>

    </form>
  </div>
</div>
