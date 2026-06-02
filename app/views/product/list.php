<?php
require_once 'app/helpers/SessionHelper.php';
include 'app/views/shares/header.php';
?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 style="color:#667eea;font-weight:700"><i class="bi bi-box-seam me-2"></i>Danh sách sản phẩm</h2>
    <?php if (SessionHelper::isAdmin()): ?>
    <a href="http://localhost:8080/DOHOANGDANH/Product/add" class="btn btn-primary rounded-pill"><i class="bi bi-plus-circle-fill me-1"></i>Thêm mới</a>
    <?php endif; ?>
</div>
<div class="row g-3">
<?php foreach ($products as $product): ?>
<div class="col-md-6 col-lg-4">
    <div class="card border-0 shadow-sm h-100" style="border-radius:16px;overflow:hidden;transition:.3s" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
        <?php if (!empty($product->image)): ?>
        <img src="http://localhost:8080/DOHOANGDANH/<?php echo $product->image; ?>" class="card-img-top" style="height:180px;object-fit:cover">
        <?php else: ?>
        <div style="height:180px;background:linear-gradient(135deg,#667eea,#764ba2);display:flex;align-items:center;justify-content:center;font-size:3rem">🛍️</div>
        <?php endif; ?>
        <div class="card-body">
            <span class="badge bg-primary mb-1">#<?php echo $product->id; ?></span>
            <h5 class="fw-bold"><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h5>
            <p class="text-muted small"><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
            <p class="fw-bold" style="color:#667eea"><?php echo number_format($product->price, 0, ',', '.'); ?> <small class="text-muted fw-normal">VNĐ</small></p>
            <span class="badge bg-light text-dark border mb-2"><i class="bi bi-tag me-1"></i><?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></span>
            <div class="d-flex gap-2 mt-2 flex-wrap">
                <a href="http://localhost:8080/DOHOANGDANH/Product/show/<?php echo $product->id; ?>" class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></a>
                <?php if (SessionHelper::isAdmin()): ?>
                <a href="http://localhost:8080/DOHOANGDANH/Product/edit/<?php echo $product->id; ?>" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                <a href="http://localhost:8080/DOHOANGDANH/Product/delete/<?php echo $product->id; ?>" onclick="return confirm('Xóa sản phẩm này?')" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                <?php endif; ?>
                <a href="http://localhost:8080/DOHOANGDANH/Product/addToCart/<?php echo $product->id; ?>" class="btn btn-sm btn-primary flex-fill"><i class="bi bi-cart-plus me-1"></i>Thêm vào giỏ</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>
<?php include 'app/views/shares/footer.php'; ?>