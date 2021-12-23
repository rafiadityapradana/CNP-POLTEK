<?php

class CI_Ltp {

	function ltp_IP(){
		if (!empty($_SERVER['HTTP_CLIENT_IP'])){
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];
		}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip_address = $_SERVER['REMOTE_ADDR'];
		}
		return $ip_address;
	}
	
	function ltp_VERIFINE_SESSION_TOKEN($cnp_Token_cookies){
		if(password_verify($cnp_Token_cookies, $_SESSION['cnp_Token_Session'])){
			return true;
		}else{
			redirect('app/logout');
		}
	}
	public function ltp_role_access($Roles){
		if($Roles == 1){
			redirect('app/control');
		}else if($Roles == 2){
			redirect('app/company');
		}else if($Roles == 3){
			redirect('');
		}else{
			redirect('');
		}
	}
	public function ltp_redirect_Account($Roles){
		if($Roles == 1){
			redirect('app/control');
		}else if($Roles == 2){
			redirect('app/company');
		}else if($Roles == 3){
			redirect('app/account');
		}else{
			redirect('');
		}
	}
	public function ltp_redirect_Befor_Account_UP($Roles,$_ID){
		if($Roles == 1){
			redirect('app/control/account/'.$_ID);
		}else if($Roles == 2){
			redirect('app/company/account/'.$_ID);
		}else if($Roles == 3){
			redirect('app/account/'.$_ID);
		}else{
			redirect('');
		}
	}
	public function ltp_GenFILENAME(){
		$length = 5;
		$characters = 'QWERTYUIOPASDFGHJKLZXCVBNM';
		$charactersLength = strlen($characters);
		$randomString1 = '';
		$randomString2 = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString1 .= $characters[rand(0, $charactersLength - 1)];
			$randomString2 .= $characters[rand(0, $charactersLength - 1)];
		}
		$RANDOM = 'ltp-'.$randomString1.''.$randomString2.''.date("YmdGisa");
		return $RANDOM;
	}
    public function ltp_id(){
		$length = 18;
		$characters = '1qaz2wsx3edc4rfv5tgb6yhn7ujm8ik9ol0p';
		$charactersLength = strlen($characters);
		$randomString1 = '';
		$randomString2 = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString1 .= $characters[rand(0, $charactersLength - 1)];
			$randomString2 .= $characters[rand(0, $charactersLength - 1)];
		}
		$token = '_id-'.$randomString1.''.$randomString2.''.date('dmyHisa');
		return $token;
	}
	public function ltp_token(){
		$length = 500;
		$characters = '1qaz2wsx3edc4rfv5tgb6yhn7ujm8ik9ol0p';
		$charactersLength = strlen($characters);
		$randomString1 = '';
		$randomString2 = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString1 .= $characters[rand(0, $charactersLength - 1)];
			$randomString2 .= $characters[rand(0, $charactersLength - 1)];
		}
		$token = $randomString1.''.$randomString2;
		return $token;
	}
	function CreateLang($FolderName){
		$CONTENT =  read_file(APPPATH.'language/indonesian/app_lang.php');
		$Upload = read_file(APPPATH.'language/indonesian/upload_lang.php');
		$validate = read_file(APPPATH.'language/indonesian/form_validation_lang.php');
		$db = read_file(APPPATH.'language/indonesian/db_lang.php');
		$path = APPPATH.'language/'.$FolderName;
        @mkdir($path, 0777, true);
		@touch($path . "/app_lang.php"); 
		@touch($path . "/form_validation_lang.php"); 
		@touch($path . "/db_lang.php"); 
		@touch($path . "/rest_controller_lang.php"); 
		@touch($path . "/upload_lang.php"); 
		@file_put_contents($path.'/app_lang.php',$CONTENT);
		@file_put_contents($path.'/upload_lang.php',$Upload);
		@file_put_contents($path.'/form_validation_lang.php',$validate);
		@file_put_contents($path.'/db_lang.php',$db);
		return true;
	}
	function DestroyLang($Folder){
		$path = APPPATH.'language/'.$Folder;
        $files = array_diff(scandir($path), array('.','..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? delTree("$path/$file") : unlink("$path/$file");
        }
		@rmdir($path);
		return true;
	}
}