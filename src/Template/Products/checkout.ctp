<script>
	var i = 1;
	var increase = $('#button-plus');
	var decrease = $('#button-minus');

	$('#button-plus').click(function() {
		var quantity = $('#quantity');
		i++;
		quantity.val() = i;
		alert(quantity.val());
	});
</script>
<?php echo $this->Form->create(); ?> 
<div id = "content" class = "col-lg-12">
	<div id = "form-registry" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 col-lg-offset-1 post">
		<table class = "table table-hover table-condensed">
			<h2 class = "text-center">Check Out</h2>
			<tr>
				<th>Number</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Amount</th>
				<th>Action</th>
			</tr>
			<?php
				$data = $show->read('cart');
				$i = 1 ;
				foreach ($data as $item) {
			?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $item['name']; ?></td>
				<td><?php echo $item['price']; ?> </td>
				<td>
					<input type="text" id = "quantity" readonly value = "<?php echo $item['quantity']; ?>" class="form-control" >
					<button class="btn btn-default" id = "button-plus">
						<i class="glyphicon glyphicon-plus"></i>
					</button>
					<button class="btn btn-default" id = "button-minus">
						<i class="glyphicon glyphicon-minus"></i>
					</button>
				</td>
				<td><input type="text" id = "amount" readonly class="form-control" value = "<?php echo $item['price']; ?>" ></td>
				<td><?php echo $this->Html->link('Remove',['action' => 'deletecart', $item['id']]); ?></td>
			</tr>
			<?php } ?>
			<tr>
				<td><h4>Total Amount</h4></td>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<input type="text" readonly class = "form-control" name = "amount" 
						value="<?php echo $show->read('payment.total') ?>">
				</td>
			</tr>
		</table>
	</div>
	<div id = "shipping-address" class = "col-xs-12 col-sm-9 col-md-9 col-lg-9 col-lg-offset-1 post">
		<div class = "form-group">
			<label for = "shipping-address">Shipping Address </label>
			<textarea class = "form-control" rows = "5" name = "shipping_address"></textarea>
		</div>
		<button type = "submit" class = "btn-lg btn-success col-lg-offset-10">Check Out</button>
	</div>
	<?= $this->Form->end() ?> 
</div>