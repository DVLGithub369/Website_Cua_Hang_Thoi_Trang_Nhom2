<div class="card">
	<div class="card-header">
		<a href="index.php?q=them-loai-san-pham" class="btn btn-primary">
			<i class="fas fa-plus"></i>
			Thêm
		</a>
	</div>
	<div class="card-body">
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Tên loại giày</th>
					<th scope="col" width="40"></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data['loai'] as $value) { ?>
				<tr>
					<th scope="row">#<?php echo $value['id'] ?></th>
					<td><?php echo $value['ten'] ?></td>
					<td>
						<a href="index.php?q=xoa-loai-san-pham&id=<?php echo $value['id'] ?>" onclick="return confirm('Bạn có muốn xóa?')">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>