<?php
	class Controller {

		public function start () {
			$param = App::getApp();
			$ctrName = $param->type."Controller";
			$modelName = $param->type."Model";
			$ctr = new $ctrName();
			$ctr->model = new $modelName();
			$ctr->tpl = new Template_;

			$header = _VIEW."template/header.tpl";
			$footer = _VIEW."template/footer.tpl";
			$content = _VIEW."template/main.tpl";
			if (isset($param->page)) $content = _VIEW."{$param->type}/{$param->page}.tpl";

			$method = isset($param->page) ? $param->page : "basic";
			if (method_exists($ctr, $method)) {
				$ctr->$method();
			} else {
				$content = _VIEW."template/404.tpl";
			}

			if (isset($_POST['action'])) $ctr->model->action();
			if (isset($_SESSION['member'])) $ctr->tpl->assign('member',$_SESSION['member']);
			$ctr->tpl->define(array(
				'header' => $header,
				'content' => $content,
				'footer' => $footer,
			));

			$ctr->tpl->print_('header');
			$ctr->tpl->print_('content');
			$ctr->tpl->print_('footer');
		}
	}