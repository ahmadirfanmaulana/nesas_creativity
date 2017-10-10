<div class="col-md-12">
  <div class="card">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">Kelas</li>
    </ol>
    <div class="col-md-12 text-right">
      <div class="row">
        <a href="<?php echo PATH_THEME; ?>administrator/kelas/tambah">
          <button type="button" name="button" class="btn btn-primary">
            <i class="fa fa-plus"></i> Tambah
          </button>
        </a>
      </div>
    </div>
    <br><br><br>
    <table class="table table-bordered" id="MyTable">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Jurusan</th>
          <!-- <th class="text-center">Jumlah Siswa</th> -->
          <th class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
      $no = 1;
      foreach ($result as $key) {
        ?>
        <tr>
          <td class="text-center"><?php echo $no; ?></td>
          <td class="text-center"><?php echo $key['kelas_name']; ?></td>
          <td><?php echo $key['jurusan_nama']; ?></td>
          <!-- <td class="text-center">
            <?php
          //  echo "$jumlah_siswa";
             ?>
          </td> -->
          <td class="text-center">
            <a href="<?php echo PATH_THEME; ?>administrator/kelas/edit/<?php echo $key['kelas_id']; ?>">
              <button type="button" name="button" class="btn btn-primary" title="Ubah">
                <i class="fa fa-pencil"></i>
              </button>
            </a>
            <a href="<?php echo PATH_THEME; ?>administrator/kelas/hapus/<?php echo $key['kelas_id']; ?>">
              <button type="button" name="button" class="btn btn-danger"  title="Hapus">
                <i class="fa fa-trash"></i>
              </button>
            </a>
            <button type="button" name="button" class="btn btn-default" title="Lihat Kelas">
              <i class="fa fa-share"></i>
            </button>
          </td>
        </tr>
        <?php
        $no++;
      }
       ?>
       </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    $('#MyTable').DataTable();
  })
</script>
