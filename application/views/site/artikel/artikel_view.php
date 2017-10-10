<div class="jumbotron">
  <h2 class="text-center text-uppercase"><?php echo str_replace('-',' ',$slug); ?></h2>
</div>
<div class="container">
    <div class="row">
      <div class="well">
        <h5>nesasCreativity <i class="fa fa-chevron-right" style="margin-left:15px;margin-right:15px"></i> Lihat Artikel</h5>
      </div>
      <div class="share col-md-3">
        <h5>BAGIKAN</h5>
        <button type="button" name="button" class="btn btn-facebook">
          <i class="fa fa-facebook-square"></i> Facebook
        </button>
        <button type="button" name="button" class="btn btn-twitter">
          <i class="fa fa-twitter"></i> Twitter
        </button>
        <button type="button" name="button" class="btn btn-instagram">
          <i class="fa fa-instagram"></i> Intagram
        </button>
        <button type="button" name="button" class="btn btn-google-plus">
          <i class="fa fa-google-plus"></i> Google +
        </button>
        <div class="well">

        </div>
      </div>
      <div class="col-md-9">
        <img src="<?php echo PATH_THEME; ?>assets/img/resize3.jpg" alt="" class="image-heading">
        <div class="well">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <table>
                    <tr>
                      <td rowspan="2"><i class="fa fa-user-circle-o" style="font-size:40px"></i></td>
                      <td><h5 class="text-uppercase">Ahmad Irfan Maulana</h5></td>
                    </tr>
                    <tr>
                      <td><small class="text-uppercase">XI RPL 1</small></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-6 text-right">
                <h5>Diterbitkan Pada</h5>
                <small>5 September 2017</small>
              </div>
            </div>
          </div>
        </div>
        <!-- content -->
        <div class="description">
          <h2 class="text-uppercase"><?php echo str_replace('-',' ',$slug); ?></h2>
          <br>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <br>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <br>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <br>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <br>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <div class="well">
          </div>
          <div class="col-md-6">
            <button type="button" name="button" class="btn btn-primary">
              <span style="font-size:45px"><i class="fa fa-comments-o"></i> 0</span>
              <br> Komentar
            </button>
          </div>
          <div class="col-md-6">
            <button type="button" name="button" class="btn btn-primary">
              <span style="font-size:45px"><i class="fa fa-heart-o"></i> 0</span>
              <br> Sukai
            </button>
          </div>
          <div class="well" style="clear:both">
          </div>
          <h5>Artikel Lainya</h5>
          <?php
          for ($i=1; $i <=10 ; $i++) {
            ?>
            <div class="item item-lg col-md-6">
              <div class="wrapper" style="background:transparent;box-shadow:0px 0px 0px #ddd;">
                <div class="image" style="background-image:url('../../assets/img/resize.jpg');">

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
           <div class="well" style="clear:both;">
           </div>
        </div>
      </div>
    </div>
</div>
