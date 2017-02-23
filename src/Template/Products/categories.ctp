	<!-- Content -->
<div id = "content" class = "col-lg-12">
	<div id = "products" class = "well well-lg col-lg-12 post">
			<h2 class = "text-center ">
				<?php foreach($info_category as $category) :
					echo $category->name;	?>
			</h2>
	 	<h3>Description :</h3>
	 	<p>
	 		<?php echo $category->description;
				endforeach; ?>
	 	</p>
		<?php foreach ($products as $products) { ?>
		<div id = "one-item" class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-lg-offset-1 post">
			<?php echo $this->Html->image("saoviet/$products->image_url",[
				'url' => ['action' => 'detail', $products->id], 'class' => 'img-rounded']);
			?>
			<p class = "text-center"><strong><?= $products->name ?></strong></p>
			<p class = "btn btn-danger">Giá : <?= $products->price ?> VNĐ</p>
			<?php echo $this->Html->link('
				<span class="glyphicon glyphicon-shopping-cart"></span>
		 		Add To Cart',['controller'=>'products', 'action'=>'checkout',$products->id],array('class'=>'btn btn-sm btn-info', 'escape'=> false));
			?>
		</div>
		<?php } ?>
	</div>

	<div id = "page-number" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-2 post">
		<ul class = "pagination">
			<li class = "text-center">
				<?php
					echo $this->Paginator->first('First');
					if($this->Paginator->hasPrev()) {
						echo $this->Paginator->prev('Prev');
					}
					echo $this ->Paginator->numbers();
					if($this->Paginator->hasNext()){
						echo $this->Paginator->next('Next');
					}
					echo $this->Paginator->last('Last');
				?>
			</li>
		</ul>
	</div>
</div>
