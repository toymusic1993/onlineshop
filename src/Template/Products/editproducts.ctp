<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <?php 
        echo $this->Html->css('bootstrap');
        echo $this->Html->script('jquery'); 
    ?>
</head>
<body>
	<div class="container">	
	<h1 class="text-primary">Thêm Sản Phấm</h1>
<?php
    echo $this->Form->create($products);
    echo $this->Form->input('name');
    $options = ['1' => 'Sáo Dizi', '2' => 'Sáo Việt','3'=>'Sáo Bầu','4'=>'Tiêu'];
	echo $this->Form->select('category_id', $options);
    echo $this->Form->input('image_url');
    echo $this->Form->input('price');
    echo $this->Form->input('quantity');
    $options = ['0' => 'Hết Hàng', '1' => 'Còn Hàng'];
    echo $this->Form->select('status', $options, ['empty' => true]);
    echo $this->Form->input('tags', ['rows' => '3']);
    echo $this->Form->input('description', ['rows' => '5']);
    echo $this->Form->button(__('Sửa Sản Phẩm '));
    echo $this->Form->button(__('Hủy '));
    echo $this->Form->end();
?>
</div>
</body>
</html>