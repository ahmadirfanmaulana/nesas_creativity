  <div class="col-md-12">
    <div class="card">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        Berita
      </li>
    </ol>
    <div class="container-fluid">
      <div class="col-md-12 text-right">
        <div class="row">
          <a href="<?php echo PATH_THEME; ?>administrator/berita/tambah">
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
            <th class="text-center">Judul</th>
            <th class="text-center">Entri</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($rows as $row) {
          ?>
          <tr>
            <td class="text-center"><?php echo "$no"; ?></td>
            <td><?php echo $row->berita_judul; ?></td>
            <td class="text-center"><?php echo $row->berita_datetime_entri; ?></td>
            <td class="text-center">
              <a href="<?php echo PATH_THEME; ?>administrator/berita/edit/<?php echo $row->berita_id; ?>">
                <button type="button" name="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
              </a>
              <button type="button" name="button" class="btn btn-danger btn-trash" value="<?php echo $row->berita_id; ?>_<?php echo $row->berita_judul; ?>"><i class="fa fa-trash"></i></button>

              <?php
              if ($row->berita_status == "Aktif") {
                ?>
                <button type="button" name="button" class="btn btn-default" value="<?php echo $row->berita_id; ?>_Tidak Aktif"><i class="fa fa-toggle-on"></i></button>
                <?php
              }
              else {
                ?>
                <button type="button" name="button" class="btn btn-default" value="<?php echo $row->berita_id; ?>_Aktif"><i class="fa fa-toggle-off"></i></button>
                <?php
              }
               ?>

              <button type="button" name="button" class="btn btn-info"><i class="fa fa-share"></i></button>
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

</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});

$('.btn-trash').click(function () {
  var value = $(this).attr('value');
  var split = value.split("_");

  var berita_id = split[0];
  var berita_judul = split[1];

  swal({
  title: "Peringatan",
  text: "Apakah anda ingin menghapus berita "+berita_judul+" ?",
  type: "info",
  showCancelButton: true,
  closeOnConfirm: false,
  showLoaderOnConfirm: true,
  },
  function(){
    setTimeout(function(){
      $.ajax({
        type : 'post',
        url : '<?php echo PATH_THEME; ?>administrator/berita/hapus',
        data : {berita_id : berita_id},
        success : function () {
          swal({
            title : 'Sukses',
            text : 'Berhasil Dihapus',
            type : 'success'
          },
          function () {
            window.location = '<?php echo PATH_THEME; ?>administrator/berita';
          }
          )
        }
      })
    }, 500);
  });

})
$('button.btn-default').click(function () {
  var value = $(this).attr('value');

  var spliting = value.split("_");
  var berita_id = spliting[0];
  var berita_status = spliting[1];

  if (berita_status == "Aktif") {
    $(this).html("<i class='fa fa-toggle-on'></i>").
    attr({"value":berita_id+"_Tidak Aktid"});
  }
  else {
    $(this).html("<i class='fa fa-toggle-off'></i>").
    attr({"value":berita_id+"_Aktif"});
  }

  $.ajax({
    type:'post',
    url:'<?php echo PATH_THEME; ?>administrator/berita/berita_toggle',
    data:{berita_id:berita_id,berita_status:berita_status},
    success:function(){

    }
  })
})
</script>
