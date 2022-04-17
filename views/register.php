<?php 
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $query = "select *from members where username = '$username'";
    $result = $con->query($query);
    if(mysqli_num_rows($result) != 0){
        echo "<script>alert('Tên đăng nhập không có sẵn, mời chọn một tên đăng nhập khác !')</script>";
    }else{
        $password = md5($_POST['password']);
        $fullname = $_POST['fullname'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $query_register = "insert members(username,password,fullname,mobile,address,email) values('$username','$password','$fullname','$mobile','$address','$email')";
        $resul_register = $con->query($query_register);
        echo "<script>alert('Bạn đã đăng kí thành công tài khoản!!!')</script>";
    }
}
?>
<div style="min-height:822px;

font-family: 'Numans', sans-serif;">
<div  class="form__wrap">
    <form style="height:500px" method="post" onsubmit="return validate_register()" class="form-container">
   
        <h2 style="text-transform: uppercase;color:tomato;margin-top:5px">Đăng kí tài khoản </h2>
                <div class="form-group">
                    <input class="register-input" type="text" name="username" id="user" placeholder="Nhập tên đăng nhập...">
                    <i class="fa fa-check u_check"></i>
                    <i class="fa fa-times u_times"></i>
                </div>
                <div class="form-group">
                    <input class="register-input" type="password" name="password" id="pass" placeholder="Nhập mật khẩu...">
                    <i class="fa fa-check p_check"></i>
                    <i class="fa fa-times p_times"></i>
                </div>
                <div class="form-group">
                    <input class="register-input" type="text" name="fullname" id="fullname" placeholder="Nhập họ và tên...">
                    <i class="fa fa-check f_check"></i>
                    <i class="fa fa-times f_times"></i>
                </div>
                <div class="form-group">
                    <input class="register-input" type="tel" name="mobile" pattern="(0|+84)\d{9}" id="mobile" placeholder="Nhập số điện thoại...">
                    <i class="fa fa-check m_check"></i>
                    <i class="fa fa-times m_times"></i>
                </div>
                <div class="form-group">
                    <input class="register-input" type="text" name="address" id="address" placeholder="Nhập địa chỉ...">
                    <i class="fa fa-check a_check"></i>
                    <i class="fa fa-times a_times"></i>
                </div>
                <div class="form-group">
                    <input class="register-input" type="email" name="email" id="email" placeholder="Nhập Email...">
                    <i class="fa fa-check e_check"></i>
                    <i class="fa fa-times e_times"></i>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" value="Đăng ký " id="register">
                </div>
            </div>
        </div>
    </form>
</div>
</div>