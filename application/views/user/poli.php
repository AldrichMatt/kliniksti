<?php include "../bootstrap/user/header_user.php"; ?>
<div class="app-content content py-5">
<?php include "../bootstrap/user/breadcrumbs.php"; ?>
<?php include "../pages/user/poli.php"; ?>
    
<script>
    $(window).on('load', function(){
        let page = 'poli';
        $('#title').text(page);
        $('#subpath').text(page);   
        $('#'+page).addClass('active');
    })
</script>
<?php include "../bootstrap/user/footer_user.php"; ?>