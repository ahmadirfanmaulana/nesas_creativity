
</div>
<footer class="footer" data-background-color="black">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        SMKN 1 SUBANG
                    </a>
                </li>
                <!-- <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                        MIT License
                    </a>
                </li> -->
            </ul>
        </nav>
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>,
            <a href="https://www.creative-tim.com" target="_blank">Ahmad Irfan Maulana</a>.
        </div>
    </div>
</footer> 
</body>
<!--   Core JS Files   -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo PATH_THEME; ?>assets/common/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo PATH_THEME; ?>assets/common/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo PATH_THEME; ?>assets/common/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    // the body of this function is in assets/js/now-ui-kit.js
    nowuiKit.initSliders();
});

function scrollToDownload() {

    if ($('.section-download').length != 0) {
        $("html, body").animate({
            scrollTop: $('.section-download').offset().top
        }, 1000);
    }
}
</script>

</html>
