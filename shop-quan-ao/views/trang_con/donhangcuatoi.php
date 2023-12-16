<div class="card">
	<div class="card-header text-center">
		<h5>ĐƠN HÀNG CỦA TÔI</h5>
	</div>
	<div class="card-body">
		<table class="table">
			<thead class="thead-light">
				<tr>
					<th scope="col">#</th>
					<th scope="col">TÊN SẢN PHẨM</th>
					<th scope="col">GIÁ BÁN</th>
					<th scope="col">SỐ LƯỢNG</th>
					<th scope="col">THÀNH TIỀN</th>
					<th scope="col">TÊN KHÁCH HÀNG</th>
					<th scope="col">ĐỊA CHỈ</th>
					<th scope="col">SỐ ĐIỆN THOẠI</th>
					<th scope="col">Ngày tạo</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data['donhang'] as $value) { ?>
				<tr>
					<th scope="row">#<?php echo $value['id'] ?></th>
					<td><?php echo $value['ten'] ?></td>
					<td><?php echo $value['giaban'] ?></td>
					<td><?php echo $value['soluong'] ?></td>
					<td><?php echo $value['thanhtien'] ?></td>
					<td><?php echo $value['tenKH'] ?></td>
					<td>
						<input type="text" value="<?php echo $value['diachi'] ?>" class="form-control" readonly>
					</td>
					<td><?php echo $value['sdt'] ?></td>
					<td><?php echo $value['ngaytao'] ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>