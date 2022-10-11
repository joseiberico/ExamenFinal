<?php
include_once 'includes/templates/header.php'
?>

<?php
session_start();
require_once('assets/funcion/funcion.php');
if (!isLogged()) {
    header('location:index.php');
}
?>

  <!-- Content Wrapper. Contains page content -->
 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
  
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Tecnoventas</h1>
        </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Tecnoventas</li>
        </ol>
      </div><!-- /.col -->
      

<?php
include_once 'includes/templates/footer.php'
?>