<?php 
	require_once __DIR__. '/includes/Zebra_Session.php';
	/**
	 * authentication class
	 */
	class Auth 
	{

		

		public function exist($username,$email,$phone)
		{
			global $db;
			$sql = "SELECT username,email,phone from users";
			$query = $db->prepare($sql);
			$query->execute();
			$users = $query->fetchAll(PDO::FETCH_OBJ);
			foreach($users as $user){
				if ($user->username==$username) {
					echo "<script>alert('username has been taken!')</script>";
					return true;
				}else{
					return false;
				}
				if ($user->email==$email) {
					echo "<script>alert('email has been taken')</script>";
					return true;
				}else{
					return false;
				}
				if ($user->phone==$phone) {
					echo "<script>alert('phone number has been taken')</script>";
					return true;
				}else{
					return false;
				}
			}
		}
		
		public function register($username,$firstname=null,$lastname=null,$email=null,$phone=null,$avatar=null,$password,$confirm_password)
		{
			$auth = new Auth();
			if (!$auth->exist($username,$email,$phone)) {
				global $db;
				if ($password != $confirm_password) {
					echo "<script>alert('passwords do not match!!!')</script>";
				}
				$password = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT into users (username,firstname,lastname,email,phone,avatar,password)values(:username,:firstname,:lastname,:email,:phone,:avatar,:password)";
				$query = $db->prepare($sql);
				$query->bindParam(':username',$username,PDO::PARAM_STR);
				$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
				$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
				$query->bindParam(':email',$email,PDO::PARAM_STR);
				$query->bindParam(':phone',$phone,PDO::PARAM_STR);
				$query->bindParam(':avatar',$avatar,PDO::PARAM_STR);
				$query->bindParam(':password',$password,PDO::PARAM_STR);

				if ($query->execute()) {
					return true;
				}else{
					return false;
				}
			}
		}

		public function login($username,$password,$remember_me=Null)
		{
			global $db;
			$sql = "SELECT username,password from users where username=:username";
			$query = $db->prepare($sql);
			$query->bindParam(':username',$username,PDO::PARAM_STR);
			$query->execute();
			$results = $query->fetchAll(PDO::FETCH_OBJ);
			if (!empty($query->rowCount())) {
				foreach($results as $row){
					$hashed_password = $row->password;
				}
				if (password_verify($password, $hashed_password)) {

					return true;
				}else{
					echo "<script>alert('You entered wrong password');</script>";
				}
				
			}else{
				echo "<script>alert('User is not registered with us');</script>";
			}
					
		}
		
	}

?>