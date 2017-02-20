<style>
	#image-item {
		
	}
	#image-item img {
		width : 600px;
	}
</style>
<div id = "head-content" class = "col-lg-12">
	<div id = "infomation" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 post">
		<div id = "image-item" class = "col-xs-12 col-sm-6 col-md-6 col-lg-6 post">
			<?php echo $this->Html->image("saoviet/$products->image_url"); ?>
		</div>
		<div id ="info-item" class = "col-xs-12 col-sm-6 col-md-6 col-lg-6 post">
			<h3 class = "text-primaty"><?= $products->name ?></h3>
			<p class = "text-primary">Price : <?= $products->price ?> VNĐ</p>
			<h4>Description :</h4>
			<p><?php echo nl2br($products->description) ?></p>
			<button class="btn btn-default btn-style">Add To Cart</button>
			<button class="btn btn-default btn-style" data-toggle="modal" data-target="#myModal">Write Review</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Nhận Xét Người Dùng</h4>
						</div>
						<div class="modal-body">
								<p></p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id = "review-users" class = "col-xs-12 col-sm-3 col-md-3 col-lg-3 post">
		<h2 class = "text-center">Review Users</h2>
		<div class = "review">
			<?php foreach ($result as $get_data) : ?>
			<p class="text-primary"><?php echo $get_data->comment; ?></p>
			<p>
				<?php if ($get_data->rate == 1) {
					echo '<span class="glyphicon glyphicon-star"></span>';
				} else if ($get_data->rate == 2) {
					echo 
						'<span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
					';
				} else if ($get_data->rate == 3) {
					echo 
						'<span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
					';
				} else if ($get_data->rate == 4) {
					echo 
						'<span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
					';
				} else if ($get_data->rate == 5) {
					echo 
						'<span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
						 <span class="glyphicon glyphicon-star"></span>
					';
				}
				?></p>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<div id = "bottom-content" class = "col-lg-12">
	<h3 class = "text-center">Related Products</h3>
	<!-- <?php foreach ($related_products as $items) { ?>
		<div id = "one-item" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-lg-offset-1 post">
			<?php echo $this->Html->image("saoviet/$items->image_url",['url' => ['action' => 'detail',$products->id]]); ?>
			<p class = "bg-primary"><?= $items->name ?></p>
			<p class = "price">Giá : <?= $items->price ?> VNĐ</p>	
			<?php echo $this->Html->link('
				<span class="glyphicon glyphicon-shopping-cart"></span>
		 		Add To Cart', ['controller' => 'products', 'action' => 'checkout', $items->id], array('class' => 'btn btn-sm btn-info', 'escape'=> false));
			?>
		</div>
		<?php } ?> -->
		
</div>
