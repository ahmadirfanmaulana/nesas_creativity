<div class="col-md-12">
    <div class="card">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Siswa</li>
      </ol>
      <div class="col-md-12 text-right">
        <div class="row">
          <a href="<?php echo PATH_THEME; ?>administrator/siswa/tambah">
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
            <th class="text-center">NIS</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">Jurusan</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <span id="wrapper">
        <tbody>
          <?php
          $no = 1;
          foreach ($result as $key) {
            ?>
            <tr>
              <td class="text-center"><?php echo $no; ?></td>
              <td><?php echo $key->user_nis; ?></td>
              <td><?php echo $key->user_fullname; ?></td>
              <td class="text-center"><?php echo $key->user_gender; ?></td>
              <td class="text-center"><?php echo $key->kelas_name; ?></td>
              <td><?php echo $key->jurusan_nama; ?></td>
              <td class="text-center">
                <a href="<?php echo PATH_THEME; ?>administrator/siswa/edit/<?php echo $key->user_nis; ?>">
                  <button type="button" name="button" class="btn btn-primary" title="Ubah">
                    <i class="fa fa-pencil"></i>
                  </button>
                </a>
                <button type="button" name="button" class="btn btn-danger btn-trash" value="<?php echo $key->user_nis; ?>_<?php echo $key->user_fullname; ?>" title="Hapus">
                  <i class="fa fa-trash-o"></i>
                </button>
                <!-- <form class="" action="" method="post" style="display:inline-block"> -->
                  <?php
                  if ($key->user_active == "aktif") {
                    ?>
                    <button type="button" value="<?php echo $key->user_nis; ?>" name="tidak aktif" class="btn btn-default btn-actived" title="Non Aktifkan">
                      <i class="fa fa-toggle-on"></i>
                    </button>
                    <?php
                  }
                  else {
                    ?>
                    <button type="button" value="<?php echo $key->user_nis; ?>" name="aktif" class="btn btn-muted btn-actived" title="Aktifkan">
                      <i class="fa fa-toggle-off"></i>
                    </button>
                    <?php
                  }
                   ?>
                <!-- </form> -->
                <button type="button" name="button" class="btn btn-warning" title="Lihat Siswa">
                  <i class="fa fa-share"></i>
                </button>
              </td>
            </tr>
            <?php
            $no++;
          }
           ?>
        </tbody>
         </span>
      </table>
    </div>
</div>


<script type="text/javascript">
$('button.btn-actived').click(function () {
  var nis = $(this).attr('value');
  var active = $(this).attr('name');

  if (active == "aktif") {
  $(this).html("<i class='fa fa-toggle-on'></i>").
    attr({"name":"tidak aktif"}).
    attr({"title":"Non Aktifkan"}).
    removeClass('btn-muted').
    addClass('btn-default');
  }
  else {

    $(this).html("<i class='fa fa-toggle-off'></i>").
    attr({"name":"aktif"}).
    attr({"title":"Aktifkan"}).
    removeClass('btn-default').
    addClass('btn-muted');

  }

  $.ajax({
    type:'post',
    url:'<?php echo PATH_THEME; ?>administrator/siswa/siswa_toggle',
    data:{user_nis:nis,user_active:active},
    success:function(){
    }
  })
})

$('button.btn-trash').click(function () {
  var value = $(this).attr('value');
  var split = value.split("_");
  var nis = split[0];
  var nama = split[1];

  swal({
    title: "Peringatan",
    text: "Apakah Anda Ingin Menghapus "+nama+" ?",
    type: "info",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  },
  function(){
    setTimeout(function(){
      $.ajax({
        type : 'post',
        url : '<?php echo PATH_THEME; ?>administrator/siswa/hapus',
        data : {user_nis:nis},
        success:function () {
        swal({
          title : 'Sukses',
          text : 'Berhasil Dihapus',
          type : 'success'
        },
        function () {
          window.location = '<?php echo PATH_THEME; ?>administrator/siswa';
        }
      );
        }
      })
    }, 800);
  });
})

$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
