<?php include "bootstrap/header.php"; ?>
<?php include "bootstrap/navbar.php"; ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
    <?php include "bootstrap/breadcrumbs.php"; ?>
    <?php include "pages/riwayat_kunjungan.php"; ?>
        
    </div>
</div>
<script>
    $(window).on('load', function(){
        let page = 'riwayat';
        $('#'+page).addClass('active');
        page += ' Kunjungan';
        $('#title').text(page);
        $('#subpath').text(page);
    })
</script>
<?php include "bootstrap/footer.php"; ?>