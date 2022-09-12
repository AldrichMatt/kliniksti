<?php include "bootstrap/header.php"; ?>
<?php include "bootstrap/navbar.php"; ?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
    <?php include "bootstrap/breadcrumbs.php"; ?>
    <?php include "pages/penunjang_medis.php"; ?>
        
    </div>
</div>
<script>
    $(window).on('load', function(){
        let page = 'Penunjang';
        $('#'+page).addClass('active');
        page += ' Medis'
        var title = trim($('.active').text());
                $('#title').text(page);
                $('#subpath').text(page);
    })
</script>
<?php include "bootstrap/footer.php"; ?>