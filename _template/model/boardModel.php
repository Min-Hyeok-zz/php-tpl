<?php
	class boardModel extends Model {

		function getList () {
			$this->sql = "SELECT * FROM board order by date desc";
			return $this->fetchAll();
		}

	}