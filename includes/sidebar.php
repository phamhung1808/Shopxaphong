<?php
$query = "select *from brands where status";
$sql = "select *from categories where status";
$result = $con->query($query);
$result_cat = $con->query($sql);
?>
<div class="col-sm-3" style="min-height: 700px; border: 1px solid black;">
  <ul class="nav nav-pills nav-stacked">
    <li style="text-align: center;font-size:20px" class="active">
      <a href="#section1" style="background-color: #970c0c; margin-top: 15px;">Danh mục</a>
    </li>
    <li>
      <?php foreach ($result_cat as $cat) : ?>
    <li><a href="?option=show_product_cat&cat_id=<?php echo $cat['cat_id']; ?>"><?php echo $cat['name']; ?></a></li>
  <?php endforeach; ?>
  </li>
  </ul>

  <ul class="nav nav-pills nav-stacked">
    <li style="text-align: center;font-size:20px" class="active">
      <a href="#section1" style="background-color: #970c0c;">Thương hiệu</a>
    </li>
    <li>
      <?php foreach ($result as $brand) : ?>
    <li><a href="?option=show_product_brand&brand_id=<?php echo $brand['brand_id']; ?>"><?php echo $brand['name']; ?></a></li>
  <?php endforeach; ?>
  </li>
  </ul>

  
    <li style="text-align: center;font-size:20px" class="active"><p style="background-color:#970c0c; padding:7px 0; border-radius:5px;">Video</p></li>
    <iframe width="300" height="170" src="https://www.youtube.com/embed/DhIc_YNqT2s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  

  </ul>


</div>