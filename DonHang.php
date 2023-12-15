<?php  
	require_once "./models/KetNoiCSDL.php";
	class DonHang{
		private $DonHang;

		function __construct(){
			$this->DonHang = new KetNoiCSDL();
			$this->DonHang = $this->DonHang->KetNoi();
		}

		public function DanhSach(){
			try{
				$qr = "SELECT sp.ten, dh.* FROM donhang dh, sanpham sp WHERE sp.id = dh.idSP ORDER BY ngaytao DESC";
				$cmd = $this->DonHang->prepare($qr);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function DonHangCuaToi(){
			try{
				$qr = "SELECT sp.ten, dh.* FROM donhang dh, sanpham sp WHERE sp.id = dh.idSP AND dh.idTaiKhoan = :idTaiKhoan ORDER BY ngaytao DESC";
				$cmd = $this->DonHang->prepare($qr);
				$cmd->bindValue(':idTaiKhoan', $_SESSION['id']);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Them($idSP, $giaban, $soluong, $thanhtien, $tenKH, $diachi, $sdt){
			try{
				$qr = "INSERT INTO donhang(idSP, idTaiKhoan, giaban, soluong, thanhtien, tenKH, diachi, sdt) VALUES (:idSP, :idTaiKhoan, :giaban, :soluong, :thanhtien, :tenKH, :diachi, :sdt)";
				$cmd = $this->DonHang->prepare($qr);
				$cmd->bindValue(':idSP', $idSP);
				$cmd->bindValue(':idTaiKhoan', $_SESSION['id']);
				$cmd->bindValue(':giaban', $giaban);
				$cmd->bindValue(':soluong', $soluong);
				$cmd->bindValue(':thanhtien', $thanhtien);
				$cmd->bindValue(':tenKH', $tenKH);
				$cmd->bindValue(':diachi', $diachi);
				$cmd->bindValue(':sdt', $sdt);
				
				$cmd->execute();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Xoa($id){
			try{
				$qr = "DELETE FROM donhang WHERE id = :id";
				$cmd = $this->DonHang->prepare($qr);
				$cmd->bindValue(':id', $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}
?>