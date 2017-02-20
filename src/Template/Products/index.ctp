	<!-- Content -->
<div id = "content" class = "col-lg-12">
	<div id = "products" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 post">
		<div class = "well well-lg">
		<h1 class = "text-center">Flute</h1>
		</div>
		<?php foreach ($list_products as $products) { ?>
		<div id = "one-item" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-lg-offset-1 post">
			<?php echo $this->Html->image("saoviet/$products->image_url",[
				'url' => ['action' => 'detail',$products->id]]); 
			?>
			<p class = "bg-primary"><?= $products->name ?></p>
			<p class = "price">Giá : <?= $products->price ?> VNĐ</p>	
			<?php echo $this->Html->link('
				<span class="glyphicon glyphicon-shopping-cart"></span>
		 		Add To Cart',['controller'=>'products', 'action'=>'checkout',$products->id],array('class'=>'btn btn-sm btn-info', 'escape'=> false));
			?>
		</div>
		<?php } ?>
	</div>
	<div id = "right-menu" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 post">
		<div class = "well well-lg">
			<h2 class = "text-center">Categories </h2>
		</div>
        <ul id = "main-menu" class = "list-group">
        	<?php foreach ($list_category as $categories) { ?>
			<li class = "list-group-item list-group-item-sucess">
				<?= $this->Html->link($categories->name,['controller' => 'products', 'action'=>'categories', $categories->id]); ?>
			</li>
			<?php } ?>
        </ul>
        <div class = "best-seller col-lg-12">
        	<h3 class = "text-center">Best Seller</h3>
        	<?php foreach($best_sellers as $get_data) : ?>
        		<?php //echo $this->Html->image("saoviet/".$get_data->image_url, ['url' => ['action' => 'detail', $get_data->id]]); ?>
        		<p><?= $get_data->name ?></p>
        		<p><?= $get_data->price ?> VNĐ</p>
    		<?php endforeach ?>
        </div>	
	</div>
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