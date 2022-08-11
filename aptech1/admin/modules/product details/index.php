
<style>
</style>
<h2>Quản lý sản phẩm</h2>
<style>
  input,textarea {
    width: 100%;
  }
</style>
<div class="container mt-3">
  <form method="post"  action="modules/product details/add.php" enctype="multipart/form-data">
    <table class="table table-bordered" ">
            <h3>Thêm sản phẩm</h3>
        <tr>
          <td>Tên sản phẩm</td>
          <td>
              <input type="text" name="product_name">
          </td>
        </tr>
        <tr>
          <td>Giá sản phẩm</td>
          <td>
              <input type="text" name="price">
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
          <td>Tóm tắt</td>
          <td>
              <textarea rows="8" name="description" style="resize: none;"></textarea>
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
    </table>
      <button type="submit" class="btn btn-success form-control">Thêm</button>
  </form>
</div>

 
    $sql_product_select = "select * from product";
    $productList = executeResult($sql_product_select);
    // foreach($productList as $item) {
    //   if($item['status'] == 1) {
    //      $item['status'] = 'Kich hoat';
    //   }
    //   else {
    //     $item['status'] = 'An';
    //   }
    // }

<h3>Liệt kê sản phẩm</h3>           
  <table class="table table-striped" >
    <thead>
      <tr>
        <th>No</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Hình ảnh</th>
        <th>Tóm tắt</th>
        <th>Tình trạng</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
       <?php
      $index = 0;
      foreach($productList as $item)
      
          <tr>
        <td> echo ++$index </td>
        <td> echo $item['product_name']</td>
        <td> echo $item['price'] </td>
        <td> echo $item['amount']</td>
          </tr>
          ?>
    </tbody>
  </table>