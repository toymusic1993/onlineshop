<?php
     $title = 'Sáo Trúc Mão Mèo';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div id="wrapper">
    <!-- Header -->
    <div id="header" class = "col-lg-12">
        <nav class="navbar navbar-inverse">
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
						<li><?= $this->Html->link('Trang Chủ', ['controller'=>'products','action' => 'index']) ?></li>
						<li class = "dropdown">
							<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#">Các Loại Sáo <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php foreach ($data2 as $categories) { ?>
								<li> <?= $this->Html->link($categories->name,['controller'=>'products','action'=> $categories->id]); ?></li>
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
    
    <div class="container-fluid">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
	
    </footer>
</body>
</html>
