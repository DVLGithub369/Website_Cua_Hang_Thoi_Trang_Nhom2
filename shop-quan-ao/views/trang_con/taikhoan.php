<div class="card">
	<div class="card-body">
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Tên đăng nhập</th>
					<th scope="col">Mật khẩu</th>
					<th scope="col">Loại tài khoản</th>
					<th scope="col" width="80"></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data['taikhoan'] as $value) { ?>
				<tr>
					<th scope="row">#<?php echo $value['id'] ?></th>
					<td><?php echo $value['tendangnhap'] ?></td>
					<td><?php echo $value['matkhau'] ?></td>
					<td><?php echo $value['loaitk'] ?></td>
					<td>
						<a href="index.php?q=sua-tai-khoan&id=<?php echo $value['id'] ?>" class="mr-2">
							<i class="fas fa-edit"></i>
						</a>
						<a href="index.php?q=xoa-tai-khoan&id=<?php echo $value['id'] ?>" onclick="return confirm('Bạn có muốn xóa?')">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>