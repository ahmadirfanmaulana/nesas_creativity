<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administrator</title>
    <!-- Cascading Style Sheet -->
    <!doctype html>
    <html lang="en">
    <head>
  	<meta charset="utf-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  	<title>Light Bootstrap Dashboard by Creative Tim</title>

  	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php echo ASSET; ?>admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo ASSET; ?>admin/css/animate.min.css" rel="stylesheet"/>
    <link href="<?php echo ASSET; ?>admin/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="<?php echo ASSET; ?>admin/css/demo.css" rel="stylesheet" />
    <link href="<?php echo ASSET; ?>admin/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo ASSET; ?>css/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php echo ASSET; ?>css/main.css"> -->
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/admin/main.admin.css">
    <?php
    if (!empty(isset($css)?$css:NULL)) {
      ?>
      <link rel="stylesheet" href="<?php echo ASSET; ?>css/admin/<?php echo $css; ?>.admin.css">
      <?php
    }
    ?>
    <link rel="stylesheet" href="<?php echo ASSET; ?>plugin/ckeditor/samples/css/sample.css">
    <link rel="stylesheet" href="<?php echo ASSET; ?>plugin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    <link rel="stylesheet" href="<?php echo ASSET; ?>plugin/sweetalert-master/dist/sweetalert.css">
    <link rel="stylesheet" href="<?php echo ASSET; ?>plugin/DataTables/datatables.min.css">
    <!-- Javascript -->
    <script src="<?php echo ASSET; ?>admin/js/jquery-1.10.2.js" type="text/javascript"></script>
  	<script src="<?php echo ASSET; ?>admin/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo ASSET; ?>plugin/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo ASSET; ?>plugin/ckeditor/samples/js/sample.js"></script>
    <script type="text/javascript" src="<?php echo ASSET; ?>plugin/sweetalert-master/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo ASSET; ?>plugin/sweetalert-master/dist/sweetalert-dev.js"></script>
    <script type="text/javascript" src="<?php echo ASSET; ?>plugin/DataTables/datatables.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="<?php echo ASSET; ?>admin/img/sidebar-.jpg">
