<?php include "../bootstrap/user/header_user.php"; ?>
<div class="app-content content py-5">
<?php include "../bootstrap/user/breadcrumbs_rincian.php"; ?>
<?php include "../pages/user/rincian_booking.php"; ?>
    
<script>
    $(window).on('load', function(){
        let path1 = 'poli gigi';
        let path2 = "pilih dokter";
        let path3 = "konfirmasi booking";
        $('#title').text(path3);
        $('#subpath').text(path3);   
        $('#path1').text(path1);   
        $('#path2').text(path2);   
        $('#'+page2).addClass('active');
    })
</script>
<?php include "../bootstrap/user/footer_user.php"; ?>