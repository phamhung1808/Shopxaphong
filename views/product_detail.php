<?php  
if(isset($_POST['comment'])){
    $comment = $_POST['comment'];
    $product_id = $_GET['id'];
    if(isset($_SESSION['member'])){
        $member_id = mysqli_fetch_array($con->query("select *from members where username ='$_SESSION[member]'"));
        $member_id =$member_id['member_id'];
        $con->query("insert comments(member_id,product_id,date,content) values('$member_id','$product_id',now(),'$comment')");
        echo "<script>alert('Bình luận đã được thêm thành công !!!')</script>";
    }else{
        $_SESSION['comment'] = $comment;
        header("location:?option=login&id=$product_id");
    }
}
?>
<?php
$id =$_GET['id'];
$query = "select *from products where product_id = '$id'";
$result = $con->query($query);
?>
<div class="row">
<?php foreach($result as $pro):?>
<div class="col-sm-9">
    <div class="huan">
        <img src="./assets/upload_images/<?php echo $pro['image']?>" alt="<?php echo $pro['name']?>">
    </div>
    <div class="huan2">
        <h3 style="padding:15px 0px 5px 0px;margin-left:5px;font-weight: 700">Sản phẩm:&nbsp;&nbsp;<?php echo $pro['name']?></h3>
        <h3 style="padding:0px 0px 5px 0px;margin-left:5px;">Giá tiền:&nbsp;&nbsp;<?php echo number_format($pro['price'],0,',','.');?>đ</h3>
        <h3 style="margin-left:5px">Nội dung:&nbsp;&nbsp;
        <p><?php echo $pro['description'];?></p>
        </h3>
        <a style="width:100px ; margin-left:7px" type="button" class="btn btn-primary" href="index.php">Quay lại </a>
        <a style="width:90px ; margin-left:7px" class="btn btn-success" href="?option=cart&action=add&id=<?=$pro['product_id'];?>">Mua Hàng </a>
    </div>
</div>
<?php endforeach;?>
</div>
<div style="    padding-left: 20px;" class="row">
    <div class="comment-wrap">
        <h2>Bình luận sản phẩm </h2>
        <?php 
        $comments= $con->query("select *from members a join comments b on a.member_id =b.member_id join products c on b.product_id = c.product_id where b.status=1 and b.product_id ='$_GET[id]' ");
        if(mysqli_num_rows($comments)==0){
            echo "Không có comment nào !";
        }else{
            foreach($comments as $com):
        ?>
        <div class="user-comment"><i class="fas fa-user-tie"></i><span><?=$com['fullname'];?></span></div>
        <div class="comment-desc"><span><?=$com['content'];?></span></div>
        <?php
            endforeach;
        }
        ?>
        <form style="padding-bottom: 15px;"class="cmt-form" action="" method="post">
            <textarea   style="    width: 300px;   height: 65px;"  name="comment" placeholder="Nhập comments..."></textarea>
             <input style=" width: 78px;height: 44px;"  type="submit" class="btn btn-danger" value="Bình luận">
        </form>
    </div>
</div>