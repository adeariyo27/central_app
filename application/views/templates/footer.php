<!--footer start-->
<footer class="fixed-bottom site-footer">
    <div class="text-center">
        <?= date('Y') ?> &copy; CAPS TUN PALU - Central Apps PTUN Palu | Version 2.0
        <a href="#" class="go-top">
            <i class="icon-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>


<!-- js placed at the end of the document so the pages load faster -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-1.8.3.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?= base_url('assets/'); ?>js/owl.carousel.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.customSelect.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/respond.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery-ui.js"></script>
<script src="<?= base_url('vendor/flatlab/') ?>assets/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
<script src="<?= base_url('vendor/flatlab/') ?>assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>

<!-- Script Notification Sweetalert2-->
<script src="<?= base_url('node_modules/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('assets/js/notif.js') ?>"></script>



<!--common script for all pages-->
<script src="<?= base_url('assets/'); ?>js/common-scripts.js"></script>

<script>
    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function() {
        $('select.styled').customSelect();
    });

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });
    });

    $('#newRegisKuasa').on('shown.bs.modal', function() {
        $('#nomor_regiskuasa').trigger('focus')
    })
    $('#newPertanyaan').on('shown.bs.modal', function() {
        $('#pertanyaan').trigger('focus')
    })
</script>

<!-- Datables Js -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/r-2.2.9/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tblUser').DataTable({
            responsive: true
        });
    });

    $(document).ready(function() {
        $('#tblSubmenu').DataTable({
            responsive: true
        });
    });
</script>

<!-- Enabled Disabled Button -->
<script>
    $("#penandatangan").on('change', function() {
        $('#btnSubmit').prop('disabled', this.value != "" ? false : true);
    });

    $("#penandatanganperiode").on('change', function() {
        $('#btnSubmitPeriode').prop('disabled', this.value != "" ? false : true);
    });
</script>

<!-- Autofill Script -->
<script>
    $(document).ready(function() {
        $('#nama_pemberikuasa').autocomplete({
            source: '<?= base_url('hukum/get_autofill/?'); ?>',
            appendTo: "#newRegisKuasa"
        });
        $('.ui-menu').css('font-family', 'Georama')
    });
    $(document).ready(function() {
        $('#nama_penerimakuasa').autocomplete({
            source: '<?= base_url('hukum/get_autofillpenerimakuasa/?'); ?>',
            appendTo: "#newRegisKuasa"
        });
        $('.ui-menu').css('font-family', 'Georama')
    });
</script>

<!-- Disable Space Characters -->
<script>
    $("#name_attr").on({
        keydown: function(e) {
            if (e.which === 32)
                this.value = this.value.replace(/\s/, '_');
        },
        keyup: function() {
            this.value = this.value.toLowerCase();
        }
    });
</script>

<!-- Morris Chart -->
<script>
    var Script = function() {
        //morris chart
        $(function() {
            Morris.Donut({
                element: 'hero-donut',
                data: [
                    <?php
                    foreach ($jenis_kelamin as $jk) {
                        echo "{ label: '$jk[jenis_kelamin]', value: '$jk[total]' },";
                    }
                    ?>
                ],
                colors: ['#41cac8', '#FF6C60']
            });
        });
    }();
</script>

</body>

</html>