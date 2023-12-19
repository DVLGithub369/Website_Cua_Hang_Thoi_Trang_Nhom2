<div class="row">
	<?php foreach($data['sanpham'] as $value){ ?>
	<div class="col-3 mb-2">
		<a href="index.php?q=chi-tiet-giay&id=<?php echo $value['id'] ?>">
			<div class="card position-relative shadow-sm">
				<img src="<?php echo $value['hinh'] ?>" class="card-img-top">
				<span class="position-absolute my-btn">
					<i class="far fa-shopping-cart"></i> 
					<?php echo number_format($value['gia']) ?>đ
				</span>
				<div class="card-body">
					<h5 class="card-title"><?php echo $value['ten'] ?></h5>
				</div>
			</div>
		</a>
	</div>
	<?php } ?>
</div>
