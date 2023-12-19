<?php  
	require_once "./models/KetNoiCSDL.php";
	class LoaiSP{
		private $Loai;

		function __construct(){
			$this->Loai = new KetNoiCSDL();
			$this->Loai = $this->Loai->KetNoi();
		}

		public function DanhSach(){
			try{
				$qr = "SELECT * FROM loaisanpham";
				$cmd = $this->Loai->prepare($qr);
				$cmd->execute();
				return $cmd->fetchAll();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Them($ten){
			try{
				$qr = "INSERT INTO loaisanpham(ten) VALUES (:ten)";
				$cmd = $this->Loai->prepare($qr);
				$cmd->bindValue(':ten', $ten);
				$cmd->execute();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}

		public function Xoa($id){
			try{
				$qr = "DELETE FROM loaisanpham WHERE id = :id";
				$cmd = $this->Loai->prepare($qr);
				$cmd->bindValue(':id', $id);
				$cmd->execute();
			}
			catch(PDOException $e){
				return $e->getMessage();
			}
		}
	}
?>