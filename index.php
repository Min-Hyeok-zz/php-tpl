<?php
	//tpl include, define setting
	include './tpl/Template_.class.php';

	define("_ROOT", __DIR__."/");
	define("_PUBLIC", _ROOT."public/");	
	define("_TEM", _ROOT."_template/");
	define("_MODEL", _TEM."model/");
	define("_VIEW", "view/");
	define("_CTR", _TEM."controller/");
	define("_CONFIG", _TEM."config/");
	define("_CORE", _TEM."core/");
	define("_URL", "http://{$_SERVER['HTTP_HOST']}/");
	define("_CSS", _URL."public/css/");
	define("_JS", _URL."public/js/");
	define("_IMG", _URL."public/img/");

	require_once(_CONFIG."lib.php");

	Controller::start();