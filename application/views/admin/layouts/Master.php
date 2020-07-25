<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/toastr/toastr.min.css">
    <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>plugins/summernote/summernote-bs4.css">
  <!-- Master.css -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>dist/css/style.css">


  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php 
  $this->load->view('admin/layouts/navbar');
  $this->load->view('admin/layouts/sidebar');
?>