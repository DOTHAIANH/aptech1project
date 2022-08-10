<?php
    $id = $_GET['id'];
    $sql_product_select = "select * from product where id ='$id' ";
    $productList = executeResult($sql_product_select,1);

    if(!empty($_POST)) {
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];
        $thumbnail = $_POST['thumbnail'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        $sql_update = "update product set product_name = '$product_name' where id = '$id'";
        execute($sql_update);
        echo "<script>alert('Sửa thành công')</script>";
  }
?>

<div class="container mt-3">
  <form method="POST">
    <table class="table">
        <tr>
          <th>Sửa sản phẩm</th>
        </tr>
        <tr>
          <td>Tên sản phẩm</td>
          <td>
              <input type="text" name="product_name" value=" <?php echo $productList['product_name'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Giá sản phẩm</td>
          <td>
              <input type="text" name="price" value=" <?php echo $productList['price'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Số lượng</td>
          <td>
              <input type="text" name="amount" value=" <?php echo $productList['amount'] ?> ">
          </td>
        </tr>
        <tr>
          <td>Hình ảnh</td>
          <td>
              <img src='modules/product details/uploads/<?php echo $productList['thumbnail'] ?>" type='IMG_JPG' alt='Hình ảnh'>
              <input type="file" name="thumbnail">
          </td>
        </tr>
        <tr>
        <tr>
          <td>Tóm tắt</td>
          <td>
              <textarea value="<?php echo $productList['description']?>" rows="5" name="description" style="resize: none;"></textarea>
          </td>
        </tr>
        <tr>
          <td>Tình trạng</td>
          <td>
              <select name="status" value=" <?php echo $productList['status'] ?> ">
                <option value="1">kích hoạt</option>
                <option value="0">Ẩn</option>
              </select>
          </td>
        </tr>
        <tr>
          <td>
            <button type="submit" class="btn btn-warning">Sửa</button>
          </td>
        </tr>
    </table>
  </form>
  <a href="index.php?action=productDetails">Quay lại</a>
</div>