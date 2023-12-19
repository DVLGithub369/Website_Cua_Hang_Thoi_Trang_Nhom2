<div class="card mx-auto d-block" style="width: 450px;">
	<div class="card-header text-center pb-1">
		<h5><i class="fas fa-user"></i> Tài khoản của tôi</h5>
	</div>
	<div class="card-body">
		<form method="POST" action="index.php?q=xu-ly-sua-tai-khoan">
			<input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden>
			<div class="form-group">
				<label>TÊN ĐĂNG NHẬP</label>
				<input type="text" class="form-control" value="<?php echo $data['taikhoan']['tendangnhap'] ?>" readonly>
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Loại tài khoản</label>
				<select class="form-control" id="exampleFormControlSelect1" name="loaitk" required>
					<option value="member" <?php if($data['taikhoan']['loaitk'] == 'member') echo 'selected'; ?>>member</option>
					<option value="admin" <?php if($data['taikhoan']['loaitk'] == 'admin') echo 'selected'; ?>>admin</option>
				</select>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</div>
		</form>
	</div>
</div>