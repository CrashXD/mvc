<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\HomeModel;
use App\Views\HomeView;

class HomeController extends Controller {
    public function __construct() {
        $this->view = new HomeView();
        $this->model = new HomeModel();
    }

    public function indexAction() {
        $data = $this->model->getData();
        $this->view->html('index', $data);
    }
}