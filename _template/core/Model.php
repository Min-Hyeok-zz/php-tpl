<?php
	class Model {

		private $db;
		public function __construct () {
			$param = App::getApp();
			$this->exeArr = [];
		}

		private function con () {
			$this->db = new PDO("mysql:host=localhost;dbname=phptpl;charset=utf8;","root","");
			// $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		}

		private function cls () {
			$this->db = NULL;
		}

		protected function query ($sql = false) {
			$this->con();
			if ($sql) $this->sql = $sql;
			$res = $this->db->prepare($this->sql);
			if (!$res->execute($this->exeArr)) {
				print_pre($this->db->errorInfo());
				print_pre($this->sql);
				print_pre($this->exeArr);
				exit;
			} else {
				return $res;
			}
			$this->cls();
		}

		protected function fetch ($sql = false) {
			if ($sql) $this->sql = $sql;
			return $this->query()->fetch($sql);
		}

		protected function fetchAll ($sql = false) {
			if ($sql) $this->sql = $sql;
			return $this->query()->fetchAll($sql);
		}

		protected function rowCount ($sql = false) {
			if ($sql) $this->sql = $sql;
			return $this->query()->rowCount($sql);
		}

		//$_POST에서 exeArr 배열 얻어옴
		protected function getExeArr ($post,$cancel) {
			$cancel = explode("/", $cancel);
			$column = "";
			foreach ($post as $key => $val) {
				if (!in_array($key, $cancel)) {
					$column .= in_array($key,['pw']) ? ",".hash("sha512",$val) : ",".$val;
				}
			}
			$this->exeArr = explode(",", substr($column,1));
		}

	}