<?php 
$chuaxuly = mysqli_num_rows($con->query("select *from orders where status =1 "));
$dangxuly = mysqli_num_rows($con->query("select *from orders where status =2 "));
$daxuly = mysqli_num_rows($con->query("select *from orders where status =3 "));
$huy = mysqli_num_rows($con->query("select *from orders where status =4 "));
?>
<div class="sidebar" id="sidebar">
                <div class="sidebar-main">
                    <div class="sidebar-item">
                        <a href="#!" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">QL Thành viên </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-drop-list">
                            <div  class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=show_member">Danh sách </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <a href="#!" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">Thương hiệu </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-drop-list">
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=list_brand">Danh sách </a>
                            </div>
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=add_brand">Thêm mới </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <a href="#!" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">Danh mục </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-drop-list">
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=list_cat">Danh sách </a>
                            </div>
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=add_cat">Thêm mới </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <a href="#!" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">Sản phẩm </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-drop-list">
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=list_products">Danh sách </a>
                            </div>
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=add_product">Thêm mới </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <a href="?option=list_order" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">Đơn hàng  </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-drop-list">
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=order&status=1" class="sub-link">Đơn hàng chưa xử lý (<?=$chuaxuly;?>)</a>
                            </div>
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=order&status=2" class="sub-link">Đơn hàng đang xử lý (<?=$dangxuly;?>) </a>
                            </div>
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=order&status=3" class="sub-link">Đơn hàng đã xử lý (<?=$daxuly;?>)</a>
                            </div>
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=order&status=4" class="sub-link">Đơn hàng huỷ (<?=$huy;?>) </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <a href="index.php?option=list_comment" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">Comments </span>
                        </a>
                    </div>
                    <div class="sidebar-item">
                        <a href="#!" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">Databases </span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <div class="sidebar-drop-list">
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=export_database">Xuất database</a>
                            </div>
                            <div class="sidebar-drop-item">
                                <a style="text-decoration: none;" href="?option=import_database">Thêm database </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <a href="index.php?option=logout" class="sidebar-link">
                            <span style="font-size: 1.1em;color: black;font-weight: 700;color: black;font-weight: 700;color: black;font-weight: 700;" class="sidebar-title">Đăng Xuất </span>
                            <i class="fa fa-sign-out-alt"></i>
                        </a>
                    </div>
                    
                </div>
            </div>