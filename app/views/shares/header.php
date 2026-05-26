<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background:linear-gradient(135deg,#f0f4ff,#fef9ff); min-height:100vh; font-family:'Segoe UI',sans-serif; }
        .navbar { background:linear-gradient(90deg,#667eea,#764ba2); box-shadow:0 4px 15px rgba(102,126,234,.35); }
        .navbar-brand, .nav-link { color:#fff!important; font-weight:600; }
        .nav-link:hover { opacity:.8; }
        .cart-badge { background:#e94560; color:#fff; border-radius:50px; padding:.1rem .5rem; font-size:.75rem; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand" href="http://localhost:8080/DOHOANGDANH/Product"><i class="bi bi-shop me-2"></i>ShopAdmin</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto gap-2">
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/DOHOANGDANH/Product"><i class="bi bi-box-seam me-1"></i>Sản phẩm</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/DOHOANGDANH/Category/list"><i class="bi bi-tags me-1"></i>Danh mục</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8080/DOHOANGDANH/Product/add"><i class="bi bi-plus-circle me-1"></i>Thêm mới</a></li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/DOHOANGDANH/Product/cart">
                    <i class="bi bi-cart me-1"></i>Giỏ hàng
                    <?php if (!empty($_SESSION['cart'])): ?>
                    <span class="cart-badge"><?php echo array_sum(array_column($_SESSION['cart'], 'quantity')); ?></span>
                    <?php endif; ?>
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-4">    