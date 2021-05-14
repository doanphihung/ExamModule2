
<?php
?>
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Danh sách sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="./index.php?page=add">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên hàng</th>
                        <th>Loại hàng</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $key => $product): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $product['productName'] ?></td>
                        <td><?php echo $product['productLine'] ?></td>
                        <td><a href="./index.php?page=delete&id=<?php echo $product['id']; ?>"
                               class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá sản phẩm?')">Delete</a>
                            <a href="./index.php?page=edit&id=<?php echo $product['id']; ?>"
                               class="btn btn-primary btn-sm">Update</a></td>
                        <?php endforeach; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

