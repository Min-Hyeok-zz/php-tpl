<?php
	class Controller {

		public function start () {
			$param = App::getApp();
			$tpl = new Template_;

			$ctrName = $param->type."Controller";
			$modelName = $param->type."Model";
			$ctr = new $ctrName();
			$ctr->model = new $modelName();

			$header = _VIEW."template/header.tpl";
			$footer = _VIEW."template/footer.tpl";
			$content = _VIEW."template/main.tpl";
			if (isset($param->page)) $content = _VIEW."{$param->type}/{$param->page}.tpl";

			$method = isset($param->page) ? $param->page : "basic";
			$assign = method_exists($ctr, $method) ? $ctr->$method() : array('title'=>'에러당');
			if (isset($_POST['action'])) $ctr->model->action();
			
			$tpl->define(array(
				'header' => $header,
				'content' => $content,
				'footer' => $footer,
			));
			$tpl->assign($assign);

			$tpl->print_('header');
			$tpl->print_('content');
			$tpl->print_('footer');
		}
	}