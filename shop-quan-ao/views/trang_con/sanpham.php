<div class="card">
	<div class="card-header">
		<a href="index.php?q=them-san-pham" class="btn btn-primary">
			<i class="fas fa-plus"></i>
			Thêm
		</a>
	</div>
	<div class="card-body">
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Tên giày</th>
					<th scope="col">Hình ảnh</th>
					<th scope="col">Loại</th>
					<th scope="col">Ngày tạo</th>
					<th scope="col" width="80"></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data['sanpham'] as $value) { ?>
				<tr>
					<th scope="row">#<?php echo $value['id'] ?></th>
					<td><?php echo $value['ten'] ?></td>
					<td><?php echo $value['hinh'] ?></td>
					<td><?php echo $value['loai'] ?></td>
					<td><?php echo $value['ngaytao'] ?></td>
					<td>
						<a href="index.php?q=sua-san-pham&id=<?php echo $value['id'] ?>" class="mr-2">
							<i class="fas fa-edit"></i>
						</a>
						<a href="index.php?q=xoa-san-pham&id=<?php echo $value['id'] ?>" onclick="return confirm('Bạn có muốn xóa?')">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>