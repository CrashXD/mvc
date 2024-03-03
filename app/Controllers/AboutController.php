<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Views\AboutView;

class AboutController extends Controller {
    public function __construct() {
        $this->view = new AboutView(); 
    }

    public function indexAction() {
        $this->view->html('index', [
            'title' => 'О нас'
        ]);
    }
}