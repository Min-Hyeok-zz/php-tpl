<?php
	//function define
	session_start();

	//alert
	function alert ($msg) {
		echo "<script>alert('{$msg}');</script>";
	}

	//page move
	function move ($url = false) {
		echo "<script>";
			echo $url ? "location.replace('{$url}');" : "history.back();";
		echo "</script>";
		exit;
	}

	//boolean
	function access ($bool,$msg,$url = false) {
		if ($bool) {
			alert($msg);
			move($url);
		}
	}
	
	//print_pre
	function print_pre ($val) {
		echo "<pre>";
		print_r($val);
		echo "</pre>";
	}

	//login chk
	function loginChk () {
		access(!isset($_SESSION['member']),"회원만 접근할 수 있습니다.");
	}

	//member chk
	function memberChk () {
		access(isset($_SESSION['member']),"이미 로그인 하셨습니다.");
	}

	//autoload
	function __autoload ($className) {
		$className2 = strtolower($className);
		if ($className2 != "template_") {
			switch ($className2) {
				case 'app':
				case 'model':
				case 'controller':
					$path = _CORE."{$className}.php";
				break;
				default:
					$path = strpos($className2,"model") ? _MODEL : _CTR;
					$path .= "{$className}.php";
				break;
			}
			require_once($path);
		}
	}