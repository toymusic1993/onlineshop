<?php $title = 'Sáo Trúc Mão Mèo' ?>
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
    <?= $this->Html->css('bootstrap.min') ?>
   
	<?= $this->Html->css('style.css') ?>
	<?= $this->Html->script(['jquery-3.1.1.min','bootstrap.min']) ?>
	
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div id="header" class = "col-lg-12">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?= $this->Html->link('Sáo Trúc Mão Mèo', ['controller'=>'products','action' => 'index'], ['class' => 'navbar-brand']) ?>
			</div>
				
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><?= $this->Html->link('Trang Chủ', ['controller'=>'products','action' => 'index']) ?></li>
					<li class = "dropdown">
						<a class = "dropdown-toggle" data-toggle = "dropdown">Các Loại Sáo <span class="caret"></span></a>
						<ul class="dropdown-menu">
						<?php foreach ($list_category as $categories) : ?>
							<li> 
								<?= $this->Html->link($categories->name,['controller'=>'products','action'=>'categories',$categories->id]); ?>
							</li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li><a href="#">Giới Thiệu</a></li>
				</ul>
					
				<ul class="nav navbar-nav navbar-right">
					<li>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Registry',['controller'=>'users','action'=>'registry'],array('escape'=> false)); ?>
					</li>
					<li>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-log-in"></span> Login',['controller'=>'users','action'=>'userlogin'],array(
						'escape'=>false
						)
					); ?>
						
					</li>
					<li>
						<?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Cart',['controller'=>'products','action'=>'checkout'],array(
						'escape'=>false
						)); ?>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<?= $this->Flash->render() ?>
<section class="container-fluid">
	<?= $this->fetch('content') ?>
</section>
<footer>
</footer>
</body>
</html>
