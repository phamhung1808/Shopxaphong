<?php
session_start();
error_reporting(0);
$con = new MySQLi('localhost','root','','db_tbvt');
$sql="select * from members";

$kq=mysqli_query($conn,$sql);

$output='';
if (isset($_POST["export_excel"])) {
    if (mysqli_num_rows($kq)) {
        $output.='<table class="table" bordered="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Email</th>
                <th>Status</th>
            </tr>';
        while($hang=mysqli_fetch_object($kq))
        {
            $output.='
            <tr>
                <td>'.$hang['member_id'].'</td>
                <td>'.$hang['username'].'</td>
                <td>'.$hang['password'].'</td>
                <td>'.$hang['fullname'].'</td>
                <td>'.$hang['mobile'].'</td>
                <td>'.$hang->Level.'</td>
                <td>'.$hang->Level.'</td>
                <td>'.$hang->Level.'</td>
            </tr>
            ';
        }
        $output.='</table>';
        header("Content-Type:application/xls;charset='utf-8'");
        header("Content-Disposition: attachment; filename=download.xls");
        echo $output;
    }

}


mysqli_close($conn);
  ?>
  
