<?php
    class Pages extends Controller {

        public function __construct() {
        }

        public function index() {
            $data = [
                "title" => "TravercyMVC"
            ];

            $this->view("pages/index", $data);
        }

        public function about() {
            $data = [
                "title" => "ABOUTPAGE"
            ];
            $this->view("pages/about", $data);
        }
}