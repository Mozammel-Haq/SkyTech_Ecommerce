<?php session_start();
require_once("configs/config.php");
require_once("helpers/helper.php");
require_once("libraries/library.php");
require_once("models/model.php");
require_once("controllers/controller.php");

// if (!isset($_SESSION["uid"])) header("location:$base_url");
// $uid = $_SESSION["uid"];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard | Kanakku - Invoice and Billing Management Admin Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Kanakku is a Sales, Invoices & Accounts Admin template for Accountant or Companies/Offices with various features for all your needs. Try Demo and Buy Now.">
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
  <meta name="author" content="Dreams Technologies">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= $base_url ?>/assets/img/favicon.png">

  <!-- Apple Touch Icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $base_url ?>/assets/img/apple-touch-icon.png">

  <!-- Theme Script js -->
  <script src="<?= $base_url ?>/assets/js/theme-script.js" type="be00f69dc5f35c49bb07ab3f-text/javascript"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/dataTables.bootstrap5.min.css">

  <!-- Tabler Icon CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/tabler-icons/tabler-icons.min.css">

  <!-- Daterangepikcer CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/daterangepicker/daterangepicker.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/fontawesome/css/all.min.css">

  <!-- Simplebar CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/simplebar/simplebar.min.css">

  <!-- Quill CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/quill/quill.snow.css">

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/plugins/select2/css/select2.min.css">



  <!-- Iconsax CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/iconsax.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css">

</head>

<body>

  <!-- Begin Wrapper -->
  <div class="main-wrapper">

    <?php
    include_once 'views/layout/topBar.php'
    ?>

    <?php
    include_once 'views/layout/main_sidebar.php'
    ?>

    <!-- ========================
			Start Page Content
		========================= -->

    <div class="page-wrapper">