<?php 
	
	function is_loggedin(){
		if (strlen($_SESSION['user'])==0) {
			return false;
		}else{
			return true;
		}
	}
	function check_login(){
		if (empty($_SESSION['user'])) {
			$login = BASE_URL.'login';
			header("Location: $login");
		}
	}

	function success_msg($title=Null,$msg=''){
		$message = "<script>toastr.success($msg, $title)</script>";
		return $message;
	}

	function logout(){
		session_start(); 
		session_destroy(); // destroy session
		unset($_SESSION['user']);
		$login_page = BASE_URL.'login';
		header("location:$login_page");
	}

	function randomString($chars=10) { //generate random string
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randstring = '';
		for ($i = 0; $i < $chars; $i++) { $randstring .= $characters[rand(0, strlen($characters) -1)]; }
		return $randstring;
	}
	
	function currentFileName() { //return current file name
		return basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
	}

	function curlReturn($url) { //get url with curl
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
		curl_setopt($ch,CURLOPT_URL, $url);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	function baseURL($sub=0) { //return base url for cron jobs
		$requesturi = explode("?",$_SERVER["REQUEST_URI"]);
		$subdir =  $requesturi[0];
		$pageURL = 'http';
		if(isset($_SERVER["HTTPS"])) { if($_SERVER["HTTPS"] == "on") {$pageURL .= "s";} }
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443") {
		 $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] . $subdir;
		} else {
		 $pageURL .= $_SERVER["SERVER_NAME"] . $subdir;
		}
		return $pageURL;
    }
   	function redirect_to($page=''){
	   	$url = BASE_URL.$page;
	   	echo "<script>document.location.href='$url'</script>";
    }
	##################################
	###       database functions       ###
	##################################
	function get_fullname(){
		$results = DB::query("SELECT username,firstname,lastname from users where username=%s",$_SESSION['user']);
		foreach($results as $user){
			$firstname = $user['firstname'];
			$lastname = $user['lastname'];
			$fullname = $firstname.' '.$lastname;
			echo $fullname;
		}
	}

	function get_avatar()
	{
		$results = DB::query("SELECT username,avatar from users where username=%s",$_SESSION['user']);
		foreach($results as $user){
			$avatar = $user['avatar'];
			echo $avatar;
		}
	}
	function get_count($table,$row='',$compared_value=''){
		$count = DB::queryFirstField("SELECT COUNT(*) FROM $table where $row=%s",$compared_value);
		echo $count;
	}
	function total_count($table){
		$count = DB::queryFirstField("SELECT COUNT(*) FROM $table");
		return $count;
	}
	
 ?>