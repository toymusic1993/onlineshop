<?php $this->Form->create(); ?>
<div id = "content" class = "col-lg-12">
	<div id = "form-registry" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 col-lg-offset-1 post">
		<table class = "table table-hover table-condensed">
			<h2 class = "text-center">Check Out</h2>
			<tr>
				<th></th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Amount</th>
			</tr>
			<?php 
				$data = $show->read('cart');
				foreach ($data as $item) { 
			?>
			<tr>
				<td><img src="saoviet/<?php echo $item['image']; ?>" class="img-rounded" width="50" height="50"></td>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['price']; ?> VNĐ</td> 	
				<td><?php echo $item['quantity']; ?></td>
				<td><?php echo $item['amount']; ?> VNĐ</td>
			</tr>
			<?php } ?>
			<tr>
				<td><h4>Total Amount</h4></td>
				<td></td>
				<td></td>	
				<td></td>
				<td><?php echo $show->read('payment.total') ?> VNĐ</td>
			</tr>
		</table>
	</div>
	<div id = "shipping-address" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 col-lg-offset-1 post">
		<h3>Shipping Address</h3>
		<div class="form-group">
			<textarea class="form-control" rows="5"  name = "shipping_address"></textarea>
		</div>
		<button type="submit" class="btn-lg btn-success col-lg-offset-10">Check Out</button>
	</div>
	<?= $this->Form->end() ?>
</div>