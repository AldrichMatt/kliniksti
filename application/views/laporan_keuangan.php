<?php include "bootstrap/header.php"; ?>
<?php include "bootstrap/navbar.php"; ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
    <?php include "bootstrap/breadcrumbs.php"; ?>
    <?php include "laporan/laporan_keuangan.php"; ?>
        
    </div>
</div>
<script>
    $(window).on('load', function(){
        let page = 'laporan';
        let path = 'keuangan'
        $('#title').text(page);
        $('#subpath').text(page);
        $('#path').text(path);
        $('#'+page).addClass('active');
        $('#'+path).addClass('active');
        console.log($('#'+path).text());
    })
</script>
<?php include "bootstrap/footer.php"; ?>