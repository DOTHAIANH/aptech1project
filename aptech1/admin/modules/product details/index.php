
<style>
</style>
<h2>Quản lý sản phẩm</h2>

<div class="container mt-3">
  <form method="post">
    <table class="table" style="width: 100%;">
            <h3>Thêm sản phẩm</h3>
        <tr>
          <td>Tên sản phẩm</td>
          <td>
              <input type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>Giá sản phẩm</td>
          <td>
              <input type="text" name="product_name">
          </td>
        </tr>
        <tr>
          <td>Số lượng</td>
          <td>
              <input type="number" name="amount">
          </td>
        </tr>
        <tr>
          <td>Hình ảnh</td>
          <td>
              <input type="file" name="thumbnail">
          </td>
        </tr>
        <tr>
        <tr>
          <td>Tóm tắt</td>
          <td>
              <textarea rows="5" name="description" style="resize: none;"></textarea>
          </td>
        </tr>
        <tr>
          <td>Tình trạng</td>
          <td>
              <select name="status">
                <option value="1">kích hoạt</option>
                <option value="0">Ẩn</option>
              </select>
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" class="btn btn-success form-control">Thêm</button>
          </td>
        </tr>
    </table>
  </form>
</div>

<?php 
    $sql_category_list = "select * from category";
    $categoryList = executeResult($sql_category_list);
?>
<!-- <h3>Liệt kê sản phẩm</h3>           
  <table class="table table-bordered" >
    <thead>
      <tr>
        <th>No</th>
        <th>Tên sản phẩm</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $index = 0;
      foreach($categoryList as $item)
        echo "<tr>
        <td>".++$index."</td>
        <td>".$item['name']."</td>
        <td>
        <a href='?action=productCategory&query=edit&id=".$item["id"]." '>
            <button class='btn btn-danger'>Sửa</button>
          </a>
        </td>
        <td>
          <a href='modules/product category/delete.php?id=".$item["id"]." '>
            <button class='btn btn-danger'>Xóa</button>
          </a>
        </td>
        ";?>
    </tbody>
  </table> -->