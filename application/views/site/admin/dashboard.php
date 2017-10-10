<div id="dashboard" class="tab-pane fade in active col-md-12">
  <div class="row">

    <div class="col-md-4">
      <div class="card card-cus bg-red">
        <a href="<?php echo PATH_THEME; ?>administrator/berita">
          <div class="row item-row">
            <div class="col-md-4 text-center item-icon">
              <h1><i class="pe-7s-news-paper"></i></h1>
            </div>
            <div class="col-md-8">
              <p><span>Berita</span></p>
              <h1 class="berita-row"></h1>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-cus bg-purple">
        <a href="<?php echo PATH_THEME; ?>administrator/artikel">
          <div class="row item-row">
            <div class="col-md-4 text-center item-icon">
              <h1><i class="pe-7s-share"></i></h1>
            </div>
            <div class="col-md-8">
              <p><span>Artikel</span></p>
              <h1><?php echo $get['berita']; ?></h1>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-cus bg-deep-purple">
        <div class="row item-row">
          <div class="col-md-4 text-center item-icon">
            <h1><i class="pe-7s-light"></i></h1>
          </div>
          <div class="col-md-8">
            <p><span>Kreativitas</span></p>
            <h1>57</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-cus bg-indigo">
        <div class="row item-row">
          <div class="col-md-4 text-center item-icon">
            <h1><i class="pe-7s-network"></i></h1>
          </div>
          <div class="col-md-8">
            <p><span>Jurusan</span></p>
            <h1 class="jurusan-row"></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-cus bg-grey">
        <div class="row item-row">
          <div class="col-md-4 text-center item-icon">
            <h1><i class="pe-7s-vector"></i></h1>
          </div>
          <div class="col-md-8">
            <p><span>Kelas</span></p>
            <h1 class="kelas-row"></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-cus bg-cyan">
        <div class="row item-row">
          <div class="col-md-4 text-center item-icon">
            <h1><i class="pe-7s-study"></i></h1>
          </div>
          <div class="col-md-8">
            <p><span>Siswa</span></p>
            <h1 class="siswa-row"></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
        <div class="card card-cus bg-teal">
          <div class="row item-row">
            <div class="col-md-4 text-center item-icon">
              <h1><i class="pe-7s-photo"></i></h1>
            </div>
            <div class="col-md-8">
              <p><span>Foto</span></p>
              <h1><?php echo $get['jurusan']; ?></h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-cus bg-green">
          <div class="row item-row">
            <div class="col-md-4 text-center item-icon">
              <h1><i class="pe-7s-video"></i></h1>
            </div>
            <div class="col-md-8">
              <p><span>Video</span></p>
              <h1><?php echo $get['jurusan']; ?></h1>
            </div>
          </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-cus bg-light-green">
          <div class="row item-row">
            <div class="col-md-4 text-center item-icon">
              <h1><i class="pe-7s-medal"></i></h1>
            </div>
            <div class="col-md-8">
              <p><span>Ranking</span></p>
              <h1><?php echo $get['jurusan']; ?></h1>
            </div>
          </div>
        </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    function tampil(get = '') {
      $.ajax({
        url : '<?php echo PATH_THEME; ?>administrator/dashboard',
        method : 'POST',
        dataType : 'json',
        data : {get:get},
        success: function (data) {
          $('.berita-row').html(data.berita);
          $('.jurusan-row').html(data.jurusan);
          $('.kelas-row').html(data.kelas);
          $('.siswa-row').html(data.siswa);
        }
      })
    }
    tampil();

    setInterval(function () {
      tampil();
    },1000)
  })
</script>
