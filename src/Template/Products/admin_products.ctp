<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <?php 
        echo $this->Html->css('bootstrap');
        echo $this->Html->script('jquery'); 
    ?>
</head>
<body>
<div id = "content" class = "col-lg-12">
	<div id = "l-menu" class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 post">
		<ul>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('Danh Sách Sản Phẩm',['controller'=>'products','action'=> 'adminProducts']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('Danh Sách Tài Khoản',['controller'=>'users','action'=> 'adminUsers']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('Danh Mục Sản Phẩm',['controller'=>'products','action'=> 'adminCategories']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('Đơn Đặt Hàng',['controller'=>'products','action'=> 'adminOrders']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('Nhận Xét Khách Hàng',['controller'=>'products','action'=> 'adminReview']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('Cài Đặt',['controller'=>'products','action'=> 'adminSettings']); ?>
			</li>
		</ul>
	</div>
	<div id = "table-content" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 post">
		<table class="tab-content">
		<h2 class = "text-center">Danh Sách Sản Phẩm </h2>
		<tr>
			<th>ID</th>
			<th>Tên Sản Phẩm</th>
			<th>Danh Mục</th>
			<th>Giá</th>
			<th>Số Lượng</th>
			<th>Trạng Thái</th>
			<th>
				<div class="dropdown">
                    <button class="btn btn-default " type="button" data-toggle="dropdown">Hoạt Động
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
						<li><a href="#">Sửa</a></li>
                        <li><a href="#">Xóa</a></li>
                        <li><a href="#">Xem Chi Tiết Sản Phẩm</a></li>
                    </ul>
               </div>
			</th>
		</tr>

		<?php foreach ($data as $products): ?>
		<tr>
			<td><?= $products->id ?></td>
			<td><?= $products->name ?></td>
			<td><?= $products->category_id ?></td>
			<td><?= $products->price ?> VNĐ</td>
			<td><?= $products->quantity ?></td>
			<td><?= $products->status ?></td>
			<td>
				<?= $this->Html->link('Sửa', ['action' => 'editproducts', $products->id]) ?>
				<?= $this->Form->postLink(
					'Xóa',
					['action' => 'deleteproducts', $products->id],
					['confirm' => 'Are you sure?'])
				?>
			</td>
		</tr>
		<?php endforeach; ?>
		</table>
		<?= $this->Html->link('Thêm Sản Phẩm', ['class'=>'button','action' => 'addproducts']) ?>
	</div>		
</body>
</html>