<?php 
	class Pages extends Controller {
		public function __construct() {
		$this->postModel = $this->model('Post');
		}

		public function index() {
			// not working
			$posts = $this->postModel->getPosts();
			$data = [
				'title' => 'Welcome',
				'posts' => $posts
			];

			$this->view('pages/index', $data);
		}

		public function about() {
			$data = [
				'title' => 'About Us'
			];

			 $this->view('pages/about', $data);
		}
	}
	