
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="./index.php?page=edit&id=<?php echo $product['id'] ?>">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>"/>
                    <div class="mb-3">
                        <label class="form-label">Tên sản phẩm</label>
                        <input type="text" value="<?php echo $product['productName']; ?>" name="productName" class="form-control">
                        <?php if (isset($errors['productName'])): ?>
                            <p class="text-danger"><?php echo $errors['productName'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Loại sản phẩm</label>
                        <input type="text" value="<?php echo $product['productLine']; ?>" class="form-control" name="productLine">
                        <?php if (isset($errors['productLine'])): ?>
                            <p class="text-danger"><?php echo $errors['productLine'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá tiền</label>
                        <input type="number" value="<?php echo $product['price']; ?>" class="form-control" name="price">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số lượng</label>
                        <input type="number" value="<?php echo $product['amount']; ?>" class="form-control" name="amount">
                        <?php if (isset($errors['amount'])): ?>
                            <p class="text-danger"><?php echo $errors['amount'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chi tiết sản phẩm</label>
                        <input type="text" value="<?php echo $product['description']; ?>" class="form-control" name="description">
                        <?php if (isset($errors['description'])): ?>
                            <p class="text-danger"><?php echo $errors['description'] ?></p>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>

