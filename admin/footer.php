<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/toastr.js" type="text/javascript"></script>
<script src="../bootstrap/js/toastr.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="../plugins/morris/morris.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<script src="../plugins/select2/select2.full.min.js" type="text/javascript"></script>
<script>

    function getConfirmation() {
        var retVal = confirm("Are you sure you want to Approve if yes then  you need to contact the administrator for activation?");
        if (retVal == true) {
            window.location = "deactive.php";
        } else {
            location.reload();
            $("#button").prop('clicked', false);
            return false;
            window.location = "profile.php";

        }
    }


    $('div.collapsible div#profile').hide();


    $('div .collapsible h4').click(function () {
        $('div.collapsible div.profile').toggle("slide");
        $('div.collapsible h4 span').toggle();

    });

    $(".select2").select2();

    /** add active class and stay opened when selected */
    var url = window.location;

// for sidebar menu entirely but not cover treeview
    $('ul.sidebar-menu a').filter(function () {
        return this.href == url;
    }).parent().addClass('active');

// for treeview
    $('ul.treeview-menu a').filter(function () {
        return this.href == url;
    }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');


</script>
</body>
</html>
