<?php include "../bootstrap/user/header_user.php"; ?>
<div class="app-content content" style="padding :0;">
    <div class="content-overlay"></div>
    <div class="content-wrapper container-xxl p-0">
    <?php include "../bootstrap/breadcrumbs.php"; ?>
    <?php include "../pages/user/login.php"; ?>
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