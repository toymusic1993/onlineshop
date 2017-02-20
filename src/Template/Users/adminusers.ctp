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
	
	<div id = " table-content " class = " col-xs-12 col-sm-9 col-md-9 col-lg-9 post ">
		<table class = "table table-hover table-bordered">
		<h2 class = "text-center">List Users </h2>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Date Created</th>
			<th>Action</th>
		</tr>
		<?php foreach ($data as $users): ?>
		<tr>
			<td><?= $users->id ?></td>
			<td><?= $users->name ?></td>
			<td><?= $users->email ?></td>
			<td><?= $users->date_created ?></td>
			<td>
				<?= $this->Html->link('Edit', ['action' => 'editusers', $users->id],['class'=>'btn btn-sm btn-primary']) ?>
				<?= $this->Form->postLink(
					'Delete',
					['action' => 'deleteusers', $users->id],['class'=>'btn btn-sm btn-danger'],
					['confirm' => 'Are you sure?'])
				?>
			</td>
		</tr>
		<?php endforeach; ?>
		</table>
		<?= $this->Html->link('Add User', ['action' => 'addusers'],['class'=>'btn btn-sm btn-info']) ?>
		<div id = "page-number" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-lg-offset-6 post">
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