<?php
ob_start();
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Nhóm 7</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <!--Get your own code at fontawesome.com-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/easing/EasePack.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenLite.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/css/base.css">
  <link rel="stylesheet" href="./assets/css/huan.css?v=1">
  <link rel="stylesheet" href="./assets/css/style.css?v=10">
  <link rel="stylesheet" href="./assets/css/style1.css?v=11">

  <style>
    .btnn:hover {
      color: yellow;
      transition: 1s;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="header">
      <nav style="background-color: #970c0c;" class=" navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul style="font-size: 20px;" class="nav navbar-nav">
            </li>
            <li class="active"><a style="background-color: #970c0c;border-radius: 100px;" href="index.php?option=home">
                <i class="btnn fas fa-home">Trang chủ</i>&nbsp;
              </a></li>
            <li class="dropdown">
              <a style="color: #fff;background-color:#970c0c" class="dropdown-toggle" data-toggle="dropdown" href="#"> 
              <i class="btnn fas fa-bell">Thông báo</i>&nbsp; <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">03/01/2021</li>
                <li><a href="#">Thông báo trúng thưởng vocher...</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">06/01/2021</li>
                <li><a href="#">Thông báo bạn đã đặt hàng thành ...</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">10/01/2021</li>
                <li><a href="#">Thông báo bạn nhận được xe SH ...</a></li>
              </ul>
            </li>
            <li><a style="color: #fff;" href="#">
                <i class="btnn fas fa-question">Hỗ trợ</i>&nbsp;
              </a></li>
            <li><a style="color: #fff;" href="#">
                <i class="btnn fab fa-facebook">Kết nối</i>&nbsp;
              </a></li>
            <li>
              <?php if (empty($_SESSION['member'])) : ?>
                <a style="color: #fff;" href="index.php?option=cart">
                <i class="btnn fas fa-shopping-cart">Giỏ hàng</i>&nbsp;</a>
              <?php else : ?>
                <a style="color: #fff;" href="index.php?option=cart">
                <i class="btnn fas fa-shopping-cart">Giỏ hàng</i>&nbsp;</a>
              <?php endif; ?>
            </li>
            <?php if (empty($_SESSION['member'])) : ?>
              <li class="header__navbar-item">
                <a style="color: #fff;" href="index.php?option=register"><span>
                  <i class="btnn fas fa-cash-register">Đăng Ký</i>&nbsp;</span></a>
              </li>
              <li class="header__navbar-item">
                <a style="color: #fff;" href="index.php?option=login">
                <span>
                  <i class="btnn fas fa-sign-in-alt">Đăng Nhập </i>&nbsp;
                </span>
              </a>
              </li>
            <?php else : ?>
              <li class="dropdown">
                <a style="color: #000;background-color:#ffeaf6" class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i style="color: #000;" class="fa fa-user-circle"></i>
                  <?= $_SESSION['member']; ?>
                  <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="?option=edit_profile">Thông tin tài khoản </a></li>
                  <li><a href="?option=change_password">Đổi mật khẩu </a></li>
                  <li><a href="?option=logout">Đăng xuất </a></li>
                </ul>
              </li>
            <?php endif; ?>

            <li>
              <!--Tìm kiếm-->
              <form style="width: 250px; margin-left: 50px;" action="?option=search" method="POST" class="search-form">
                <input style="margin-top:7px" type="search" name="search" class="form-control" placeholder="Nhập từ khóa...">
              </form>
            </li>
          </ul>

      </nav>
    </div>