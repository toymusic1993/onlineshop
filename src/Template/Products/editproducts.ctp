<div id = "content" class="container col-lg-12">
	<div id = "form-edit-products" class = "well well-lg col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 post">
	<h1 class="text-center">Edit Products</h1>
	<?php echo $this->Form->create(); ?>
	<div class = "form-group">
		<label for="usr">Name</label>
		<input type="text" class="form-control" name="name" value = "<?php echo $products->name ?>">
	</div>
	
    <div class = "form-group">
		<label for="sel1">Categories :</label>
		<?php 
			foreach ($list_category as $categories) :
			$options[$categories->id] = $categories->name;
			endforeach;
			echo $this->Form->select('category_id', $options, array('class' => 'form-control') );	
		?>
	</div>
	
	<div class = "form-group">
		<label for="usr">Image Url</label>
		<input type="text" class="form-control" name="image_url" value = "<?php echo $products->image_url ?>">
	</div>
	
	<div class = "form-group">
		<label for="usr">Price</label>
		<input type="text" class="form-control" name="price" value = "<?php echo $products->price ?>">
	</div>
	
	<div class = "form-group">
		<label for="usr">Quantity</label>
		<input type="number" class="form-control" name="quantity" value = "<?php echo $products->quantity ?>">
	</div>
	
	<div class="form-group">
	    <label for="status">Status :</label>
		<?php 
			$options = ['0' => 'Hết Hàng', '1' => 'Còn Hàng'];
			echo $this->Form->select('status', $options, array('class' => 'form-control'));
		?>
	</div>
	<div class="form-group">
		<label for="tags">Tags</label>
		<textarea class="form-control" rows="3" name="tags"><?= $products->tags ?></textarea>
	</div>
	<div class="form-group">
		<label for="tags">Description</label>
		<textarea class="form-control" rows="3" name="description"><?= $products->description ?></textarea>
	</div>
	
    <button type="submit" class="btn btn-warning">Edit Products</button>
    <?php echo $this->Form->end(); ?>
</div>
