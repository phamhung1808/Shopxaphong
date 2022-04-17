<?php
    $user = $_SESSION['member'];
    $select = "select *from members where username = '$user'";
   $mem = $con->query($select);
   $member = mysqli_fetch_array($mem);
   if(isset($_POST['edit_profile'])){
       if(!empty($_POST['name'])&& !empty($_POST['mobile']) && !empty($_POST['address'])&& !empty($_POST['email'])){
           $fullname = $_POST['name'];
           $mobi = $_POST['mobile'];
           $address = $_POST['address'];
           $email = $_POST['email'];
           $query = "update members set fullname = '$fullname', mobile = '$mobi', address = '$address', email = '$email' where username = '$user' ";
           $update_profile = $con->query($query);
           if($update_profile){
               echo "<script>alert('Cập nhật thông tin thành công !!!');</script>";
               echo "<script>window.open(window.location.href,'_self'</script>";
           }
       }
   }
?>
<div style="min-height:840px;" class="row">
<div  style="min-height: 550px;" class="form__wrap">
    <form method="post" onsubmit="return info_order()" class="form-container">
        <p id="error"></p>
        <h2 style="color: firebrick; text-transform: uppercase;">Chỉnh sửa thông tin cá nhân </h2>
            <div class="col l-4 l-o-4 m-6 m-o-3 c-8 c-o-2">
                <div class="form-group">
                    <label for="">Họ tên </label>
                    <input class="register-input" type="text" name="name" value="<?=$member['fullname'];?>" id="user">
                    <i class="fa fa-check u_check"></i>
                    <i class="fa fa-times u_times"></i>
                </div>
            </div>
            <div class="col l-4 l-o-4 m-6 m-o-3 c-8 c-o-2">
                <div class="form-group">
                    <label for="">Điện thoại </label>
                    <input class="register-input" type="tel" name="mobile" value="<?=$member['mobile'];?>" id="mobile">
                    <i class="fa fa-check p_check"></i>
                    <i class="fa fa-times p_times"></i>
                </div>
            </div>
            <div class="col l-4 l-o-4 m-6 m-o-3 c-8 c-o-2">
                <div class="form-group">
                    <label for="">Địa chỉ :</label>
                    <textarea name="address" id="address" rows="3"><?=$member['address'];?></textarea>
                </div>
            </div>
            <div class="col l-5 m-5 c-5">
                <div class="form-group">
                    <label for="">Email :</label>
                    <input type="email" name="email" id="email" value="<?=$member['email'];?>">
                </div>
            </div>
            <div class="col l-2 l-o-5 m-2 m-o-5 c-4 c-o-4">
                <div class="form-group">
                    <input type="submit" name="edit_profile" id="ordersave" value="Lưu lại  ">
                </div>
            </div>
    </form>
</div>
</div>