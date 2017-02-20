<div id = "content" class = "col-lg-12">
	<div id = "form-registry" class = "col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 post"> 
	<?php echo $this->Form->create($products); ?>
	<h1 class="text-center">Add Products</h1>
	<div class="form-group">
        <label for="usr">Name:</label>
	    <input type="text" class="form-control" name = "name">
	</div>
	<div class="form-group">
		<label for="sel1">Categories :</label>
		<?php 
			foreach ($data as $categories) :
			$options[$categories->id] = $categories->name;
			endforeach;
			echo $this->Form->select('category_id', $options);	
		?>
	</div>
	<div class="form-group">
		<label for="img">Image Url :</label>
		<input type="text" class="form-control" name = "image_url">
	</div>
	<div class="form-group">
	    <label for="price">Price :</label>
		<input type="text" class="form-control" name = "price">
	</div>
	<div class="form-group">
	    <label for="quantity">Quantity :</label>
		<input type="text" class="form-control" name = "quantity">
	</div>
	<div class="form-group">
	    <label for="status">Status :</label>
		<?php 
			$options = ['0' => 'Hết Hàng', '1' => 'Còn Hàng'];
			echo $this->Form->select('status', $options);
		?>
	</div>
	<div class="form-group">
	    <label for="tags">Tags :</label>
		<textarea class="form-control" rows="3"  name = "tags"></textarea>
	</div>
	<div class="form-group">
	    <label for="descriptions">Description :</label>
		<textarea class="form-control" rows="5"  name = "description"></textarea>
	</div>
	<button type="submit" class="btn btn-default">Add Products</button>
	<?= $this->Form->end() ?>
	</div>
</div>
