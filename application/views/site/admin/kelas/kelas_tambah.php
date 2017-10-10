<div class="col-md-12">
  <div class="card">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo PATH_THEME; ?>administrator/kelas">Kelas</a>
      </li>
      <li class="breadcrumb-item active">
        Tambah Kelas
      </li>
    </ol>
    <?php
    if (!empty(isset($result)?$result:NULL)) {
      if ($result == TRUE) {
        ?>
        <div class="alert alert-success">
          Berhasil Ditambahkan. <a href="<?php echo PATH_THEME; ?>administrator/kelas">Kembali</a>
        </div>
        <?php
      }
      else {
        ?>
        <div class="alert alert-danger">
          Gagal ditambahkan. Coba kembali !
        </div>
        <?php
      }
    }
     ?>
     <form class="" action="" method="post">
     <div class="row">
       <div class="col-md-5">
         <div class="form-group">
           <label for="">Nama Kelas</label>
           <input type="text" name="kelas" value="" placeholder="Ketikan Nama Kelas" class="form-control">
         </div>
       </div>
       <div class="col-md-7">
         <div class="form-group">
           <label for="">Nama Jurusan</label>
           <select class="form-control" name="jurusan">
             <?php foreach ($jurusan_tampil as $key): ?>
               <option value="<?php echo $key['jurusan_id']; ?>"><?php echo $key['jurusan_nama']; ?></option>
             <?php endforeach; ?>
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
