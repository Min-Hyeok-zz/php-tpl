<?php
	class boardController extends Controller {

		function list () {
			$end = 20;
			$start = $end-1;
			$list = $this->model->getList();
			$this->tpl->assign([
				"list"=> $list,
				"title"=> "게시판",
				"count"=> count($list)
			]);
		}

	}