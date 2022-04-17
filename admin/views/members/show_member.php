<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con->query("delete from members where member_id = $id");
}
$query = "select *from members group by member_id order by member_id desc";
$result = $con->query($query);
?>
<div class="show">
    <div class="title">
        <h2 class="heading">Danh sách thành viên </h2>
    </div>
    <div style="position: fixed; z-index:99;  display:flex; align-items:center; column-gap:10px;top:18px; right:6px" id="export">
        <a style="display:block;color:white;   background-color:rgb(11 110 44);text-decoration:none; padding:12px" id= "printmeber" href="index.php?option=xuatexcel">Xuất bảng members </a>
        <a style="display:block;color:white;   background-color:rgb(11 110 44);text-decoration:none; padding:12px" href="index.php?option=printmember">In bảng members </a>
        <a style="display:block;color:white;   background-color:rgb(11 110 44);text-decoration:none; padding:12px" href="index.php?option=importmember">Import members </a>
    </div>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>TÊN ĐĂNG NHẬP</th>
            <th>HỌ TÊN</th>
            <th>ĐIỆN THOẠI</th>
            <th>ĐỊA CHỈ </th>
            <th>EMAIL</th>
            <th colspan="2">CHỨC NĂNG</th>
            <th>TRẠNG THÁI</th>
        </thead>
        <tbody>
            <?php foreach ($result as $member):?>
            <tr>
                <td data-label="ID"><?php echo $member['member_id'];?></td>
                <td data-label="TÊN ĐĂNG NHẬP"><?php echo $member['username'];?></td>
                <td data-label="HỌ TÊN"><?php echo $member['fullname'];?></td>
                <td data-label="ĐIỆN THOẠI"><?php echo $member['mobile'];?></td>
                <td data-label="ĐỊA CHỈ "><?php echo $member['address'];?></td>
                <td data-label="EMAIL"><?php echo $member['email'];?></td>
                <td data-label="XOÁ">
                    <a style="text-decoration: none; font-size: 1.3em;color: red;font-weight: 700;" href="?option=show_member&id=<?=$member['member_id'];?>"
                        onclick="return confirm('Bạn có chắc muốn xoá thành viên này  ?')"
                        class="btn btn--primary"><i class="fa fa-trash"></i>&nbsp;Xoá </a>
                </td>
                <td data-label="SỬA">
                    <a style="  text-decoration: none;font-size: 1.3em;color:blue;font-weight: 700;" href="?option=edit_member&id=<?=$member['member_id'];?>"
                        class="btn btn-secondary"><i class="fa fa-edit"></i>&nbsp;Sửa</a>
                </td>
                
                <td data-label="TRẠNG THÁI"><a class="publish" style="font-weight:700;font-size:24px;color:  <?php if($member['status'] == 1){
                  echo "green";
                }else{
                  echo "red"; 
                }?>">
                <?php if($member['status'] == 1){
                  echo "Active";
                }else{
                  echo "Inactive"; 
                }?>
              </a></td>
                    
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>