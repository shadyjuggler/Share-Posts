<?php
    /*
       App Core Class 
       Created URL & Loads core controller
       URL FORMAT - /controller/method/params
    */

    class Core {
        protected $currentController = "Pages";
        protected $currentMethod = "index";
        protected $params = [];

        public function __construct () {
            $url = $this->getUrl();
            
            // Check for controller of url: CONTROLLER/method/params
            if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
                // If exists, set as current controller
                $this->currentController = ucwords($url[0]);
                // Unset 0 zero index
                unset($url[0]);
            }

            // Require the controller
            require_once "../app/controllers/" . $this->currentController . ".php";

            // Instantiate controller class
            $this->currentController = new $this->currentController;

            // Check for method of url: controller/METHOD/params
            if (isset($url[1])) {
                // If exists, set as current method
                if (method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];

                    //Unset 1 index
                    unset($url[1]);
                }
            }

            // Get params of url: controller/method/PARAMS
            $this->params = $url ? array_values($url) : [];
            // Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        public function getUrl () {
            if (isset($_GET["url"])) {
                $url = rtrim($_GET["url"], "/");
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                return $url;
            }
        }
    } 


    /*
        Methods were used:
        - isset() - checks if argument declared or isn't null
        - rtrim() - strip whitespace (or other characters) from the end of a string
        - ucwords() - uppercase the first char of each word in a string
        - explode() - splits string into an array by specified separator
        - array_values() - returns a indexed array with same values
        - call_user_func_array() - calls any function as first argument (string name of func), second arg is array of arguments,
            if method of a class should be called: first argument is array which takes instance of class as first value and name of the method 
            as second value (string name of method) 
    */