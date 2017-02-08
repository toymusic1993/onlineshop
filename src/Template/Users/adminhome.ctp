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
    <h1 class="text-center">Đơn Đặt Hàng</h1>
<table class="tab-content">
    <tr>
        <th>ID</th>
        <th>Tên Người Mua</th>
        <th>Địa Chỉ Đặt Hàng</th>
        <th>Tổng Giá Tiền</th>
        <th>Ngày Đặt</th>
        <th>Trạng Thái</th>
    </tr>


    <?php foreach ($data as $orders): ?>
    <tr>
        <td><?= $orders->id ?></td>
        <td><?= $orders->user_id ?></td>
        <td><?= $orders->shipping_address ?></td>
        <td><?= $orders->amount ?></td>
        <td><?= $orders->date_updated ?></td>
        <td><?= $orders->status ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>