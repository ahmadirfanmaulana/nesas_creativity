<div class="col-md-10">
  <table class="table table-hover">
    <tr>
      <td colspan="5">
        <button type="button" name="button" class="btn btn-primary">
          <i class="fa fa-plus"></i> Tambah
        </button>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <div class="input-group">
          <input type="search" name="" placeholder="Cari Artikel" class="form-control">
          <div class="input-group-btn">
            <button type="button" name="button" class="btn btn-info">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </td>
      <td colspan="2">
        <div class="input-group" style="float:right">
          <select class="form-control" name="">
            <option value="">Urut Berdasarkan</option>
          </select>
          <div class="input-group-btn">
            <button type="button" name="button" class="btn btn-info">
              <i class="fa fa-filter"></i>
            </button>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <th class="text-center">No</th>
      <th class="text-center">Foto</th>
      <th class="text-center">Judul</th>
      <th class="text-center">Entri</th>
      <th class="text-center">Aksi</th>
    </tr>
    <?php
    for ($i=1; $i <= 10 ; $i++) {
      ?>
      <tr>
        <td class="text-center"><?php echo "$i"; ?></td>
        <td>Berita</td>
        <td>SMKN 1 Subang meraih juara umum LKS tingkat provinsi Jawa Barat tahun 2017</td>
        <td class="text-center">2017-08-10 10:15:22</td>
        <td class="text-center">
          <button type="button" name="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
          <button type="button" name="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
          <button type="button" name="button" class="btn btn-default btn-sm"><i class="fa fa-toggle-on"></i></button>
          <button type="button" name="button" class="btn btn-info btn-sm"><i class="fa fa-chevron-right"></i></button>
        </td>
      </tr>
      <?php
    }
     ?>
  </table>
</div>
