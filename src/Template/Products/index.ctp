<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang Chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <?php echo $this->Html->css('trangchu'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Content -->
<div id = "content" class = "col-lg-12">
	<div id = "products" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 post">
		<h2>Sản Phẩm</h2>
		<div class = "clear-fix"></div>
		<?php foreach ($data1 as $products) { ?>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 post">
			<?php echo $this->Html->image("saoviet/$products->image_url"); ?>
			<p class="bg-primary"><?= $products->name ?></p>
			<p class="price">Giá : <?= $products->price ?> VNĐ</p>
			<button class="btn btn-default btn-style">Thêm Vào Giỏ Hàng</button>
		</div>
		<?php } ?>
	</div>
	<div class = "right-menu">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 post">
			<h2>Danh Mục Sản Phẩm </h2>
            	<ul id = "main-menu" class = "list-group">
                	<?php foreach ($data2 as $categories) { ?>			
					<li class = "list-group-item list-group-item-sucess">
						<?= $this->Html->link($categories->name,['controller'=>'products','action'=> $categories->id]); ?></li>
					<?php } ?>
                </ul>
		</div>
	</div>
</div>
</body>
</html>