<?php include "../bootstrap/user/header_user.php"; ?>
<div class="app-content content" style="padding :0;">
    <div class="content-overlay"></div>
    <div class="content-wrapper container-xxl p-5">
    <?php include "../pages/user/jenis-pembayaran.php"; ?>
    </div>
</div>
<script>
    $(window).on('load', function(){
        let page = 'file';
        $('#title').text(page);
        $('#subpath').text(page);   
        $('#'+page).addClass('active');
    })
</script>
<?php include "../bootstrap/user/footer_user.php"; ?>