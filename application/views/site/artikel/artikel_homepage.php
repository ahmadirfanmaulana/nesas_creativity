<div class="jumbotron">
  <h2 class="text-center"><i class="pe-7s-share"></i> ARTIKEL</h2>
</div>
<div class="container">
  <div class="row">


    <!-- <div class="col-md-12" style="padding: 0px 8px;margin-top:50px;">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#"><i class="fa fa-th-list"></i> Artikel Lainya</a></li>
      </ul>
    </div> -->

    <div class="col-md-8">
      <div class="row">
        <?php
        for ($i=1; $i <=10 ; $i++) {
          ?>
          <div class="item item-lg col-md-6">
            <div class="wrapper" style="background:transparent;box-shadow:0px 0px 0px #ddd;">
              <div class="image" style="background-image:url('assets/img/resize.jpg');">

              </div>
              <div class="description">
                <h4>SEMINAR NASIONAL KEBIJAKAN PERPU NO. 2 TAHUN 2017</h4>
                <small>
                  <i class="fa fa-clock-o"></i> 28 Januari 2017
                  <i class="fa fa-heart-o"></i> 0
                  <i class="fa fa-comments-o"></i> 0
                </small>
              </div>
            </div>
          </div>
          <?php
        }
         ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="item item-popular col-md-12">
          <div class="wrapper">
            <div class="panel">
              <div class="panel-heading">
                <i class="fa fa-list"></i> Artikel Terpopuler
              </div>
              <?php
              for ($i=1; $i <=10 ; $i++) {
                ?>
                <div class="panel-body">
                  <table class="table">
                    <tr>
                      <td rowspan="2"><?php echo $i; ?>.</td>
                      <td>Paskibra SMKN 1 Subang meraih Juara 2 Tingkat Nasional</td>
                    </tr>
                    <tr>
                      <td>Admin</td>
                    </tr>
                  </table>
                </div>
                <?php
              }
               ?>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
