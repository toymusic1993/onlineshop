<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <?php echo $this->Html->css('trangchu'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
	<!-- Header -->
	
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Sáo Trúc Mão Mèo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><?= $this->Html->link('Trang Chủ', ['action' => 'index']) ?></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Các Loại Sáo <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<?php foreach ($data as $categories) { ?>
            	<li><?php echo $this->Html->link($categories->name,['action'=> $categories->id]); ?></li>
            <?php } ?>
          </ul>
        </li>
        <li><a href="#">Giới Thiệu</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo $this->Html->link('Đăng Kí',['controller'=>'users','action'=>'registry']); ?></li>
        <li><?php echo $this->Html->link('Đăng Nhập',['controller'=>'users','action'=>'login']); ?></li>
        <li><a href=""><span  class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
	</div>