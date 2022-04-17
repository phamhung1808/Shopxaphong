<?php
session_start();
$con = new MySQLi('localhost', 'root', '', 'ql_xaphong');
if (isset($_POST['username'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $query = "select *from admin where username = '$user' and password = '$pass'";
    $result = $con->query($query);
    if (mysqli_num_rows($result) == 0) {
        echo '<script language="javascript">alert("Tên đăng nhập hoặc mật khẩu không đúng"); window.location="index.php?option=login_admin";</script>';
    } else {
        $result = mysqli_fetch_array($result);
        if ($result['status'] == 0) {
            echo '<script language="javascript">alert("Tài khoản của bạn đang bị khóa"); window.location="index.php?option=login_admin";</script>';
        } else {
            $_SESSION['admin'] = $user;
            echo '<script language="javascript">alert("Đăng Nhập Thành Công !"); window.location="index.php";</script>';
        }
    }
}
include "includes/header.php";
?>
<section  class="admin-wraper">
    <?php
    if(isset($_SESSION['admin'])){
        include "includes/sidebar.php";
        include "includes/content.php";
    }else{
        include "includes/login_admin.php";
    }
    ?>
</section>
</body>
</html>