<div id = "content" class = "col-lg-12">
	<div id = "l-menu" class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 post">
		<h2 class = "text-center">Manager</h2>
		<ul>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('List Products',['controller'=>'users','action'=> 'adminproducts']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('List Users',['controller'=>'users','action'=> 'adminusers']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('List Categories',['controller'=>'users','action'=> 'admincategories']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('List Orders',['controller'=>'users','action'=> 'adminhome']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link("List User's Preview",['controller'=>'users','action'=> 'adminReview']); ?>
			</li>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link('Settings',['controller'=>'users','action'=> 'adminSettings']); ?>
			</li>
		</ul>
	</div>
	<div id = "table-content" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 post">
		<table class = "table table-hover table-bordered">
		<h2 class = "text-center">List Products </h2>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Category</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Status</th>
			<th>Action</th>
		</tr>

		<?php foreach ($data1 as $products): ?>
		<tr>
			<td><?= $products->id ?></td>
			<td><?= $products->name ?></td>
			<td>
				<?php
					if ($products->category_id =='1') {
					    echo 'Sáo Việt';
					}
					else if ($products->category_id == '2') {
						echo 'Sáo Dizi';
					}
					else if ($products->category_id == '3') {
						echo 'Sáo Mèo';
					}
					else if ($products->category_id == '4') {
						echo 'Sáo Bầu';
					}
					else if ($products->category_id == '5') {
						echo 'Tiêu - Sáo Dọc';
					}
				?>
			</td>
			<td><?= $products->price ?> VNĐ</td>
			<td><?= $products->quantity ?></td>
			<td>
				<?php
					if ($products->status == 1)
						echo '<span class="glyphicon glyphicon-ok"></span>';
					else
						echo '<span class="glyphicon glyphicon-remove"></span>';
				?>
			</td>
			<td>
				<div class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Preview
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><?= $this->Html->link('Edit', ['controller'=>'products','action' => 'editproducts', $products->id]) ?></li>
						<li>
						<?= $this->Form->postLink(
							'Delete',
							['controller'=>'products','action' => 'deleteproducts', $products->id],
							['confirm' => 'Are you sure?'])
						?>
						</li>
					</ul>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
		</table>
		<?= $this->Html->link('Add Products', ['controller'=>'products','action' => 'addproducts'],['class'=>'btn btn-sm btn-info']) ?>
		<div id = "page-number" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-4 post">
		<ul class = "pagination">
			<?=$this->Paginator->first('First'); ?>
			<?= $this->Paginator->prev(__('Previous')) ?>
			<?= $this->Paginator->numbers(['before'=>'','after'=>'']) ?>
			<?= $this->Paginator->next(__('Next') ) ?>
			<?= $this->Paginator->last('Last'); ?>
		</ul>
		
	</div>
	</div>
</div>