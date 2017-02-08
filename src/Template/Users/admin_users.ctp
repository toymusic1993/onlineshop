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
	
	<div id = " table-content " class = " col-xs-12 col-sm-9 col-md-9 col-lg-9 post ">
		<table class="tab-content">
		<h2 class = "text-center">Danh Sách Tài Khoản </h2>
		<tr>
			<th>ID</th>
			<th>Tên Người Dùng</th>
			<th>Email</th>
			<th>Ngày Tạo</th>
			<th>Hoạt Động</th>
		</tr>
		<?php foreach ($data as $users): ?>
		<tr>
			<td><?= $users->id ?></td>
			<td><?= $users->name ?></td>
			<td><?= $users->email ?></td>
			<td><?= $users->date_created ?></td>
			<td>
				<?= $this->Html->link('Sửa', ['action' => 'editUsers', $users->id]) ?>
				<?= $this->Form->postLink(
					'Xóa',
					['action' => 'deleteusers', $users->id],
					['confirm' => 'Are you sure?'])
				?>
			</td>
		</tr>
		<?php endforeach; ?>
		</table>
		<?= $this->Html->link('Thêm Tài Khoản', ['class'=>'button','action' => 'addUsers']) ?>
	</div>		
</body>
</html>