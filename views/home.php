<?php
$query = "select *from products where status = 1";
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$productperpage = 8;
$from = ($page - 1) * $productperpage;
$totalProducts = $con->query($query);
$totalPages = ceil(mysqli_num_rows($totalProducts) / $productperpage);
$query .= " limit $from,$productperpage";
$result = $con->query($query);
?>
<div  class="form__product">
    <?php foreach ($result as $key) : ?>
        <div style="margin-left: auto; margin-right: auto;" class="form__product-icon">
            <div class="form__product-img">
                <img src="./assets/upload_images/<?php echo $key['image']; ?>" alt="<?php echo $key['name']; ?>" width="200px" height="200px">
            </div>
            <div style="color: #fff;text-align: center;margin-top:5px;font-size:2em">
                <?php echo $key['name']; ?>
            </div>
            <div style="text-align: center;color:red;">
                <span class="product__price"><?php echo number_format($key['price'], 0, ',', '.'); ?>đ</span>
            </div>
            <div style="margin-top:10px;padding:0px 15px 0px 18px">
                <a style="width:92px" type="button" class="btn btn-info" href="index.php?option=product_detail&id=<?php echo $key['product_id']; ?>">Thông tin</a>
                <a style="width:90px ; margin-left:7px" type="button" class="btn btn-success" href="?option=cart&action=add&id=<?= $key['product_id']; ?>">Mua Hàng </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div style="background-color: #ff88cf2e;border: #ff88cf2e" class="navbar navbar-inverse">
    <div style=" font-size:2em;    padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;margin-top:7px">
        <span class="button-prev"><i class="fas fa-chevron-left"></i></span>
        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <a class="<?= (empty($_GET['page']) && $i == 1) || $_GET['page'] == $i ? 'highlight' : '' ?>" href="?page=<?php echo $i; ?>"><?php echo $i ?></a>
        <?php endfor; ?>
        <span class="button-next"><i class="fas fa-chevron-right"></i></sp>
    </div>
</div>