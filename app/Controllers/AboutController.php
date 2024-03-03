<?php

namespace App\Controllers;

use App\Views\AboutView;

class AboutController {
    private $view;

    public function __construct()
    {
        $this->view = new AboutView(); 
    }

    public function indexAction() {
        $this->view->html();
    }
}