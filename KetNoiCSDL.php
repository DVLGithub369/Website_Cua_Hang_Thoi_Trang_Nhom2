<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'shopthoitrang3');

	define('DB_CHARSET', 'utf8mb4');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	
	class KetNoiCSDL{
		private static $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;

		private static $options = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_TIMEOUT => 180
		);

		private static $conn;
		
		public static function KetNoi(){
			if(!isset(self::$conn)){
				try{
					self::$conn = new PDO(self::$dsn, DB_USER, DB_PASS, self::$options);
				}
				catch(PDOException $e){
					echo $error_message = $e->getMessage();
					//include_once "views/layouts/error.php";
					exit();
				}
			}
			return self::$conn;
		}
	}
?>
