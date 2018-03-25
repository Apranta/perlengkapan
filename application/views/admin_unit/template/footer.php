<div class="footer">

                    <div>
                        <strong>Copyright</strong> Universitas Sriwijaya &copy; 2018
                    </div>
                </div>
                </div>
    </div>


    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets');?>/js/plugins/bootstrap-filestyle/bootstrap-filestyle.min.js"></script>
    <script src="<?php echo base_url('assets');?>/js/plugins/jquery-form/jquery.form.js"></script>
    <script src="<?php echo base_url('assets');?>/js/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets');?>/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url('assets');?>/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url('assets');?>/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url('assets');?>/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url('assets');?>/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url('assets');?>/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url('assets');?>/js/demo/peity-demo.js"></script>

    <script src="<?php echo base_url('assets');?>/js/plugins/jquery-validate/jquery.validate.min.js"></script>


    <!-- GITTER -->
    <script src="<?php echo base_url('assets');?>/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url('assets');?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url('assets');?>/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->


    <!-- Toastr -->
    <script src="<?php echo base_url('assets');?>/js/plugins/toastr/toastr.min.js"></script>

    <!-- Date Picker-->
    <script src="<?php echo base_url('assets');?>/js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <div id="<?php echo base_url('assets');?>/js-content">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

    </div>



    <script>
    $('#tmtdate .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                calendarWeeks : true,
                format: "yyyy-mm-dd"
            });
    $('#tmtdate2 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                calendarWeeks : true,
                format: "yyyy-mm-dd"
            });
    </script>
</body>
</html>
