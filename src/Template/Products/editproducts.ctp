<div class="container">	
	<h1 class="text-center">Edit Products</h1>
	<?php echo $this->Form->create($products); ?>
	<div class = "form-group">
		<?php echo $this->Form->input('name',array (['class'=>'form-control']));?>
	</div>
	
    <div class = "form-group">
		<label for="sel1">Categories :</label>
		<?php 
			foreach ($data as $categories) :
			$options[$categories->id] = $categories->name;
			endforeach;
			echo $this->Form->select('category_id', $options);	
		?>
	</div>
	
	<div class = "form-group">
		<?php echo $this->Form->input('image_url',array (['class'=>'form-control'])); ?>
	</div>
	
	<div class = "form-group">
		<?php echo $this->Form->input('price'); ?>
	</div>
	
	<div class = "form-group">
		<?php echo $this->Form->input('quantity'); ?>
	</div>
	
	<div class="form-group">
	    <label for="status">Status :</label>
		<?php 
			$options = ['0' => 'Hết Hàng', '1' => 'Còn Hàng'];
			echo $this->Form->select('status', $options);
		?>
	</div>
	<div class="form-group">
		<?php echo nl2br($this->Form->input('tags', ['rows' => '3'])); ?>
	</div>
	<div class="form-group">
		<?php echo nl2br($this->Form->input('description', ['rows' => '5'])); ?>
	</div>
	
    <button type="submit" class="btn btn-warning">Edit Products</button>
    <?php echo $this->Form->end(); ?>
</div>
