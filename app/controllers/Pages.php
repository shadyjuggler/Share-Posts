<?php
    class Pages extends Controller {

        public function __construct() {
        }

        public function index() {
            $data = [
                "title" => "SharePosts",
                "descr" => "Simple Social Network built on the TraversyMVC PHP framework."
            ];

            $this->view("pages/index", $data);
        }

        public function about() {
            $data = [
                "title" => "About Page",
                "descr" => "App to share posts with other users."
            ];
            $this->view("pages/about", $data);
        }
}