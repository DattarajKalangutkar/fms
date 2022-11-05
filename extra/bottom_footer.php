<script src="<?php echo $backend_links['site_url']; ?>/vendors/js/vendor.bundle.base.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/vendors/select2/select2.min.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/off-canvas.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/hoverable-collapse.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/template.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/settings.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/typeahead.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/select2.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/vendors/alertify/alertify.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>js/tabs_util.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>js/tabs_swipe_content.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>js/tabs_main.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/jquery.dataTables.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/dataTables.bootstrap4.js"></script>
<!-- Rama Star charts-->
<script src="<?php echo $backend_links['site_url']; ?>/js/dashboard.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/chart.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/jquery.toast.min.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/off-canvas.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/js/custom.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/vendors/chart.js/Chart.min.js"></script>
<!-- <script src="<?php echo $backend_links['site_url']; ?>/js/hoverable-collapse.js"></script> -->


<!-- Progressbar -->
<script src="<?php echo $backend_links['site_url']; ?>/js/progress-bar.js"></script>
<script src="<?php echo $backend_links['site_url']; ?>/vendors/progressbar.js/progressbar.min.js"></script>


<!-- Rama end -->
<script>
    // Rama start
    var inputs = document.querySelectorAll(".input");

    function focusFunc() {
        let parent = this.parentNode;
        parent.classList.add("focus");
    }

    function blurFunc() {
        let parent = this.parentNode;
        if (this.value == "") {
            parent.classList.remove("focus");
        }
    }

    inputs.forEach((input) => {
        input.addEventListener("focus", focusFunc);
        input.addEventListener("blur", blurFunc);
    });
    // Rama end

    function redirectPage(url) {
        location.replace(url);
    }
</script>