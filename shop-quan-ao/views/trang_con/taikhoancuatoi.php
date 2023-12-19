<div class="card mx-auto d-block" style="width: 450px;">
	<div class="card-header text-center pb-1">
		<h5><i class="fas fa-user"></i> TÀI KHOẢN CỦA TÔI</h5>
	</div>
	<div class="card-body">
		<form method="POST" action="index.php?q=cap-nhat-tai-khoan-cua-toi">
			<?php if(isset($_SESSION['id'])){ ?>
			<input type="text" name="id" value="<?php echo $_SESSION['id'] ?>" hidden>
			<?php } ?>
			<div class="form-group">
				<label>TÊN ĐĂNG NHẬP</label>
				<input type="text" class="form-control" name="tendangnhap">
			</div>
			<div class="form-group">
				<label>MẬT KHẨU</label>
				<input type="password" class="form-control" name="matkhau">
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary">Cập nhật</button>
			</div>
		</form>
	</div>
</div>