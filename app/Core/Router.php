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
            $this->parts;
            print_r($this->parts);
        }
    }