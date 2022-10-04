<?php include "../bootstrap/user/header_user.php"; ?>
<div class="app-content content py-5">
<?php include "../bootstrap/user/breadcrumbs_poli.php"; ?>
<?php include "../pages/user/pilih_dokter.php"; ?>
    
<script>
    $(window).on('load', function(){
        let path = 'poli gigi';
        let page = "pilih dokter"
        $('#title').text(page);
        $('#subpath').text(page);   
        $('#path').text(path);   
        $('#'+page).addClass('active');
    })
</script>
<?php include "../bootstrap/user/footer_user.php"; ?>