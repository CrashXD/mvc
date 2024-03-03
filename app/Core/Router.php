<?php
    namespace App\Core;

    class Router {
        private $parts = [];

        public function __construct() {
            $this->parts = $this->getUrlParts(); 
        }

        private function getUrlParts() {
            $url = $_SERVER['REQUEST_URI'];
            $url = trim($url, "/");
            return explode('/', $url);
        }

        public function run() {
            if (!$this->parts[0]) {
                $this->parts[0] = 'home';
            }
            $controllerName = ucfirst($this->parts[0]) . 'Controller';
            $controllerName = 'App\Controllers\\' . $controllerName;
            if (class_exists($controllerName)) {
                $controller = new $controllerName;
            } else {
                $this->error404();
            }

            if (!isset($this->parts[1])) {
                $this->parts[1] = 'index';
            }
            $methodName = $this->parts[1] . 'Action';
            if (method_exists($controller, $methodName)) {
                $controller->{$methodName}();
            } else {
                $this->error404();
            }
        }

        private function error404() {
            header('HTTP/1.0 404 Not Found');
            exit ('404');
        }
    }