<style type="text/css">
	.my-img{
		width: 100%;
	}

	.mt-2 p img{
		width: 100%;
	}
</style>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-4">
				<img src="<?php echo $data['sanpham']['hinh'] ?>" class="my-img">
			</div>
			<div class="col-8">
				<div class="card">
					<div class="card-header bg-warning">THÔNG TIN SẢN PHẨM</div>
					<div class="card-body">
						Tên sản phẩm: <?php echo $data['sanpham']['ten'] ?><hr>
						Giá bán: <span class="text-danger"><?php echo number_format($data['sanpham']['gia']) ?>vnđ</span><hr>
						Loại sản phẩm: <?php echo $data['sanpham']['loai'] ?><hr>
						Ngày đăng: <?php echo $data['sanpham']['ngaytao'] ?><hr>
						<div class="text-center">
							<a class="btn btn-danger" href="index.php?q=dat-mua&idsp=<?php echo $data['sanpham']['id'] ?>">
								<i class="fas fa-cart-plus"></i> Mua Ngay
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<p class="mt-2">
			<p><?php echo $data['sanpham']['mota'] ?></p>
		</p>
	</div>
</div>