<div class="card">
    <div class="card-header text-center">ĐẶT MUA SẢN PHẨM</div>
    <div class="card-body">
        <form method="POST" action="index.php?q=xu-ly-dat-mua">
            <input type="text" name="idsp" value="<?php echo $data['sanpham']['id'] ?>" hidden>
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" class="form-control" value="<?php echo $data['sanpham']['ten'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Giá bán</label>
                <input type="text" class="form-control" value="<?php echo number_format($data['sanpham']['gia']) ?> vnđ" readonly>
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input type="number" class="form-control" value="1" min="0" name="soluong" required>
            </div>
            <div class="form-group">
                <label>Tên khách hàng</label>
                <input type="text" class="form-control" value="" maxlength="255" name="tenKH" required>
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" class="form-control" value="" maxlength="255" name="diachi" required>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" class="form-control" value="" maxlength="10" name="sdt" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ĐẶT MUA NGAY</button>
            </div>
        </form>
    </div>
</div>