<?php include 'app/views/shares/header.php'; ?>
<div class="row justify-content-center"><div class="col-md-7">
    <div class="card border-0 shadow" style="border-radius:20px;overflow:hidden">
        <div style="background:linear-gradient(135deg,#667eea,#764ba2);padding:1.5rem 2rem">
            <h4 class="text-white mb-0 fw-bold"><i class="bi bi-plus-circle me-2"></i>Thêm sản phẩm mới</h4>
        </div>
        <div class="card-body p-4">
            <?php if (!empty($errors)): ?>
            <div class="alert alert-danger rounded-3"><ul class="mb-0"><?php foreach ($errors as $e): ?><li><?php echo htmlspecialchars($e, ENT_QUOTES, 'UTF-8'); ?></li><?php endforeach; ?></ul></div>
            <?php endif; ?>
            <form method="POST" action="http://localhost:8080/DOHOANGDANH/Product/save" enctype="multipart/form-data">
                <div class="mb-3"><label class="form-label text-muted small text-uppercase fw-bold">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control rounded-3" placeholder="Nhập tên..." required></div>
                <div class="mb-3"><label class="form-label text-muted small text-uppercase fw-bold">Mô tả</label>
                <textarea name="description" class="form-control rounded-3" rows="3" required></textarea></div>
                <div class="mb-3"><label class="form-label text-muted small text-uppercase fw-bold">Giá (VNĐ)</label>
                <input type="number" name="price" class="form-control rounded-3" step="1" min="1" required></div>
                <div class="mb-3"><label class="form-label text-muted small text-uppercase fw-bold">Danh mục</label>
                <select name="category_id" class="form-select rounded-3" required>
                <?php foreach ($categories as $cat): ?>
                <option value="<?php echo $cat->id; ?>"><?php echo htmlspecialchars($cat->name, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php endforeach; ?></select></div>
                <div class="mb-3"><label class="form-label text-muted small text-uppercase fw-bold">Ảnh chính</label>
                <input type="file" name="image" class="form-control rounded-3" accept="image/*" onchange="prev(this,'p1')">
                <img id="p1" src="#" class="mt-2 rounded-3" style="max-width:150px;display:none"></div>
                <div class="mb-4"><label class="form-label text-muted small text-uppercase fw-bold">Ảnh phụ (nhiều ảnh)</label>
                <input type="file" name="images[]" class="form-control rounded-3" accept="image/*" multiple>
                <div class="text-muted small mt-1">Giữ Ctrl để chọn nhiều ảnh</div></div>
                <button type="submit" class="btn btn-primary w-100 rounded-3 py-2 fw-bold"><i class="bi bi-plus-circle-fill me-2"></i>Thêm sản phẩm</button>
                <a href="http://localhost:8080/DOHOANGDANH/Product" class="btn btn-light w-100 rounded-3 py-2 mt-2">Quay lại</a>
            </form>
        </div>
    </div>
</div></div>
<script>function prev(i,id){const r=new FileReader();r.onload=e=>{const el=document.getElementById(id);el.src=e.target.result;el.style.display='block'};r.readAsDataURL(i.files[0])}</script>
<?php include 'app/views/shares/footer.php'; ?>