<?php 
if(isset($_POST['search'])){
    $search = $_POST['search'];
    $query = "select *from products where status = 1 and name like '%".$search."%' ";
    $result = $con->query($query);
}
?>
 <div style="min-height:814px"   class="form__product" >
<?php foreach($result as $key):?>
        <div style="background-color: #ff88cf2e;margin-left: auto; margin-right: auto;"   class="form__product-icon">
            <a class="form__product-img">
                <img src="./assets/upload_images/<?php echo $key['image'];?>" alt="<?php echo $key['name'];?>" width="200px" height="200px">
            </a>
                <div style="text-align: center;margin-top:5px">
                   <?php echo $key['name'];?>
                </div>
            <div style="text-align: center;">
                <span class="product__price"><?php echo number_format($key['price'],0,',','.');?>đ</span>
            </div>
            <div style="margin-top:10px;padding:0px 15px 0px 18px">
            <a style="width:92px" type="button" class="btn btn-info"  href="index.php?option=product_detail&id=<?php echo $key['product_id'];?>">Xem Thêm</a>
            <a style="width:90px ; margin-left:7px" type="button" class="btn btn-success" href="?option=cart&action=add&id=<?=$key['product_id'];?>">Mua Hàng </a>
            </div>
        </div>
<?php endforeach;?>
 </div>
