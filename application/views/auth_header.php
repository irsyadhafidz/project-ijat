<!DOCTYPE html>
<html lang="en">
<head>

  <script language='JavaScript'>
var txt="SISTEM INFORMASI PENYEWAAN MOBIL ELITE TRANSPORT ";
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();
</script>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla') ?>/assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla') ?>/assets/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla') ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla') ?>/assets/css/components.css">
</head>