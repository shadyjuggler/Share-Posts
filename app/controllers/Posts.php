<?php
    class Posts extends Controller {
        private $postModel;

        public function __construct() {

            // Load Model
            $this->postModel = $this->model("post");

            // Prevernt unlogged users to get posts page
            if (!isLoggedIn()) {
                redirect("users/login");
            }
        }

        public function index () {
            // Get posts
            $posts = $this->postModel->getPosts();

            $data = [
                "posts" => $posts
            ];
            $this->view("posts/index", $data);
        }

        public function add () {
            $data = [
                "title" => "",
                "body" => ""
            ];
            $this->view("posts/add");
        }
    }