<?php
	class memberModel extends Model {

		function idChk () {
			$this->sql = "SELECT * FROM member where id=?";
			$this->exeArr = [$_POST['id']];
			return $this->rowCount();
		}

		function login () {
			$this->sql = "SELECT * FROM member where id=? and pw=?";
			$this->exeArr = [$_POST['id'],$_POST['pw']];
			return $this->fetch();
		}

		function action () {
			switch ($_POST['action']) {
				case 'join':
					access($this->idChk() > 0,"이미 사용중인 아이디 입니다.");
					$this->sql = "INSERT INTO member SET id=?, pw=?, name=?";
					$this->exrArr = $this->getExeArr($_POST,'/action');
					print_r($this->getExeArr($_POST,'/action'));
					exit;
					$this->query();
				break;
				case 'login':
					$member = $this->login();
					access($member == "","아이디 또는 비밀번호가 일치하지 않습니다.");
					$_SESSION['member'] = $member;
				break;
			}
			alert("완료되었습니다.");
			move("/");
		}

	}