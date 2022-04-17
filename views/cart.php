<?php
if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
if (isset($_GET['action'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    switch ($_GET['action']) {
        case 'add':
            if (array_key_exists($id, array_keys($_SESSION['cart']))) {
                $_SESSION['cart'][$id] += 1;
                header("Location:.");
            } else {
                $_SESSION['cart'][$id] = 1;
                header("Location:.");
            }
            break;
        case 'update':
            if ($_GET['type'] == 'asc') {
                $_SESSION['cart'][$id]++;
            } else {
                if ($_SESSION['cart'][$id] > 1)
                    $_SESSION['cart'][$id]--;
            }
            header('location:?option=cart');
            break;
        case 'order':
            if (isset($_SESSION['member'])) {
                header('location:?option=order');
            } else {
                header('location:?option=login&order=1');
            }
        case 'delete':
            unset($_SESSION['cart'][$id]);
            break;
        case 'deleteAll':
            unset($_SESSION['cart']);
    }
}
?>
<?php
if (!empty($_SESSION['cart'])) :
    $ids = implode(',', array_keys($_SESSION['cart']));
    $query = "select *from products where product_id in($ids)";
    $result = $con->query($query);
?>
    <div style="min-height:814px">
        <table class="table ">
            <thead>
                <tr style="text-align:center">
                    <th style="text-align:center">Hình ảnh </th>
                    <th style="text-align:center;">Sản phẩm </th>
                    <th>Số lượng </th>
                    <th>Thành tiền </th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <?php
            $toTal = 0;
            foreach ($result as $item) : ?>
                <tr style="text-align:center">
                    <td>
                        <img src="./assets/upload_images/<?php echo $item['image']; ?>" width="100px" height="100px" alt="">
                    </td>
                    <td style="color: #000;">
                        <?php echo $item['name']; ?>
                    </td>
                    <td>
                        <input type="button" value="-" onclick="location='?option=cart&action=update&type=desc&id=<?= $item['product_id'] ?>'">
                        <span style="color: #000;"><?= $_SESSION['cart'][$item['product_id']] ?></span>
                        <input type="button" value="+" onclick="location='?option=cart&action=update&type=asc&id=<?= $item['product_id'] ?>'">
                    </td>
                    <td>
                        <?php echo number_format($subTotal = $item['price'] * $_SESSION['cart'][$item['product_id']], 0, ',', '.') ?>đ
                    </td>
                    <td>
                        <a class="btn btn-danger" href="index.php?option=cart&action=delete&id=<?= $item['product_id'] ?>">Xoá </a>
                    </td>
                </tr>

                <tr style="text-align:center">
                    <td>Giá:</td>
                    <td style="background-color: red;color:white"><?php echo number_format($subTotal = $item['price'] * $_SESSION['cart'][$item['product_id']], 0, ',', '.') ?>đ</td>

                </tr>
                <?php $toTal += $subTotal; ?>
            <?php endforeach; ?>
        </table>

        <div class="total__price">
            <table>
                <tr>
                    <td>
                        <h3 style="margin-left:7px">Tổng tiền </h3>
                    </td>
                    <td> <?php echo number_format($toTal, 0, ',', '.') ?>đ</td>
                </tr>
                <tr>
                    <td>
                        <a style="width:100px ;height:50px;font-size:20px;line-height:46px;margin-left:7px" type="button" class="btn btn-primary" href="index.php">Quay lại </a>
                    </td>
                    <td>
                        <a style="width:120px ;height:50px;font-size:20px;line-height:46px " type="button" class="btn btn-danger" href="?option=cart&action=deleteAll">Xoá tất cả </a>
                    <td>
                        <a style="width:120px ;height:50px;font-size:20px;line-height:46px " type="button" class="btn btn-success" href="?option=cart&action=order">Đặt hàng </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>
<?php else : ?>
    <div class="col l-12 " style="min-height: 838px;">
        <img src="https://bizweb.dktcdn.net/100/408/793/themes/794454/assets/empty-cart.png?1615794453304" style="padding: 43px 219px 20px 219px;">
        <a class="l-o-3" href="index.php?option=home" style="font-size:1.7em;padding: 43px 274px 20px 280px;">Nhấn vào đây để tiếp tục mua hàng </a>
        
    </div>
<?php endif; ?>