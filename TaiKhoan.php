<?php  
	require_once "./models/KetNoiCSDL.php";
	class TaiKhoan{
		private $TaiKhoan;

		function __construct(){
			$this->TaiKhoan = new KetNoiCSDL();
			$this->TaiKhoan = $this->TaiKhoan->KetNoi();
		}

		public function Insert($tendangnhap, $matkhau, $loaiTK){
			try{
				$qr = "INSERT INTO taikhoan(tendangnhap, matkhau, loaitk) VALUES (:tendangnhap, :matkhau, :loaitk)";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->bindValue(":tendangnhap", $tendangnhap);
				$cmd->bindValue(":matkhau", sha1($matkhau));
				$cmd->bindValue(":loaitk", $loaiTK);
				$cmd->execute();
			}catch(PDOException $e){
				return false;
			}
		}

		public function DangNhap($tendangnhap, $matkhau){
			try{
				$qr = "SELECT * FROM taikhoan WHERE tendangnhap = :tendangnhap AND matkhau = :matkhau";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->bindValue(":tendangnhap", $tendangnhap);
				$cmd->bindValue(":matkhau", sha1($matkhau));
				$cmd->execute();
				
				if($cmd->rowCount() > 0) 
					return $cmd->fetch();
				else 
					return false;	
			}
			catch(PDOException $e){
				return false;
			}
		}


		public function DanhSach(){
			try{
				$qr = "SELECT * FROM taikhoan";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return false;
			}
		}

		public function Update_TenDN($tendangnhap, $id){
			try{
				$qr = "UPDATE taikhoan SET tendangnhap = :tendangnhap WHERE id = :id";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->bindValue(":tendangnhap", $tendangnhap);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return false;
			}
		}

		public function Update_MatKhau($matkhau, $id){
			try{
				$qr = "UPDATE taikhoan SET matkhau = :matkhau WHERE id = :id";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->bindValue(":matkhau", sha1($matkhau));
				$cmd->bindValue(":id", $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return false;
			}
		}

		public function Update_LoaiTK($loaitk, $id){
			try{
				$qr = "UPDATE taikhoan SET loaitk = :loaitk WHERE id = :id";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->bindValue(":loaitk", $loaitk);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return false;
			}
		}

		public function ChiTiet($id){
			try{
				$qr = "SELECT * FROM taikhoan WHERE id = :id";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
				return $cmd->fetch();
			}
			catch(PDOException $e){
				return false;
			}
		}

		public function Xoa($id){
			try{
				$qr = "DELETE FROM taikhoan WHERE id = :id";
				$cmd = $this->TaiKhoan->prepare($qr);
				$cmd->bindValue(":id", $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return false;
			}
		}
	}
?>