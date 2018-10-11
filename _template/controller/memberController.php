<?php
	class memberController extends Controller {

		function join () {
			memberChk();
			$this->tpl->assign(["title"=>"회원가입"]);
		}

		function login () {
			memberChk();
			$this->tpl->assign(["title"=>"로그인"]);
		}

		function logout () {
			loginChk();
			access(session_destroy(),"로그아웃 되었습니다.","/");
		}

	}