<div class="col-md-12">
  <div class="card">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        Jurusan
      </li>
    </ol>
    <div class="col-md-12 text-right">
      <div class="row">
        <a href="<?php echo PATH_THEME; ?>administrator/jurusan/tambah">
          <button type="button" name="button" class="btn btn-primary">
            <i class="fa fa-plus"></i> Tambah
          </button>
        </a>
      </div>
    </div>
    <br><br><br>
    <table class="table table-bordered" id="myTable">
      <thead>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama Jurusan</th>
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
          <td><?php echo $key['jurusan_nama']; ?></td>
          <td class="text-center">
            <a href="<?php echo PATH_THEME; ?>administrator/jurusan/edit/<?php echo $key['jurusan_id']; ?>">
              <button type="button" name="button" class="btn btn-primary" title="Edit">
                <i class="fa fa-pencil"></i>
              </button>
            </a>
            <button type="button" name="button" class="btn btn-danger btn-trash" value="<?php echo $key['jurusan_id']; ?>_<?php echo $key['jurusan_nama']; ?>" title="Hapus">
              <i class="fa fa-trash"></i>
            </button>
            <button type="button" name="button" class="btn btn-warning" value="" title="Lihat Jurusan">
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
$(document).ready(function(){
    $('#myTable').DataTable();
});

$('button.btn-trash').click(function () {
  var value = $(this).attr('value');
  var spliting = value.split("_");
  var jurusan_id = spliting[0];
  var jurusan_nama = spliting[1];

  swal({
    title: "Peringatan",
    text: "Apakah Anda Ingin Menghapus Jurusan "+jurusan_nama+" ?",
    type: "info",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  },
  function(){
    setTimeout(function(){
      $.ajax({
        type : 'post',
        url : '<?php echo PATH_THEME; ?>administrator/jurusan/hapus',
        data : {jurusan_id:jurusan_id},
        success:function () {
        swal({
          title : 'Sukses',
          text : 'Berhasil Dihapus',
          type : 'success'
        },
        function () {
          window.location = '<?php echo PATH_THEME; ?>administrator/jurusan';
        }
      );
        }
      })
    }, 800);
  });
})
</script>
