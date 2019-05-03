<?php
	class Post {
		private $db;

		public function __construct() {
			return $this->db = new Database;
		}

		public function getPosts() {
			$this->db->query('SELECT * FROM post');
			$this->db->resultSet(); //not working
		}
	}