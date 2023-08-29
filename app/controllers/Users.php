<?php
    class Users extends Controller {
        public function __construct () {

        }

        public function register () {

            // Check for post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Process form
            } else {

                // Init data
                $data = [
                    "name" => "",
                    "email" => "",
                    "password" => "",
                    "confirm_pasword" => "",
                    "name_error" => "",
                    "email_error" => "",
                    "password_error" => "",
                    "confirm_passwod_error" => ""
                ];

                // Load form
                $this->view("users/register", $data);
            }
        }

        public function login () {

            // Check for post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // Process form
            } else {

                // Init data
                $data = [
                    "email" => "",
                    "password" => "",
                    "email_error" => "",
                    "password_error" => "",
                ];

                // Load form
                $this->view("users/login", $data);
            }
        }

    }