<div class="card mx-auto d-block">
	<div class="card-body">
		<form method="POST" action="index.php?q=xu-ly-them-san-pham" enctype="multipart/form-data">
			<div class="form-group">
				<label>TÊN SẢN PHẨM</label>
				<input type="text" class="form-control" name="ten" required>
			</div>
			<div class="form-group">
				<label for="exampleFormControlFile1">HÌNH ẢNH</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1" name="hinh" required>
			</div>
			<div class="form-group">
				<label>LOẠI SẢN PHẨM</label>
				<select class="form-control" name="loai" required>
					<option value="">-- chọn --</option>
					<?php foreach($data['loai'] as $value){ ?>
					<option value="<?php echo $value['id'] ?>"><?php echo $value['ten'] ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>GIÁ BÁN</label>
				<input type="number" class="form-control" value="0" name="gia" required>
			</div>
			<div class="form-group">
				<label>MÔ TẢ</label>
				<textarea class="form-control" id="mota" name="mota"></textarea>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
			</div>
		</form>
	</div>
</div>