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
		<h2 class = "text-center">List Categories </h2>
		<table class = "table table-hover table-bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Date Created</th>
		</tr>

		<?php foreach ($data as $categories): ?>
		<tr>
			<td><?= $categories->id ?></td>
			<td><?= $categories->name ?></td>
			<td><?= $categories->description ?></td>
			<td><?= $categories->date_created ?></td>
		</tr>
		<?php endforeach; ?>
		</table>
	</div>
	<div id = "page-number" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-6 post">
		<ul class = "pagination">
			<?=$this->Paginator->first('First'); ?>
			<?= $this->Paginator->prev(__('Previous')) ?>
			<?= $this->Paginator->numbers(['before'=>'','after'=>'']) ?>
			<?= $this->Paginator->next(__('Next') ) ?>
			<?= $this->Paginator->last('Last'); ?>
		</ul>
	</div>
</div>