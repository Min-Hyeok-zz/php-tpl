<?php
	class memberController extends Controller {

		function join () {
			if (isset($_SESSION['member'])) move();
			return ['title'=>'회원가입'];
		}

		function login () {
			if (isset($_SESSION['member'])) move();
			return ['title'=>'로그인'];
		}

	}