<?php  
	require_once "./models/KetNoiCSDL.php";
	class SanPham{
		private $SanPham;

		function __construct(){
			$this->SanPham = new KetNoiCSDL();
			$this->SanPham = $this->SanPham->KetNoi();
		}

		public function DanhSach(){
			try{
				$qr = "SELECT * FROM sanpham ORDER BY ngaytao DESC";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function DanhSach_Member(){
			try{
				$qr = "SELECT * FROM sanpham WHERE id_taikhoan = :id_taikhoan ORDER BY ngaytao DESC";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->bindValue(':id_taikhoan', $_SESSION['id']);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Tim($tukhoa){
			try{
				$qr = "SELECT * FROM sanpham WHERE ten like '%$tukhoa%'";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function SanPhamMoi(){
			try{
				$qr = "SELECT * FROM sanpham ORDER BY ngaytao DESC LIMIT 0, 6";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Them($ten, $gia, $hinh, $mota, $loai){
			try{
				$qr = "INSERT INTO sanpham(ten, gia, hinh, mota, loai, id_taikhoan) VALUES (:ten, :gia, :hinh, :mota, :loai, :id_taikhoan)";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->bindValue(':ten', $ten);
				$cmd->bindValue(':gia', $gia);
				$cmd->bindValue(':hinh', $hinh);
				$cmd->bindValue(':mota', $mota);
				$cmd->bindValue(':loai', $loai);
				$cmd->bindValue(':id_taikhoan', $_SESSION['id']);
				$cmd->execute();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Sua($ten, $gia, $hinh, $mota, $loai, $id){
			try{
				$qr = "UPDATE sanpham SET ten = :ten, gia = :gia, hinh = :hinh, mota = :mota, loai = :loai WHERE id = :id";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->bindValue(':ten', $ten);
				$cmd->bindValue(':gia', $gia);
				$cmd->bindValue(':hinh', $hinh);
				$cmd->bindValue(':mota', $mota);
				$cmd->bindValue(':loai', $loai);
				$cmd->bindValue(':id', $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function ChiTiet($id){
			try{
				$qr = "SELECT * FROM sanpham WHERE id = :id";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->bindValue(':id', $id);
				$cmd->execute();
				return $cmd->fetch();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Xoa($id){
			try{
				$qr = "DELETE FROM sanpham WHERE id = :id";
				$cmd = $this->SanPham->prepare($qr);
				$cmd->bindValue(':id', $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}
?>